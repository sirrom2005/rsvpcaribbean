<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	//$("#start_date").datepicker();
	$("#start_date").datepicker({dateFormat: 'yy-mm-dd'});
	$("#end_date").datepicker({dateFormat: 'yy-mm-dd'});
	$("#start_date_2").datepicker({dateFormat: 'yy-mm-dd'});
	$("#end_date_2").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Programme and Project Details</span>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div id='summery'>
            <p><label class="control-label col-lg-3">Name</label>: {fullname}</p>
            <p><label class="control-label col-lg-3">Date of Birth</label>: {dob}</p>
            <p><label class="control-label col-lg-3">Country</label>: {country}</p>
            <p><label class="control-label col-lg-3">Telephone</label>: {phone}</p>
            <p><label class="control-label col-lg-3">E-Mail</label>: {email}</p>
            <p><label class="control-label col-lg-3">Educational Status</label>: {current_status}</p>
            <p><label class="control-label col-lg-3">Special Diet</label>: {special_diet}</p>
            <p><label class="control-label col-lg-3">Special Interest</label>: {special_interest}</p>
            <p><label class="control-label col-lg-3">Programme/Project</label>: {programme}</p>
            <p><label class="control-label col-lg-3">Date of Arrival</label>: {arrival_date}</p>
            <p><label class="control-label col-lg-3">Destination</label>: {country}</p>
            <p><label class="control-label col-lg-3">Host Family Preference</label>: {host_family_preference}</p>
        </div>
    </div>   
</div>
<hr>
<form name="frm" id="frm" method="post" > 
<fieldset style="clear:both;">
    <legend id="legendTitle1">Programme/Project Assignment # 1</legend>
    <div class="row">
        <div class="col-lg-4">
            <select name="country_id" id="country_id" class="form-control filter" required data-validation-required-message="Please select database" >
                <option value="{id}" >{name}</option>
            </select>
        </div>  
        <div class="col-lg-4">
            <select name="project_category_id" id="project_category_id" class="form-control filter" required data-validation-required-message="Please select programme/project" >                
            </select>
        </div>  
        <div class="col-lg-4">
            <select name="programme_project_id" id="programme_project_id" class="form-control filter" required data-validation-required-message="Please select programme/project" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-4">
            <select name="host_id" id="host_id" class="form-control filter" required data-validation-required-message="Please select host family" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
        <div class="col-lg-4">
            <input type="date" class="form-control" name="start_date" id="start_date" required data-validation-required-message="Enter start date: YYYY-MM-DD" placeholder="Enter start date: YYYY-MM-DD"  />
        </div>   
        <div class="col-lg-4">
            <input type="date" class="form-control" name="end_date" id="end_date" required data-validation-required-message="Enter end date: YYYY-MM-DD" placeholder="Enter end date: YYYY-MM-DD" />
        </div>   
    </div>
</fieldset>

<fieldset style="clear:both;">
    <legend id="legendTitle1">Programme/Project Assignment # 2</legend>
    <div class="row">
        <div class="col-lg-4">
            <select name="country_id_2" id="country_id_2" class="form-control filter" >
                <option value="{id}" >{name}</option>
            </select>
        </div>   
        <div class="col-lg-4">
            <select name="project_category_id_2" id="project_category_id_2" class="form-control filter" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
        <div class="col-lg-4">
            <select name="programme_project_id_2" id="programme_project_id_2" class="form-control filter" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
    </div>
    <div class="row">
        <div class="col-lg-4">
            <select name="host_id_2" id="host_id_2" class="form-control filter" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
        <div class="col-lg-4">
            <input type="date" class="form-control" name="start_date_2" id="start_date_2" placeholder="Enter start date: YYYY-MM-DD" />
        </div>   
        <div class="col-lg-4">
            <input type="date" class="form-control" name="end_date_2" id="end_date_2" placeholder="Enter end date: YYYY-MM-DD" />
        </div>   
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row text-right">
                <button type="submit" class="btn btn-default" id="btn">Done</button>
            </div>
        </div>
    </div>
</fieldset>
</form>  