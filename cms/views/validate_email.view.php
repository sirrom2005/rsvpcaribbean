<?php defined('RAXANPDI')||exit(); ?>
<h2>Check Email Address</h2>
<form name="sentMessage" id="contactForm" method="post" action="index.php?vu=validate_email" novalidate>
    <label>Enter each email in a separate line:</label>
    <textarea rows="10" cols="100" class="form-control" name="email" id="email" required data-validation-required-message="Please enter email address" maxlength="999" style="resize:none"></textarea>
    <!-- For success/fail messages -->
    <div class="row text-right">
    	<button type="submit" class="btn btn-primary" xt-bind="click,validateEmail">Check</button>
    </div>
</form>

<div id="success"></div>