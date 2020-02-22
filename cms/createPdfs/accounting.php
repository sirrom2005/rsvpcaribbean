<?php
require_once('tcpdf-common-land.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$id = (int)base64_decode(filter_input(INPUT_GET, 'id'));
$sql    = "SELECT * FROM view_accounting WHERE account_id=$id";
$rs     = $obj->getResultSet($sql);

if(!$rs){
    echo "Data not found...";
    exit();
}

/*echo "<pre>"; print_r($rs);
exit();*/

$txt = "<style>
h1,h4{font-size:12pt;text-align:center;}
h4{font-size:10pt;}
table,td{border:solid 1px #000000;border-collapse:collapse;font-size:10pt;}
th{text-align:center;border:solid 1px #000000;border-collapse:collapse;}
</style>
<tr>
<th>Receipt</th>
<th>Add/Modif Date</th>
<th>Transaction Date</th>
<th>Payee</th>
<th>GL Category</th>
<th>GL Sub-Category</th>
<th>GL Account Number</th>
<th>Amount</th>
<th>Deposit</th>
<th>Balance</th>
<th>Cheque Number</th>
</tr> 	 	 	 	 	 	 	 	 	
";   

$deposit = $amount = $balance = 0;

foreach($rs as $key => $value){  
    if($key==0 && $value['trans_type'] == "income"){
        $deposit = $balance = $value['amount'];
        $amount  = 0;
    }else{
        $deposit = 0;
        $amount  = $value['amount'];
        $balance = $balance - $amount;
    }
    
    $deposit_ = ($deposit)? '$'.number_format($deposit, 2, '.', ',') : '';
    $amount_  = ($amount )? '$'.number_format($amount,  2, '.', ',') : '';
    $balance_ = ($balance)? '$'.number_format($balance, 2, '.', ',') : '';
    $txt .= "<tr>
                <td>{$value['receipt']}</td>
                <td>{$value['date_added']}</td>
                <td>{$value['transaction_date']}</td>
                <td>{$value['payee']}</td>
                <td>{$value['category']}</td>
                <td>{$value['sub_category']}</td>
                <td>{$value['account_number']}</td>
                <td>{$amount_}</td>
                <td>{$deposit_}</td>
                <td>{$balance_}</td>
                <td>{$value['cheque_number']}</td>                    
            </tr>";
} 

$html = "<table border='0'>{$txt}</table>";               

//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0,64,255), array(255,255,255));
//$pdf->SetMargins(PDF_MARGIN_LEFT, 0, PDF_MARGIN_RIGHT);

//$pdf->SetMargins(PDF_MARGIN_LEFT, 0.5, PDF_MARGIN_RIGHT);
//$pdf->setPageOrientation('L');
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>