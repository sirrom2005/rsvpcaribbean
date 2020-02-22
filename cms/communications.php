<?php
include_once('common.php');
class Communications extends common {
    protected $updateList = false;
    public $pageSize,$pgNumber;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mm_communications')->attr('class','list-group-item active');
        $this->appendView("communications.view.php");
    }

    protected function _load() {  
        $this->pageSize = 10;
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
        
        $this->delegate('#btn_send_email', '#click', array('callback' => '.sendIdeaEmail')); 
        $this->delegate('#btn', '#click', array('callback' => '.addNotice')); 
        $this->delegate('.delete', '#click', array('callback' => '.removeNotice')); 
        $this->delegate('.edit', '#click', array('callback' => '.loadEditNotice')); 
        
        $allow = array(1,2);
        if(!in_array($this->Raxan->data('RSVP_SYS_ADMIN_TYPE'), $allow)){
            $this['.admin']->remove();
            $this['.delete']->remove();
        } 
    }
    
    protected function _prerender() {
        if(!$this->isCallback || $this->updateList)
        {
            $this->loadNotice();
        }
    }
    
    protected function addNotice() {
        $note_id            = $this->post->intVal('note_id') | 0;
        $data['info']       = $this->post->textVal('info');
        $data['user_id']    = $this->userId;
        $data['date_added'] = $this->dateNow;
        
        try{
            if($note_id){
                $this->db->tableUpdate('notice_board',$data,"id=?",$note_id);
            }else{
                $this->db->tableInsert('notice_board',$data);

                $contact = $this->db->execQuery("CALL sp_admin_email()");          
                if($contact){
                    $subject  = "New Notice";
                    $msg      = "New notice added by: " . $this->Raxan->data('RSVP_SYS_ADMIN_FULLNAME').""
                                . "<p>View below:</p><p>&nbsp;</p>".$data['info'];

                    if($this->sendEmail($contact, $subject, $msg)){
                        $this->flashmsg($this->icon.'Message sent to RSVP staff','fade','alert alert-success');
                        C('#email_msg')->val('');
                    }
                }
            }
            
            C('#info')->val('');
            C('#note_id')->val('');
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = $ex.DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function sendIdeaEmail() {
        $to       = "managementteam@rsvpcaribbean.com";
        $subject  = "Staff idea";
        $msg      = "A staff submitted idea below<p>&nbsp;</p><p>&nbsp;</p>" . $this->post->textVal('email_msg');

        $contact[0]['fullname'] = "managementteam";
        $contact[0]['email']    = "managementteam@rsvpcaribbean.com";
        if($this->sendEmail($contact, $subject, $msg)){
            $this->flashmsg($this->icon.'Message sent to RSVP staff','fade','alert alert-success');
            C('#email_msg')->val('');
        }
    }
     
    protected function loadNotice() {
        //$rs = $this->db->table('communications');
        //$this->data->bind($rs);
              
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query('select count(*) as total from notice_board');
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "select * from notice_board limit ".$lower.', '.$offset;
        $rs = $this->db->query($sql);
        $this->data->bind($rs,array('callback' => array($this,'rowHandler'),
                                    'format' => array('date_added' => 'date:d M, Y')));
        
        // setup pager
        $maxpage = ceil($rowCount/$this->pageSize);
        $pages = $this->Raxan->paginate($maxpage,$this->pgNumber,array(
            'tpl' => '<a href="#{VALUE}" title="Page {VALUE}" class="{ROWCLASS}">{VALUE}</a>',
            'itemClass' => 'rax-active-pal',
            'selectClass' => 'rax-selected-pal rax-metalic border1',
            'delimiter'=>'',
        ));
        if ($maxpage > 1) {
            $pages.='<a href="#'.($this->pgNumber+1).'" title="Next Page" class="rax-active-pal">'.
            '<span class="ui-icon ui-icon-triangle-1-e"></span></a>';
        }
        if ($this->pgNumber> 1 && $this->pgNumber < $maxpage ) {
            $pages = '<a href="#'.($this->pgNumber-1).'" title="Prvious Page" class="rax-active-pal">'.
            '<span class="ui-icon ui-icon-triangle-1-w"></span></a>'.$pages;
        }
        $this->pager->html($pages);
        
        $this->data->updateClient();
        $this->pager->updateClient();
    }
    
    public function rowHandler(&$row, $index, $tpl, $tplType, &$fmt, $cssClass) {
        //$row['notes'] = str_replace("\r\n", "<br>", $row['notes']);
    }
    
    protected function removeNotice($e) {
        $id = $e->intVal();
        try{
            $this->db->tableDelete('notice_board','id=?',$id);
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadEditNotice($e) {
        $id = $e->intVal();
        try{
            $rs = $this->db->table('notice_board','id=?',$id);
            C('#note_id')->val($rs[0]['id']);
            C('#info')->val($rs[0]['info']);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}
?>