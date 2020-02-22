<?php defined('RAXANPDI')||exit(); ?>
<h2>Accommodation Note</h2>
<div class="row" id="quick_info">
    <div class="col-md-6"><b>Host Name: </b>{host_name}</div>
    <div class="col-md-6"><b>Country: </b>{country}</div>
</div>
<hr>
<div class="row">
    <form name="frm" id="frm" method="post" >
    <div class="col-md-12">
        <textarea rows="4" cols="100" class="form-control" name="note" id="note" required data-validation-required-message="Please enter your notes" placeholder="Please enter your notes" maxlength="999" style="resize:none"></textarea>
    </div>
    <div class="row">
        <div class="col-md-12">
            <input  type="submit" value="Save Note" class="btn btn-primary" id="btn" />
        </div>
    </div>
</form>
</div>
<hr>  

<div class="row" id="noteList">
    <form name="frmList{note_id}" id="frmList{note_id}" method="post">
        <div class="col-md-6">
            <b>Created By:</b> {added} <b>On:</b> {date_added}
        </div>
        <div class="col-md-6">
            <b>Modified By:</b> {updated} <b>On:</b> {date_updated}
        </div>
        <div class="col-md-12">
            <textarea rows="9" cols="100" class="form-control editcontrol" name="note" id="note" required data-validation-required-message="Please enter your notes" placeholder="Please enter your notes" maxlength="999" style="resize:none">{note}</textarea>
        </div>
        <div class="col-md-12 text-right">
            <input type="hidden" name="note_id" id="note_id" value="{note_id}" />
            <a class="btn btn-primary edit-mode-rev btnedit" href="#{note_id}">Edit</a>
            <button type="submit" class="btn btn-primary edit-mode update">Save</button>
            <a class="btn btn-primary edit-mode cancel" href="#{note_id}" >Cancel</a>
        </div>
        <hr>
    </form>
</div>