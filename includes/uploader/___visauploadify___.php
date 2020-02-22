<?php
include_once('../../config/config.php');
// Define a destination
$targetFolder = '/rsvp_docs/visa/'; // Relative to the root
$link = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);

$volunteer_id 	= filter_input(INPUT_POST, 'u');
$tempFile 		= $_FILES['Filedata']['tmp_name'];
$targetPath 	= str_replace('\includes\uploader', '', realpath(dirname(__FILE__))) . $targetFolder . $volunteer_id . '/';

// Validate the file type
$ARRAY_FILE_TYPE = array('doc','docx','pdf','jpg','jpeg','gif','png'); // File extensions
$fileParts  = pathinfo($_FILES['Filedata']['name']);	
$fileName   = 'visa-'.date('Ymd').'-'.rand(10000,99999).'.'.$fileParts['extension'];
$fileName   = strtolower($fileName);
$targetFile = rtrim($targetPath,'/') . '/' . $fileName;

if (in_array(strtolower($fileParts['extension']),$ARRAY_FILE_TYPE)) {
	if(!is_dir($targetPath)){
     	mkdir($targetPath);
    }
	
	move_uploaded_file($tempFile,$targetFile);
	echo $fileName;
} else {
        return false;
}

/* Prepare an insert statement */
$sql = "INSERT INTO volunteer_visa (fileName, volunteer_id, date_added, added_by) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($link, $sql);

/* bind parameters for markers */
mysqli_stmt_bind_param($stmt,'ssss',$fileName,$volunteer_id,$date_added,$added_by);

$fileName 	    = $fileName;
$volunteer_id 	= $volunteer_id;
$date_added 	= date('Y-m-d G:i:s');
$added_by 		= filter_input(INPUT_POST, 'a');

/* execute query */
mysqli_stmt_execute($stmt);

mysqli_close($link);
?>