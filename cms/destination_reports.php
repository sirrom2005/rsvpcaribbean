<?php
include_once('common.php');
class DestinationReports extends common {
    protected $updateList = false;
    private $id;

    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = $this->get->id | 0;
        $this->data('sYear', date('Y'), true);
        $this->data('eYear', $this->data('sYear')+3, true);
        c('#mm_destination_reports')->attr('class','list-group-item active');
        $this->appendView("destination_reports.view.php");
    }

    protected function _load() {   
        $this->delegate('#country_db','#change', array('callback' => '.populateTableEvent', 'autoToggle' => '#imgloader'));
        $this->delegate('#btnfilter', '#click',  array('callback' => '.filterTable'));
        $this->syear->val($this->data('sYear'));
        $this->eyear->val($this->data('eYear'));
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
           $this->loadMemberCountry();
        }
    }
    
    protected function loadMemberCountry() {
        $tmp = $this->db->table('view_member_country');
        $opt[] = array('id' => '', 'name' => '--Select Country--');
        $rs = array_merge($opt, $tmp);
        $this->country_db->bind($rs);
    }
    
    protected function populateTableEvent($e) {
        $country = $e->intVal() | 0;
        $this->populateTable($country,$this->data('sYear'),$this->data('eYear'));
    }
    
    protected function populateTable($country, $sYear, $eYear) {
        $rt = $this->db->table('view_destination_report_summary','country_id=?',$country);
        $rs =  array();
        foreach($rt as $key => $value){
           $rs[$value['year']][$value['month']] = $value; 
        }

        $html = "";
        for($y=$sYear; $y<=$eYear; $y++){
            $html .= "<th>$y</th>";
            $total[$y] = 0;
        }
        
        for($m=1; $m<=12; $m++){
            $html .= "<tr>";
            for($y=$sYear; $y<=$eYear; $y++){
                $count = (isset($rs[$y][$m]))? (int)$rs[$y][$m]['count'] : 0;
                $total[$y] += $count;
                $html .= "<td><a href='destination_report.php?key=".base64_encode($country.".".$y.".".$m)."'>".date('F',  mktime(0, 0, 0, $m))." ($count)</a></td>";
            }
            $html .= "</tr>";
        }
        for($y=$sYear; $y<=$eYear; $y++){
            $html .= "<td><b>Total:</b> ".$total[$y]."</td>";
        }
        
        $this['#data']->html($html)->updateClient();
    }
    
    protected function filterTable() {
        $countryId  = $this->post->intVal('country_db'); 
        $syear      = $this->post->intVal('syear'); 
        $eyear      = $this->post->intVal('eyear'); 
        
        $valid = true;
        if($syear > $eyear){$valid = false; $this->syear->css('border','solid 1px #c00')->updateClient();}
        if($syear < 2014  ){$valid = false; $this->syear->css('border','solid 1px #c00')->updateClient();}
        if($eyear < 2014  ){$valid = false; $this->eyear->css('border','solid 1px #c00')->updateClient();}
        
        if(!$valid){
            return false;; 
        }
        $this->syear->updateClient();
        $this->eyear->updateClient();
        
        $this->data('sYear', $syear);
        $this->data('eYear', $eyear);
        $this->populateTable($countryId,$syear,$eyear);
    }
}
?>