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
            <input type="text" class="form-control" name="search_fname" placeholder="First Name" id="search_fname" />
        </div>
        <div class="col-lg-3">
            <input type="text" class="form-control" name="search_mname" placeholder="Middle Name" id="search_mname" />
        </div>
        <div class="col-lg-3">
            <input type="text" class="form-control" name="search_lname" placeholder="Last Name" id="search_lname" />
        </div>
        <div class="col-lg-3">
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
        	<th>Name</th>
            <th>Application Date</th>
            <th>Destination</th>
            <th>Programme/Project</th>
            <th>Status</th>
            <th>Updated By</th>
            <th>Deposit Received</th>
            <th>Deposit Date</th>
            <th>Marketing Contact</th>
            <th>Nationality</th>
        </tr>
        <tbody id="data">
        <tr>
        	<td nowrap><a href="volunteer_info.php?id={id}">{fullname}</a></td>
            <td>{date_added}</td>
            <td>{country}</td>
            <td>{programme}</td>
            <td>{status}</td>
            <td>{admin}</td>
            <td>{deposit}</td>
            <td>{deposit_date}</td>
            <td>{marketing}</td>
            <td>{nationality}</td>
        </tr>
        </tbody>
        <tfoot>
        	<tr>
            	<td colspan="10" id="pager"></td>
            </tr>
        </tfoot>
    </table>
    </form>
</div>    
</div>