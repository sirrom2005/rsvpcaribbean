<?php
require_once('tcpdf-common.php');

$userId = (int)base64_decode(filter_input(INPUT_GET, 'id'));
/* Prepare an insert statement */
$sql    = "SELECT CONCAT(a.firstname, ' ', a.lastname) AS fullname, f.* FROM volunteer_feedback_form1 f "
        . "INNER JOIN account a ON a.id=f.account_id "
        . "WHERE f.account_id = ".$userId." LIMIT 1";
$result = mysqli_query($con, $sql, MYSQLI_USE_RESULT);

$rs = mysqli_fetch_assoc($result);

if(!$rs){
    echo "Data not found...";
    exit();
}

mysqli_free_result($result);    
mysqli_close($con);

// Set some content to print
$html = <<<EOD
<style>
table.data th{border:solid 1px #000000; border-collapse:collapse; font-weight:bold;text-align:center;}        
table.data td{border:solid 1px #000000; border-collapse:collapse;}
h1{font-size:12pt; text-align:center;}
p{font-size:11pt; text-align:center;}        
</style>
        
<h1>VOLUNTEER FEEDBACK - FORM 1</h1>          
<table border="0">
    <tr>
        <td width="15%">&nbsp;</td>
        <td width="70%" align="center">Instructions: This form should be completed be completed by a staff with the
            volunteer in a face-to- face meeting 5 days after arrival.
        </td>
        <td width="15%">&nbsp;</td>
    </tr>
    <tr><td>&nbsp;</td></tr>
</table>
 
        
<table class="data" border="0" cellpadding="3"> 
    <tr>
        <th width="40%">Areas of Feedback</th>
        <th width="10%">Yes/No</th>
        <th width="50%">Comments</th>
    </tr>     
    <tr><th colspan="3">Orientation</th></tr>    
    <tr>
      <td>Have you received an orientation?</td>
      <td>_{$rs['received_orientation']}_</td>
      <td>{$rs['received_orientation_desc']}</td>
    </tr>
    <tr>
      <td>Did you receive a volunteer’s package?</td>
      <td>_{$rs['received_package']}_</td>
      <td>{$rs['received_package_desc']}</td>
    </tr>
    <tr>
      <td>Did you receive a volunteer’s contact list?</td>
      <td>_{$rs['received_contact_list']}_</td>
      <td>{$rs['received_contact_list_desc']}</td>
    </tr>
    <tr><th colspan="3">Accommodation</th></tr>
    <tr>
       <td>Did you feel welcome when you arrived?</td>
       <td>_{$rs['felt_welcome']}_</td>
       <td>{$rs['felt_welcome_desc']}</td>
     </tr>
     <tr>
       <td>Is your room comfortable?</td>
       <td>_{$rs['room_comfortable']}_</td>
       <td>{$rs['room_comfortable_desc']}</td>
     </tr>
     <tr>
       <td>Do you have the basic necessities?</td>
       <td>_{$rs['basic_necessities']}_</td>
       <td>{$rs['basic_necessities_desc']}</td>
     </tr>  
    <tr>
      <td>Did you get a clean bathroom?</td>
      <td>_{$rs['clean_bathroom']}_</td>
      <td>{$rs['clean_bathroom_desc']}</td>
    </tr>
    <tr>
      <td>Is your bathroom working properly?</td>
      <td>_{$rs['bathroom_working']}_</td>
      <td>{$rs['bathroom_working_desc']}</td>
    </tr>
    <tr>
      <td>Are you happy with the food?</td>
      <td>_{$rs['happy_with_food']}_</td>
      <td>{$rs['happy_with_food_desc']}</td>
    </tr>
    <tr>
       <td>Are you getting enough food?</td>
       <td>_{$rs['getting_enough_food']}_</td>
       <td>{$rs['getting_enough_food_desc']}</td>
     </tr>
     <tr>
       <td>Are you provided with suitable water?</td>
       <td>_{$rs['suitable_water']}_</td>
       <td>{$rs['suitable_water_desc']}</td>
     </tr>
     <tr>
       <td>Are you satisfied with your accommodation?</td>
       <td>_{$rs['satisfied_with_accommodation']}_</td>
       <td>{$rs['satisfied_with_accommodation_desc']}</td>
     </tr>  
     <tr><th colspan="3">Programme/Project</th></tr>    
    <tr>
      <td>Did you feel welcome when you arrived?</td>
      <td>_{$rs['programme_feel_welcome']}_</td>
      <td>{$rs['programme_feel_welcome_desc']}</td>
    </tr>
    <tr>
      <td>Do you have a timetable?</td>
      <td>_{$rs['programme_timetable']}_</td>
      <td>{$rs['programme_timetable_desc']}</td>
    </tr>
    <tr>
       <td>Were your tasks discussed?</td>
       <td>_{$rs['programme_tasks_discussed']}_</td>
       <td>{$rs['programme_tasks_discussed_desc']}</td>
     </tr>
     <tr>
       <td>Are you clear on your tasks?</td>
       <td>_{$rs['programme_tasks_clear']}_</td>
       <td>{$rs['programme_tasks_clear_desc']}</td>
     </tr>
     <tr>
       <td>Are you satisfied so far with your programme/project?</td>
       <td>_{$rs['programme_satisfied']}_</td>
       <td>{$rs['programme_satisfied_desc']}</td>
     </tr>
</table>
EOD;
       
$html2 = <<<EOD2
<style>
table.data th{border:solid 1px #000000; border-collapse:collapse; font-weight:bold;text-align:center;}        
table.data td{border:solid 1px #000000; border-collapse:collapse;}
h1{font-size:12pt; text-align:center;}
p{font-size:11pt; text-align:center;}        
</style>        
<table class="data" border="0" cellpadding="3"> 
     <tr><th colspan="3">Health and Safety</th></tr>
    <tr>
      <td>Are you coping with the weather?</td>
      <td>_{$rs['coping_with_weather']}_</td>
      <td>{$rs['coping_with_weather_desc']}</td>
    </tr>
    <tr>
       <td>Have you experience any health issues since you arrived?</td>
       <td>_{$rs['experience_health_issues']}_</td>
       <td>{$rs['experience_health_issues_desc']}</td>
     </tr>
     <tr>
       <td>Are you clear on the safety procedures provided?</td>
       <td>_{$rs['clear_on_safety_procedures']}_</td>
       <td>{$rs['clear_on_safety_procedures_desc']}</td>
     </tr>
     <tr>
       <td>Do you have any health or safety concerns?</td>
       <td>_{$rs['health_safety_concerns']}_</td>
       <td>{$rs['health_safety_concerns_desc']}</td>
     </tr>
    <tr><th colspan="3">RSVP Staff</th></tr>
    <tr>
        <td>Do you know your assigned Programme/Project Coordinator?</td>
        <td>_{$rs['know_programme_coordinator']}_</td>
        <td>{$rs['know_programme_coordinator_desc']}</td>
     </tr>
     <tr>
       <td>Do you have his/her contact number?</td>
       <td>_{$rs['have_coordinator_contact_number']}_</td>
       <td>{$rs['have_coordinator_contact_number_desc']}</td>
     </tr>
     <tr>
       <td>Have you been able to reach him/her (if needed)?</td>
       <td>_{$rs['coordinator_reachable']}_</td>
       <td>{$rs['coordinator_reachable_desc']}</td>
    </tr>
    <tr><th colspan="3">Adapting to the Culture</th></tr>
    <tr>
        <td>Are you able to get to work ok?</td>
        <td>_{$rs['get_to_work_ok']}_</td>
        <td>{$rs['get_to_work_ok_desc']}</td>
    </tr>
    <tr>
       <td>Are there any cultural concerns?</td>
       <td>_{$rs['any_cultural_concerns']}_</td>
       <td>{$rs['any_cultural_concerns_desc']}</td>
    </tr>
    <tr>
       <td>Are you generally happy so far with all your arrangements?</td>
       <td>_{$rs['happy_with_arrangements']}_</td>
       <td>{$rs['happy_with_arrangements_desc']}</td>
    </tr>
    <tr>
       <td colspan="3"></td>
    </tr>
    <tr>
       <td>Name of Volunteer</td>
       <td colspan="2">{$rs['fullname']}</td>
    </tr>  
    <tr>
       <td>Signature of Volunteer</td>
       <td colspan="2"></td>
    </tr> 
    <tr>
       <td>Name of Staff</td>
       <td colspan="2"></td>
    </tr> 
    <tr>
       <td>Signature of Staff</td>
       <td colspan="2"></td>
    </tr> 
    <tr>
       <td>Date</td>
       <td colspan="2"></td>
    </tr>
</table>
EOD2;
//2Volunteer Feedback – Form 1 (May 2016)
       
$html = str_replace('_1_', 'Yes', $html); 
$html = str_replace('_0_', 'No', $html);
$html2 = str_replace('_1_', 'Yes', $html2); 
$html2 = str_replace('_0_', 'No', $html2);
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdf->AddPage();
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);
// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer-feedback-form1.pdf', 'I');
?>