<?php
include_once('common.php');
class DestinationReport extends common {
    protected $updateList = false,
              $countryId,
              $year,
              $month;


    protected function _config() {
        parent::_config();
    }

    protected function _init() {
        parent::_init();
        $this->id = base64_decode($this->get->textVal('key')) | '0';
        $keys = explode('.', $this->id);
        $this->countryId    = $keys[0];
        $this->year         = $keys[1];
        $this->month        = $keys[2];
        
        c('#mm_destination_reports')->attr('class','list-group-item active');
        $this->appendView("destination_report.view.php");
    }

    protected function _load() { 
        $this->delegate('#btnExport', 'click', array('callback' => '.exportData'));
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        {
            $this->loadList();
        }
    }

    protected function loadList() {
        try{           
            $rs = $this->db->table('view_destination_report_records',
                                   'country_id=? AND YEAR(date_added)=? AND MONTH(date_added)=?',
                                    array($this->countryId,$this->year,$this->month)); 
            
            $this->data->bind($rs);
            $this->data('exportCSV',$rs);
            if(!$rs){return;}
            $this->pageheading->html('Volunteer Applications for '.$rs[0]['country'].' – '.date('F', mktime(0,0,0,$this->month)).' '.$this->year); 
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        } 
    }  
    
    protected function exportData() {
        try{
            $rs = $this->db->table('view_administration_list');
            $this->data('exportCSVname',"des_report");
            $this->exportCSVdata();
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