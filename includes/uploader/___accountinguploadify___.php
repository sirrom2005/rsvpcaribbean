<?php
include_once('../../config/config.php');
// Define a destination
$targetFolder = '/rsvp_docs/accounting/'; // Relative to the root
$link = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);

$tempFile = $_FILES['Filedata']['tmp_name'];
//----\window /unix
$targetPath = str_replace('\includes\uploader', '', realpath(dirname(__FILE__))). $targetFolder;

// Validate the file type
$fileTypes = array('jpeg','jpg','pdf'); // File extensions
$fileParts = pathinfo($_FILES['Filedata']['name']);	
$fileName  = date('Ymd').'-'.rand(10000,99999).'.'.$fileParts['extension'];
$targetFile = rtrim($targetPath,'/') . '/' . $fileName;

if (in_array(strtolower($fileParts['extension']),$fileTypes)) {
	move_uploaded_file($tempFile,$targetFile);
        echo $fileName;
} else {
        return false;
}

/* Prepare an insert statement */
$sql = "INSERT INTO accounting_documents (account_id, document, date_added, user_id) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($link, $sql);

/* bind parameters for markers */
mysqli_stmt_bind_param($stmt,'ssss',$account_id,$document,$date_added,$user_id);

$account_id     = filter_input(INPUT_POST, 'a');
$document 		= $fileName;
$date_added 	= date('Y-m-d G:i:s');
$user_id 		= filter_input(INPUT_POST, 'u');

/* execute query */
mysqli_stmt_execute($stmt);

mysqli_close($link);
?>