<?php
include_once('common.php');
class RsvpWebPage extends common {
    protected   $updateList = false;
    private     $id;

    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
    }

    protected function _init() {
        parent::_init();
        $this->appendView("rsvp-webpage.view.php");
        c('#mm_rsvp_page')->attr('class','list-group-item active');
    }

    protected function _load() {  
        $this->delegate('#chgpas', '#click', array('callback' => '.changePassword')); 
        $this->delegate('#rsvppage', '#click', array('callback' => '.rsvppage'));
        $this->delegate('#btn', '#click', array('callback' => '.saveInfo'));
    }
    
    protected function _prerender() {
        $this->loadVolunteerSummary($this->id);
        $this->loadVolunteerInfo($this->id);
    }
    
    protected function rsvppage()
    {
        return false;
    }
    
    protected function changePassword() {
        $rs     = $this->db->table('view_volunteer_quick_info fullname, email', 'id=?',$this->id); 
        if(empty($rs)){ return false;}
        
        $pass = $this->get_rand_string(8);
        
        $msg = "Your password was reset by one of the Administrators, please use the password below to login.
                <p><b>Password:</b> $pass</p>";
        try{
            $data['password'] = md5($pass);
            $this->db->tableUpdate('account',$data,'id=?',$this->id);
            
            $contact[0] = array('fullname' => $rs[0]['fullname'], 'email' => $rs[0]['email']);
            if($this->sendEmail($contact, "Password Reset", $msg)){
                $this->flashmsg($this->icon.'New password sent to volunteer','fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadVolunteerInfo($id) {
        try{
            $rs = $this->db->table('rsvp_web_page','volunteer_id=?',$id);
            if(empty($rs)){return false;}
            $this->frm->inputValues($rs[0]);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function saveInfo()
    { 
        $id                     = $this->post->intVal('volunteer_id') | 0;
        $data['volunteer_id']   = $this->id;
        $data['access_webpage'] = $this->post->intVal('access_webpage') | 0;
        $data['access_fundraising_page'] = $this->post->intVal('access_fundraising_page') | 0;
        $data['grant_programme']= $this->post->intVal('grant_programme') | 0;
        $data['grant_partner_agency'] = $this->post->intVal('grant_partner_agency') | 0;
        $data['grant_flight']   = $this->post->intVal('grant_flight') | 0;
        $data['grant_country']  = $this->post->intVal('grant_country') | 0;
        
        try{
            if($id){
                $this->db->tableUpdate('rsvp_web_page', $data, 'volunteer_id=?', $id);
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $this->db->tableInsert('rsvp_web_page',$data);
                C('#volunteer_id')->val($this->id);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function get_rand_string($length)
    {
        if($length>0) 
        { 
            $rand_id="";
            for($i=1; $i<=$length; $i++)
            {
                mt_srand((double)microtime() * 1000000);
                $num = mt_rand(1,36);
                $rand_id .= $this->assign_rand_value($num);
            }
        }
        return $rand_id;
    }
    
    protected function assign_rand_value($num)
    {
        // accepts 1 - 36
        switch($num)
        {
            case "1":
             $rand_value = "a";
            break;
            case "2":
             $rand_value = "b";
            break;
            case "3":
             $rand_value = "c";
            break;
            case "4":
             $rand_value = "d";
            break;
            case "5":
             $rand_value = "e";
            break;
            case "6":
             $rand_value = "f";
            break;
            case "7":
             $rand_value = "g";
            break;
            case "8":
             $rand_value = "h";
            break;
            case "9":
             $rand_value = "i";
            break;
            case "10":
             $rand_value = "j";
            break;
            case "11":
             $rand_value = "k";
            break;
            case "12":
             $rand_value = "l";
            break;
            case "13":
             $rand_value = "m";
            break;
            case "14":
             $rand_value = "n";
            break;
            case "15":
             $rand_value = "o";
            break;
            case "16":
             $rand_value = "p";
            break;
            case "17":
             $rand_value = "q";
            break;
            case "18":
             $rand_value = "r";
            break;
            case "19":
             $rand_value = "s";
            break;
            case "20":
             $rand_value = "t";
            break;
            case "21":
             $rand_value = "u";
            break;
            case "22":
             $rand_value = "v";
            break;
            case "23":
             $rand_value = "w";
            break;
            case "24":
             $rand_value = "x";
            break;
            case "25":
             $rand_value = "y";
            break;
            case "26":
             $rand_value = "z";
            break;
            case "27":
             $rand_value = "0";
            break;
            case "28":
             $rand_value = "1";
            break;
            case "29":
             $rand_value = "2";
            break;
            case "30":
             $rand_value = "3";
            break;
            case "31":
             $rand_value = "4";
            break;
            case "32":
             $rand_value = "5";
            break;
            case "33":
             $rand_value = "6";
            break;
            case "34":
             $rand_value = "7";
            break;
            case "35":
             $rand_value = "8";
            break;
            case "36":
             $rand_value = "9";
            break;
        }
        
        return $rand_value;
    }
}