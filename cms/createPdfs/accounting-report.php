<?php
require_once('tcpdf-common-land.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$params = explode('_', base64_decode(filter_input(INPUT_GET, 'key')));
$sql    = "call sp_report_accounting({$params[0]},'{$params[1]}','{$params[2]}')";
$rs     = $obj->getResultSet($sql);

if(!$rs){
    echo "Data not found...";
    exit();
}

$html = "<style>
table,td{border:solid 1px #000000;border-collapse:collapse;font-size:10pt;}
th{text-align:center;border:solid 1px #000000;border-collapse:collapse;}
</style>";
  
$yr = $amt = array();
foreach($rs as $row => $key){
    if($key['month']){
        $yr[] = $key['month'];
    }
}
$html .= "<tr><th>Category</th>";
$year = array_unique($yr);
foreach($year as $row => $value){
    $value = date("M", mktime(0, 0, 0, $value));
    $html .= "<th>$value</th>";
}
$html .= "<th>Total</th></tr>";

foreach($rs as $row => $key){
    $amt[$key['category']][$key['month']] = $key['amount'];
}

foreach($amt as $key => $value){
    $html .= "<tr>";
    $html .= "<td>$key</td>";
    $total = 0;
    foreach($year as $k => $v){
        $val = (isset($value[$v]))? $value[$v] : 0;
        $html .= "<td>".number_format($val, 2, '.', ',')."</td>";
        $total += $val;
    }
    $html .= "<td>$".number_format($total, 2, '.', ',')."</td>";
    $html .= "</tr>";
}
        
$html_ = "<table border='0'>{$html}</table>";               
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html_, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>