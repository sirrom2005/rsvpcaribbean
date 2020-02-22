<?php
include_once('../class/FileManager.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>File Manager</title>
</head>
<body class="fmBody">
<table border="0" style="width:100%; height:100%"><tr>
<td align="center">
<?php

$FileManager = new FileManager('/var/www/rsvpcaribbean.com/public_html/File_Manager_Uploaded_File/Resources');
$FileManager->fmCaption = "Resources";
print $FileManager->create();

?>
</td>
</tr></table>
</body>
</html>