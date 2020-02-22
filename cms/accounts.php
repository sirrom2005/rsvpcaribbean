<?php
include_once('common.php');
class RsvpWebPage extends common {
    protected   $updateList = false;
    private     $id;

    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
    }

    protected function _init() {
        parent::_init();
        $this->appendView("accounts.view.php");
        c('#mm_account')->attr('class','list-group-item active');
    }

    protected function _load() {  
        $this->loadVolunteerSummary($this->id);
    }
    
    protected function _prerender() {
    }
}