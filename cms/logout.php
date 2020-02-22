<?php
include_once('common.php');
class login extends RaxanWebPage {
	
    protected function _load() {
        $this->logoutAction();
    }
   
    protected function logoutAction() {
        $this->Raxan->data('RSVP_SYS_ADMIN',0);
        $this->redirectTo('index.php');
    }
}
?>