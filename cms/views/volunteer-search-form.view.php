<?php defined('RAXANPDI')||exit(); ?>
<!--link rel="stylesheet" href="views/css/colorbox.css" />
<script src="views/js/jquery.colorbox-min.js"></script>
<script>
$(document).ready(function(){
	$(".view").colorbox({inline:true, width:"50%"});
});
</script-->
<h2></h2>

<div class="row">
    <form method="post" name="frm" id="frm" >
    	<div class="col-lg-3">
        	<label class="control-label">First Name:</label>
        	<input type="text" class="form-control" name="search_fname" id="search_fname" />
        </div>
        <div class="col-lg-3">
            <label class="control-label">Middle Name:</label>
            <input type="text" class="form-control" name="search_mname" id="search_mname" />
        </div>
        <div class="col-lg-3">
            <label class="control-label">Last Name:</label>
            <input type="text" class="form-control" name="search_lname" id="search_lname" />
        </div>
        <div class="col-lg-3">
            <label class="control-label">Status:</label>
        	<select name="status" id="status" class="form-control" >
                <option value="{id}" >{name}</option>
            </select>
        </div>

        <div class="row text-right">
            <button type="submit" class="btn btn-primary" id="btn">Search</button>
        </div>
    </form>
</div>
<hr>	
<div class="row">
<div class="col-lg-12">
    <form name="frm" id="frm" method="post">
    <table class="table table-bordered table-hover">
    	<tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Status</th>
            <th>Phone</th>
            <th width="20"></th>
        </tr>
        <tbody id="data">
        <tr>
            <td>{firstname} {lastname}</td>
            <td>{email}</td>
            <td>{status}</td>
            <td>{phone}</td>
            <td nowrap>
            	<a class="view" href="{page_url}" title="view information"></a>
            </td>
        </tr>
        </tbody>
        <tfoot>
        	<tr>
            	<td colspan="6" id="pager"></td>
            </tr>
        </tfoot>
    </table>
    </form>
</div>    
</div>


