<?php
include_once('common.php');
class VolunteerDetails extends common {
    protected   $updateList = false,
                $query;
    public $pgNumber,$pageUrl;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->appendView("volunteer-search-form.view.php");
    }

    protected function _load() {   
        $id = base64_decode($this->get->id);
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
        $this->delegate('#btn', '#click', array('callback' => '.searchFilter')); 
        

        $tmp    = $this->db->table('volunteer_status_type name AS id, name');
        $opt[]  = array('id' => '', 'name' => '----View By Status----');
        $rs     = array_merge($opt, $tmp);
        $this->status->bind($rs);
        
        $rt = $this->db->table('volunteer_search_form','code=?',$id);
        $this['h2']->html($rt[0]['title']);
        $this->pageUrl = $rt[0]['action_page'];
        c('#'.$rt[0]['page_id'])->attr('class','list-group-item active');
    }
    
    protected function _prerender() {
        if(!$this->isCallback || $this->updateList){
            $this->loadVolunteerList();
        }
    }
    
    protected function loadVolunteerList() {
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        $query = "WHERE 0=0 ".$this->data('query-search');
        if (!$rowCount) {
            $rows = $this->db->query('select count(*) as total from view_volunteer_list '.$query);
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "select * from view_volunteer_list $query limit ".$lower.', '.$offset;
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
        $row['page_url'] = $this->pageUrl . $row['id'];
    }
    
    protected function searchFilter()
    {
        $post = $this->post;
        $data['search_fname']= $post->textVal('search_fname');
        $data['search_mname']= $post->textVal('search_mname');
        $data['search_lname']= $post->textVal('search_lname');
        $data['status']      = $post->textVal('status');
        $this->query  = "";
        $this->query .= ($data['search_fname'])? "AND firstname  LIKE '%{$data['search_fname']}%' "  : "";
        $this->query .= ($data['search_mname'])? "AND middlename LIKE '%{$data['search_mname']}%' "  : "";
        $this->query .= ($data['search_lname'])? "AND lastname   LIKE '%{$data['search_lname']}%' "  : "";
        $this->query .= ($data['status']      )? "AND `status` = '{$data['status']}' "                 : "";
        /* Store query string */
        $this->data('query-search', $this->query);
        $this->removeData('emp-row-count');
        $this->pgNumber = 1;
        $this->updateList = true;
    }
}
?>