<?php
include_once('common.php');
class Accommodation extends common {
    protected   $updateList = false, 
                $updateList2 = false,
                $updateAccommodationList = false,
                $countryDb,
                $id;
    
    private $countyId2,$stateId,$stateId2;
    public $countyId;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_accom')->attr('class','list-group-item active');
        $this->appendView("accommodation.view.php");
        $this->phone1->remove();
    }

    protected function _load() {    
        $this->id = $this->data('accommodationId',0,true);
        $this->countryDb = $this->data('countryDb',0,true);
        $this->delegate('#infobtn', '#click', array('callback' => '.submitInfo')); 
        $this->delegate('#detailbtn', '#click', array('callback' => '.submitDetail')); 
        $this->delegate('#country_id', '#change', array('callback' => '.updateCountyCode'));
        $this->delegate('#country_id2', '#change', array('callback' => '.updateCountyCode2'));
        $this->delegate('#accommodation', '#change', array('callback' => '.loadFormData'));
        $this->delegate('#country_db', '#change', array('callback' => '.setCountryDb'));
        $this->delegate('#remove', '#click', array('callback' => '.removeAcc'));
        $this->delegate('.delete', '#click', array('callback' => '.removePhoto'));
        $this->delegate('#checklist', 'click', array('callback' => '.checkListPage'));
          
        $tmp = $this->db->table('view_member_country');  
        $opt[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($opt, $tmp);
        
        $opt2[] = array('id' => '0', 'name' => 'Change Database...');
        $rs2 = array_merge($opt2, $tmp);
        
        $this->country_db->bind($rs2); 
        $this->country_id->bind($rs); 
        $this->country_id2->bind($rs);
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        { 
            $this->loadStates();  
        }
        if(!$this->isCallback||$this->updateList2)
        { 
            $this->loadStates2();
        }
        
        if(!$this->isCallback||$this->updateAccommodationList)
        {
            $this->gallery->bind(null);
            $this->loadAccommodationList();
        }
    }
    
    protected function loadStates2() {
        $id = $this->countyId2;
        $rs = $this->db->table('obd_county_zone zone_id as id, name','country_id=?',array($id));
        $this->state_id2->bind($rs);
        $this->state_id2->updateClient();
    }
    
    protected function updateCountyCode2($e) {
        $id = $e->intVal();
        $rs = $this->db->table('obd_county_zone zone_id as id, name','country_id=?',array($id));
        $this->state_id2->bind($rs);
        $this->state_id2->updateClient();
    }
    
    protected function submitInfo() {  
        $data['address1']   = $this->post->textVal('address1');
        $data['address2']   = $this->post->textVal('address2');
        $data['address3']   = $this->post->textVal('address3');
        $data['country_id'] = $this->post->intVal('country_id');
        $data['state_id']   = $this->post->intVal('state_id');
        $data['zip_code']   = $this->post->textVal('zip_code');
        $data['address_type_id'] = 1;
        $data['phone']      = $this->post->textVal('phone');
        
        $data2['address1']   = $this->post->textVal('address12');
        $data2['address2']   = $this->post->textVal('address22');
        $data2['address3']   = $this->post->textVal('address32');
        $data2['country_id'] = $this->post->intVal('country_id2');
        $data2['state_id']   = $this->post->intVal('state_id2');
        $data2['zip_code']   = $this->post->textVal('zip_code2');
        $data2['address_type_id'] = 2;
        $data2['phone']      = $this->post->textVal('phone2');

        $info['host_name']    = $this->post->textVal('host_name');
        $info['phone_mobile'] = $this->post->textVal('phone_mobile'); 
        $info['phone_mobile_2'] = $this->post->textVal('phone_mobile_2');
        $info['email']        = $this->post->emailVal('email');
        $info['number_of_volunteer_spaces'] = $this->post->intVal('number_of_volunteer_spaces');
        $info['archive']      = $this->post->intVal('archive');
        $info['updated_by']   = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($info['host_name'])   ){$valid = false; $this->host_name->css('border','solid 1px #c00');}
        if(empty($info['phone_mobile'])){$valid = false; $this->phone_mobile->css('border','solid 1px #c00');}
        if(empty($data['address1'])    ){$valid = false; $this->address1->css('border','solid 1px #c00');}
        if(empty($data['country_id'])  ){$valid = false; $this->country_id->css('border','solid 1px #c00');}
       
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->state_id->bind(null);
            $this->frm->updateClient();
            return false;
        }
        //////////////////END-VALIDATION/////////////////////        
        $id = $this->id;

        try{
            if($id){
               $info['date_updated'] = $this->dateNow;

               $rs = $this->db->table('accommodation address1_id,address2_id','id=?',$id);
               $this->db->tableUpdate('address',$data,'id=?',$rs[0]['address1_id']); 
               //Address 2 can be empty add record if empty
               if($rs[0]['address2_id']){
                    $this->db->tableUpdate('address',$data2,'id=?',$rs[0]['address2_id']); 
               }else{
                    $this->db->tableInsert('address',$data2); 
                    $info['address2_id']= $this->db->lastInsertId();
               }
               
               $this->db->tableUpdate('accommodation',$info,'id=?',$id);             
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
               $subject = "Accommodation updated by staff";
               $msg = "Accommodation information updated by ".$this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME').", "
                       . "log into <a href='https://www.rsvpcaribbean.com/cms/login.php'>www.rsvpcaribbean.com/cms/</a> to view information.";
               $this->sendEmailToStaff($subject, $msg);
            }else{
                $info['date_added']   = $this->dateNow; 
                $info['added_by']     = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
                
                $this->db->tableInsert('address',$data); 
                $info['address1_id'] = $this->db->lastInsertId();
                
                $this->db->tableInsert('address',$data2); 
                $info['address2_id'] = $this->db->lastInsertId();
                
                $info['date_updated'] = $this->dateNow;
                $info['updated_by']   = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
                
                $this->db->tableInsert('accommodation',$info);
                $id = $this->db->lastInsertId();
                
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
                
                $subject = "New accommodation added by staff";
                $msg = "New accommodation added by ".$this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME').", "
                        . "<p>log into <a href='https://www.rsvpcaribbean.com/cms/login.php'>www.rsvpcaribbean.com/cms/</a> to view information.</p>";              
                $this->sendEmailToStaff($subject, $msg);
            }
            
            $this->printPhotoUploader($id,1);
            $this->data('accommodationId',$id);
            $this->loadAccommodationList();
            $this->accommodation->val($id); 
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
   
    protected function submitDetail() {  
        $data['location_desc']              = $this->post->textVal('location_desc');
        $data['overview_desc']              = $this->post->textVal('overview_desc');
        $data['living_accommodation_desc']  = $this->post->textVal('living_accommodation_desc');
        $data['about_room_desc']            = $this->post->textVal('about_room_desc');
        $data['about_food_desc']            = $this->post->textVal('about_food_desc');
        $data['general_advice_desc']        = $this->post->textVal('general_advice_desc');

        try{
            if($this->id){
               $this->db->tableUpdate('accommodation',$data,'id=?',$this->id);           
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }      

    protected function loadFormData($e) {  
        $this->id = $e->textVal() | 0;
        $id = $this->id;  
        
        $this->printPhotoUploader($id,1);
        $this['#myacc']->attr('href',($id)? '../my-accommodation.php?id='.base64_encode($id) : '#')->updateClient();
        $this['#staffupdate']->attr('href',($id)? '../cms/accommodation-note.php?id='.base64_encode($id) : '#')->updateClient();
        
        if(!$id){ 
            $this->data('accommodationId',0);
            $this->state_id->bind(null);
            $this->state_id2->bind(null);
            $this->gallery->bind(null);
            $this->frm->updateClient();
            $this->gallery->updateClient();
            c('#date_added')->html('');
            c('#date_updated')->html('');
            c('#updated_by')->html('');
            return false; 
        }
        $this->data('accommodationId',$id);
        $rs = $this->db->table('view_accommodation','id=?',array($id));
        c('#date_added')->html($rs[0]['date_added']);
        c('#date_updated')->html($rs[0]['date_updated']);    
        c('#updated_by')->html($rs[0]['updated_by']);
               
        //$address1 = $this->db->table('address','id=?',array($rs[0]['address1_id']));
        $address2 = $this->db->table(
                'address '
                . 'address1 as address12, '
                . 'address2 as address22, '
                . 'address3 as address32, '
                . 'country_id as country_id2, '
                . 'state_id as state_id2, '
                . 'zip_code as zip_code2, '
                . 'address_type_id as address_type_id2, '
                . 'phone as phone2',
                'id=?',
                array($rs[0]['address2_id']));
        
        $this->countyId = $rs[0]['country_id'];
        $this->stateId  = $rs[0]['state_id'];
        
        if(isset($address2[0]['country_id2'])){ 
            $this->countyId2 = $address2[0]['country_id2'];
            $this->stateId2 = $address2[0]['state_id2'];
        }
        $this->loadStates();
        $this->loadStates2();
        $this->loadGallery($id,1);      
        $data = array_merge($rs[0],$address2[0]);

        $this->frm->inputValues($data);
        $this->frm->updateClient();
        
        $this->detailFrm->inputValues($rs[0]); 
        $this->detailFrm->updateClient();
    }
    
    protected function loadAccommodationList() {  
        $id = $this->countryDb | 0;
        $host = $this->db->table('view_accommodation id, host_name', 'country_id=?', $id);  
        $opt2[] = ($host)? array('id' => '', 'host_name' => 'Select host to view or edit') : array();
        $hostList = array_merge($opt2, $host);
        $this->accommodation->bind($hostList); 
        $this->accommodation->updateClient();   
    } 
    
    protected function checkListPage($e) {  
        $this->redirectTo('accommodation-checklist.php?flag='.$this->countryDb);
    } 

    protected function setCountryDb($e) {  
        $this->countryDb = $e->intVal() | 0;
        $this->data('countryDb',$this->countryDb);
        $this->loadAccommodationList();
    }  
    
    protected function removeAcc($e) {  
        $id = $this->id | 0;    
        if($id==null){ return; }
        
        $rs = $this->db->table('accommodation','id=?',$id);
        $this->db->tableDelete('accommodation','id=?',$id);
        
        if(isset($rs[0]['address1_id'])){
            $this->db->tableDelete('address','id=?',$rs[0]['address1_id']);
        }
        if(isset($rs[0]['address2_id'])){
            $this->db->tableDelete('address','id=?',$rs[0]['address2_id']);
        }      
        
        $rt = $this->db->table('photo CONCAT(category_id,"/",photo) AS photo','item_id=? AND category_id=?',array($id,1));
        $this->db->tableDelete('photo','item_id=? AND category_id=?',array($id,1));
        if($rt){
            foreach ($rt as $key => $value){
                $filename = '../rsvp_photos/'.$value['photo'];
                if(file_exists($filename)){ 
                    unlink($filename);
                }
            }
        }
        //loadAccommodationList();
        $this->redirectTo('accommodation.php');
    }
    
    protected function sendEmailToStaff($subject, $msg) {  
        try{
            $rt = $this->db->execQuery("CALL sp_admin_email()");          
            if(empty($rt)){return;}
            $this->sendEmail($rt, $subject, $msg);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.' '.__FUNCTION__;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    } 
}
?>