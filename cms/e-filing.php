<?php
include_once('common.php');
class Filing extends common {
    protected $updateList = false;
    private $id;


    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mme_file')->attr('class','list-group-item active');
        $this->appendView("e-file.view.php");
    }

    protected function _load() {    
		
    }
    
    protected function _prerender() {
    }
}
?>