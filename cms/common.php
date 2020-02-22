<?php
include_once('../config/config.php');
include_once('common-function.php');

class common extends commonFunction
{
    public  $db, 
            $userId,
            $dateNow,
            $countyId,
            $pageSize;

   // protected $SETTING, $CONFIG;

    protected function _config() {
        $this->pageSize = 20;
        $this->masterTemplate = "views/MASTER.php";
        $this->degradable = true;
        $this->preserveFormContent = true;
        $this->Raxan->config('debug',false);
        $this->userId = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
        $this->dateNow = date('Y-m-d G:i:s');
        $this->icon = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
        define("DB_DATA_ERROR", str_replace('_config', '', 'Data Error :: '.__FUNCTION__), true);
        define("DB_DATA_ADD",   "Record added", true);
        define("DB_DATA_EDIT",  "Data record updated", true);
        define("MISSING_FIELDS","Missing Data", true);
        define("NO_RECORD_FOUND","No Record Found", true);
    }

    protected function _init(){
        $this->connectToBD();
        $this->logout->append(': '.$this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME'));
    }

    protected function _load(){
        
    }

    protected function _prerender()
    {
        
    }
    
    protected function  _postrender() {}

    protected function _authorize()
    {
        $isLogin = $this->Raxan->data('RSVP_SYS_ADMIN');
        if(!$isLogin){$this->redirectTo('login.php');}
        else{
            return true;
        }
    }
    
    protected function loadStates() {
        $id = $this->countyId;
        $rs = $this->db->table('obd_county_zone zone_id as id, name','country_id=?',array($id));
        $this->state_id->bind($rs);
        $this->state_id->updateClient();
    }
    
    protected function updateCountyCode($e) {
        $this->countyId = $e->intVal();
        $this->updateList = true;
    }

    protected function loadVolunteerSummary($id) {
        $rs = $this->db->table('view_volunteer_list', 'id=?',$id); 
        $this->summery->bind($rs,array('callback' => array($this,'rowHandler')));
    }
    
    public function rowHandler(&$row, $index, $tpl, $tplType, &$fmt, $cssClass) {
        $row['dob'] = date('d M Y', strtotime($row['dob']));
        $row['arrival_date'] = date('d M, Y.', strtotime($row['arrival_date']));
        $row['balance'] = number_format($row['balance'], 2, '.', ',');
    }
       
    protected function printPhotoUploader($id,$catId) {
       $xml = null;
       
       if($id){
$xml = <<<XML
<link rel="stylesheet" type="text/css" href="../includes/uploader/uploadify.css" />
<script type="text/javascript" src="../includes/uploader/jquery.uploadify.min.js"></script>
<script>
    $(function() {
        var html = null;
        $('#file_upload').uploadify({
            'formData'      : {'item_id' : $id,'category_id' : $catId},
            'buttonText' : 'SELECT IMAGES...',
            'swf'      : '../includes/uploader/uploadify.swf',
            'uploader' : '../includes/uploader/___uploadify___.php',
            'onQueueComplete' : function(queueData) {
                    //alert( queueData);
            },
            'onUploadSuccess' : function(file, data, response) {
                html = '<span><img src=\"../rsvp_photos/' + $catId + '/' + data + '\" /></span>';
                $('#gallery').append(html);            
            }
        });
    });
</script>
<input type="file" name="file_upload" id="file_upload" />
XML;
       }
       
        c('#photoFrm')->html($xml);
    }
    
    protected function loadGallery($id,$cat) {   
        $photo = $this->db->table('photo id, CONCAT(category_id,"/",photo) AS photo, title','item_id=? AND category_id=?',array($id,$cat));
        $rs = (empty($photo))? null : $photo;
        $this->gallery->bind($rs)->updateClient();
    }
    
    protected function removePhoto($e) {  
        $id = $e->intVal();
        $rs = $this->db->table('photo item_id, category_id, CONCAT(category_id,"/",photo) AS photo','id=?',$id);
        $filename = '../rsvp_photos/'.$rs[0]['photo'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $this->db->tableDelete('photo','id=?',$id);
        $this->loadGallery($rs[0]['item_id'],$rs[0]['category_id']);
    }
    
    protected function sendEmail($contact, $subject, $msg) {  
        if(!$contact){ return false; }
        
        foreach($contact as $key => $value){
            $arr[] = $contact[$key]['fullname'] . ' <' . $contact[$key]['email'] . '>';
        }

        $to       = null;
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: rsvpcaribbean.com <no-reply@rsvpcaribbean.com>' . "\r\n".
            'Reply-To: no-reply@rsvpcaribbean.com' . "\r\n" .
            'Return-Path: no-reply@rsvpcaribbean.com'. "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $headers .= 'Bcc: ' . implode(', ', $arr) . "\r\n";

        include_once '../tools/newsletter/email-notice.php';
        return @mail($to, $subject, str_replace('__CONTENT_AREA__', $msg, $email_template), $headers);
    }
    
    protected function closePopUp() {
        c((_fn('function(e){$("#overlay").overlay({api:true}).close();e.preventDefault();}')));
    }
    
    protected function changePage($e){
        $this->pgNumber = $e->intVal();
        if (!$this->pgNumber) $this->pgNumber = 1;
    }
    
    protected function exportCSVdata(){
        $filename   = $this->data('exportCSVname');
        $data       = $this->data('exportCSV');
        
        if(empty($data)){
            $this->flashmsg($this->icon.NO_RECORD_FOUND,'fade','alert alert-danger');
            return false;
        }
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=$filename.csv");
        header("Pragma: no-cache");
        header("Expires: 0");

        $str  = "";
        foreach($data as $key => $value)
        {
            unset($value['id']);
            foreach($value as $k => $v)
            {
                $k = strtoupper($this->csvFix($k));
                $str .= "$k,";
            }
            $str = str_replace(",ENDZ", "\r\n", $str .= "ENDZ");
            break;
        }

        foreach($data as $key => $value)
        {
            unset($value['id']);
            foreach($value as $k => $v)
            {
               $v = $this->csvFix($v);
               $str .= "$v,";
            }
            $str = str_replace(",ENDZ", "\r\n", $str .= "ENDZ");
        }
        echo $str;
        exit();
    }
    
    protected function csvFix($str){
        $str = str_replace("\"","\'",$str);
        $str = stripslashes($str);
        $str = trim($str);
        $str = "\"$str\"";
        return $str;
    }
}
?>