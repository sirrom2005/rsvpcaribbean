<?php
include_once('common.php');
class AccommodationDetail extends common {
    protected $updateList = false;
    private $id,$pgNumber;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_accom_detail')->attr('class','list-group-item active');
        $this->appendView("accommodation_detail.view.php");
    }

    protected function _load() {  
        $tmp    = $this->db->table('view_member_country');  
        $opt2[] = array('id' => '0', 'name' => 'Change Database...');
        $rs2    = array_merge($opt2, $tmp);
        
        $this->country_db->bind($rs2);
        $this->country_db2->bind($rs2);
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            $this->loadVolunteerSummery($this->id);  
        }
    }
    
    protected function loadVolunteerList() {
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query('select count(*) as total from view_volunteer_list');
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "select * from view_volunteer_list limit ".$lower.', '.$offset;
        $rows = $this->db->query($sql);
        $this->data->bind($rows);
        
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
    }
    
    protected function changePage($e){
        $this->pgNumber = $e->intVal();
        if (!$this->pgNumber) $this->pgNumber = 1;
    }
}
?>