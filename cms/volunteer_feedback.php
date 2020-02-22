<?php
include_once('common.php');
class VolunteerFeedback extends common {
    protected   $updateList = false,
                $volunteerName;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_v_fedback')->attr('class','list-group-item active');
        $this->appendView("volunteer_feedback.view.php");
    }

    protected function _load() {   
        $this->delegate('#frm1btn', '#click', array('callback' => '.saveForm1'));
        $this->delegate('#frm2btn', '#click', array('callback' => '.saveForm2'));
        $this->delegate('#doc1', 'click', array('callback' => '.createDoc1'));
        $this->delegate('#doc2', 'click', array('callback' => '.createDoc2'));
    }
    
    protected function _prerender() {
        $this->loadFeedBack1();
        $this->loadFeedBack2();
        $this->getStaffEmail();
        $this->loadVolunteerInfo();
    }

    protected function loadVolunteerInfo() {
        try{
            $rs = $this->db->table("account CONCAT(firstname ,' ' ,lastname) AS fullname", 'id=?', $this->id);
            if($rs){
                $this->volunteerName = $rs[0]['fullname'];
                c('#name')->html($rs[0]['fullname']);
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadFeedBack1() {
        try{
            $rs = $this->db->table('volunteer_feedback_form1', 'account_id=?', $this->id);
            if(isset($rs[0]['account_id'])){
                $this->frm1->inputValues($rs[0]);
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadFeedBack2() {
        try{
            $rs = $this->db->table('volunteer_feedback_form2', 'account_id=?', $this->id);
            if(isset($rs[0]['account_id'])){
                $this->frm2->inputValues($rs[0]);
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function saveForm1() {
        $data = $_POST;
        $data['account_id'] = $this->post->intVal('account_id');
        $email = $this->post->textVal('email');
        unset($data['email']);
        unset($data['_e']);
        unset($data['_ajax_call_']);
        
        try{
            if($data['account_id']){
               $this->db->tableUpdate('volunteer_feedback_form1',$data,'account_id=?',$this->id);
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['account_id'] = $this->id;
                $data['date_added'] = $this->dateNow;
                $data['user_id']    = $this->userId;
                $this->db->tableInsert('volunteer_feedback_form1',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
                c('#account_id1')->val($this->id);
            }
                                                                           
            $contact[] = array('fullname' => 'Mangament Team', 'email' => 'managementteam@rsvpcaribbean.com');
            if($email){
                foreach($email as $key => $value){
                    $e = explode('||', $value);
                    $contact[] = array('fullname' => $e[0], 'email' => $e[1]);    
                } 
            }
            $msg = "Volunteer feedback Form 1 added/edited by ".$this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME').", "
                   . "<p>Please login at <a href='https://www.rsvpcaribbean.com/cms/login.php'>www.rsvpcaribbean.com/cms/</a> to view information.</p>";
            $this->sendEmail($contact, "Volunteer Feedback Submitted", $msg);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function saveForm2() {
        $data = $_POST;
        $data['account_id'] = $this->post->intVal('account_id');
         $email = $this->post->textVal('email');
        unset($data['email']);
        unset($data['_e']);
        unset($data['_ajax_call_']);
        
        try{
            if($data['account_id']){
               $this->db->tableUpdate('volunteer_feedback_form2',$data,'account_id=?',$this->id);
               $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['account_id'] = $this->id;
                $data['date_added'] = $this->dateNow;
                $data['user_id']    = $this->userId;
                $this->db->tableInsert('volunteer_feedback_form2',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
                c('#account_id2')->val($this->id);
            }
            
            $contact[] = array('fullname' => 'Mangament Team', 'email' => 'mangamentteam@rsvpcaribbean');
            if($email){
                foreach($email as $key => $value){
                    $e = explode('||', $value);
                    $contact[] = array('fullname' => $e[0], 'email' => $e[1]);    
                } 
            }
            $msg = "Volunteer feedback Form 2 added/edited by ".$this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME').", "
                   . "<p>Please login at <a href='https://www.rsvpcaribbean.com/cms/login.php'>www.rsvpcaribbean.com/cms/</a> to view information.</p>";
            $this->sendEmail($contact, "Volunteer Feedback Submitted", $msg);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function getStaffEmail() {
        try{ 
            $rt = $this->db->execQuery("CALL sp_admin_email()");
            $this['.emailList']->bind($rt);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function createDoc1() {
        $this->redirectTo('createPdfs/volunteer_feedback_form1.php?id='.base64_encode($this->id));
    }
    
    protected function createDoc2() {
        $this->redirectTo('createPdfs/volunteer_feedback_form2.php?id='.base64_encode($this->id));
    }
}
?>