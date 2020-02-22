<?php
include_once('common.php');
class InsuranceDetail extends common {
    protected   $id;
    

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_insurance')->attr('class','list-group-item active');
        $this->appendView("insurance_detail.view.php");
    }

    protected function _load() {    
        $this->delegate('#detailbtn', '#click', array('callback' => '.submitInfo')); 
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            $this->loadVolunteerSummary($this->id);  
            $this->loadInsuranceData($this->id);  
        }
    }
       
    protected function submitInfo() {  
        $data['account_id']         = $this->id;
        $data['company']            = $this->post->textVal('company');
        $data['phone']              = $this->post->textVal('phone');
        $data['email']              = $this->post->textVal('email');
        $data['policy_number']      = $this->post->textVal('policy_number');
        $data['other_information']  = $this->post->textVal('other_information');
        $data['date_added']         = $this->dateNow;
        $data['updated_by']         = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
        
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($data['company'])){$valid = false; $this->company->css('border','solid 1px #c00');}
        if(empty($data['phone'])  ){$valid = false; $this->phone->css('border','solid 1px #c00');}
        if(empty($data['email'])  ){$valid = false; $this->email->css('border','solid 1px #c00');}
        if(empty($data['policy_number'])){$valid = false; $this->policy_number->css('border','solid 1px #c00');}
       
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->frm->updateClient();
            return false;
        }
        //////////////////END-VALIDATION/////////////////////
        
        try{
            $this->db->tableDelete('insurance','account_id=?',  $this->id);
            $this->db->tableInsert('insurance',$data);                
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }  
    
    protected function loadInsuranceData($id) {
        try{
            //Get insurance info
            $rs = $this->db->table('insurance','account_id=?',$id); 
            //Get Admin username
            if(isset($rs[0]['updated_by'])){
                $admin = $this->db->table('account','id=?',$rs[0]['updated_by']); 
                $this->date->html($rs[0]['date_added']);
                $this->updated_by->html($admin[0]['username']);
                $this->frm->inputValues($rs[0]);
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
}
?>