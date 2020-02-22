<?php
include_once('config/config.php'); 
include_once('classes/site.class.php');

$id = (int)base64_decode(filter_input(INPUT_GET, 'id'));

$obj = new site();

$rs     = $obj->getResultRow("CALL sp_accommodation_web($id)");
$obj->runNewResulstSet();
$photo  = $obj->getResultSet("CALL sp_photo_gallery(1,$id)");

echo "<pre>";
print_r($rs);
print_r($photo);
echo "</pre>";

?>