<?php defined('RAXANPDI')||exit(); ?>
<style>
#frm table td{ padding-right:20px;}
label{ font-weight:normal;}
th label{ font-weight:bold;}
</style>

<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Administration</span>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
    <form name="frm" id="frm" method="post" class="form-horizontal">  
    <table>
        <tr>
            <td><label for="welcome_call">Welcome Call</label></td>
            <th><label><input type="checkbox" value="1" id="welcome_call" name="welcome_call">Complete</label></th>
        </tr>
        <tr>
            <td><label for="acceptance_letter">Formal Welcome and Acceptance Letter</label></td>
            <th><label><input type="checkbox" value="1" id="acceptance_letter" name="acceptance_letter"> Complete</label></th>
        </tr>
        <!--tr>
            <td>Deposit Paid</td>
            <td><label><input type="checkbox" value="1" name="deposit_paid"> Complete</label></td>
        </tr-->
        <tr>
            <td><label for="rsvp_webpage">RSVP Webpage</label></td>
            <th><label><input type="checkbox" value="1" id="rsvp_webpage" name="rsvp_webpage"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="pre_departure_email_1">Pre-Departure Email # 1</label></td>
            <th><label><input type="checkbox" value="1" id="pre_departure_email_1" name="pre_departure_email_1"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="medical_insurance">Travel and Medical Insurance</label></td>
            <th><label><input type="checkbox" value="1" id="medical_insurance" name="medical_insurance"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="curriculum_vitae">Curriculum Vitae</label></td>
            <th><label><input type="checkbox" value="1" id="curriculum_vitae" name="curriculum_vitae"> Complete</label></td>
        </tr>
        <tr>
            <td><label for="medical_report">Medical Report</label></td>
            <th><label><input type="checkbox" value="1" id="medical_report" name="medical_report"> Complete</label></th>
        </tr>    
        <tr>
            <td><label for="criminal_record">Criminal Record Check</label></td>
            <th><label><input type="checkbox" value="1" id="criminal_record" name="criminal_record"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="work_permit_exemption">Work Permit Exemption</label></td>
            <th><label><input type="checkbox" value="1" id="work_permit_exemption" name="work_permit_exemption"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="visa">Visa</label></td>
            <th><label><input type="checkbox" value="1" id="visa" name="visa"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="pre_departure_email_2">Pre-Departure Email # 2</label></td>
            <th><label><input type="checkbox" value="1" id="pre_departure_email_2" name="pre_departure_email_2"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="flight_detail">Flight Detail</label></td>
            <th><label><input type="checkbox" value="1" id="flight_detail" name="flight_detail"> Complete</label></th>
        </tr>  
        <tr>
            <td><label for="phone_call_2">Telephone Call #2</label></td>
            <th><label><input type="checkbox" value="1" id="phone_call_2" name="phone_call_2"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="accommodation_details">Accommodation Details</label></td>
            <th><label><input type="checkbox" value="1" id="accommodation_details" name="accommodation_details"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="project_detail">Programme/Project Detail</label></td>
            <th><label><input type="checkbox" value="1" id="project_detail" name="project_detail"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="pre_departure_email_3">Pre-Departure Email # 3</label></td>
            <th><label><input type="checkbox" value="1" id="pre_departure_email_3" name="pre_departure_email_3"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="driver_detail">Driver Detail</label></td>
            <th><label><input type="checkbox" value="1" id="driver_detail" name="driver_detail"> Complete</label></th>
        </tr>
        <tr>
            <td><label for="phone_call_3">Telephone Call #3</label></td>
            <th><label><input type="checkbox" value="1" id="phone_call_3" name="phone_call_3"> Complete</label></th>
        </tr>   
        <tr>
            <td><label for="last_phone_all">Last Phone Call</label></td>
            <th><label><input type="checkbox" value="1" id="last_phone_all" name="last_phone_all"> Complete</label></th>
        </tr> 
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>   
        <tr>
            <td colspan="2" class="row text-right">
            	<a class="btn btn-default" id="export">Export Full List</a>
                <button type="submit" class="btn btn-primary" id="btn">Save</button>
            </td>
        </tr> 
    </table>
	</form>
    </div>
</div>