<?php
include_once('common.php');
class Administration extends common {
    protected   $id = false;

    protected function _config() {
        parent::_config();
        $this->id = $this->get->id | 0;
        if(!$this->id){$this->redirectTo('volunteer-search.php?id=MzU=');}
        $this->data('update',0,true);
    }

    protected function _init() {
        parent::_init();
        $this->appendView("administration.view.php");
        c('#mm_administration')->attr('class','list-group-item active');
    }

    protected function _load() {  
        $this->delegate('#btn', '#click', array('callback' => '.submitInfo'));
        $this->delegate('#export', 'click', array('callback' => '.exportData'));
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            $this->loadData();  
        }
    }
   
    protected function submitInfo() {
        //$data['deposit_paid']       = $this->post->intVal('deposit_paid') | 0;
        $data['welcome_call']       = $this->post->intVal('welcome_call') | 0;
        $data['acceptance_letter']  = $this->post->intVal('acceptance_letter') | 0;
        $data['rsvp_webpage']       = $this->post->intVal('rsvp_webpage') | 0;
        $data['medical_insurance']  = $this->post->intVal('medical_insurance') | 0;
        $data['curriculum_vitae']   = $this->post->intVal('curriculum_vitae') | 0;
        $data['medical_report']     = $this->post->intVal('medical_report') | 0;
        $data['criminal_record']    = $this->post->intVal('criminal_record') | 0;
        $data['work_permit_exemption'] = $this->post->intVal('work_permit_exemption') | 0;
        $data['visa']               = $this->post->intVal('visa') | 0;
        $data['flight_detail']      = $this->post->intVal('flight_detail') | 0;
        $data['phone_call_2']       = $this->post->intVal('phone_call_2') | 0;
        $data['accommodation_details'] = $this->post->intVal('accommodation_details') | 0;
        $data['project_detail']     = $this->post->intVal('project_detail') | 0;
        $data['driver_detail']      = $this->post->intVal('driver_detail') | 0;
        $data['phone_call_3']       = $this->post->intVal('phone_call_3') | 0;
        $data['last_phone_all']     = $this->post->intVal('last_phone_all') | 0;
        $data['pre_departure_email_1']     = $this->post->intVal('pre_departure_email_1') | 0;
        $data['pre_departure_email_2']     = $this->post->intVal('pre_departure_email_2') | 0;
        $data['pre_departure_email_3']     = $this->post->intVal('pre_departure_email_3') | 0;
  
        try{
            if($this->data('update')==1){
                $this->db->tableUpdate('administration', $data, 'volunteer_id=?', $this->id);
                $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
            }else{
                $data['volunteer_id']       = $this->id;
                $this->db->tableInsert('administration',$data);
                $this->data('update',1);
                $this->flashmsg($this->icon.DB_DATA_ADD,'fade','alert alert-success');
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR.$ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function loadData() {
        try{
            $rs = $this->db->table('administration','volunteer_id=?', $this->id);
            if($rs){
                $this->frm->inputvalues($rs[0]);
                $this->data('update',1);
            }else{
                $this->data('update',0);
            }
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }
    }
    
    protected function exportData() {
        try{
            $rs = $this->db->table('view_administration_list');
            if(empty($rs)){return false;;}
            $this->data('exportCSV',$rs);
            $this->data('exportCSVname',"data");
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