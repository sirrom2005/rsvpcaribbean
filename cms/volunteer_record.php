<?php
include_once('common.php');
class VolunteerRecord extends common {
    protected $updateList = false;
    private $id;


    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        $this->loadScript('jquery-tools');
        c('#mm_volunteer_record')->attr('class','list-group-item active');
        $this->appendView("volunteer_record.view.php");
    }

    protected function _load() {    
        $this->delegate('#btn', 'click', array('callback' => '.addNote'));  
        $this->delegate('.update', '#click', array('callback' => '.updateNote')); 
        $this->delegate('#note_phrase', '#change', array('callback' => '.changePhrase')); 
        $this->delegate('.btnedit', '#click', array('callback' => '.show')); 
        $this->delegate('.btnview', '#click', array('callback' => '.viewThisNote'));
        $this->delegate('.cancel', '#click', array('callback' => '.hide'));
        $this->delegate('#btnFilter', '#click', array('callback' => '.filter')); 
        $this->delegate('#btnCancel','#click', array('callback' => '.closePopUp')); 
        $rs = $this->db->table('note_category');
        $this['#category']->bind($rs);
        $this['.categoryList']->bind($rs);
        $this['.sortfilter']->bind($rs);
        
        $tmp = $this->db->table('note_phrase body as id, body as name');
        $opt[] = array('id' => '', 'name' => '--Insert Phrase--');
        $rs = array_merge($opt, $tmp);
        $this->note_phrase->bind($rs);
        $this['.edit-mode']->hide();
        $this->btnExport->attr('href','createPdfs/volunteer_record.php?id='.base64_encode($this->id));
        
        if(!$this->isCallback){
            $this->addScript('$("#overlay").overlay({expose:"#777",closeOnClick:false})','ready');
        }
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        {
           $this->loadVolunteerNotes();
        }
    }
    
    protected function addNote($e) {
        $valid = true;
        $data['volunteer_id']       = $this->id;
        $data['note']               = trim($this->post->textVal('note'));
        $ids                        = $this->post->intVal('note_category_id');
        $data['note_category_id']   = (is_array($ids)) ? implode(',', $ids) : $ids;
        $data['user_id']            = $this->userId;
        $data['updated_by']         = $this->userId;
        $data['date_added']         = $this->dateNow;
        $data['date_updated']       = $this->dateNow;
        $duplicate                  = $this->post->intVal('duplicate') | 0;

        
        if(empty($data['note']) ){$valid = false; c('#note')->css('border','solid 1px #c00');}
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            return false;
        }
        
        try {                      
            if($this->post->fileSize('userfile')){
                $ext        = explode('.', $this->post->fileOrigName('userfile'));
                $fileName   = date('Ymd').'-'.rand().'.'.$ext[count($ext)-1];
                $data['file_name'] = $fileName;
                $file       = '../rsvp_docs/volunteer_record/'.$fileName;
                $this->post->fileMove('userfile',$file);  
            }
        }catch (Exception $err) {
            $msg = 'File Upload error';
            $this->flashmsg($msg,'fade','pad softred');
            return;
        }
        
        try{
            if($duplicate){
                $vIds = $this->db->table('account id','account_type=3');
                foreach($vIds as $key => $value){
                    $data['volunteer_id'] = $value['id'];
                    $rs = $this->db->tableInsert('note',$data);
                }
            }else{
                $rs = $this->db->tableInsert('note',$data);                  
            }
            $this->redirectTo('volunteer_record.php?id='.$this->id);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateNote() {  
        $id                         = $this->post->intVal('note_id');
        $data['note']               = $this->post->textVal('note');
        $ids                        = $this->post->intVal('note_category_id');
        $data['note_category_id']   = (is_array($ids)) ? implode(',', $ids) : $ids;
        $data['updated_by']         = $this->userId;
        $data['date_updated']       = $this->dateNow;
        
        try{
            $rs = $this->db->tableUpdate('note',$data,'id=?',$id); 
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            
            C('#frmList'.$id.' .edit-mode')->hide();
            C('#frmList'.$id.' .edit-mode-rev')->show();
            C('#frmList'.$id.' .editcontrol')->attr("disabled", true);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadVolunteerNotes($filter=null) {  
        try{
            $rs = $this->db->execQuery('SELECT * FROM view_volunteer_record WHERE volunteer_id=' . $this->id . $filter); 
            $this->noteList->bind($rs);
            
            foreach ($rs as $key => $value) {
                $data['note_category_id'] = explode(',', $value['note_category_id']);
                $this['#frmList'.$value['note_id']]->inputValues($data);
                C('#frmList'.$value['note_id'].' .editcontrol')->attr("disabled", true);
                if(empty($value['file_name'])){
                    C('#frmList'.$value['note_id'].' .btndownload')->hide();
                }
            }
            
            $rt = $this->db->table('view_volunteer_quick_info','id=?',$this->id); 
            $this->quick_info->bind($rt[0]);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function filter() { 
        $ids = $this->post->intVal('note_category_id');
        $filter = null;
        if($ids){
            $filter = ' AND ';
            $str[] = array();
            foreach ($ids as $key => $value) {
                $str[$key] = 'note_category_id LIKE "%'.$value.'%"';
            } 
            $filter .= implode(' OR ', $str);
        }
        $this->loadVolunteerNotes($filter);
        $this->noteList->updateClient();
    }
    
    protected function show($e) { 
        $id = $e->intVal() | 0;
        C('#frmList'.$id.' .edit-mode')->show();
        C('#frmList'.$id.' .edit-mode-rev')->hide();
        C('#frmList'.$id.' .editcontrol')->attr("disabled", false);
    }
    
    protected function hide($e) { 
        $id = $e->intVal() | 0;
        C('#frmList'.$id.' .edit-mode')->hide();
        C('#frmList'.$id.' .edit-mode-rev')->show();
        C('#frmList'.$id.' .editcontrol')->attr("disabled", true);
    }
    
    protected function changePhrase($e) {  
        $val = $e->textVal();
        $this->note->val($val);
        $this->note->updateClient();
    }
    
    protected function viewThisNote($e) {  
        $id = $e->textVal();       
        try{
            $rs = $this->db->table('note note','id=?',$id); 
            $filename   = 'apps/views/view_volunteer_record.html';
            $fp         = fopen($filename,'r');
            $content    = fread($fp, filesize($filename));
            fclose($fp);
            c('#htmlText')->html($content); 
            c('#txtnote')->html($rs[0]['note']); 
            c('#overlay')->overlay(array('api'=>true))->load();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}
?>