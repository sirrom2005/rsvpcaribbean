<?php
include_once('common.php');
class ChangePassword extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        $this->appendView("change_password.view.php");
    }

    protected function _load() {    
        $this->delegate('#btn', '#click', array('callback' => '.changePass'));  
    }
    
    protected function _prerender() {
    }
    
    protected function changePass()
    {
        $data['old_password']   = $this->post->textVal('old_password');
        $data['password']       = $this->post->textVal('password');
        $data['password2']      = $this->post->textVal('password2');
        $valid = true;
        if(empty($data['old_password'])){$valid = false; $this->old_password->css('border','solid 1px #c00'); }
        if(empty($data['password'])    ){$valid = false; $this->password->css('border','solid 1px #c00'); }
        if(empty($data['password2'])   ){$valid = false; $this->password2->css('border','solid 1px #c00'); }

        if(!$valid)
        {
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->frm->updateClient();
            return;
        }

        if($data['password'] != $data['password2'])
        {
            $this->password->css('border','solid 1px #c00'); 
            $this->password2->css('border','solid 1px #c00');
            $this->flashmsg($this->icon.'Password does not match','fade','alert alert-danger');
            $this->frm->updateClient();
            return;
        }

        if(strlen($data['password']) < 8)
        {
            $this->password->css('border','solid 1px #c00');
            $this->flashmsg($this->icon.'Password must be 8 characters or more','fade','alert alert-danger');
            $this->frm->updateClient();
            return;
        }

        try
        {
            $id = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
            $rs = $this->db->execQuery("CALL sp_update_password('".$data['old_password']."', '".$data['password']."', ".$id.")");
            if($rs[0]['cnt'])
            {
                $this->flashmsg($this->icon.'Password changed','fade','alert alert-success');
            }
            else
            {
                $this->flashmsg($this->icon.'Your password was incorrect.','fade','alert alert-danger');
                $this->frm->updateClient();
                return false;
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}
?>