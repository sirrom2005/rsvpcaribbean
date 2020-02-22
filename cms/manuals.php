<?php
include_once('common.php');
class Manuals extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_manuals')->attr('class','list-group-item active');
        $this->appendView("manuals.view.php");
    }

    protected function _load() {    
    }
    
    protected function _prerender() {
    }
}
?>