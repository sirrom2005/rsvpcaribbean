<?php
include_once('common.php');
class Projects extends common {
 
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mm_projects')->attr('class','list-group-item active');
        $this->appendView("projects.view.php");
    }

    protected function _load() {  
        $this->delegate('#country_db', '#change', array('callback' => '.loadProjectList'));
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $tmp = $this->db->table('view_member_country');  
            $opt[] = array('id' => '0', 'name' => 'Select country...');
            $rs = array_merge($opt, $tmp);

            $this->country_db->bind($rs);
            
            $this->datatable->bind(null);
        }
    }
    
    protected function loadProjectList($e) {   
        $id = $e->intVal() | 0;
        //Load project type
        $rs = $this->db->table('project_category','country_id=?',$id);
        $this->datatable->bind($rs);
        $this->datatable->updateClient();
    }
}
?>