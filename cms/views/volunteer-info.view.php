<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $("#dob").datepicker({dateFormat: 'yy-mm-dd'});
    $("#start_date_1").datepicker({dateFormat: 'yy-mm-dd'});
    $("#end_date_1").datepicker({dateFormat: 'yy-mm-dd'});
    $("#start_date_2").datepicker({dateFormat: 'yy-mm-dd'});
    $("#end_date_2").datepicker({dateFormat: 'yy-mm-dd'});       
});
</script>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Volunteer Information</span>
    </div>
</div>
<hr>

<div class="col-md-12">
    <ul id="myTab" class="nav nav-tabs nav-justified">
        <li class="active" style="white-space:nowrap;"><a href="#service-one" data-toggle="tab">About Volunteer</a></li>
        <li class="" style="white-space:nowrap;"><a href="#service-two" data-toggle="tab">Programme/Project</a></li>
        <li class="" style="white-space:nowrap;"><a href="#service-three" data-toggle="tab">Add-Ons</a></li>
        <li class="" style="white-space:nowrap;"><a href="#service-four" data-toggle="tab">Other Information</a></li>
        <li class="" style="white-space:nowrap;"><a href="#service-five" data-toggle="tab">Volunteer Coordination Information</a></li>
        <li class="" style="white-space:nowrap;"><a href="#service-six" data-toggle="tab">Marketing Executive Comments</a></li>
    </ul>
</div>

<div class="col-md-12">
<div id="myTabContent" class="tab-content">
	<div class="tab-pane fade active in" id="service-one">
<form name="frm" id="frm" method="post">    
<div class="row">
	<div class="col-md-6 col-sm-6">
    	<h4>About Yourself</h4>
    	<b>Volunteer ID#:</b><input type="text" name="id" id="id" style="border:0;" readonly />
    </div>
	<div class="col-md-6 col-sm-6 text-right">
    	<a href="" class="btn btn-primary" id="btnExport" target="_blank">Generate Doc</a>
    </div>
    
</div>
<hr>

<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Title* Please Select:</p>
            <select class="form-control" id="title_id" name="title_id">
            	<option value="{id}">{name}</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. First Name*</p><input name="firstname" id="firstname" class="form-control" placeholder="Your First Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Middle Name</p><input name="middlename" id="middlename" class="form-control" placeholder="Your Middle Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Last Name*</p><input name="lastname" id="lastname" class="form-control" placeholder="Your Last Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Date of
            Birth*</p><input type="date" name="dob" id="dob" class="form-control" placeholder="YYYY-MM-DD" />
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Nationality*</p>
            <select id="nationality_id" name="nationality_id" class="form-control" >
            	<option value="{id}">{name}</option>
            </select>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Country of Birth*</p>
            <select id="birth_country_id" name="birth_country_id" class="form-control" >
            	<option value="{id}">{name}</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Exact Name on Your Passport</p>
            <input name="name_on_passport" id="name_on_passport" class="form-control" placeholder="Your Passport Name" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>9. Email Address*</p><input id="email" name="email" class="form-control" placeholder="Your Email Address" required type="email">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>10. Alternative Email Address</p>
            <input id="alternative_email" name="alternative_email" class="form-control" placeholder="Alternative Email" type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>11. Mobile Phone
            Number*</p><input id="mobile_phone" name="mobile_phone" class="form-control" placeholder="Mobile Number" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>12. Skype Name</p>
            <input id="skype" name="skype" class="form-control" placeholder="Skype Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>13. Home Address*</p>
            <div class="add-input">
                <input id="address1" name="address1" class="form-control" placeholder="Address Line 1" required type="text"> 
                <input id="address2" name="address2" class="form-control" placeholder="Address Line 2" type="text">
                <input id="address3" name="address3" class="form-control" placeholder="Town/City" required type="text">
                <select id="country_id" name="country_id" required class="form-control" >
                	<option value="{id}">{name}</option>
                </select>
                <select id="state_id" name="state_id" required class="form-control" >
                	<option value="{id}">{name}</option>
                </select>
                <input id="zip_code" name="zip_code" class="form-control" placeholder="Zip code/Post or Country Code" type="text">
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>14. Home Phone
            Number*</p>
            <input id="home_phone" name="home_phone" class="form-control" placeholder="Home Phone Number" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>15. Most convenient
            time to speak?</p>
            <select id="time_to_speak" name="time_to_speak" class="form-control">
                <option value="7:00:00">7am – 12pm</option>
                <option value="12:00:00">12pm – 5pm</option>
                <option value="17:00:00">5pm – 10pm</option>
            </select>
        </div>
    </div>
</div>
<hr>
<h4>Emergency Contact</h4>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Title* Please Select:</p>
            <select id="guardian_title_id" name="guardian_title_id" class="form-control">
            	<option value="{id}">{name}</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. First Name*</p><input id="guardian_firstname" name="guardian_firstname" class="form-control" placeholder="First Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Middle Name</p><input id="guardian_middlename" name="guardian_middlename" class="form-control" placeholder="Middle Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Last Name*</p><input id="guardian_lastname" name="guardian_lastname" class="form-control" placeholder="Last Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Relationship to Applicant*</p>
            <select id="guardian_relationship_type_id" name="guardian_relationship_type_id" class="form-control">
            	<option value="{id}">{name}</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Emergency Telephone Number*</p><input id="guardian_phone" name="guardian_phone" class="form-control" placeholder="Telephonr Number" required type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Emergency Email*</p>
            <input id="guardian_email" name="guardian_email" placeholder="Emergency Email" class="form-control" type="email">
        </div>
    </div>
    <textarea rows="5" cols="100" class="form-control" name="staff_note" id="staff_note" placeholder="Staff Note" maxlength="999" style="resize:none"></textarea>
    <div class="col-md-4 col-sm-4">
    <select id="volunteer_status_type_id" name="volunteer_status_type_id" class="form-control">
    	<option value="{id}">{name}</option>
    </select>
    </div>
</div>
<div class="row text-right">
	<div class="col-md-11 col-sm-12">
        <input type="hidden" name="address_id" id="address_id"   />
    	<button type="submit" class="btn btn-primary" id="infobtn">Save</button>
    </div>
</div>
</form>
    </div>
    
    <div class="tab-pane fade" id="service-two">
        <a href="#" target="_blank" id="btnViewProjInfo" class="btn btn-default">Programme/Project Information</a>
    </div>
    
    <div class="tab-pane fade" id="service-three">
        <form name="lesson" id="lesson" method="post"> 
        <div class="row">
            <div class="col-md-3 col-sm-3">
                English Lesson
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="start_date_1" name="start_date_1" class="form-control" placeholder="Start Date" required type="text">
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="end_date_1" name="end_date_1" class="form-control" placeholder="End Date" required type="text">
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="lessons_1" name="lessons_1" type="hidden" value="English Lesson">
                <input id="duration_1" name="duration_1" class="form-control" placeholder="Duration" required type="text">
            </div>
            
            <div class="col-md-3 col-sm-3">
                Patois Lesson
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="start_date_2" name="start_date_2" class="form-control" placeholder="Start Date" type="text">
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="end_date_2" name="end_date_2" class="form-control" placeholder="End Date" type="text">
            </div>
            <div class="col-md-3 col-sm-3">
                <input id="lessons_2" name="lessons_2" type="hidden" value="Patois Lesson">
                <input id="duration_2" name="duration_2" class="form-control" placeholder="Duration" type="text">
            </div>
            <div class="col-md-12 col-sm-12">
                <textarea rows="5" cols="100" class="form-control" name="staff_notes" id="staff_notes" placeholder="Staff Notes" maxlength="999" style="resize:none"></textarea>
            </div>
            <div class="row text-right">
                <div class="col-md-12 col-sm-12">
                    <button type="submit" class="btn btn-primary" id="infoLesson">Save</button>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="tab-pane fade" id="service-four">
        <form name="frmOtherInfo" id="frmOtherInfo" method="post"> 
        <div class="col-md-12 col-sm-12">
        	<b>Project special interest</b>
            <textarea rows="2" cols="100" class="form-control" name="project_special_interest" id="project_special_interest" placeholder="Special Interest – Programme/Project" maxlength="999" style="resize:none"></textarea>
            <b>Host family preference</b>
            <textarea rows="2" cols="100" class="form-control" name="host_family_preference_desc" id="host_family_preference_desc" placeholder="Special Request – Host Family" maxlength="999" style="resize:none"></textarea>
            <b>Other information</b>
            <textarea rows="2" cols="100" class="form-control" name="other_information" id="other_information" placeholder="Other Details" maxlength="999" style="resize:none"></textarea>
            <div class="row text-right">
                <button type="submit" class="btn btn-primary" id="btnOtherInfo">Save</button>
            </div>
        </div>
        </form>    
    </div>
    
    <div class="tab-pane fade" id="service-five">
    	<form name="frmpref" id="frmpref" method="post"> 
            <div class="col-md-12 col-sm-12">
            <b>Programme/Project Preference</b>
            <textarea rows="2" cols="100" class="form-control" name="project_special_preference" id="project_special_preference" placeholder="Enter Programme/Project Preference" maxlength="999" style="resize:none"></textarea>
            <b>Host Family Preference</b>
            <textarea rows="2" cols="100" class="form-control" name="host_family_preference" id="host_family_preference" placeholder="Enter Host Family Preference" maxlength="999" style="resize:none"></textarea>
            <b>General Information</b>
            <textarea rows="2" cols="100" class="form-control" name="general_information" id="general_information" placeholder="Enter General Information" maxlength="999" style="resize:none"></textarea>
            <div class="row text-right">
                <button type="submit" class="btn btn-primary" id="btnPreference">Save</button>
            </div>
        </form>
        <div class="row">&nbsp;</div>
        <table class="table table-bordered table-striped">
            <tr>
                <th>&nbsp;</th>
                <th>File</th>
                <th style="width:30%;">Type of Document</th>
            </tr>
            <tbody id="photoList">
            <tr>
                <td><a href="#{photoId}" class="delete" data-event-confirm="Are you sure you want to remove this photo?"></a></td>
                <td><a href="../rsvp_photos/{photo}" target="_blank">{file}</a></td>
                <td nowrap>
                	<form name="frmphoto{photoId}" id="frmphoto{photoId}" method="post">
                        <select name="photo_category_id" id="photo_category_id_{photoId}" class="photo_category_id" >
                            <option value="{id}" >{name}</option>
                        </select>
                        <input type="hidden" name="photoid" id="photoid_{photoId}" value="{photoId}">
                        <input type="submit" value="Save" id="photoBtn" class="photoBtn" />
                    </form>
                </td>
            </tr>
            </tbody>
        </table> 
        <div class="col-md-2 col-sm-2">
        	<div id="photoFrm"></div>
        </div>	 
        <div class="col-md-3 col-sm-3">
        	<a href="#" class="refresh" id="refresh">Refresh List</a>
        </div>
        </div>
   
    </div>
    
    <div class="tab-pane fade" id="service-six">
        <form name="frmMarket" id="frmMarket" method="post"> 
        <div class="col-md-12 col-sm-12">
            <textarea rows="5" cols="100" class="form-control" name="note" id="note" placeholder="Marketing Executive Comments" maxlength="999" style="resize:none"></textarea>
            <div class="row text-right">
                <button type="submit" class="btn btn-primary" id="btnMarket">Save</button>
            </div>
        </div>
        </form>    
    </div>
</div>
</div>