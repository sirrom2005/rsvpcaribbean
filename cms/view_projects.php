<?php
include_once('common.php');
class Project extends common {
    protected $updateList = false, $updateFormData = false;
    private $id,$cat;
    public $countyId;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mm_projects')->attr('class','list-group-item active');
        $this->appendView("project.view.php");
    }

    protected function _load() {       
        $this->delegate('#category', '#change', array('callback' => '.setCategory'));  
        $this->delegate('#country_id', '#change', array('callback' => '.updateCountyCode'));
        $this->delegate('#infobtn', '#click', array('callback' => '.saveInfo'));
        $this->delegate('#detailbtn', '#click', array('callback' => '.saveDetail'));
        
        $this->cat = $this->get->cat;
        if(!$this->cat){ $this->redirectTo('projects.php');}
        $category = $this->db->table('project_type name','id=?',$this->cat);
        if(!$category){ $this->redirectTo('projects.php');}
        $this->pageheading->html('Projects - '.$category[0]['name']);
        
        //Load country list
        $tmp = $this->db->table('odb_country country_id as id, name');  
        $opt[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($opt, $tmp);
        $this->country_id->bind($rs); 
        
        $tmp = $this->db->table('project id, institution as name');
        $pro[] = array('id' => '0', 'name' => 'Select project to view or edit...');
        $rs = array_merge($pro, $tmp);
        $this->category->bind($rs);
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        { 
            $this->loadStates();  
        }
    }
    
    protected function setCategory($e) {
        $id = $e->intval() | 0;
        $this->populateForm($id);
    }
    
    /*protected function loadStates() {
        $id = $this->countyId;
        $rs = $this->db->table('obd_county_zone zone_id as id, name','country_id=?',array($id));
        $this->state_id->bind($rs);
        $this->state_id->updateClient();
    }*/
    
    protected function saveInfo() {
        $data['address1']   = $this->post->textVal('address1');
        $data['address2']   = $this->post->textVal('address2');
        $data['address3']   = $this->post->textVal('address3');
        $data['country_id'] = $this->post->intVal('country_id');
        $data['state_id']   = $this->post->intVal('state_id');
        $data['zip_code']   = $this->post->textVal('zip_code');
        $data['address_type_id'] = 1;
        $data['phone']      = $this->post->textVal('phone');
               
        $info['project_type_id']            = $this->get->intVal('cat');
        $info['institution']                = $this->post->textVal('institution');
        $info['key_contact']                = $this->post->textVal('key_contact');
        $info['phone_other']                = $this->post->textVal('phone_other');
        $info['mobile']                     = $this->post->textVal('mobile');
        $info['number_of_volunteer']        = $this->post->textVal('number_of_volunteer');
            
        //Validation here
        //$info['institution']
        //$info['key_contact']
        //$info['number_of_volunteer']
        $id = $this->data('id',0,true);
    
        try{
            if($id){
               $rs = $this->db->table('project address_id','id=?',$id);
               $this->db->tableUpdate('address',$data,'id=?',$rs[0]['address_id']); 
               
               $this->db->tableUpdate('project',$info,'id=?',$id);  
               
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $this->db->tableInsert('address',$data); 
                $info['address_id'] = $this->db->lastInsertId();               
                
                $this->db->tableInsert('project',$info);
                $id = $this->db->lastInsertId();
                $this->data('id',$id);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            echo $ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function saveDetail() {
        $info['overview_desc']              = $this->post->textVal('overview_desc');
        $info['location_desc']              = $this->post->textVal('location_desc');
        $info['your_role_desc']             = $this->post->textVal('your_role_desc');
        $info['typical_day_desc']           = $this->post->textVal('typical_day_desc');
        $info['dress_code_desc']            = $this->post->textVal('dress_code_desc');
        $info['project_structure_desc']     = $this->post->textVal('project_structure_desc');
        $info['other_activity_desc']        = $this->post->textVal('host_name');
        $info['tips_past_volunteer_desc']   = $this->post->textVal('tips_past_volunteer_desc');
        $info['extra_info_desc']            = $this->post->textVal('extra_info_desc'); 
        
        $id = $this->data('id',0,true);
        
        try{
            if($id){
                $this->db->tableUpdate('project',$info,'id=?',$id);
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.'Enter Accommodation information first','fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function populateForm($id) {
        if($id){
            $this->data('id',$id);
            $rs  = $this->db->table('project','id=?',$id); 
            $add = $this->db->table('address','id=?',$rs[0]['address_id']);
            $this->countyId = $add[0]['country_id'];
            $this->loadStates();
            $this->frm->inputValues($rs[0]);
            $this->frm->inputValues($add[0]);
            $this->frm->updateClient(); // manually update list on client
        }else{
            $this->data('id',0);
            $this->frm->inputValues(null);
            $this->frm->inputValues(null);
            $this->frm->updateClient(); // manually update list on client
        }
    }
    
}