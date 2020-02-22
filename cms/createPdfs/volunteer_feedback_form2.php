<?php
require_once('tcpdf-common.php');

$userId = (int)base64_decode(filter_input(INPUT_GET, 'id'));
/* Prepare an insert statement */
$sql    = "SELECT CONCAT(a.firstname, ' ', a.lastname) AS fullname, f.* FROM volunteer_feedback_form2 f "
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
        
<h1>VOLUNTEER FEEDBACK - FORM 2</h1>              
<table border="0">
    <tr>
        <td width="15%">&nbsp;</td>
        <td width="70%" align="center">Instructions: This form should be completed be completed by a staff with the
            volunteer in a face-to- face meeting 15 days after arrival.
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
    <tr><th colspan="3">Accommodation</th></tr>
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
     <tr>
       <td>Tell us about your experience so far at your accommodation?</td>
       <td></td>
       <td>{$rs['accommodation_experience_desc']}</td>
     </tr>
     <tr><th colspan="3">Programme/Project</th></tr>    
    <tr>
      <td>Are you working the required 5 hours?</td>
      <td>_{$rs['working_required_hours']}_</td>
      <td>{$rs['working_required_hours_desc']}</td>
    </tr>
    <tr>
      <td>Are getting enough to do?</td>
      <td>_{$rs['getting_enough_to_do']}_</td>
      <td>{$rs['getting_enough_to_do_desc']}</td>
    </tr>
    <tr>
       <td>Do you have enough resources to carry out your work?</td>
       <td>_{$rs['resources_to_do_work']}_</td>
       <td>{$rs['resources_to_do_work_desc']}</td>
     </tr>
     <tr>
       <td>What tasks have you been doing so far?</td>
       <td></td>
       <td>{$rs['tasks_desc']}</td>
     </tr>
     <tr>
       <td>Are your tasks meeting your expectations?</td>
       <td>_{$rs['meeting_your_expectations']}_</td>
       <td>{$rs['meeting_your_expectations_desc']}</td>
     </tr>
    <tr>
      <td>Are you adjusting to the culture, policies and procedures at work?</td>
      <td>_{$rs['adjusting_to_culture']}_</td>
      <td>{$rs['adjusting_to_culture_desc']}</td>
    </tr>
    <tr>
      <td>Are the comfortable with the staff?</td>
      <td>_{$rs['comfortable_with_staff']}_</td>
      <td>{$rs['comfortable_with_staff_desc']}</td>
    </tr>
    <tr>
       <td>Have you had any questions?</td>
       <td>_{$rs['questions']}_</td>
       <td>{$rs['questions_desc']}</td>
    </tr>
    <tr>
       <td>Have your questions been adequately dealt with?</td>
       <td>_{$rs['questions_been_adequately']}_</td>
       <td>{$rs['questions_been_adequately_desc']}</td>
     </tr>
    <tr>
      <td>Is there anything else you would like to do?</td>
      <td>_{$rs['anything_else']}_</td>
      <td>{$rs['anything_else_desc']}</td>
    </tr>
    <tr>
      <td>Have you attended the workshops organized by RSVP?</td>
      <td>_{$rs['attended_workshops']}_</td>
      <td>{$rs['attended_workshops_desc']}</td>
    </tr>
    <tr>
       <td>Were the topics useful to your work?</td>
       <td>_{$rs['topics_useful']}_</td>
       <td>{$rs['topics_useful_desc']}</td>
    </tr>    
    <tr>
      <td>Do you have suggestions on topics that could be covered?</td>
      <td>_{$rs['topics_useful']}_</td>
      <td>{$rs['topics_useful_desc']}</td>
    </tr>
    <tr>
       <td>Tell us about your experience so far at your work?</td>
       <td></td>
       <td>{$rs['experience_at_work_desc']}</td>
    </tr>      
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
       <td>Do you have any health or safety concerns?</td>
       <td>_{$rs['health_safety_concerns']}_</td>
       <td>{$rs['health_safety_concerns_desc']}</td>
     </tr>
    <tr><th colspan="3">RSVP Staff</th></tr>
    <tr>
        <td>Have you been able to reach RSVP staff when needed?</td>
        <td>_{$rs['reach_staff']}_</td>
        <td>{$rs['reach_staff_desc']}</td>
     </tr>
     <tr>
       <td>Is there enough contact with you and RSVP?</td>
       <td>_{$rs['enough_contact_with_rsvp']}_</td>
       <td>{$rs['enough_contact_with_rsvp_desc']}</td>
    </tr>
    <tr><th colspan="3">Adapting to the Culture</th></tr>
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
EOD;
       
//2Volunteer Feedback – Form 1 (May 2016)
       
$html = str_replace('_1_', 'Yes', $html); 
$html = str_replace('_0_', 'No', $html);
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('volunteer-feedback-form1.pdf', 'I');
?>