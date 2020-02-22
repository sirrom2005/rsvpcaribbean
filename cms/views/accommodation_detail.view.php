<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Accommodation Details</span>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div id='summery'>
            <p><label class="control-label col-lg-3">Name:</label> {fullname}</p>
            <p><label class="control-label col-lg-3">Date of Birth:</label> {dob}</p>
            <p><label class="control-label col-lg-3">Country:</label> {country}</p>
            <p><label class="control-label col-lg-3">Telephone:</label> {phone}</p>
            <p><label class="control-label col-lg-3">E-Mail:</label> {email}</p>
            <p><label class="control-label col-lg-3">Educational Status:</label> {current_status}</p>
            <p><label class="control-label col-lg-3">Special Diet:</label> - </p>
            <p><label class="control-label col-lg-3">Special Interest:</label> - </p>
            <p><label class="control-label col-lg-3">Programme/Project:</label> - </p>
            <p><label class="control-label col-lg-3">Date of Arrival:</label> - </p>
            <p><label class="control-label col-lg-3">Destination:</label> - </p>
        </div>
    </div>   
</div>
<hr>

<div class="row">
    <div class="col-lg-12"><h4>Host Family Assignment # 1</h4></div>
    <div class="col-lg-4">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select database" >
            <option value="{id}" >{name}</option>
        </select>
    </div>   
    <div class="col-lg-4">
        <select name="programme_project" id="programme_project" class="form-control filter" required data-validation-required-message="Please select programme/project" >
            <option value="{id}" >{name}</option>
        </select>
    </div> 
    <div class="col-lg-4">
        <select name="host" id="hodt" class="form-control filter" required data-validation-required-message="Please select host family" >
            <option value="{id}" >{name}</option>
        </select>
    </div> 
</div>
<div class="row">
    <div class="col-lg-4">
        <input type="date" class="form-control" name="start_date" id="start_date" required data-validation-required-message="Please enter start date" />
    </div>   
    <div class="col-lg-4">
        <input type="date" class="form-control" name="end_date" id="end_date" required data-validation-required-message="Please enter end date" />
    </div>   
</div>


<div class="row">
    <div class="col-lg-12"><h4>Host Family Assignment # 2</h4></div>
    <div class="col-lg-4">
        <select name="country_db2" id="country_db2" class="form-control filter" required data-validation-required-message="Please select database" >
            <option value="{id}" >{name}</option>
        </select>
    </div>   
    <div class="col-lg-4">
        <select name="programme_project" id="programme_project" class="form-control filter" required data-validation-required-message="Please select programme/project" >
            <option value="{id}" >{name}</option>
        </select>
    </div> 
    <div class="col-lg-4">
        <select name="host" id="hodt" class="form-control filter" required data-validation-required-message="Please select host family" >
            <option value="{id}" >{name}</option>
        </select>
    </div> 
</div>
<div class="row">
    <div class="col-lg-4">
        <input type="date" class="form-control" name="start_date" id="start_date" required data-validation-required-message="Please enter start date" />
    </div>   
    <div class="col-lg-4">
        <input type="date" class="form-control" name="end_date" id="end_date" required data-validation-required-message="Please enter end date" />
    </div>   
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="row text-right">
            <button type="submit" class="btn btn-default" id="btn">Save</button>
        </div>
    </div>
</div>    