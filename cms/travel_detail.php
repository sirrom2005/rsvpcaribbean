<?php
include_once('common.php');
class TravelDetail extends common {
    protected   $updateList = false,
                $pgNumber,
                $id;
    
    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_travel')->attr('class','list-group-item active');
        $this->appendView("travel_detail.view.php");
    }

    protected function _load() {     
        // get current page. Defaults to 1 if 'emp-page-number' is not set
        $this->pgNumber = & $this->data('emp-page-number',1,true);
        // delegate events
        $this->pager->delegate('a','click','.changePage');
        
        $this->delegate('#btn', '#click', array('callback' => '.saveInfo'));  
        $this->delegate('.edit', '#click', array('callback' => '.loadData')); 
        $this->delegate('.delete', '#click', array('callback' => '.deleteData'));
        
        for($i=1;$i<=12;$i++){
            $hour[] = array('hour' => $i);
        }
        for($i=0;$i<=59;$i++){
            $sec = date('s', mktime(0, 0, $i));
            $min[] = array('min' => $sec);
        }
        $this->dh->bind($hour);
        $this->check_in_h->bind($hour);
        $this->arh->bind($hour);

        $this->dm->bind($min);
        $this->check_in_m->bind($min);
        $this->arm->bind($min);
    }
    
    protected function _prerender() {
        if(!$this->isCallback||$this->updateList)
        {
            $this->loadVolunteerSummary($this->id);
            $this->loadFlightList();
        }
    }
    
    protected function saveInfo() {  
        $id                         = $this->post->intVal('id');
        $data['departure_airport']  = $this->post->textVal('departure_airport');
        $departure_date             = $this->post->textVal('departure_date') . ' ' 
                                      . $this->post->textVal('dh') . ':'
                                      . $this->post->textVal('dm') . ' '
                                      . $this->post->textVal('da');
        $check_in_time              = $this->post->textVal('departure_date') . ' ' //set a date place holder to comeplete the date string
                                      . $this->post->textVal('check_in_h') . ':'
                                      . $this->post->textVal('check_in_m') . ' '
                                      . $this->post->textVal('check_in_a');
        $data['airline_name']       = $this->post->textVal('airline_name');
        $data['flight_number']      = $this->post->textVal('flight_number');
        $data['arrival_airport']    = $this->post->textVal('arrival_airport');
        $arrival_date               = $this->post->textVal('arrival_date')
                                      . $this->post->textVal('arh') . ':'
                                      . $this->post->textVal('arm') . ' '
                                      . $this->post->textVal('ara');
        $data['staff_note']         = $this->post->textVal('staff_note');

        $data['departure_date']     =  date('Y-m-d H:i:s', strtotime($departure_date));
        $data['check_in_time']      =  date('Y-m-d H:i:s', strtotime($check_in_time));
        $data['arrival_date']       =  date('Y-m-d H:i:s', strtotime($arrival_date));
        
        
        //////////////////VALIDATION/////////////////////
        $valid = true;
        if(empty($data['departure_airport'])){$valid = false; $this->departure_airport->css('border','solid 1px #c00')->updateClient();}
        if(empty($data['departure_date'])   ){$valid = false; $this->departure_date->css('border','solid 1px #c00')->updateClient();}
        if(empty($data['airline_name'])     ){$valid = false; $this->airline_name->css('border','solid 1px #c00')->updateClient();}
        
        if(!$valid){
            $this->flashmsg($this->icon.MISSING_FIELDS,'fade','alert alert-danger');
            return false;
        }
        //////////////////END-VALIDATION/////////////////////
      
        try{
            if($id){
                $data['date_updated']       = $this->dateNow; 
                $data['user_id']            = $this->userId;
                $this->db->tableUpdate('travel_detail', $data, 'id=?', $id);
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['date_added']         = $this->dateNow;
                $data['date_updated']       = $this->dateNow; 
                $data['user_id']            = $this->userId;
                $data['volunteer_id']       = $this->id;
                $this->db->tableInsert('travel_detail',$data);
                c('#id')->val($this->db->lastInsertId());
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
            $this->updateList = true;
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    
    protected function loadFlightList() {
        // count # of rows in database
        $rowCount = & $this->data('emp-row-count');
        if (!$rowCount) {
            $rows = $this->db->query('select count(*) as total from travel_detail WHERE volunteer_id ='.$this->id);
            $rowCount = $rows->fetchColumn(0);
        }

        // load employees for current page
        $lower = ($this->pgNumber-1) * $this->pageSize;
        $offset = $this->pageSize;
        $sql = "SELECT * FROM travel_detail WHERE volunteer_id = {$this->id} ORDER BY date_added DESC limit ".$lower.', '.$offset;
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
    
    protected function loadData($e) {
        $id = $e->intVal() | 0;        
        try{
            $rs = $this->db->table('travel_detail', 'id=?', $id);
            
            $departure_date = $rs[0]['departure_date'];
            $arrival_date   = $rs[0]['arrival_date'];
            $rs[0]['departure_date'] = date('Y-m-d', strtotime($departure_date));
            $rs[0]['dh'] = date('h', strtotime($departure_date));
            $rs[0]['dm'] = date('i', strtotime($departure_date));
            $rs[0]['da'] = date('a', strtotime($departure_date));
            $rs[0]['arrival_date'] = date('Y-m-d', strtotime($arrival_date));
            $rs[0]['arh'] = date('h', strtotime($arrival_date));
            $rs[0]['arm'] = date('i', strtotime($arrival_date));
            $rs[0]['ara'] = date('a', strtotime($arrival_date));
            $rs[0]['check_in_h'] = date('h', strtotime($rs[0]['check_in_time']));
            $rs[0]['check_in_m'] = date('i', strtotime($rs[0]['check_in_time']));
            $rs[0]['check_in_a'] = date('a', strtotime($rs[0]['check_in_time']));
            
            $ad = $this->db->table('account username', 'id=?', $rs[0]['user_id']);
            c('#date_added')->html($rs[0]['date_added']);
            c('#date_updated')->html($rs[0]['date_updated']);
            c('#user_id')->html($ad[0]['username']);
            
            $this->frm->inputValues($rs[0])->updateClient();
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function deleteData($e) {
        $id = $e->intVal() | 0;        
        try{
            $this->db->tableDelete('travel_detail', 'id=?', $id);
            $this->updateList = true;
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