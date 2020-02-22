<?php
include_once('common.php');
class ProgrammesProjects extends common {
    protected   $type,
                $url,
                $countryId = 0,
                $updateList= false;
            
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->type = base64_decode($this->get->textVal('type'));
        if($this->type==1){
            c('.pageHeading')->html('Projects');
            c('#mm_projects')->attr('class','list-group-item active');
        }else{
            c('.pageHeading')->html('Programmes');
            c('#mm_programmes')->attr('class','list-group-item active');
        }
        $this->appendView("programmes_projects.view.php");
    }

    protected function _load() {  
        $this->delegate('#country_db', '#change', array('callback' => '.loadProjectCategory'));
        $this->delegate('#category_id', '#change', array('callback' => '.setCategoryId'));
        c('#btn')->hide();
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $tmp = $this->db->table('view_member_country');  
            $opt[] = array('id' => '0', 'name' => 'Select country...');
            $rs = array_merge($opt, $tmp);
            $this->country_db->bind($rs);
            $this->category_id->bind(null);
        }
        
        if(!$this->isCallback || $this->updateList)
        {
            $this->loadProjectList();
        }
    }
    
    protected function loadProjectCategory($e) {   
        $this->countryId = $id = $e->intVal() | 0;
        $tmp = $this->db->table('project_category id,name','country_id=? AND type=?',array($id,$this->type));
        $opt[] = array('id' => '0', 'name' => 'Select category...');
        $rs = array_merge($opt, $tmp);
        $this->category_id->bind(($tmp)? $rs : null)->updateClient();
        $this->updateList = true;
    }
    
    
    protected function loadProjectList() {   
        $rs = $this->db->table('view_programme_project_list','country_id=? AND type=?',array($this->countryId,$this->type));
        $this->data->bind($rs)->updateClient();
        $this->updateList = true;
    }
    
    protected function setCategoryId($e) {  
        $id = $e->intVal() | 0;
        $this->url = 'project.php?cat='.$id;
        c('#btn')->html(($this->type==1)? 'Add New Project' : 'Add New Programme');
        c('#btn')->attr('href',$this->url);
        if($id){
            c('#btn')->show();
        }else{
            c('#btn')->hide();
        }
    }
}
?>