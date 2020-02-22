<?php
include_once('common.php');
class VolunteerInformation extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_volinfo')->attr('class','list-group-item active');
        //$this->appendView("volunteer-info.view.php");
    }

    protected function _load() {  

    }
    
    protected function _prerender() {
        $this->loadVolunteerInfo($this->id);
    }
    
    protected function loadVolunteerInfo($id) {
        $rs = $this->db->table('view_volunteer_info', 'id=?', $id);  
        echo "<pre>";print_r($rs);echo "</pre>";
    }
}
?>