<?php
include_once('common.php');
class AccommodationNote extends common {
    protected $updateList = false;
    private $id;


    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = base64_decode($this->get->id) | 0;
        $this->loadScript('jquery-tools');
        c('#mm_accom')->attr('class','list-group-item active');
        $this->appendView("accommodation_note.view.php");
    }

    protected function _load() {    
        $this->delegate('#btn', '#click', array('callback' => '.addNote'));  
        $this->delegate('.btnedit', '#click', array('callback' => '.show'));
        $this->delegate('.cancel', '#click', array('callback' => '.hide'));
        $this->delegate('.update', '#click', array('callback' => '.updateNote')); 
        
        $rs = $this->db->table('view_accommodation host_name, country','id=?', $this->id);
        $this->quick_info->bind($rs[0]);
        $this['.edit-mode']->hide();
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        {
           $this->loadNotes();
        }
    }
    
    protected function addNote($e) {
        $valid = true;
        $data['accommodation_id']   = $this->id;
        $data['note']               = $this->post->textVal('note');
        $data['user_id']            = $this->userId;
        $data['updated_by']         = $this->userId;
        $data['date_added']         = $this->dateNow;
        $data['date_updated']       = $this->dateNow;

        
        if(empty($data['note']) ){$valid = false; c('#note')->css('border','solid 1px #c00');}
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            return false;
        }
        
        try{
            $this->db->tableInsert('accommodation_note',$data);
            c('#note')->val('');
            $this->updateList = true;
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
        $data['updated_by']         = $this->userId;
        $data['date_updated']       = $this->dateNow;
        
        try{
            $rs = $this->db->tableUpdate('accommodation_note',$data,'id=?',$id); 
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
    
    protected function loadNotes() {  
        try{
            $rs = $this->db->execQuery('SELECT 
                                            acc.id AS note_id,               
                                            acc.accommodation_id, 
                                            acc.note,             
                                            a.username AS added,          
                                            updte.username AS updated,       
                                            acc.date_added,       
                                            acc.date_updated 
                                            FROM accommodation_note acc
                                            INNER JOIN account a ON a.id = acc.user_id
                                            INNER JOIN account updte ON updte.id = acc.updated_by
                                        WHERE accommodation_id = '.$this->id.' ORDER BY date_added DESC'); 
            $this->noteList->bind($rs)->updateClient();
            
            foreach ($rs as $key => $value) {
                C('#frmList'.$value['note_id'].' .editcontrol')->attr("disabled", true);
            }        
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