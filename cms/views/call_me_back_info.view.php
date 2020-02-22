<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
    $("#date_made").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Call Back</span>
    </div>
</div>
<hr>

<div class="row" id="info">
<form name="frm" action="" method="post">
    <table class="table">
    	<tr>
            <th>{first-name} {last-name}</th>
            <th>{telephone-number}</th>
            <th>{email}</th>
        </tr>
        <tr>
            <td colspan="2"><b>Organization:</b> {organization}</td>
            <td><b>Source:</b> {hear-about}</td>
        </tr>
        <tr>
            <td><b>Best time to call:</b> {best-time-call}</td>
            <td><b>Newsletter:</b> {newsletter}</td>
            <td><b>Date added:</b> {date_added}</td>
        </tr>
        <tr>
            <td colspan="3">
                <h4 class="text-center">Message</h4>
                {message}
            </td>
        </tr>
        <tr>
            <td colspan="3"><textarea rows="5" cols="100" class="form-control" name="note" id="note" placeholder="Please enter staff notes" maxlength="999" style="resize:none"></textarea></td>
        </tr>
        <tr>
            <td><label><input type="checkbox" name="callback" id="callback" value="1"> Called Back</label></td>
            <td><input type="text" name="date_made" id="date_made" class="form-control" placeholder="Date Made"></td>
            <td><input type="text" name="call_made_by" id="call_made_by" class="form-control" placeholder="Call Made By"></td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="row text-right">
                    <button type="submit" class="btn btn-primary" id="btn">Update</button>
                </div>
            </td>
        </tr>
    </table>
</form>
</div>
         
  
      
      
