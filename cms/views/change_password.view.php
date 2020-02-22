<?php defined('RAXANPDI')||exit(); ?>
<h2>Change Password</h2>
<div class="row">
<div class="col-md-6">
<form name="frm" id="frm" method="post">
    <label>Old Password:</label>
    <input type="password" class="form-control" name="old_password" id="old_password" required data-validation-required-message="Please enter password" />

    <label>New Password:</label>
    <input type="password" class="form-control" name="password" id="password" required data-validation-required-message="Please enter password" />
    
    <label>Confirm New Password:</label>
    <input type="password" class="form-control" name="password2" id="password2" required data-validation-required-message="Please re-type password" />

    <div class="row text-right">
        <button type="submit" class="btn btn-danger" id="btn">Change</button>
    </div>
</form>
</div>
</div>

<div id="success"></div>