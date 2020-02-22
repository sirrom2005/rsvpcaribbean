<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Visa</span>
    </div>
</div>
<hr>
<div class="row" id="summery">
    <div class="col-md-4">
        <b>Name: </b>{fullname}
    </div>
    <div class="col-md-4">
        <b>Date of birth: </b>{dob}
    </div>
    <div class="col-md-4">
        <b>Country: </b>{country}
    </div>   
</div>
<hr>

<form method="post" name="uploadfrm" id="uploadfrm" >
</form>

<ul id="gallery">
    <li>
    	<a href="#{id}" class="delete" data-event-confirm="Are you sure you want to remove this photo?"></a>
    	<a href="../rsvp_docs/visa/{fileName}" target="_blank" >{fileName}</a>
    </li>
</ul>
