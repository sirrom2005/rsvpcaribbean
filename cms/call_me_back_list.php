<?php
include_once('common.php');
class CallBack extends common {
    protected $updateList = false;
    private $pgNumber;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->loadScript('jquery-tools');
        c('#mm_call_back')->attr('class','list-group-item active');
        $this->appendView("call_me_back_list.view.php");
    }

    protected function _load() {         
         // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
    }
    
    protected function _prerender() {
        $this->loadList();
    }
    
    protected function loadList() {       
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query('SELECT count(*) AS total FROM view_call_me_list');
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "SELECT * FROM view_call_me_list limit ".$lower.', '.$offset;
        $rs = $this->db->query($sql);
        $this->data->bind($rs,array('callback' => array($this,'rowHandler')));
        
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
        $row['callback'] = ($row['callback']=="1")? 'Yes' : 'No';
    }
    
    protected function changePage($e){
        $this->pgNumber = $e->intVal();
        if (!$this->pgNumber) $this->pgNumber = 1;
    }
    
    protected function saveNote($e){
        $data['notes'] = $this->post->htmlVal('notes');
        $id = base64_decode($this->post->textVal('notes_id')); 
        
        try{
            $rs = $this->db->tableUpdate('callback',$data,'id=?',$id);
            c((_fn('function(e){$("#overlay").overlay({api:true}).close();e.preventDefault();}')));
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