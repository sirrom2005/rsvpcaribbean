<?php
include_once('common.php');
class Administration extends common {
    protected $list, $c;
    public $pgNumber;

    protected function _config() {
        parent::_config();
        $this->list = $this->get->list;
        $this->c = $this->get->c;
        $this->data('update',0,true);
    }

    protected function _init() {
        parent::_init();
        $this->appendView("home-report-list.view.php");
    }

    protected function _load() {  
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
    }
    
    protected function _prerender() {
        $this->loadData();
    }
   
    protected function loadData() {
        $rt = array();
        if($this->list == "acceptance"){
            $rt = $this->db->execQuery('SELECT DISTINCT a.volunteer_id FROM administration a
                                        INNER JOIN volunteer_placement v ON v.volunteer_id = a.volunteer_id
                                        WHERE v.country_id = '.$this->c.' AND a.rsvp_webpage=0');
        }elseif ($this->list == "acceptance_email") {
            $rt = $this->db->execQuery('SELECT DISTINCT v.volunteer_id
                                        FROM administration a
                                        INNER JOIN volunteer_placement v ON v.volunteer_id = a.volunteer_id
                                        WHERE v.country_id = '.$this->c.' AND a.acceptance_letter=0;');
        }
        
        $ids = '-1';
        foreach($rt as $key => $value){
            $ids .= ','.$value['volunteer_id'];
        }
  
        $rs = $this->db->execQuery("SELECT * FROM view_volunteer_list WHERE id IN ($ids)");  
        //$this->data->bind($rs,array('callback' => array($this,'rowHandler')));
        
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query("SELECT count(*) FROM view_volunteer_list WHERE id IN ($ids)");
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "SELECT * FROM view_volunteer_list WHERE id IN ($ids) limit ".$lower.', '.$offset;
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
        $row['date_added'] = date('d M Y', strtotime($row['date_added']));
    }
}