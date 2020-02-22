<?php defined('RAXANPDI')||exit(); ?>
<style>
    #info a,#info a:hover,#info a:visited{color:white;text-decoration:none;font-weight:bold;}
</style>
<h2>HomePage</h2>
<div id="info" xt-delegate="a #click,goToList">
    <div class="bg-warning">
        <a href="#acceptance" class="bg-primary" style="padding:5px; display: block;"><span style="float:right;">{acceptance}>></span>Waiting on Acceptance</a>
        <ul style="color:black;">
            <li>Check if deposit was received</li>
            <li>Check if volunteer meets the requirement</li>
            <li>Check if dates, duration, programme, project are available</li>
            <li>Accept volunteer </li>   
        </ul>
    </div>

    <div class="bg-warning">
        <a href="#acceptance_email" class="bg-primary" style="padding:5px; display: block;"><span style="float:right;">{acceptance_letter}>></span>Waiting on Email Acceptance</a>
        <ul style="color:black;">
            <li>Send acceptance email</li>  
        </ul>
    </div>

    <div class="bg-warning">
        <a href="#bal_reminder1" class="bg-primary" style="padding:5px; display: block;"><span style="float:right;">0>></span>Balance Reminder #1</a>
        <ul>
            <li>Send balance reminder email</li>  
        </ul>
    </div>

    <div class="bg-warning">
        <a href="#bal_reminder2" class="bg-primary" style="padding:5px; display: block;"><span style="float:right;">0>></span>Balance Reminder #2</a>
        <ul>
            <li>Send balance reminder email</li>  
        </ul>
    </div>

    <div class="bg-warning">
        <a href="#bal_reminder3" h4 class="bg-primary" style="padding:5px; display: block;"><span style="float:right;">0>></span>Final Balance Reminder</a>
        <ul>
            <li>Send final balance reminder email</li>  
        </ul>
    </div>
</div>
<hr>
<div xt-delegate="select #change,getInfoForCounty">
<select name="country_db" id="country_db" class="form-control" >
    <option value="{id}" >{name}</option>
</select>
</div>