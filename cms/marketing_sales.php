<?php
include_once('common.php');
class Administration extends common {
    protected $updateList = false;
    public $pgNumber;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->appendView("marketing_sales.view.php");
        c('#mm_market_sales')->attr('class','list-group-item active');
    }

    protected function _load() {     
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
        
        $this->delegate('#btn', '#click',    array('callback' => '.addSales', 'autoToggle' => '#imgloader')); 
        $this->delegate('.delete', '#click', array('callback' => '.delete',)); 
        $this->delegate('.edit', '#click',   array('callback' => '.edit',)); 
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        {
           $this->loadList();
        }
    }
    
    protected function addSales() {
        try{
            $id                             = $this->post->intVal('id');
            $data['number_of_prospect']     = $this->post->floatVal('number_of_prospect');
            $data['number_of_quotes']       = $this->post->floatVal('number_of_quotes');
            $data['quote_conversion_rate']  = $this->post->floatVal('quote_conversion_rate');
            $data['number_of_customer']     = $this->post->floatVal('number_of_customer');
            $data['sales_conversion_rate']  = $this->post->floatVal('sales_conversion_rate');
            $data['total_sales']            = $this->post->floatVal('total_sales');
            $data['average_sale']           = $this->post->floatVal('average_sale');
            $data['user_id']                = $this->userId;
            $data['date_updated']           = $this->dateNow;

            if($id){
                $this->db->tableUpdate('marketing_sales',$data,'id=?',$id); 
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['date_added'] = $this->dateNow;
                $this->db->tableInsert('marketing_sales',$data); 
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            $this->updateList = true;
            $this->clearForm();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadList() {        
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query('select count(*) as total from marketing_sales');
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "select * from marketing_sales limit ".$lower.', '.$offset;
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
    
    protected function delete($e) {
        try{
            $id = $e->value;
            $this->db->query('DELETE FROM marketing_sales WHERE id = '.$id);
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function edit($e) {
        try{
            $id = $e->value;
            $rs = $this->db->table('marketing_sales','id=?',$id); 
            $this->frm->inputValues($rs[0])->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function clearForm(){
        C(':input','#frm')->not(':submit')
        ->val('');
    }
}