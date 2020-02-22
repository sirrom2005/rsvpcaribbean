<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="views/css/colorbox.css" />
<script src="views/js/jquery.colorbox-min.js"></script>
<script>
$(document).ready(function(){
	$(".view").colorbox({inline:true, width:"50%"});
});
</script>
<h2>Locate Volunteer</h2>

<div class="row">
    <form method="post" name="frm" id="frm" >
    	<div class="col-lg-3">
        	<label class="control-label">First Name:</label>
        	<input type="text" class="form-control" name="fname" id="fname" />
        </div>
        <div class="col-lg-3">
            <label class="control-label">Middle Name:</label>
            <input type="text" class="form-control" name="mname" id="mname" />
        </div>
        <div class="col-lg-3">
            <label class="control-label">Last Name:</label>
            <input type="text" class="form-control" name="fname" id="fname" />
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
            <th>Admin</th>
            <th>Account</th>
            <th width="60"></th>
        </tr>
        <tbody id="data">
        <tr>
            <td>{fullname}</td>
            <td>{email}</td>
            <td>{status}</td>
            <td>{admin}</td>
            <td><a href="#{id}" class="{btn_text} account_status">{btn_text}</a></td>
            <td nowrap>
            	<a class="view" href="#summery{id}" title="view summary"></a>
                <a class="edit" href="view-volunteer.php?id={id}" title="view volunteer information"></a>
                
               <div style='display:none'>
                    <div id='summery{id}' style='padding:10px; background:#fff;'>
                        <h3>Volunteer Summery Details</h3>
                        <p><label>Name</label> 	{fullname}</p>
                        <p><label>Date of Birth</label> {dob}</p>
                        <p><label>Country</label> {country}</p>
                        <p><label>Telephone number</label> {phone}</p>
                        <p><label>E-Mail Address</label> {email}</p>
                        <p><label>Educational Status</label> {current_status}</p>
                        <p><label>Programme/Project</label> - </p>
                        <p><label>Date of Application</label> - </p>
                        <p><label>Date of Arrival</label> - </p>
                        <p><label>Destination</label> - </p>
                        <p><label>Balance</label> - </p>
                    </div>
                </div>
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


