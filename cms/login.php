<?php
include_once('common.php');
class Login extends RaxanWebPage {
    private $db=false;


    protected function _config() {
        $this->masterTemplate = "views/login.view.php"; 
        $this->icon = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
    }

    protected function _init() {
         $this->db = $this->connectToBD();
    }

    protected function _load() {
        $this->delegate('#btn', '#click', array('callback'    => '.loginAction',
                                                'autoDisable' => true,
                                                'autoToggle'  => '#imgloader' ));
    }
    
    protected function loginAction() {
        $pass  = $this->post->textVal('password');
        $email = $this->post->textVal('email');

        $rt = $this->db->execQuery("CALL sp_login('".$email."', '".$pass."')");
        if($rt){
            $this->Raxan->data('RSVP_SYS_ADMIN',true);
            $this->Raxan->data('RSVP_SYS_ADMIN_ID',$rt[0]['id']);
            $this->Raxan->data('RSVP_SYS_ADMIN_EMAIL',$rt[0]['email']);
            $this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME',$rt[0]['name']);
            $this->Raxan->data('RSVP_SYS_ADMIN_TYPE',$rt[0]['account_type']);
            $this->redirectTo('index.php');
        }else{
            $this->error->html("<div style='margin-top:10px;' class='alert alert-danger text-center'><b>Invalid login!!!</b><!--button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button--><div>");
            $this->frm->updateClient();
        }
    }
    
    public function connectToBD()
    {
        try
        {
            $this->db = $this->Raxan->connect('mysql:host='.DBHOST.'; dbname='.DBDATABASE,DBUSERNAME,DBPASSWORD,true);
            return $this->db;
        }
        catch(Exception $ex)
        {
            $msg = "Connection Error...";
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}