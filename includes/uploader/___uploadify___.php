<?php
include_once('../../config/config.php');
// Define a destination
$targetFolder = '/rsvp_photos/'; // Relative to the root
$link = mysqli_connect(DBHOST, DBUSERNAME, DBPASSWORD, DBDATABASE);

$item_id_ 	= filter_input(INPUT_POST, 'item_id');
$category_id_ 	= filter_input(INPUT_POST, 'category_id');

$tempFile = $_FILES['Filedata']['tmp_name'];
$targetPath = str_replace('\includes\uploader', '', realpath(dirname(__FILE__))) . $targetFolder . $category_id_.'/';

// Validate the file type
$ARRAY_FILE_TYPE = array('jpg','jpeg','gif','png'); // File extensions
$fileParts = pathinfo($_FILES['Filedata']['name']);	
$fileName = $category_id_.'-'.date('Ymd').'-'.rand(10000,99999).'.'.$fileParts['extension'];
$fileName = strtolower($fileName);
$targetFile = rtrim($targetPath,'/') . '/' . $fileName;

if (in_array(strtolower($fileParts['extension']),$ARRAY_FILE_TYPE)) {
    if(!is_dir($targetPath)){
        mkdir($targetPath,0777);
    }
        
    move_uploaded_file($tempFile,$targetFile);
    echo $fileName;
} else {
	echo 'Invalid file type.';
    return false;
}

/* Prepare an insert statement */
$sql = "INSERT INTO photo (item_id, category_id, photo, date_added) VALUES (?,?,?,?)";
$stmt = mysqli_prepare($link, $sql);

/* bind parameters for markers */
mysqli_stmt_bind_param($stmt,'ssss',$item_id,$category_id,$photo,$date_added);

$item_id 	= $item_id_;
$category_id 	= $category_id_;
$photo 		= $fileName;
$date_added 	= date('Y-m-d G:i:s');

/* execute query */
mysqli_stmt_execute($stmt);
mysqli_close($link);
?>