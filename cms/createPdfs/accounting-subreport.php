<?php
require_once('tcpdf-common-land.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$params = explode('_', base64_decode(filter_input(INPUT_GET, 'key')));
$sql    = "call sp_subreport_accounting({$params[0]},'{$params[1]}','{$params[2]}')";
$rs     = $obj->getResultSet($sql);

if(!$rs){
    echo "Data not found...";
    exit();
}

$html = "<style>
table.tbl{width:250px;}
table,td{border:solid 1px #000000;border-collapse:collapse;font-size:10pt;width:100px;}
th{text-align:center;border:solid 1px #000000;border-collapse:collapse;}
ul, li{margin:0; padding:0;}
li{list-style:none; float:left; margin-right:10px;}
</style>";
  
$total = 0;
$data = array();
foreach($rs as $r => $v){
    $data[$v['category_id']][] = $v;
}

foreach($data as $key => $row){
    $html .= "<div><b>{$row[0]['category']}</b></div>";
    $html .= "<table>";
    foreach($row as $r => $value){
        $total += $value['amount'];
        $html .= "<tr><td>{$value['sub_category']}</td><td>{$value['amount']}</td></tr>";
    }
    $html .= "<tr><td><b>Total</b></td><td><b>".number_format($total, 2, ".", ",")."</b></td></tr>";
    $html .= "</table>";
    $html .= "<br/>";
    $total = 0;
}
                       
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>