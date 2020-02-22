<?php
include_once('common.php');
class VolunteerDetail extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        c('#mm_voldetail')->attr('class','list-group-item active');
        $this->appendView("volunteer-detail.view.php");
    }

    protected function _load() {  
        $this->delegate('.account_status', 'click', array('callback' => '.changeStatus', 'autoToggle' => '#imgloader')); 
    }
    
    protected function _prerender() {
        $this->loadVolunteerSummary($this->id);
    }
    
    protected function loadVolunteerSummary($id) {
        $rs = $this->db->table('view_volunteer_list', 'id=?',$id); 
        $this->summery->bind($rs,array('callback' => array($this,'rowHandler')));
    }
       
    public function rowHandler(&$row, $index, $tpl, $tplType, &$fmt, $cssClass) {
        $row['btn_type'] = (empty($row['allow_login']))? "btn-success" : "btn-warning";
        $row['btn_text'] = (empty($row['allow_login']))? "disabled" : "enabled";
        
        $row['dob'] = date('d M Y', strtotime($row['dob']));
        $row['arrival_date'] = date('d M, Y.', strtotime($row['arrival_date']));
        $row['balance'] = number_format($row['balance'], 2, '.', ',');
    }

    protected function changeStatus($e){
        $id = $e->intVal() | 0;
        if(!$id){return null;}
        $this->db->query('UPDATE account SET allow_login = IF(allow_login=1,0,1) WHERE id='.$id);
    }
}
?>