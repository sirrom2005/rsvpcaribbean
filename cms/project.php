<?php
include_once('common.php');
class Project extends common {
    protected   $updateList         = false, 
                $updateFormData     = false;
    private $id,$cat;
    public $countyId,$typeId;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->loadScript('jquery-tools');
        $this->loadScript('views/js/css-tabstrip.js', true);
        $this->appendView("project.view.php");
    }

    protected function _load() {   
        $this->cat= $this->get->intVal('cat');
        $this->id = $this->get->intVal('id');        
        $this->delegate('#infobtn', '#click', array('callback' => '.saveInfo'));
        $this->delegate('#detailbtn', '#click', array('callback' => '.saveDetail'));
        $this->delegate('.delete', '#click', array('callback' => '.removePhoto'));
        $this->delegate('#remove', '#click', array('callback' => '.removeAcc'));
        $this->delegate('.key_facts','#click',null,'.loadKeyFacts');
        $this->delegate('#btnCancel','#click', array('callback' => '.closePopUp'));
        $this->delegate('#btnAction','#click', array('callback' => '.saveKeyFact')); 

        //Load country list
        $tmp = $this->db->table('view_member_country');  
        $opt[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($opt, $tmp);
        $this->country_id->bind($rs);
                    
        $this->legendTitle1->html("Institution Address");
        $this->phone_label->html('Telephone');
        
        if(!$this->isCallback){
            $this->addScript('$("#overlay").overlay({expose:"#777",closeOnClick:false})','ready');
        }
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $rs = $this->db->table('project_category','id=?',$this->cat);
            
            if($rs){
                if($rs[0]['type']==1){
                    c('#mm_projects')->attr('class','list-group-item active');
                    $this->pageheading->html('Projects');
                }
                else{
                    c('#mm_programmes')->attr('class','list-group-item active');
                    $this->pageheading->html('Programmes');
                }
                $this->type->val($rs[0]['type']);
                $this->loadSubCategory($rs[0]['id']);
                
                C('#country_id')->val($rs[0]['country_id'])->attr('disabled','disabled');
                $this->countyId = $rs[0]['country_id'];
                
                $this->data('dbCounty', $this->countyId);
                $this->data('photoCategory', ($rs[0]['type']==1)? 2 : 3);
            }
            
            $this->loadFormData();
        }
    }
    
    protected function saveInfo() { 
        $address['address1']   = $this->post->textVal('address1');
        $address['address2']   = $this->post->textVal('address2');
        $address['address3']   = $this->post->textVal('address3');
        $address['country_id'] = $this->data('dbCounty',0,true);
        $address['state_id']   = $this->post->intVal('state_id');
        $address['zip_code']   = $this->post->textVal('zip_code');
        $address['phone']      = $this->post->textVal('phone');
        $address['address_type_id'] = 1;
               
        $info['project_sub_type_id']    = $this->post->intVal('project_sub_type_id');
        $info['institution']            = $this->post->textVal('institution');
        $info['project_or_program']     = $this->post->intVal('type');
        $info['archive']                = $this->post->intVal('archive') | 0;
        
        $supervisor1['key_contact']     = $this->post->textVal('key_contact');
        $supervisor1['job_title']       = $this->post->textVal('job_title');
        $supervisor1['mobile_phone']    = $this->post->textVal('mobile_phone');
        $supervisor1['email']           = $this->post->textVal('email');
        $supervisor1['supervisor_role'] = $this->post->textVal('supervisor_role');
        $supervisor2['key_contact']     = $this->post->textVal('key_contact_2');
        $supervisor2['job_title']       = $this->post->textVal('job_title_2');
        $supervisor2['mobile_phone']    = $this->post->textVal('mobile_phone_2');
        $supervisor2['email']           = $this->post->textVal('email_2');
        $supervisor2['supervisor_role'] = $this->post->textVal('supervisor_role_2');
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($info['project_sub_type_id']) ){$valid = false;c('#project_sub_type_id')->css('border','solid 1px #c00');}
        if(empty($info['institution']) ){$valid = false; c('#institution')->css('border','solid 1px #c00');}
        if(empty($supervisor1['key_contact']) ){$valid = false; c('#key_contact')->css('border','solid 1px #c00');}
        if(empty($address['address1'])    ){$valid = false; c('#address1')->css('border','solid 1px #c00');}
       
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            return false;
        }
        //////////////////END-VALIDATION/////////////////////
        
        $id = $this->id;
        
        try{
            if($id){
                $rs = $this->db->table('project address_id','id=?',$id);
                $this->db->tableUpdate('address',$address,'id=?',$rs[0]['address_id']); 
               
                $info['date_updated']   = $this->dateNow;
                $info['updated_by']     = $this->userId;
                $this->db->tableUpdate('project',$info,'id=?',$id);  
                
                $this->db->tableDelete('project_supervisor','project_id=?',$id);
                $supervisor1['project_id'] = $id;
                $supervisor2['project_id'] = $id;
                $this->db->tableInsert('project_supervisor',$supervisor1);
                $this->db->tableInsert('project_supervisor',$supervisor2);
                
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $this->db->tableInsert('address',$address); 
                $info['address_id']     = $this->db->lastInsertId();               
                $info['date_added']     = $this->dateNow;
                $info['date_updated']   = $this->dateNow;
                $info['added_by']       = $this->userId;
                $info['updated_by']     = $this->userId;
                               
                $this->db->tableInsert('project',$info);
                $id = $this->db->lastInsertId();
                
                $supervisor1['project_id'] = $id;
                $supervisor2['project_id'] = $id;
                $this->db->tableDelete('project_supervisor','project_id=?',$id);
                $this->db->tableInsert('project_supervisor',$supervisor1);
                $this->db->tableInsert('project_supervisor',$supervisor2);
                               
                //$this->data('id',$id);
                $this->redirectTo('project.php?cat='.$this->cat.'&id='.$id);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            
            //$this->data('projectId',$id);
            //$this->loadProjectList($this->data('dbCounty'));
            //$this->project_id->val($id);
            //$this->printPhotoUploader($id,2);
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
        $info['background_info']        = $this->post->textVal('background_info');
        $info['location_desc']          = $this->post->textVal('location_desc');
        $info['overview_desc']          = $this->post->textVal('overview_desc');
        $info['project_goal_desc']      = $this->post->textVal('project_goal_desc');
        $info['volunteer_role_desc']    = $this->post->textVal('volunteer_role_desc');
        $info['volunteer_task_desc']    = $this->post->textVal('volunteer_task_desc');
        $info['typical_day_desc']       = $this->post->textVal('typical_day_desc');
        $info['dress_code_desc']        = $this->post->textVal('dress_code_desc');
        $info['other_information_desc'] = $this->post->textVal('other_information_desc');
        $info['other_activitie_desc']   = $this->post->textVal('other_activitie_desc');

        $id = $this->id;
        
        try{
            if($id){
                $this->db->tableUpdate('project',$info,'id=?',$id);
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.'Enter Accommodation information first','fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadFormData() {
        $id = $this->id; 
        
        $this->printPhotoUploader($id,$this->data('photoCategory'));
        
        if(!$id){
            $this->gallery->bind(null);
            return false;
        }
        
        $this->data('projectId',$id);
        $rs  = $this->db->table('view_project_info','id=?',$id);
        if(!$rs){ $this->redirectTo('programmes_projects.php?type=MQ=='); }
        $sup = $this->db->table('project_supervisor','project_id=?',$id);
        
        c('#key_contact')->val($sup[0]['key_contact']);  
        c('#job_title')->val($sup[0]['job_title']);      
        c('#mobile_phone')->val($sup[0]['mobile_phone']);   
        c('#email')->val($sup[0]['email']);          
        c('#supervisor_role')->val($sup[0]['supervisor_role']);

        c('#key_contact_2')->val($sup[1]['key_contact']);  
        c('#job_title_2')->val($sup[1]['job_title']);      
        c('#mobile_phone_2')->val($sup[1]['mobile_phone']);   
        c('#email_2')->val($sup[1]['email']);          
        c('#supervisor_role_2')->val($sup[1]['supervisor_role']);
        
        c('#date_added')->html($rs[0]['date_added']);
        c('#entered_by')->html($rs[0]['added_by']);
        c('#date_updated')->html($rs[0]['date_updated']);
        c('#updated_by')->html($rs[0]['updated_by']);
        
        c('#document')->attr('href','createPdfs/programme_project.php?id='.base64_encode($id));
        
        $this->countyId = $rs[0]['country_id'];
        $this->loadStates();
        
        $this->frm->inputValues($rs[0])->updateClient();
        $this->detail->inputValues($rs[0])->updateClient(); 

        $this->loadGallery($id,$this->data('photoCategory'));
    }
    
    protected function loadSubCategory($id) { 
        $tmp = $this->db->table('project_sub_type id, name', 'project_id=?', $id);
        $pro[] = ($tmp)? array('id' => '0', 'name' => 'Select Sub Category...') : array();
        $rs = array_merge($pro, $tmp);
        $this->project_sub_type_id->bind($rs);    
    } 
    
    protected function loadKeyFacts($e) { 
        $id = $this->id | 0;
        $filename   = 'apps/views/partner_key_facts.html';
        $fp         = fopen($filename,'r');
        $content    = fread($fp, filesize($filename));
        fclose($fp);
        c('#htmlText')->html($content);
        
        $rs = $this->db->table('project_key_fact','project_id=?',$id);   
        if($rs){
            c('#population')->val($rs[0]['population']);
            c('#number_of_persons')->val($rs[0]['number_of_persons']);
            c('#group_size')->val($rs[0]['group_size']);
            c('#age_group')->val($rs[0]['age_group']);
            c('#hours_of_work')->val($rs[0]['hours_of_work']);
            c('#number_of_staff')->val($rs[0]['number_of_staff']);
            c('#institution_type_id')->val($rs[0]['institution_type_id']);
        }

        c('#project_key_id')->val(base64_encode($id));      
        c('#overlay')->overlay(array('api'=>true))->load();
    }
    
    protected function saveKeyFact() {  
        $id                             = base64_decode($this->post->textVal('project_key_id'));  
        if(!$id){ return false; }
        $data['project_id']             = $id;
        $data['population']             = $this->post->intVal('population');
        $data['number_of_persons']      = $this->post->intVal('number_of_persons');
        $data['group_size']             = $this->post->intVal('group_size');
        $data['age_group']              = $this->post->intVal('age_group');
        $data['hours_of_work']          = $this->post->textVal('hours_of_work');
        $data['number_of_staff']        = $this->post->intVal('number_of_staff');
        $data['institution_type_id']    = $this->post->textVal('institution_type_id');
        $data['date_added']             = $this->dateNow;
        $data['added_user']             = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
        
        try{
            $this->db->tableDelete('project_key_fact','project_id=?',$id);
            $this->db->tableInsert('project_key_fact',$data);
            $this->flashmsg($this->icon.'Key fact updated','fade','alert alert-success');
            c((_fn('function(e){$("#overlay").overlay({api:true}).close();e.preventDefault();}')));
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        } 
    }
       
    protected function removeAcc($e) {  
        $id = $this->id | 0;    
        if($id==null){ return; }
        
        $rs = $this->db->table('project','id=?',$id);
        $this->db->tableDelete('project','id=?',$id);
        
        if(isset($rs[0]['address_id'])){
            $this->db->tableDelete('address','id=?',$rs[0]['address_id']);
        }   
        
        $rt = $this->db->table('photo CONCAT(category_id,"/",photo) AS photo','item_id=? AND category_id=?',array($id,$this->data('photoCategory')));
        $this->db->tableDelete('photo','item_id=? AND category_id=?',array($id,$this->data('photoCategory')));
        if($rt){
            foreach ($rt as $key => $value){
                $filename = '../rsvp_photos/'.$value['photo'];
                if(file_exists($filename)){ 
                    unlink($filename);
                }
            }
            
        }

        $this->redirectTo(($this->data('photoCategory')==2)? 'programmes_projects.php?type='.base64_encode('2') : 'programmes_projects.php?type='.base64_encode('1'));
    }
}