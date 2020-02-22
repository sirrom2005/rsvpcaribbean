<?php
include_once('common.php');
class Index extends common {

    private $longDateFormat = "l, F d Y";
	
    protected function _config() {
        parent::_config();
        $this->autoAppendView = '{view}.view.php';  // set page view file name
    }

    protected function _init() {
        parent::_init();
    }

    protected function _indexView() { 
        $rs = $this->db->table('view_member_country');  
        $this->country_db->bind($rs);
        if(!$this->isCallback)
        { 
            $this->data('country', $rs[0]['id']);
            $this->loadInfo($rs[0]['id']);
        }
    }
    
    protected function getInfoForCounty($e) {
        $id = $e->intval();
        $this->data('country', $id);
        $this->loadInfo($id);
    }
    
    protected function loadInfo($id) {
        $rt = $this->db->execQuery('SELECT
                                    (
                                    SELECT 
                                    count(DISTINCT v.volunteer_id)
                                    FROM administration a
                                    INNER JOIN volunteer_placement v ON v.volunteer_id = a.volunteer_id
                                    WHERE v.country_id = '.$id.' AND a.rsvp_webpage=0
                                    ) AS acceptance,
                                    (
                                    SELECT 
                                    count(DISTINCT v.volunteer_id)
                                    FROM administration a
                                    INNER JOIN volunteer_placement v ON v.volunteer_id = a.volunteer_id
                                    WHERE v.country_id = '.$id.' AND a.acceptance_letter=0
                                    ) AS acceptance_letter');     
        $this->info->bind($rt)->updateClient();
    }
    
    protected function goToList($e) {
        $url  = "home-report-list.php?list=".$e->value."&c=".$this->data('country');
        $this->redirectTo($url);
    }
    
    
    protected function _changePasswordView() { 
    }
	
    protected function _faqView() {
        $post = $this->post->category | 0;
        $this->data('category',$post);
        $query = ($post)? "WHERE f.faq_category_id = ".$post : "";
        $sql = "SELECT f.id,f.question,f.answer,f.faq_category_id FROM faq f {$query}";
        $rs = $this->db->execQuery($sql);
        $this->datatable->bind($rs);
        
        $tmp = $this->db->execQuery("SELECT f.id,f.name FROM faq_category_id f");
        $opt[] = array('id' => '', 'name' => 'View All FAQs');
        $rs = array_merge($opt, $tmp);
        $this->category->bind($rs);
    }
    
    protected function removeFaqs($e) {
        try {
            $id = $e->intval();
            //$this->db->tableDelete('faq','id=?',$id);
            echo $this->data('category');
        } catch(Exception $e) {
            $msg = 'Error while deleting records';
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$e);
            return;
        }
    }
	
    protected function dateCalculator() {
        $period     = $this->post->textVal('period');
        $duration   = $this->post->intVal('duration') | 0;
        $start_date = $this->post->dateVal('start_date');
        $tmp = date($this->longDateFormat, strtotime(date('Y-m-d', strtotime($start_date . ' +'.$duration.' '.$period)) . ' -1 day '));
        $this->success->html('<hr><div class="well"><b>End date</b> '.$tmp.'</div>');
    }
	
    //validate Email
    protected function validateEmail() {
        if($this->post){
            $email = $this->post->email;
            $arr = explode("\n",$email);
            $str = null;

            if($arr){
                foreach($arr as $row => $value){
                    $value = trim($value);
                    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                        $str .= '<li>['.$value.'] is not properly formatted</li>';
                    }
                    else{
                        $domain = explode('@',$value);
                        if($this->myCheckDNSRR($domain[1])){
                                $str .= '<li>['.$value.'] seems to be valid.</li>';
                        }else{
                                $str .= '<li>['.$value.'] server rejected address</li>';
                        }
                    }
                }
                $this->success->html('<hr><div class="well"><ul>'.$str.'<ul></div>');
            }
        }
    }
	
    protected function _call_me_backView() {
        $tmp = $this->db->table('view_member_country');  
        $tit[] = array('id' => '0', 'name' => 'Select country...');
        $rs = array_merge($tit, $tmp);
        $this->country_id->bind($rs); 
    }
    
    protected function callBackList()
    {
        $this->redirectTo('call_me_back_list.php',true);
    }
    
    protected function saveCallback()
    {
        $data['fname']   = $this->post->textVal('fname');
        $data['lname']   = $this->post->textVal('lname');
        $data['email']   = $this->post->emailVal('email');
        $data['phone']   = $this->post->textVal('phone');
        $data['question']   = $this->post->textVal('question');
        $data['notes']      = $this->post->textVal('notes');
        $data['country_id'] = $this->post->textVal('country_id');
        $data['callback']   = $this->post->textVal('callback');
        $data['user_id']    = $this->Raxan->data('RSVP_SYS_ADMIN_ID');
        $data['date_added'] = $this->dateNow;

        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($data['fname'])   ){$valid = false; $this->fname->css('border','solid 1px #c00');}
        if(empty($data['email'])   ){$valid = false; $this->email->css('border','solid 1px #c00');}
        if(empty($data['phone'])   ){$valid = false; $this->phone->css('border','solid 1px #c00');}
        if(empty($data['question'])){$valid = false; $this->question->css('border','solid 1px #c00');}
        if(empty($data['country_id'])){$valid = false; $this->country_id->css('border','solid 1px #c00');}
       
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            $this->frm->updateClient();
            return false;
        }
        //////////////////END-VALIDATION/////////////////////

        try
        {
            $rs = $this->db->tableInsert('callback',$data);
            //$this->redirectTo('index.php?vu=call_me_back');
            $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }

    protected function _load() {
        // Page load event code goes here
        // To learn more about page exetcution
        // order visit http://raxanpdi.com/sdk/docs/page-cycle.html
    }


    // Function to check whether a given hostName is a valid email
    // domain address.
    function myCheckDNSRR($hostName, $recType = '')
    {
        if(!empty($hostName)) {
            if( $recType == '' ) $recType = "MX";
            exec("nslookup -type=$recType $hostName", $result);
            // check each line to find the one that starts with the host
            // name. If it exists then the function succeeded.
            foreach ($result as $line) { 
                if(@eregi("^$hostName",$line)) {
                        return true;
                }
            }
            // otherwise there was no mail handler for the domain
            return false;
        }
        return false;
    }
}
?>