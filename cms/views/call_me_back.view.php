<?php defined('RAXANPDI')||exit(); ?>
<h2>Call Back List</h2>
<div class="row">
<div class="col-md-6">
<form name="frm" id="frm" method="post">
    <label>First name:</label>
    <input type="text" class="form-control" name="fname" id="fname" required data-validation-required-message="Please enter first name" />
    
     <label>Last name:</label>
    <input type="text" class="form-control" name="lname" id="lname"  />
    
    <label>Email:</label>
    <input type="text" class="form-control" name="email" id="email" required data-validation-required-message="Please enter email address" />
    
     <label>Phone number:</label>
    <input type="text" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter phone number" />
  
    <label>What would you like to ask us about?:</label>
    <textarea rows="5" cols="100" class="form-control" name="question" id="question" required maxlength="999" style="resize:none"></textarea>

    <label>Volunteer Advisor Notes:</label>
    <textarea rows="5" cols="100" class="form-control" name="notes" id="notes" maxlength="999" style="resize:none"></textarea>

    <label>Zone</label>
    <select name="country_id" id="country_id" class="form-control">
        <option value="{id}">{name}</option>
    </select>
    <div class="row">
        <div class="col-md-3"><label>Call Back</label></div>
        <div class="col-md-1"><label>Yes <input type="radio" name="callback" value="1" class="radio-inline"></label></div>
        <div class="col-md-1"><label>No <input type="radio"  name="callback" value="0" class="radio-inline" checked></label></div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3"><button type="button" class="btn btn-warning" xt-bind="#click,callBackList">Show List</button></div>
        <div class="col-md-3"><button type="reset" class="btn btn-warning">Reset</button></div>
        <div class="col-md-3"><button type="submit" class="btn btn-primary" xt-bind="#click,saveCallback">Save</button></div>
    </div>
</form>
</div>
</div>

<div id="success"></div>