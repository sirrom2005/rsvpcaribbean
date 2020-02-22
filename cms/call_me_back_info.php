<?php
include_once('common.php');
class CallBack extends common {
    protected $updateList = false,
              $id;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->intVal('id') | 0;
        c('#mm_call_back')->attr('class','list-group-item active');
        $this->appendView("call_me_back_info.view.php");
    }

    protected function _load() { 
        $this->delegate('#btn','#click', array('callback' => '.updateForm'));
    }
    
    protected function _prerender() {
        $this->loadData();
    }
    
    protected function loadData() {       
        try{
            $rs = $this->db->table('view_call_me_list','id=?',$this->id);
            $this->info->bind($rs[0],array('format' => array('date_added' => 'date:d M, Y')));
            $this->info->inputValues($rs[0]);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateForm(){
        $data['note']       = $this->post->textVal('note');
        $data['callback']   = $this->post->intVal('callback') | 0; 
        $data['date_made']  = $this->post->dateVal('date_made');
        $data['call_made_by'] = $this->post->textVal('call_made_by');

        try{
            $rs = $this->db->tableUpdate('callback',$data,'id=?',$this->id);
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
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