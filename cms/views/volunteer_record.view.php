<?php defined('RAXANPDI')||exit(); ?>
<h2>Volunteer Record</h2>
<div class="row" id="quick_info">
    <div class="col-md-6"><b>{fullname}</b></div>
    <div class="col-md-6"><b>{email}</b></div>
</div>
<hr>
<div class="row">
    <form name="frm" id="frm" method="post" enctype="multipart/form-data" >
    <div class="col-md-3">
        <div id="category">
            <div><label style="font-weight:normal;"><input type="checkbox" name="note_category_id[]" value="{id}"> {name}</label></div>
        </div>
    </div>
	
    <div class="col-md-9">
        <select name="note_phrase" id="note_phrase" class="form-control" >
            <option value="{id}" >{name}</option>
        </select>
        <textarea rows="4" cols="100" class="form-control" name="note" id="note" required data-validation-required-message="Please enter your notes" placeholder="Please enter your notes" maxlength="999" style="resize:none"></textarea>
    	<label style="font-weight:normal;"><input type="checkbox" name="duplicate" id="duplicate" value="1" /> Duplicate Note in the Notes of all volunteer</label>
    </div>
    
    <div class="row">
        <div class="col-md-10">
            <input type="file" class="btn btn-warning" name="userfile"/>
        </div>
        <div class="col-md-2">
            <input  type="submit" value="Save Note" class="btn btn-primary" id="btn" />
        </div>
    </div>
</form>
</div>
<hr>

<div class="row bg-warning" style="padding: 10px;">
    <form name="sortFilterFrm" id="sortFilterFrm" method="post">
    <div class="sortfilter">
        <label style="font-weight:normal;"><input type="checkbox" name="note_category_id[]" id="note_category_id[]" value="{id}" class="editcontrol" > {name}</label>
    </div>
        <button type="submit" class="btn btn-primary" id="btnFilter">Filter</button>
        <a href="" class="btn btn-primary" id="btnExport" target="_blank">Generate Doc</a>
    </form>
</div>            

<div class="row" id="noteList">
    <form name="frmList{note_id}" id="frmList{note_id}" method="post">
        <div class="col-md-12 alert alert-info">
            <b>Created By:</b> {added} <b>On:</b> {date_added}  <b>modified by:</b> {updated} <b>On:</b> {date_updated}
        </div>
        <div class="col-md-3">
            <div class="categoryList">
                <div><label style="font-weight:normal;"><input type="checkbox" name="note_category_id[]" id="note_category_id[]" value="{id}" class="editcontrol" > {name}</label></div>
            </div>
        </div>

        <div class="col-md-9">
            <textarea rows="9" cols="100" class="form-control editcontrol" name="note" id="note" required data-validation-required-message="Please enter your notes" placeholder="Please enter your notes" maxlength="999" style="resize:none">{note}</textarea>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-9"><a class="btn btn-primary btndownload" href="../rsvp_docs/volunteer_record/{file_name}" target="_blank">Download File</a></div>
            <div class="col-md-3 text-right">
                <input type="hidden" name="note_id" id="note_id" value="{note_id}" />
                <a class="btn btn-primary edit-mode-rev btnview" href="#{note_id}">View</a>
                <a class="btn btn-primary edit-mode-rev btnedit" href="#{note_id}">Edit</a>
                <button type="submit" class="btn btn-primary edit-mode update">Save</button>
                <a class="btn btn-primary edit-mode cancel" href="#{note_id}" >Cancel</a>
            </div>
        </div>
    </form>
</div>