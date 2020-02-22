<?php
include_once('common.php');
class Projects extends common {
    protected $updateList = false;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mmnewsletter')->attr('class','list-group-item active');
        $this->appendView("newsletter.view.php");
    }

    protected function _load() {  
        $this->data('c',0,true);
        $this->data('y',0,true);
        $this->data('m',0,true);
        $this->data('sy',0,true);
        $this->data('sc',0,true);
        
        $this->delegate('a.del', '#click', array('callback' => '.remove'));
        $this->delegate('#country_id', '#change', array('callback' => '.setCountry'));
        $this->delegate('#year_id', '#change', array('callback' => '.setYear'));
        $this->delegate('#month_id', '#change', array('callback' => '.setMonth'));
        $this->delegate('#year',   '#change', array('callback' => '.setYearId'));
        
        $tmp = $this->db->table('view_member_country');  
        $opt[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($opt, $tmp);
        $this->country_id->bind($rs);
        
        $y = (int)date('Y', strtotime("+1 year"));
        for($i=2016; $i<=$y; $i++ ){
            $year[] = array('id' => $i, 'name' => $i);
        }
        $this->year->bind($year);
        
        $opt2[] = array('id' => '0', 'name' => 'Select year...');
        $year = array_merge($opt2, $year);
        $this->year_id->bind($year);
        
        for($i=1; $i<=12; $i++ ){
            $month[] = array('id' => $i, 'name' => date('M',mktime(0, 0, 0, $i)));
        }
        
        $opt3[] = array('id' => '0', 'name' => 'Select month...');
        $month = array_merge($opt3, $month);
        $this->month_id->bind($month);
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $ArrFullname = $ArrEmail = array();
            $rs = $this->db->execQuery("CALL sp_admin_email()");          
            $this->data('emailStr', base64_encode(serialize($rs))); 
        }
        
        if(!$this->isCallback || $this->updateList)
        {
            $this->getList();
        }
    }
    
    protected function setCountry($e) {
        $this->data('c', $e->intVal());
        $this->printUploadBtn();
    }
    
    protected function setYear($e) {
        $this->data('y', $e->intVal());
        $this->printUploadBtn();
    }
    
    protected function setMonth($e) {
        $this->data('m', $e->intVal());
        $this->printUploadBtn();
    }
    
    protected function setCountryId($e) {
        $this->data('sc', $e->intVal());
        $this->updateList = true;
    }
    
    protected function setYearId($e) {
        $this->data('sy', $e->intVal());
        $this->getList();
    }
    
    protected function getList() {
        $year = (empty($this->data('sy')))? date('Y') : $this->data('sy');
        try{
            $rs = $this->db->execQuery('SELECT '
                                        . 'id,'
                                        . 'CONCAT("newsletter/",newsletter) AS newsletter,'
                                        . 'country_id,'
                                        . 'MONTH(date) as month FROM newsletter '
                                        . 'WHERE YEAR(date) = '.$year);
                                   
            $html = $html1 = $html2 = $html3 = "";
            
            $list = array();
            foreach($rs as $key => $value){
                $list[$value['country_id']][$value['month']] = $value;
            }

            for($i=1; $i<=12; $i++){
                if(isset($list['86'][$i])){
                    $html1 .= "<td>"
                            . "<a href='../rsvp_docs/{$list['86'][$i]['newsletter']}' target='_blank' ><img src='views/images/pdf-icon.png'/></a>"
                            . "<a href='#{$list['86'][$i]['id']}' class='del' data-event-confirm='Are you sure you want to remove this record?'>Delete</a>"
                            . "</td>";
                }else{
                    $html1 .= "<td>&nbsp;</td>";
                }

                if(isset($list['106'][$i])){
                    $html2 .= "<td>"
                            . "<a href='../rsvp_docs/{$list['106'][$i]['newsletter']}' target='_blank' ><img src='views/images/pdf-icon.png'/></a>"
                            . "<a href='#{$list['106'][$i]['id']}' class='del' data-event-confirm='Are you sure you want to remove this record?'>Delete</a>"
                            . "</td>";
                }else{
                    $html2 .= "<td>&nbsp;</td>";
                }

                if(isset($list['179'][$i])){
                    $html3 .= "<td>"
                            . "<a href='../rsvp_docs/{$list['179'][$i]['newsletter']}' target='_blank' ><img src='views/images/pdf-icon.png'/></a>"
                            . "<a href='#{$list['179'][$i]['id']}' class='del' data-event-confirm='Are you sure you want to remove this record?'>Delete</a>"
                            . "</td>";
                }else{
                    $html3 .= "<td>&nbsp;</td>";
                }
            }
                     
            $html =   '<tr><th colspan="12">Grenada</th></tr>'
                    . '<tr>'.$html1.'</tr>'
                    . '<tr><th colspan="12">Jamaica</th></tr>'
                    . '<tr>'.$html2.'</tr>'
                    . '<tr><th colspan="12">Saint Lucia</th></tr>'
                    . '<tr>'.$html3.'</tr>';
                       
            $this->dataList->append($html)->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = $ex.DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function printUploadBtn() {
        $xml = null;
        if($this->data('c') != null && $this->data('y') != null && $this->data('m') != null){
            $c = $this->data('c');
            $y = $this->data('y');
            $m = $this->data('m');
            try{
                $rs = $this->db->table('newsletter','country_id=? AND YEAR(date)=? AND MONTH(date)=?',array($c,$y,$m));
                if($rs){
                    $this->flashmsg($this->icon.'Newsletter already added for this Year and Month, Delete first then re-upload','fade','alert alert-danger');
                    c('#fileUploadert')->html($xml);
                    return false;
                }  else {
                    $this->flashmsg('');
                }
            }
            catch(Exception $ex)
            {
                $msg = DB_DATA_ERROR;
                $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
                $this->Raxan->debug($msg.' '.$ex);
            }
            $emailStr  = $this->data('emailStr',0,true);
$xml = <<<XML
<link rel="stylesheet" type="text/css" href="../includes/uploader/uploadify.css" />
<script type="text/javascript" src="../includes/uploader/jquery.uploadify.min.js"></script>
<script>
    $(function() {
        $('#file_upload').uploadify({
            'formData'      : {'c' : $c, 'y' : $y, 'm' : $m, 'u' : $this->userId },
            'buttonText' : 'SELECT FILE...',
            'multi'    : false, 
            'swf'      : '../includes/uploader/uploadify.swf',
            'uploader' : '../includes/uploader/___newsletteruploadify___.php',
            'onUploadSuccess' : function(file, data, response) {
                $.post( 'apps/bin/send_new_newsletter_email.php',
                        { f:data, m:$m, y:$y, email: '$emailStr' },
                        function( data ) {
                            //alert( "Data Loaded: " + data );
                            window.location='newsletter.php';
                        });
            }
        });
    });
</script>
<input type="file" name="file_upload" id="file_upload" />
<p>File type: <b>PDF</b></p>
XML;
        } 
        
        c('#fileUploadert')->html($xml);
    }   
    
    protected function remove($e) {
        $id = $e->intVal();
        try{
            $rs = $this->db->table('newsletter','id=?',$id);
            if($rs){
                $this->db->tableDelete('newsletter','id=?',$id);
                unlink('../rsvp_docs/newsletter/'.$rs[0]['newsletter']);
                $this->updateList = true;
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}
?>