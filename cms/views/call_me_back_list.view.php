<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Call Me Back List</span>
    </div>
</div>
<hr>
<form name="frm" action="" method="post" class="row">
    <table class="table table-bordered table-hover">
    	<tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Telephone Number</th>
            <th>Call Made</th>
            <th width="10"></th>
        </tr>
        <tbody id="data">
        <tr>
            <td>{first-name}</td>
            <td>{last-name}</td>
            <td>{email}</td>
            <td>{telephone-number}</td>
            <td>{callback}</td>
            <td nowrap>
            	<a class='view' href="call_me_back_info.php?id={id}" title="View Info"></a>
            </td>
        </tr>
        </tbody>
        <tfoot>
        	<tr>
            	<td colspan="7" id="pager"></td>
            </tr>
        </tfoot>
    </table>
</form>

