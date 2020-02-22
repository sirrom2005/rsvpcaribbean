<?php
include_once('common.php');
class Faq extends common {
    protected $updateList = false;
	
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mmfaq')->attr('class','list-group-item active');
        $this->appendView("faqs.view.php");
    }

    protected function _load() {       
        $this->delegate('#category', '#change', array('callback' => '.setCategory'));       
        $tmp = $this->db->table('faq_category_id');
        $opt[] = array('id' => '', 'name' => 'View All FAQs');
        $rs = array_merge($opt, $tmp);
        $this->category->bind($rs);
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        {
            $this->loadFaqs();                
        }
    }
    
    protected function setCategory($e) {
        $id = $e->intval() | 0;
        $this->data('category',$id);
        $this->updateList = true;
    }
    
	
    protected function loadFaqs() {
        $id = $this->data('category');
        $query = ($id)? "WHERE f.faq_category_id = ".$id : "";
        $sql = "SELECT f.id,f.question,f.answer,f.faq_category_id FROM faq f {$query}";
        $rs = $this->db->execQuery($sql);
        $this->datatable->bind($rs);
        $this->datatable->updateClient(); // manually update list on client
    }
    
    protected function removeFaqs($e) {
        try {
            $id = $e->intval();
            $this->db->tableDelete('faq','id=?',$id);
            $this->updateList = true;
        } catch(Exception $e) {
            $msg = 'Error while deleting records';
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$e);
            return;
        }
    }
}
?>