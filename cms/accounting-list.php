<?php
include_once('common.php');
class Administration extends common {

    public $pgNumber;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->appendView("accounting-list.view.php");
        c('#mm_account')->attr('class','list-group-item active');
    }

    protected function _load() {  
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','#click','.changePage');
        $this->delegate('#add', '#click', array('callback' => '.add'));
        $this->delegate('.delete', '#click', array('callback' => '.remove'));
         $this->delegate('.edit', '#click', array('callback' => '.edit'));
        
        $this->delegate('#country_id', '#change', array('callback' => '.loadDataByCounty'));
        
        $this->loadCountry();
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            
            $this->loadData();
            /*$this->sub_category_id->bind(null);
            
            $this->loadPayee();*/
        }
    }
    
    protected function add() {
        try{
            $id                     = $this->post->intVal('id');
            $data['country_id']     = $this->post->intVal('country_id');
            $data['name']           = $this->post->textVal('name');
            $data['open_balance']   = $this->post->textVal('open_balance');
            
            if($id){
                $this->db->tableUpdate('accounting_list',$data,'id=?',$id); 
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['date_added']   = $this->dateNow;
                $this->db->tableInsert('accounting_list',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            $this->loadData($data['country_id']);
            $this->clearForm();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }  
    
    protected function loadCountry() {
        try{
            $opt[] = array('id' => '', 'name' => 'Select Office...');
            $tmp = $this->db->table('view_member_country');
            $rs  = array_merge($opt, $tmp);
            $this->country_id->bind($rs);
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
   protected function loadData($country_id=null) {
        $country = ($country_id)? 'WHERE a.country_id = '.$country_id : '';
        
        $rows = $this->db->query('SELECT count(*) as total FROM accounting_list a INNER JOIN odb_country c ON c.country_id = a.country_id '.$country);
        $rowCount = $rows->fetchColumn(0);
        
        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "SELECT a.*, c.name AS country FROM accounting_list a INNER JOIN odb_country c ON c.country_id = a.country_id ".$country." limit ".$lower.', '.$offset;
        $rs = $this->db->query($sql);
        $this->data->bind($rs);
        
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
    
    protected function loadDataByCounty($e) {
        $id = $e->value;
        $this->data('emp-page-number',1);
        $this->data('country_id',$id);
        $this->clearForm();
        $this->loadData($id);
    }
    
    protected function changePage($e){
        $this->pgNumber = $e->intVal();
        if (!$this->pgNumber) $this->pgNumber = 1;
        $this->loadData($this->data('country_id',0,true));
    }
    
    protected function remove($e){
        $id = $e->intVal();
        $this->clearForm();
        $this->db->tableDelete('accounting_list','id=?',$id);
        //$this->data('emp-page-number',1);
        $this->loadData($this->data('country_id'));
    }
    
    protected function edit($e){
        $id = $e->intVal();
        $rs = $this->db->table('accounting_list','id=?',$id); 
        if($rs){
            $this->frm1->inputValues($rs[0])->updateClient();
            
        }
    }
    
    protected function clearForm(){
        c('#id')->val(null);
        c('#name')->val(null);
        c('#open_balance')->val(null);
    }
    
}