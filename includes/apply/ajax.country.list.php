<?php
include_once('../../config/config.php');
include_once('../../classes/site.class.php');
$obj = new site();

$id  = filter_input(INPUT_GET, 'id');
$sql = "SELECT * FROM view_member_country "
	. "WHERE id IN(SELECT p.country_id FROM project_category p "
        . "WHERE p.name = "
        . "(SELECT p.name FROM project_category p WHERE p.id = ".$id."))";

$rs  = $obj->getResultSet($sql);
if(empty($rs)){ return null;}
$html = '<option value="">Select Destination</option>';
foreach($rs as $key => $value){ 
    $html .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
}
echo $html;
?>