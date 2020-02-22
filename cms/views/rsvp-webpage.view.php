<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">RSVP Webpage</span>
    </div>
</div>
<hr>

<div id="summery">
<div class="row">
    <div class="col-md-2">
        <b>Volunteer Name:</b>
    </div>
    <div class="col-md-3">
        {fullname}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <b>Username:</b>
    </div>
    <div class="col-md-3">
        {username}
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <b>Date Created:</b>
    </div>
    <div class="col-md-3">
        {date_added}
    </div>
</div>
</div>
<hr>
<form name="frm" id="frm" method="post">
    <div class="row">
    <h4>Volunteer has access to:</h4>
    <input type="checkbox" value="1" name="access_webpage" id="access_webpage"> RSVP webpage<br>
    <input type="checkbox" value="1" name="access_fundraising_page" id="access_fundraising_page"> Fundraising Page
    </div>
    
    <hr>
    <div class="row">
    <h4>Permission granted to show details to other volunteers with similar:</h4>
    <input type="checkbox" value="1" name="grant_programme" id="grant_programme"> Programme/Project<br>
    <input type="checkbox" value="1" name="grant_partner_agency" id="grant_partner_agency"> Partner Agency<br>
    <input type="checkbox" value="1" name="grant_flight" id="grant_flight"> Flight<br>
    <input type="checkbox" value="1" name="grant_country" id="grant_country"> Country<br>
    </div>
    <hr>
    <input type="hidden" name="volunteer_id" id="volunteer_id" />
    <input class="btn btn-primary" id="btn" type="submit" value="Save" />
</form>

<hr>
<div class="row">
    <div class="col-md-6 text-center">
        <a href="#" class="btn btn-default" id="rsvppage" data-event-confirm="Coming soon">View RSVP Webpage</a>
    </div>
    <div class="col-md-6 text-center">
        <a href="#" class="btn btn-default" id="chgpas" data-event-confirm="New password will be sent to volunteer email">Change Password</a>
    </div>
</div>













