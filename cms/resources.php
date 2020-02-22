<?php
include_once('common.php');
class Resources extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_resources')->attr('class','list-group-item active');
        $this->appendView("resources.view.php");
    }

    protected function _load() {    
    }
    
    protected function _prerender() {
    }
}
?>