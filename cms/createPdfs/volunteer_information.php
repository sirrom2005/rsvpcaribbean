<?php
require_once('tcpdf-common.php');
require_once('../../classes/site.class.php');

$obj    = new site();
$userId = (int)base64_decode(filter_input(INPUT_GET, 'id'));
$sql    = "SELECT * FROM view_volunteer_info WHERE id=$userId";
$rs     = $obj->getResultSet($sql);
$rs     = $rs[0];
$country= $obj->getResultSet("SELECT name FROM odb_country WHERE country_id=".$rs['country_id']);
$nationality = $obj->getResultSet("SELECT name FROM odb_country WHERE country_id=".$rs['nationality_id']);
$birthCountry= $obj->getResultSet("SELECT name FROM odb_country WHERE country_id=".$rs['birth_country_id']);
$state  = $obj->getResultSet("SELECT name FROM obd_county_zone WHERE zone_id=".$rs['state_id']);
$guaRel = $obj->getResultSet("SELECT name FROM relationship_type WHERE id=".$rs['guardian_relationship_type_id']);
$refTitle = $obj->getResultSet("SELECT name FROM title WHERE id=".$rs['reference_title_id']);
$guaTitle = $obj->getResultSet("SELECT name FROM title WHERE id=".$rs['guardian_title_id']);
$qualify  = $obj->getResultSet("SELECT name FROM qualifications_type WHERE id=".$rs['qualifications_id']);
$status   = $obj->getResultSet("SELECT name FROM current_status WHERE id=".$rs['current_status_id']);
$volStatus   = $obj->getResultSet("SELECT name FROM volunteer_status_type WHERE id=".$rs['current_status_other_id']);
$refAddress  = $obj->getResultRow("SELECT * FROM address WHERE id=".$rs['reference_address_id']);
$refCountry  = $obj->getResultSet("SELECT name FROM odb_country WHERE country_id=".$refAddress['country_id']);
$refZone     = $obj->getResultSet("SELECT name FROM obd_county_zone WHERE zone_id=".$refAddress['state_id']);

$volStatus      = (isset($volStatus[0]['name']))? $volStatus[0]['name'] : '';
$status         = (isset($status[0]['name']))? $status[0]['name'] : '';
$qualify        = (isset($qualify[0]['name']))? $qualify[0]['name'] : '';
$nationality    = (isset($nationality[0]['name']))? $nationality[0]['name'] : '';
$birthCountry   = (isset($birthCountry[0]['name']))? $birthCountry[0]['name'] : '';
$refCountry     = (isset($refCountry[0]['name']))? $refCountry[0]['name'].'<br>' : '';
$refZone        = (isset($refZone[0]['name']))? $refZone[0]['name'].'<br>' : '';

/*echo "<pre>";
print_r($refAddress);
echo "</pre>";*/

if(!$rs){
    echo "Data not found...";
    exit();
}

$credit_for_school = ($rs['credit_for_school'])? 'Yes' : 'No';
$sponsored = ($rs['sponsored'])? 'Yes' : 'No';
$have_travel_companions = ($rs['have_travel_companions'])? 'Yes' : 'No';


$address = $rs['address1'].'<br>';
$address .= ($rs['address2'])? $rs['address2'].'<br>' : '';
$address .= ($rs['address3'])? $rs['address3'].'<br>' : '';
$address .= ($country[0]['name'])? $country[0]['name'].'<br>': '';
$address .= ($state[0]['name'])? $state[0]['name'].'<br>': '';
$address .= ($rs['zip_code'])? $rs['zip_code'] : '';

$ref_address = $refAddress['address1'].'<br>';
$ref_address .= ($refAddress['address2'])? $refAddress['address2'].'<br>' : '';
$ref_address .= ($refAddress['address3'])? $refAddress['address3'].'<br>' : '';
$ref_address .= $refCountry;
$ref_address .= $refZone;
$ref_address .= ($refAddress['zip_code'])? $refAddress['zip_code'] : '';

$guardian  = (isset($guaTitle[0]['name']))? '('.$guaTitle[0]['name'].') ' : '';
$guardian .= ($rs['guardian_firstname'] ).' ';
$guardian .= ($rs['guardian_middlename'])? $rs['guardian_middlename'].' ' : '';
$guardian .= ($rs['guardian_lastname']  )? $rs['guardian_lastname'].'<br>' : '';
$guardian .= ($rs['guardian_email'])? $rs['guardian_email'].'<br>' : '';
$guardian .= ($rs['guardian_phone'])? $rs['guardian_phone'].'<br>' : '';
$guardian .= (isset($guaRel[0]['name']))? '('.$guaRel[0]['name'].')' : '';

$reference  = (isset($refTitle[0]['name']))? '('.$refTitle[0]['name'].') ' : '';
$reference .= $rs['reference_firstname'].' ';
$reference .= ($rs['reference_middlename']  )? $rs['reference_middlename'].' ' : '';
$reference .= ($rs['reference_lastname']    )? $rs['reference_lastname'].'<br>' : '';
$reference .= ($rs['reference_email']       )? $rs['reference_email'].'<br>' : '';
$reference .= ($rs['reference_phone']       )? $rs['reference_phone'].'<br>' : '';
$reference .= ($rs['reference_relationship'])? '('.$rs['reference_relationship'].')' : '';

$html = "
<style>
h1,h4{font-size:12pt;text-align:center;}
h4{font-size:10pt;}
table,td{border:solid 1px #000000;border-collapse:collapse;}
</style>";     

$html .= <<<EOD
<h1>VOLUNTEER INFORMATION</h1>
<h4>Volunteer ID# [{$rs['id']}]</h4>        
<table border="0" cellpadding="3">
    <tr>
        <td><b>First name</b><br/>{$rs['firstname']}</td>
        <td><b>Middle name</b><br/>{$rs['middlename']}</td>
        <td><b>Last name</b><br/>{$rs['lastname']}</td>
    </tr>
    <tr>
        <td><b>Address</b><br/>{$address}</td>
        <td><b>Guardian/Emergency Contact</b><br/>{$guardian}</td>
        <td><b>Reference</b><br/>{$reference}<br>{$ref_address}</td>
    </tr>    
    <tr>
        <td><b>Alias: </b>{$rs['alias']}<br/><b>Status: </b>{$volStatus}</td>
        <td><b>Email</b><br/>{$rs['email']}</td>
        <td><b>Alternative Email</b><br/>{$rs['alternative_email']}</td>
    </tr>
    <tr>
        <td><b>Skype</b><br/>{$rs['skype']}</td>
        <td><b>Mobile Phone</b><br/>{$rs['mobile_phone']}</td>
        <td><b>Dath of birth</b><br/>{$rs['dob']}</td>
    </tr>
    <tr>
        <td><b>Name on Passport</b><br/>{$rs['name_on_passport']}</td>
        <td><b>Passport number</b><br/>{$rs['passport_number']}</td>
        <td><b>Current Level</b><br/>{$status}</td>
    </tr> 
    <tr>
        <td><b>Username</b><br/>{$rs['username']}</td>
        <td><b>Nationality</b><br/>{$nationality}</td>
        <td><b>Dath country</b><br/>{$birthCountry}</td>
    </tr>
    <tr>
        <td><b>High School</b><br/>{$rs['high_school']}</td>
        <td><b>Undergraduate University</b><br/>{$rs['undergraduate_university']}</td>
        <td><b>Post Graduate</b><br/>{$rs['post_graduate']}</td>
    </tr> 
    <tr>
        <td><b>Credit for school</b><br/>{$credit_for_school}</td>
        <td><b>Qualifications</b><br/>{$qualify}</td>
        <td>
            <b>Skills: </b>{$rs['skills']}<br> 
            <b>Occupation: </b>{$rs['occupation']}
        </td>
    </tr>
    <tr>
        <td><b>Sponsored</b><br/>{$sponsored}</td>
        <td><b>Have Travel Companions</b><br/>{$have_travel_companions}</td>
        <td><b>Travel Companions Name</b><br/>{$rs['travel_companions_name']}</td>
    </tr>
    <tr>
        <td><b>Special Diet</b><br/>{$rs['special_diet_restrictions_desc']}</td>
        <td><b>Illnesses</b><br/>{$rs['illnesses_desc']}</td>
        <td><b>Medication</b><br/>{$rs['medication_name']}</td>
    </tr>
    <tr>
        <td><b>Allergies</b><br/>{$rs['allergies_desc']}</td>
        <td><b>Criminal Convictions</b><br/>{$rs['criminal_convictions_desc']}</td>
        <td><b>Time to Speak</b><br/>{$rs['time_to_speak']}</td>
    </tr>
</table>       
EOD;
//echo $html;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------
// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer_record.pdf', 'I');
?>