<?php
require_once('tcpdf-common.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$id     = (int)base64_decode(filter_input(INPUT_GET, 'id'));
$sql    = "SELECT * FROM view_project_info WHERE id=$id";
$rs     = $obj->getResultRow($sql);

/*echo "<pre>";
print_r($rs);
echo "</pre>";*/


if(!$rs){
    echo "Data not found...";
    exit();
}

$address  = $rs['address1'].'<br>';
$address .= ($rs['address2'])? $rs['address2'].'<br>' : '';
$address .= ($rs['address3'])? $rs['address3'].'<br>' : '';
//$address .= ($country[0]['name'])? $country[0]['name'].'<br>': '';
//$address .= ($state[0]['name'])? $state[0]['name'].'<br>': '';
$address .= ($rs['zip_code'])? $rs['zip_code'] : '';


$html = "
<style>
h1,h4{font-size:12pt;text-align:center;}
h4{font-size:10pt;}
table,td{border:solid 1px #000000;border-collapse:collapse;}
</style>";     

$html .= <<<EOD
<h1> INFORMATION</h1> 
{$address}    
EOD;
//echo $html;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>