<?php
include_once('../../config/config.php');
// Define a destination
$targetFolder = '/rsvp_docs/newsletter/'; // Relative to the root
$link = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);

$tempFile = $_FILES['Filedata']['tmp_name'];
//----\window /unix
$targetPath = str_replace('\includes\uploader', '', realpath(dirname(__FILE__))). $targetFolder;

// Validate the file type
$fileTypes = array('pdf'); // File extensions
$fileParts = pathinfo($_FILES['Filedata']['name']);	
$fileName = 'newsletter-'.date('Ymd').'-'.rand(10000,99999).'.'.$fileParts['extension'];
$targetFile = rtrim($targetPath,'/') . '/' . $fileName;

if (in_array($fileParts['extension'],$fileTypes)) {
	move_uploaded_file($tempFile,$targetFile);
        echo $fileName;
} else {
        return false;
}

/* Prepare an insert statement */
$sql = "INSERT INTO newsletter (newsletter, country_id, date, date_added,added_by_user) VALUES (?,?,?,?,?)";
$stmt = mysqli_prepare($link, $sql);

/* bind parameters for markers */
mysqli_stmt_bind_param($stmt,'sssss',$fileName,$country_id,$date,$date_added,$added_by_user);

$fileName 	= $fileName;
$country_id     = filter_input(INPUT_POST, 'c');
$date           = date('Y-m-d', mktime(0, 0, 0, filter_input(INPUT_POST, 'm'), date('d'), filter_input(INPUT_POST, 'y')));
$date_added 	= date('Y-m-d G:i:s');
$added_by_user 	= filter_input(INPUT_POST, 'u');

/* execute query */
mysqli_stmt_execute($stmt);

mysqli_close($link);
?>