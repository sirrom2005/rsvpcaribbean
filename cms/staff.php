<?php
include_once('common.php');
class Staff extends common {
    protected   $updateList = false,
                $updateOfficeList=false,
                $updateStafffList=false,
                $staffId,
                $id;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mmstaff')->attr('class','list-group-item active');
        $this->appendView("staff.view.php");
    }

    protected function _load() {         
        $this->id = $this->data('officeId',0,true);
        $this->staffId = $this->data('staffId',0,true);     
        $this->legendTitle1->html('Address');
        $this->delegate('#country_id', '#change', array('callback' => '.updateCountyCode'));
        $this->delegate('#office', '#change', array('callback' => '.loadOfficeData'));
        $this->delegate('#staff_id', '#change', array('callback' => '.loadStaffData'));
        $this->delegate('#offbtn', '#click', array('callback' => '.saveAddress'));
        $this->delegate('#staffbtn', '#click', array('callback' => '.saveStaff'));
        $this->phone1->hide();
               
        $tmp = $this->db->table('title');  
        $tit[] = array('id' => '0', 'name' => 'Select title...');
        $rs = array_merge($tit, $tmp);
        $this->title_id->bind($rs);
        
        //$tmp = $this->db->table('odb_country country_id as id, name'); 
        $tmp = $this->db->table('view_member_country');
        $opt[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($opt, $tmp);
        $this->country_id->bind($rs); 
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        { 
            $this->loadStates();  
        }
        
        if(!$this->isCallback||$this->updateOfficeList)
        { 
            $this->loadOfficeList();
        }
        
        if(!$this->isCallback||$this->updateStafffList)
        { 
            $this->loadStaffList();
        }
    }
    
    protected function saveAddress() {  
        $data['address1']   = $this->post->textVal('address1');
        $data['address2']   = $this->post->textVal('address2');
        $data['address3']   = $this->post->textVal('address3');
        $data['country_id'] = $this->post->intVal('country_id');
        $data['state_id']   = $this->post->intVal('state_id');
        $data['zip_code']   = $this->post->textVal('zip_code');
        $data['address_type_id'] = 3;
        $info['name']               = $this->post->textVal('name');
        $info['staff_contact_1']    = $this->post->textVal('staff_contact_1');
        $info['contact_number_1']   = $this->post->textVal('contact_number_1');
        $info['staff_contact_2']    = $this->post->textVal('staff_contact_2');
        $info['contact_number_2']   = $this->post->textVal('contact_number_2');
        
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($info['name'])           ){$valid = false; $this->name->css('border','solid 1px #c00');}
        if(empty($data['address1'])       ){$valid = false; $this->lastname->css('border','solid 1px #c00');}
        if(empty($data['address2'])       ){$valid = false; $this->address2->css('border','solid 1px #c00');}
        if(empty($data['country_id'])     ){$valid = false; $this->country_id->css('border','solid 1px #c00');}
        
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->countyId = $data['country_id'];
            $this->loadStates();
            $this->officefrm->updateClient();
            return false;
        }
        //////////////////END-VALIDATION/////////////////////
        
        $id = $this->id;
        
        try{
            if($id){
               $this->db->tableUpdate('staff_office',$info,'id=?',$id);
               $rs = $this->db->table('staff_office address_id','id=?',$id);
               $this->db->tableUpdate('address',$data,'id=?',$rs[0]['address_id']);  
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $rs = $this->db->tableInsert('address',$data); 
                $info['address_id'] = $this->db->lastInsertId();
                
                $this->db->tableInsert('staff_office',$info);
                $id = $this->db->lastInsertId();
               
                $this->data('officeId',$id);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            
            $this->loadOfficeList();
            $this->office->val($id);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function saveStaff() {  
        $data['title_id']   = $this->post->textVal('title_id');
        $data['firstname']  = $this->post->textVal('firstname');
        $data['lastname']   = $this->post->textVal('lastname');
        $data['email']      = $this->post->emailVal('email');
        $data['phone']      = $this->post->textVal('phone_mobile');  
        $data['skype']      = $this->post->textVal('skype');  
        $data['whats_app']  = $this->post->textVal('whats_app');  
        $data['account_type'] = 4;//Staff code
        
        $staff['job_title']     = $this->post->textVal('job_title');
        $staff['department']    = $this->post->textVal('department');
        $staff['fax']           = $this->post->textVal('fax');
        $staff['phone_office']  = $this->post->textVal('phone_office');  
        $staff['staff_office_id'] = $this->post->intVal('staff_office_id');
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($data['title_id']) ){$valid = false; $this->title_id->css('border','solid 1px #c00');}
        if(empty($data['firstname'])){$valid = false; $this->firstname->css('border','solid 1px #c00');}
        if(empty($data['lastname']) ){$valid = false; $this->lastname->css('border','solid 1px #c00');}
        if(empty($data['email'])    ){$valid = false; $this->email_work->css('border','solid 1px #c00');}
        if(empty($staff['staff_office_id'])){$valid = false; $this->staff_office_id->css('border','solid 1px #c00');}
        
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->updateOfficeList = true;
            $this->stafffrm->updateClient();
            return false;
        }
        //////////////////END-VALIDATION/////////////////////       
        $id = $this->staffId;
        
        try{
            if($id){
               $rs = $this->db->table('staff account_id','id=?',$id);
               $this->db->tableUpdate('account',$data ,'id=?',$rs[0]['account_id']);
               $this->db->tableUpdate('staff'  ,$staff,'id=?',$id);            
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{   
                //Add password to account
                $password = "password";
                $data['allow_login'] = 1;
                $data['password'] = md5($password);
                $data['username'] = substr(trim($data['firstname']), 0, 1).trim($data['lastname']);
                $this->db->tableInsert('account',$data);
                $account_id = $this->db->lastInsertId();
                $staff['account_id']= $account_id;
                
                $this->db->tableInsert('staff',$staff);
                $id = $this->db->lastInsertId();
               
                $this->data('staffId',$id);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
                
                $subject = "Your Log In Information";
                $msg = '<p>Your RSVP Caribbean account has been successfully set up at: </p>
                        <p><a href="https://www.rsvpcaribbean.com/cms/"><font color="#0000FF">www.rsvpcaribbean.com/cms/</font></a></p>
                        <p>You can log in to the account with the following information:</p>

                        <p><b>Username</b>: '.$data['email'].'<br>
                        <b>Password&nbsp;</b>: '.$password.'</p>
                        <p>Please change your default password as soon as you login into your account.</p>
                        <p>Log in here: <a href="https://www.rsvpcaribbean.com/cms/"><font color="#0000FF">www.rsvpcaribbean.com/cms/</font></a>  </p>
                        <p>&nbsp;</p>
                        <p>Thanks! </p>';
                
                $contact[0]['fullname'] = $data['firstname'];
                $contact[0]['email']    = $data['email'];
                $this->sendEmail($contact,$subject,$msg);
            } 
            $this->loadStaffList();
            $this->staff_id->val($id);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadOfficeData($e) {  
        $this->id = $e->textVal();
        $id = $this->id;
        if(!$id){ 
            $this->data('officeId',0);
            $this->state_id->bind(null);
            $this->officefrm->inputValues(null);
            $this->officefrm->updateClient();
            return false; 
        }
        $this->data('officeId',$id);
        $rs = $this->db->table('staff_office','id=?',array($id));
        $address = $this->db->table('address','id=?',array($rs[0]['address_id']));
        
        $this->countyId = $address[0]['country_id'];
        $data = array_merge($rs[0],$address[0]);
        
        $this->loadStates();  
        $this->officefrm->inputValues($data);
        $this->officefrm->updateClient();
    }
    
    protected function loadStaffData($e) {  
        $this->staffId = $e->textVal();
        $id = $this->staffId;
        if(!$id){ 
            $this->data('staffId',0);
            $this->stafffrm->inputValues(null);
            $this->stafffrm->updateClient();
            $this->loadOfficeList();
            return false; 
        }
        $this->data('staffId',$id);
        $st = $this->db->table('staff account_id,'
                . 'email_work,'
                . 'phone_office,'
                . 'fax,'
                . 'job_title,' 
                . 'department,'
                . 'staff_office_id',
                'id=?',array($id));
        
        $ac = $this->db->table('account title_id,'
                                . 'firstname,'
                                . 'lastname,'
                                . 'email AS email_home,'
                                . 'phone AS phone_mobile,'
                                . 'email,'
                                . 'skype,'
                                . 'whats_app',
                                'id=?',$st[0]['account_id']);
        
        $rs = array_merge($st[0], $ac[0]);
        $this->loadOfficeList();  
        $this->stafffrm->inputValues($rs);
        $this->stafffrm->updateClient();
    }
    
    protected function loadOfficeList() {  
        $tmp = $this->db->table('view_admin_office_list');  
        $off[] = array('id' => '0', 'name' => '---Select office to view or edit---');
        $rs = array_merge($off, $tmp);
        $this->office->bind($rs);
        $this->office->updateClient();  
        
        $off2[] = array('id' => '0', 'name' => '---Select Destination---');
        $rs = array_merge($off2, $tmp);
        $this->staff_office_id->bind($rs);
        $this->staff_office_id->updateClient();
    }
    
    protected function loadStaffList() {  
        $tmp = $this->db->table('view_admin_staff_list');  
        $off[] = array('id' => '0', 'name' => '---Select staff to view or edit---');
        $rs = array_merge($off, $tmp);
        $this->staff_id->bind($rs);
        $this->staff_id->updateClient();   
    }   
}
?>