<?php
include_once('../../config/config.php');
include_once('../../classes/site.class.php');
$obj = new site();

$id  = filter_input(INPUT_GET, 'id');
//$sql = "SELECT start_date,end_date FROM fix_date_projects WHERE project_id = ".$id." ORDER BY start_date";
$sql = "SELECT 
        fix.start_date,
        fix.end_date,
        p.name
        FROM fix_date_projects fix
        LEFT JOIN project_category p ON p.id = fix.rel_project_id
        WHERE fix.project_id = ".$id."
        ORDER BY fix.start_date,fix.sub_project_id";

$rs  = $obj->getResultSet($sql);

$html = '';
if($rs){
    $list = array();
    foreach($rs as $key => $value){
        $list[$value['name']][$value['start_date']] = array('start_date' => $value['start_date'], 'end_date' => $value['end_date']);
    }
    //echo "<pre>";print_r($list);
    
    foreach($list as $key => $value){ 
        if(!empty($key)){ 
           $html .= "<optgroup label='{$key}'>";
        }
        
        foreach($value as $k => $v){         
            $html .= '<option value="'.$v['start_date'].'&&'.$v['end_date'].'">'.date('F d, Y', strtotime($v['start_date'])).' - '.date('F d, Y', strtotime($v['end_date'])).'</option>';
        }
        if(!empty($key)){ 
           $html .= "</optgroup>";
        }
    }
}
echo $html;
?>