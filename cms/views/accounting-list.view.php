<?php defined('RAXANPDI')||exit(); ?>

<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Accounting</span>
    </div>
</div>

<div class="col-md-12">   
<form name="frm1" id="frm1" method="post" class="form-horizontal">            
    <div class="col-md-6">
        <select name="country_id" id="country_id" class="form-control" required data-validation-required-message="Select office" >
            <option value="{id}">{name}</option>
        </select>
        <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Enter name" placeholder="Enter name" />
        <input type="text" class="form-control" name="open_balance" id="open_balance" required data-validation-required-message="Enter open balance" placeholder="Enter open balance" />
        <input type="hidden" name="id" id="id" />
        <button type="submit" class="btn btn-primary" id="add">Create Account</button>       
    </div>
</form>  
</div>
<p>&nbsp;</p>
<div class="col-md-12">
<form name="frm" id="frm" method="post">
<table class="table table-bordered table-hover">
    <tr>
        <th>Name</th>
        <th>Open Balance</th>
        <th>Office</th>
        <th width="20"></th>
    </tr>
    <tbody id="data">
    <tr>
        <td>{name}</td>
        <td>{open_balance}</td>
        <td>{country}</td>
        <td nowrap>
        	<a class="view" href="accounting.php?id={id}" title="view"></a>
        	<a class="edit" href="#{id}" title="edit"></a>
            <a class="delete" href="#{id}" title="remove" data-event-confirm="Are you sure you want to remove this record?"></a>
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

