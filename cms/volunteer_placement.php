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
        $this->appendView("volunteer_placement.view.php");
    }

    protected function _load() {  
        $this->delegate('#country_id','#change', array('callback' => '.loadList1')); 
        $this->delegate('#country_id_2','#change', array('callback' => '.loadList2')); 
        $this->delegate('#project_category_id','#change', array('callback' => '.loadAgencyList1'));
        $this->delegate('#project_category_id_2','#change', array('callback' => '.loadAgencyList2'));
        $this->delegate('#btn','#click', array('callback' => '.saveInfo')); 
        
        $tmp    = $this->db->table('view_member_country');  
        $opt2[] = array('id' => '0', 'name' => 'Change Database...');
        $rs2    = array_merge($opt2, $tmp);
        
        $this->country_id->bind($rs2);
        $this->country_id_2->bind($rs2);
    }
    
    protected function _prerender() {
        if(!$this->isCallback)
        { 
            $this->loadVolunteerSummary($this->id);  
            
            $rs1 = $this->db->table('volunteer_placement', 'volunteer_id=?', $this->id); 
            $countryId1     = isset($rs1[0]['country_id'])? $rs1[0]['country_id'] : 0;
            $countryId2     = isset($rs1[1]['country_id'])? $rs1[1]['country_id'] : 0;
            $categoryId1    = isset($rs1[0]['project_category_id'])? $rs1[0]['project_category_id'] : 0;
            $categoryId2    = isset($rs1[1]['project_category_id'])? $rs1[1]['project_category_id'] : 0;
       
            $this->loadAgencyListData1($categoryId1);
            $this->loadAgencyListData2($categoryId2);
            
            if($countryId1){
                C('#country_id')->val($rs1[0]['country_id']); 
                C('#project_category_id')->val($rs1[0]['project_category_id']);
                C('#programme_project_id')->val($rs1[0]['programme_project_id']);
                C('#host_id')->val($rs1[0]['host_id']);
                C('#start_date')->val($rs1[0]['start_date']);
                C('#end_date')->val($rs1[0]['end_date']);
            }
            
            if($countryId2){
                C('#country_id_2')->val($rs1[1]['country_id']); 
                C('#project_category_id_2')->val($rs1[1]['project_category_id']);
                C('#programme_project_id_2')->val($rs1[1]['programme_project_id']);
                C('#host_id_2')->val($rs1[1]['host_id']);
                C('#start_date_2')->val($rs1[1]['start_date']);
                C('#end_date_2')->val($rs1[1]['end_date']);
            }
            //$this->programme_project_id->bind(null);
            //$this->programme_project_id_2->bind(null);
            $this->loadDataList1($countryId1);
            $this->loadDataList2($countryId2);
        }
    }
    
    protected function loadList1($e) {
        $id = $e->intVal() | 0;
        $this->loadDataList1($id); 
    }
    
    protected function loadDataList1($id) {       
        $tmp = $this->db->table('view_accommodation','country_id=?',$id);
        $pro2[] = ($tmp)? array('id' => '0', 'name' => 'Select host...') : array();
        $rs = array_merge($pro2, $tmp);
        $this->host_id->bind($rs);
        $this->host_id->updateClient();  
        
        $this->getProjectPorgrammeList($id,1);
    }
    
    protected function loadList2($e) {
        $id = $e->intVal() | 0;
        $this->loadDataList2($id); 
    }
    
    protected function loadDataList2($id) {     
        $tmp = $this->db->table('view_accommodation', 'country_id=?',$id);
        $pro2[] = ($tmp)? array('id' => '0', 'name' => 'Select host...') : array();
        $rs = array_merge($pro2, $tmp);
        $this->host_id_2->bind($rs);
        $this->host_id_2->updateClient(); 
        
        /*$tmp = $this->db->table('project_category id, name','country_id=?',$id);
        $pro3[] = ($tmp)? array('id' => '0', 'name' => 'Select Programme/Project...') : array();
        $rs = array_merge($pro3, $tmp);
        $this->project_category_id_2->bind($rs);
        $this->project_category_id_2->updateClient();*/
        $this->getProjectPorgrammeList($id,2);
    }
    
    protected function getProjectPorgrammeList($id, $control) {
        $rs = $this->db->execQuery('select c.type, c.id, c.name from project_category c where country_id = '.$id.' ORDER BY c.name');
        //$pro3[] = ($tmp)? array('id' => '0', 'name' => 'Select Programme/Project...') : array();
        //$rs = array_merge($pro3, $tmp);
        $html = "";
        if($rs){
            $tmp = "";
            foreach($rs as $row => $value){
                if($value['type']=="2"){
                    $tmp .= "<option value='{$value['id']}'>{$value['name']}</option>";
                }
            }
            if(!empty($tmp)){
                $html .= "<optgroup label='-----Programmes-----'>{$tmp}</optgroup>";
            }

            $tmp = "";
            foreach($rs as $row => $value){
                if($value['type']=="1"){
                    $tmp .= "<option value='{$value['id']}'>{$value['name']}</option>";
                }
            }
            if(!empty($tmp)){
                $html .= "<optgroup label='-----Projects-----'>{$tmp}</optgroup>";
            }
        }
        
        if($control==1){
            $this->project_category_id->html($html)->updateClient(); 
        }else{
            $this->project_category_id_2->html($html)->updateClient(); 
        }
        
    }
    
    protected function loadAgencyList1($e) {
        $id = $e->intVal() | 0;
        $this->loadAgencyListData1($id);
    }
      
    protected function loadAgencyListData1($id) {
        $tmp = $this->db->execQuery("CALL sp_get_project_name_by_category('".$id."')");        
        $pro[] = ($tmp)? array('id' => '0', 'name' => 'Select Partner Agency...') : array(); 
        $rs = array_merge($pro, $tmp);
        $this->programme_project_id->bind($rs);
        $this->programme_project_id->updateClient();
    }
    
   protected function loadAgencyList2($e) {
        $id = $e->intVal() | 0;
        $this->loadAgencyListData2($id);
    }
    
    protected function loadAgencyListData2($id) {
        $tmp = $this->db->execQuery("CALL sp_get_project_name_by_category('".$id."')");        
        $pro[] = ($tmp)? array('id' => '0', 'name' => 'Select Partner Agency...') : array(); 
        $rs = array_merge($pro, $tmp);
        $this->programme_project_id_2->bind($rs);
        $this->programme_project_id_2->updateClient();
    }
    
    protected function saveInfo(){
        $data['volunteer_id']           = $data2['volunteer_id'] = $this->id;
        $data['country_id']             = $this->post->intVal('country_id'); 
        $data['project_category_id']    = $this->post->intVal('project_category_id');
        $data['programme_project_id']   = $this->post->intVal('programme_project_id');
        $data['host_id']                = $this->post->intVal('host_id');
        $data['start_date']             = $this->post->textVal('start_date');
        $data['end_date']               = $this->post->textVal('end_date');
        
        $data2['country_id']            = $this->post->intVal('country_id_2');
        $data2['project_category_id']   = $this->post->intVal('project_category_id_2');
        $data2['programme_project_id']  = $this->post->intVal('programme_project_id_2');
        $data2['host_id']               = $this->post->intVal('host_id_2');
        $data2['start_date']            = $this->post->textVal('start_date_2');
        $data2['end_date']              = $this->post->textVal('end_date_2');
        
        $data['date_added'] = $data2['date_added'] = $this->dateNow;
        $data['user_id']    = $data2['user_id']    = $this->userId;
        
        try{
            $this->db->tableDelete('volunteer_placement','volunteer_id=?',$this->id);
            $this->db->tableInsert('volunteer_placement',$data);
            if(!empty($data2['project_category_id']) && !empty($data2['programme_project_id']) && !empty($data2['host_id'])){
                $this->db->tableInsert('volunteer_placement',$data2);    
            }
            
            $this->flashmsg($this->icon.DB_DATA_EDIT,'fade','alert alert-success');
        }
        catch(Exception $ex)
        {
            $msg = DB_DATA_ERROR;
            echo $ex;
            $this->flashmsg($this->icon.$msg,'fade','alert alert-danger');
            $this->Raxan->debug($msg.' '.$ex);
        }        
    }
}
?>