<?php
include_once('common.php');
class VolunteerInformation extends common {
    protected $updateList = false;
    private $id,$pgNumber;
    public $countyId;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_volinfo')->attr('class','list-group-item active');
        $this->appendView("volunteer-info.view.php");
    }

    protected function _load() { 
        $this->delegate('#infobtn', '#click', array('callback' => '.updateInfo')); 
        $this->delegate('#infoLesson', '#click', array('callback' => '.updateInfoLesson'));
        $this->delegate('#btnOtherInfo', '#click', array('callback' => '.updateOtherInfo'));
        $this->delegate('#btnMarket', '#click', array('callback' => '.updateMarketInfo'));
        $this->delegate('#btnPreference', '#click', array('callback' => '.updatePreference'));
        $this->delegate('.delete', '#click', array('callback' => '.deletePhoto'));
        $this->delegate('#photoBtn', '#click', array('callback' => '.movePhoto'));
        $this->delegate('#refresh', '#click', array('callback' => '.loadVolImages'));
        
        $rs = $this->db->table('photo_category','type=2');
        $this['.photo_category_id']->bind($rs);
        
        $this->btnViewProjInfo->attr('href','volunteer_placement.php?id='.$this->id);
        $this->btnExport->attr('href','createPdfs/volunteer_information.php?id='.base64_encode($this->id));
        
        $this->printPhotoUploader($this->id,99999);
    }
    
    protected function _prerender() {        
        $this->preLoad();
        $this->loadVolunteerInfo();
        $this->loadLessonInfo();
    }
    
    protected function preLoad() {
        if(!$this->isCallback)
        {
            $rs = $this->db->table('title');
            $this->title_id->bind($rs);
            $this->guardian_title_id->bind($rs);
            $rs = $this->db->table('volunteer_status_type');
            $this->volunteer_status_type_id->bind($rs);
            $rs = $this->db->table('odb_country country_id AS id, name');
            $this->nationality_id->bind($rs);
            $this->birth_country_id->bind($rs);
            $this->country_id->bind($rs);
            $rs = $this->db->table('relationship_type');
            $this->guardian_relationship_type_id->bind($rs);
            $this->loadVolImages();
        }
    }
    
    protected function loadVolunteerInfo() {        
        try{
            $rs = $this->db->table('view_volunteer_info','id=?',$this->id);           
            if(!$rs){return;}

            $this->countyId = $rs[0]['country_id'];
            $this->loadStates();
            $this->frm->inputValues($rs[0]); 
            $this->frmOtherInfo->inputValues($rs[0]); 
            
            $rs = $this->db->table('market_exec_summary','volunteer_id=?',$this->id);  
            $this->frmMarket->inputValues((isset($rs[0]))? $rs[0] : null);
            
            $rs = $this->db->table('volunteer_preference','volunteer_id=?',$this->id);  
            $this->frmpref->inputValues((isset($rs[0]))? $rs[0] : null);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadLessonInfo() {        
        try{
            $rs = $this->db->table("lessons_add_on DATE_FORMAT(start_date, '%Y-%m-%d') AS start_date_1, DATE_FORMAT(end_date, '%Y-%m-%d') AS end_date_1, duration AS duration_1, staff_notes",
                                    "volunteer_id=? AND lessons = 'English Lesson'",$this->id);

            $rs1 = $this->db->table("lessons_add_on DATE_FORMAT(start_date, '%Y-%m-%d') AS start_date_2, DATE_FORMAT(end_date, '%Y-%m-%d') AS end_date_2, duration AS duration_2",
                                    "volunteer_id=? AND lessons = 'Patois Lesson'",$this->id);

            $this->lesson->inputValues((isset($rs[0]))? $rs[0] : null);
            $this->lesson->inputValues((isset($rs1[0]))? $rs1[0] : null);              
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateInfo() {        
        $data['title_id']           = $this->post->intVal('title_id');
        $data['firstname']          = $this->post->textVal('firstname');
        $data['middlename']         = $this->post->textVal('middlename');
        $data['lastname']           = $this->post->textVal('lastname');
        $data['dob']                = $this->post->dateVal('dob');
        $data['email']              = $this->post->emailVal('email');
        $data['email2']             = $this->post->emailVal('alternative_email');
        $data['skype']              = $this->post->textVal('skype'); 
        $data['phone']              = $this->post->textVal('mobile_phone');
        
        $vol['nationality_id']     = $this->post->intVal('nationality_id');
        $vol['birth_country_id']   = $this->post->intVal('birth_country_id');
        $vol['name_on_passport']   = $this->post->textVal('name_on_passport');       
        $vol['time_to_speak']      = $this->post->textVal('time_to_speak');
        $vol['volunteer_status_type_id'] = $this->post->intVal('volunteer_status_type_id');
        $vol['staff_note']         = $this->post->textVal('staff_note');
        
        $add['address1']           = $this->post->textVal('address1');
        $add['address2']           = $this->post->textVal('address2');
        $add['address3']           = $this->post->textVal('address3');
        $add['country_id']         = $this->post->intVal('country_id');
        $add['state_id']           = $this->post->intVal('state_id');
        $add['zip_code']           = $this->post->textVal('zip_code');
        $add['phone']              = $this->post->textVal('home_phone');
        
        $guardian['title_id']  = $this->post->intVal('guardian_title_id');
        $guardian['firstname'] = $this->post->textVal('guardian_firstname');
        $guardian['middlename']= $this->post->textVal('guardian_middlename');
        $guardian['lastname']  = $this->post->textVal('guardian_lastname');
        $guardian['relationship_type_id'] = $this->post->intVal('guardian_relationship_type_id');
        $guardian['phone']     = $this->post->textVal('guardian_phone');
        $guardian['email']     = $this->post->textVal('guardian_email');
        
        try{
            $this->db->tableUpdate('account',$data,'id=?',$this->id);
            $this->db->tableUpdate('volunteer',$vol,'account_id=?',$this->id);
            $this->db->tableUpdate('address',$add,'id=?',$this->post->intVal('address_id'));
            $this->db->tableUpdate('guardian',$guardian,'volunteer_id=?',$this->id);
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateInfoLesson() {                   
        $data1['start_date']    = $this->post->dateVal('start_date_1');
        $data1['end_date']      = $this->post->dateVal('end_date_1');
        $data1['lessons']       = $this->post->textVal('lessons_1');
        $data1['duration']      = $this->post->textVal('duration_1');
        $data1['staff_notes']   = $this->post->textVal('staff_notes');
        $data1['volunteer_id']  = $this->id;
        
        $data2['start_date']    = $this->post->dateVal('start_date_2');
        $data2['end_date']      = $this->post->dateVal('end_date_2');
        $data2['lessons']       = $this->post->textVal('lessons_2');
        $data2['duration']      = $this->post->textVal('duration_2');
        $data2['staff_notes']   = $this->post->textVal('staff_notes');
        $data2['volunteer_id']  = $this->id;
        
        try{
            $this->db->tableDelete('lessons_add_on','volunteer_id=?',$this->id);
            $this->db->tableInsert('lessons_add_on',$data1);
            if(!empty($data2['start_date']) && !empty($data2['end_date']) && !empty($data2['duration'])){
                $this->db->tableInsert('lessons_add_on',$data2);  
            }
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateOtherInfo() {  
        $data['project_special_interest']   = $this->post->textVal('project_special_interest');
        $data['host_family_preference_desc']= $this->post->textVal('host_family_preference_desc');
        $data['other_information']          = $this->post->textVal('other_information');
        
        try{
            $this->db->tableUpdate('volunteer',$data,'account_id=?',$this->id);
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateMarketInfo() {  
        $data['note']           = $this->post->textVal('note');
        $data['volunteer_id']   = $this->id;
        
        try{
            $this->db->tableDelete('market_exec_summary','volunteer_id=?',$this->id);
            $this->db->tableInsert('market_exec_summary',$data);
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    } 
    
    protected function updatePreference() {  
        $data['project_special_preference'] = $this->post->textVal('project_special_preference');
        $data['host_family_preference']     = $this->post->textVal('host_family_preference');
        $data['general_information']        = $this->post->textVal('general_information');
        $data['volunteer_id']               = $this->id;
        
        try{
            $this->db->tableDelete('volunteer_preference','volunteer_id=?',$this->id);
            $this->db->tableInsert('volunteer_preference',$data);
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    } 
    
    
    protected function deletePhoto($e) {  
        $id = $e->intVal() | 0;
        $rs = $this->db->table('photo item_id, category_id, CONCAT(category_id,"/",photo) AS photo','id=?',$id);
        $filename = '../rsvp_photos/'.$rs[0]['photo'];
        if(file_exists($filename)){
            unlink($filename);
        }
        $this->db->tableDelete('photo','id=?',$id);
        $this->loadVolImages();
    }    
    
    protected function loadVolImages() { 
        $rs = $this->db->table('photo category_id AS photo_category_id, id AS photoId, CONCAT(category_id,"/",photo) AS photo, photo AS file', 'item_id=?', $this->id);
        $this->photoList->bind($rs)->updateClient();
        foreach($rs as $key => $value){ 
           C('#photo_category_id_'.$value['photoId'])->val($value['photo_category_id']);
           C('#photoid_'.$value['photoId'])->val($value['photoId']);
        }
    }
    
    protected function movePhoto($e) { 
        $data['category_id']  = $this->post->intVal('photo_category_id');
        $id = $this->post->intVal('photoid');
        
        $rs = $this->db->table('photo CONCAT(category_id,"/",photo) AS photo', 'id=?', $id);
        
        $folder = '../rsvp_photos/'.$data['category_id'];
        if(!is_dir($folder)){
            mkdir($folder);
        }
        
        $ex = explode('-', $rs[0]['photo']);
        $newFile = str_replace($ex[0], $data['category_id'], $rs[0]['photo']);
        rename('../rsvp_photos/'.$rs[0]['photo'], '../rsvp_photos/'.$data['category_id'].'/'.$newFile);
        
        $data['photo'] = $newFile;
        $this->db->tableUpdate('photo',$data,'id=?',$id);
        $this->loadVolImages();
    }
}
?>