<?php defined('RAXANPDI')||exit(); ?>
<style>
tr#dataList td{text-align:center;}
#dataList a{display:block;}
#dataList a.del{color:red; font-weight:bold; font-size:12px; border-top:dotted 1px #999999;}
</style>
<div class="row">
    <div class="col-md-9">
        <span class="pageHeading">Newsletter</span>
    </div>
</div>
<hr>
<h3>Filter Newsletter</h3>
<div class="row">
    <div class="col-md-6">
        <select name="year" id="year" class="form-control filter" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
</div>
<table id="dataList" class="table-bordered newsletter">
<tr>
	<th width="8%">Jan</th>
    <th width="8%">Feb</th>
    <th width="8%">Mar</th>
    <th width="8%">Apr</th>
    <th width="8%">May</th>
    <th width="8%">Jun</th>
    <th width="8%">Jul</th>
    <th width="8%">Aug</th>
    <th width="8%">Sep</th>
    <th width="8%">Oct</th>
    <th width="8%">Nov</th>
    <th width="8%">Dec</th>
</tr>
</table>
<hr>
<h3>Upload Newsletter</h3>
<form name="frm" id="frm" method="post" >
<div class="row">
    <div class="col-md-4">
        <select name="country_id" id="country_id" class="form-control filter" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
    <div class="col-md-4">
        <select name="year_id" id="year_id" class="form-control filter" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
    <div class="col-md-4">
        <select name="month_id" id="month_id" class="form-control filter" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
</div>
<div id="fileUploadert"></div>
</form>