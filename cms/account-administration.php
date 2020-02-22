<?php
include_once('common.php');
class AccountAdministration extends common {
    protected   $updateList = false;
    private     $id;

    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
    }

    protected function _init() {
        parent::_init();
        $this->appendView("account-administration.view.php");
        c('#mm_acc_admin')->attr('class','list-group-item active');
    }

    protected function _load() {
        $this->delegate('#btndue', '#click', array('callback' => '.amountInvoice')); 
        $this->delegate('#btnamt', '#click', array('callback' => '.amountPayment'));
        $this->delegate('a.delete', '#click', array('callback' => '.deleteRecord'));
        $this->delegate('a.delpayment', '#click', array('callback' => '.deletePayment'));
        $this->delegate('#edit', '#click', array('callback' => '.updateInvoice'));
        $this->delegate('#edit2', '#click', array('callback' => '.updateAmt')); 
        $this->delegate('a.export', 'click', array('callback' => '.exportData'));
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $this->loadVolunteerSummary($this->id);
            $this->loadCurrency();
        }
        
        if(!$this->isCallback || $this->updateList == true)
        {
            $this->loadAmount();
            $this->getHistory();
        }
    }
    
    protected function loadCurrency() {
        try{
            $rs = $this->db->table('view_get_currency'); 
            $this['.converter']->bind($rs);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadAmount() {
        try{
            $rs = $this->db->table('view_invoice', 'volunteer_id=?',$this->id); 
            $this->due->bind($rs,array('callback' => array($this,'rowHandlerList')))->updateClient();

            $rt = $this->db->table('view_invoice_payments', 'volunteer_id=?',$this->id); 
            $this->paid->bind($rt,array('callback' => array($this,'rowHandlerList')))->updateClient();
            
            $this->description_id->bind($rs)->updateClient();
            
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function amountInvoice() {
        $id                     = $this->post->intVal('id') | 0;
        $data['date']           = $this->post->textVal('date');
        $data['price']          = $this->post->floatVal('price');
        $data['description']    = $this->post->textVal('description');
        $data['volunteer_id']   = $this->id;
        $data['date_modified']  = $this->dateNow;
        $data['user_id']        = $this->userId;
                            
        try{
            if($id){
                $this->db->tableUpdate('invoice',$data,'id=?',$id);
            }else{
                $data['date_added'] = $this->dateNow;
                $this->db->tableInsert('invoice',$data);
            }
            $this->updateList = true;
            c("#date")->val('');
            c("#price")->val('');
            c("#description")->val('');
            c("#id")->val('');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function amountPayment() {
        $id                     = $this->post->intVal('id') | 0;
        $data['date']           = $this->post->textVal('date');
        $data['amount']         = $this->post->floatVal('amount');
        $data['invoice_id']     = $this->post->intVal('description_id');
        $data['date_modified']  = $this->dateNow;
        $data['user_id']        = $this->userId;
                            
        try{
            if($id){
                $this->db->tableUpdate('invoice_payments',$data,'id=?',$id);
            }else{
                $data['date_added'] = $this->dateNow;
                $this->db->tableInsert('invoice_payments',$data);
            }
            $this->updateList = true;
            c("#date_amt")->val('');
            c("#amount")->val('');
            c("#description_id")->val('');
            c("#id_amt")->val('');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    public function rowHandlerList(&$row, $index, $tpl, $tplType, &$fmt, $cssClass) {
        $row['Price'] = '$'.number_format($row['Price'], 2, '.', ',');
    }
    
    protected function deleteRecord($e) {
        $id = $e->intVal() | 0;
        try{
            $this->db->tableDelete('invoice','id=?',$id);
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function deletePayment($e) {
        $id = $e->intVal() | 0;
        try{
            $this->db->tableDelete('invoice_payments','id=?',$id);
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    
    protected function updateInvoice($e) {
        $id = $e->intVal() | 0;       
        try{
            $rs = $this->db->table('invoice','id=?',$id); 
            $this->frmdue->inputValues($rs[0])->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function updateAmt($e) {
        $id = $e->intVal() | 0;
        
        try{
            $rs = $this->db->table('accounting','id=?',$id); 
            $this->frmamt->inputValues($rs[0])->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function getHistory() {
        try{
            $rs = $this->db->table('view_invoice','volunteer_id=?',$this->id);
            $rt = $this->db->table('view_invoice_payments','volunteer_id=?',$this->id); 
            $this->historydata->bind(array_merge($rs,$rt),array('callback' => array($this,'rowHandlerList')))->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function exportData() {
        try{
            $rs = $this->db->table('view_invoice','volunteer_id=?',$this->id);
            $rt = $this->db->table('view_invoice_payments','volunteer_id=?',$this->id);
            $rs = array_merge($rs,$rt);
            if(empty($rs)){return false;}
            $this->data('exportCSV',$rs);
            $this->data('exportCSVname',"data");
            $data['exported'] = $this->dateNow;
            $this->db->tableUpdate('invoice',$data,'volunteer_id=?',$this->id);          
            $this->exportCSVdata();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
}