<?php
include_once('common.php');
class VolunteerDetails extends common {
    protected $updateList = false;
    private $pgNumber;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        c('#mm_voldetail')->attr('class','list-group-item active');
        $this->appendView("volunteer-search-form.view.php");
    }

    protected function _load() {   
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
        
        $this['h2']->html('Volunteer Details');
        
        $tmp    = $this->db->table('volunteer_status_type');
        $opt[]  = array('id' => '', 'name' => '----View By Status----');
        $rs     = array_merge($opt, $tmp);
        $this->status->bind($rs);
    }
    
    protected function _prerender() {
        $this->loadVolunteerList();
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
        $rs = $this->db->query($sql);
        $this->data->bind($rs, 
                            array('callback' => array($this,'rowHandler'),
                                  'format' => array('dob' => 'date:d M, Y')));
        
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
        $row['page_link'] = 'volunteer-detail.php?id=' . $row['id'];
    }
    
    protected function changePage($e){
        $this->pgNumber = $e->intVal();
        if (!$this->pgNumber) $this->pgNumber = 1;
    }
}
?>