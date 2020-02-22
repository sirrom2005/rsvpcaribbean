<?php defined('RAXANPDI')||exit(); ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  
<script>
$(function() {
	$("#start_date").datepicker();
});
</script>

<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Programme/Project Duration Calculator</span>
    </div>
</div>
<hr>
<form name="sentMessage" id="contactForm" method="post" action="index.php?vu=validate_email" novalidate>
    <div class="col-md-6">
        <label>Start Date:</label>
        <input type="text" class="form-control" name="start_date" id="start_date" required autocomplete="off" />
    </div>
    <div class="col-md-3">
        <label>Duration:</label>
        <input type="text" class="form-control" name="duration" id="duration" required />
    </div>
    <div class="col-md-3">
    	<label>&nbsp;</label>
        <select name="period" id="period" class="form-control">
            <option value="week">Weeks</option>
            <option value="month">Months</option>
        </select>
    </div>
    <!-- For success/fail messages -->
    <div class="row text-right">
    	<button type="submit" class="btn btn-primary" xt-bind="click,dateCalculator">Calculate</button>
    </div>
</form>
<p>&nbsp;</p>
<div class="well">
    <b>Important notes for staff</b>
    <ul>
        <li>Start date is arrival date in country</li>
        <li>Spring Break Project – arrival date is Saturday or Sunday</li>
        <li>Summer Project – arrival date is Saturday or Sunday</li>
        <li>Health and Wellness – arrival date is the last two days before the programme begins</li>
    </ul> 
</div>

<div id="success"></div>



