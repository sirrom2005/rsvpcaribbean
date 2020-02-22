<?php defined('RAXANPDI')||exit(); ?>

<div class="row">
    <div class="col-md-9">
        <span class="pageHeading">Projects</span>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
</div>

<hr>
<div id="datatable" class="list-group">
	<a href="project.php?pro={id}" class="list-group-item pro">{name}</a>
</div>