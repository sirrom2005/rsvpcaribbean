<?php
include_once('../../config/config.php');
include_once('../../classes/site.class.php');
$obj = new site();

$sql = "SELECT zone_id AS id, name FROM obd_county_zone WHERE country_id = ".(int)$_GET['id'];

$rs  = $obj->getResultSet($sql);
if(empty($rs)){ return null;}
$html = '<option value="">Select State</option>';
foreach($rs as $key => $value){ 
    $html .= '<option value="'.$value['id'].'">'.$value['name'].'</option>';
}
echo $html
?>