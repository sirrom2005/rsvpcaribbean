<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Insurance Details</span>
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
            <p><label class="control-label col-lg-3">Programme/Project</label>: {programme}</p>
            <p><label class="control-label col-lg-3">Date of Arrival</label>: {arrival_date}</p>
            <p><label class="control-label col-lg-3">Destination</label>: {country}</p>
            <p><label class="control-label col-lg-3">Updated By</label>: {admin}</p>
            <p><label class="control-label col-lg-3">Date</label>: {date_added}</p>
        </div>
    </div>   
</div>
<hr>
<div class="col-md-12">
    <form name="frm" id="frm" method="post" class="form-horizontal">
        <label>Name of Insurance Company:</label>
        <input type="text" class="form-control" name="company" id="company" required data-validation-required-message="Please enter insurance company name" placeholder="Please enter insurance company name" />
        <label>Telephone Number:</label>
        <input type="text" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter company phone number" placeholder="Please enter company phone number" />
        <label>Email Address of Company:</label>
        <input type="text" class="form-control" name="email" id="email" required data-validation-required-message="Please enter company email" placeholder="Please enter company email" />
        <label>Policy Number:</label>
        <input type="text" class="form-control" name="policy_number" id="policy_number" required data-validation-required-message="Please enter policy number" placeholder="Please enter policy number" />
        <label>Other Information:</label>
        <textarea rows="5" cols="100" class="form-control" name="other_information" id="other_information" placeholder="Please enter other information" maxlength="999" style="resize:none"></textarea>
        <div class="row text-right">
            <button type="submit" class="btn btn-primary" id="detailbtn">Save</button>
        </div>
    </form>
</div>
