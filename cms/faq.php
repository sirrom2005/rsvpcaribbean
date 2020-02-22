<?php
include_once('common.php');
class Faq extends common {
    protected $updateList = false;
    private $id;


    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mmfaq')->attr('class','list-group-item active');
        $this->appendView("faq.view.php");
    }

    protected function _load() {    
        $this->delegate('#btn', 'click', array('callback' => '.submitForm')); 
        $this->delegate('#cancel', 'click', array('callback' => '.cancelForm'));
        $rs = $this->db->table('faq_category_id');
        $this->faq_category_id->bind($rs);
        
        $rs = $this->db->table('faq_group_id');
        $this->faq_group_id->bind($rs);
        
        if($this->id){
            $this->loadFaqs($this->id);
        }
    }
    
    protected function _prerender() {
    }
    
    protected function loadFaqs($id) {
        $rs = $this->db->table('faq','id=?',array($id));
        $this->frm->inputValues($rs[0]);
    }
    
    protected function submitForm() {  
        $data['faq_group_id']   = $this->post->faq_group_id;
        $data['faq_category_id']= $this->post->faq_category_id;
        $data['answer']         = $this->post->answer;
        $data['question']       = $this->post->question;

        try{
            if($this->id){
               $rs = $this->db->tableUpdate('faq',$data,'id=?',$this->id); 
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $rs = $this->db->tableInsert('faq',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            $this->redirectTo("faqs.php");
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    
    protected function cancelForm() {  
        $this->redirectTo("faqs.php");
    }
}
?>