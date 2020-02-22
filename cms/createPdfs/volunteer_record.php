<?php
require_once('tcpdf-common.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$userId = (int)base64_decode(filter_input(INPUT_GET, 'id'));
$sql    = "SELECT * FROM view_volunteer_record WHERE volunteer_id=$userId";
$rs     = $obj->getResultSet($sql);
$sql    = "SELECT * FROM view_volunteer_list WHERE id = $userId";
$name   = $obj->getResultSet($sql);
$sql    = "SELECT * FROM note_category";
$cat    = $obj->getResultSet($sql);

foreach($cat as $key => $value){
   $category[$value['id']] = $value['name'] ;
}

if(!$rs){
    echo "Data not found...";
    exit();
}

/*echo "<pre>"; print_r($cat);
exit();*/

$catString = "";
$html = "
<style>
table th{font-weight:bold;}
span{font-weight:normal;font-style:italic;}  
table,td,th{border:solid 1px #000000; border-collapse:collapse;}
h1,h2{font-size:12pt; text-align:center;}
</style>
<h1>VOLUNTEER RECORD</h1>
<h2>For {$name[0]['fullname']}</h2>
";
foreach($rs as $key => $value){
    if($value['note_category_id']){
        $catId = explode(',', $value['note_category_id']); 
        $catString = "";
        foreach($catId as $k => $v){
            $catString .= $category[$v]."<br/>";
        }
    }
      
$html .= <<<EOD
<table border="1" cellpadding="3">
    <tr><th colspan="2">Created By: <span>{$value['added']}</span> On: <span>{$value['date_added']}</span> modified by: <span>{$value['updated']}</span> On: <span>{$value['date_updated']}</span></th></tr>
    <tr>
        <td width="35%">{$catString}</td>
        <td width="65%">{$value['note']}</td>
    </tr>
</table> 
<p>&nbsp;</p>            
EOD;
}  

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>