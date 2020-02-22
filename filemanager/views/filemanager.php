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

$FileManager = new FileManager();
$FileManager->fmCaption = "E-File";
print $FileManager->create();

?>
</td>
</tr></table>
</body>
</html>