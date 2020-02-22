<?php
require_once '../raxan/pdi/autostart.php';
class commonFunction extends RaxanWebPage
{    
    protected function isValidEmail($email){
	return @eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
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
            $msg = "Connection Error..";
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}
?>