<?php defined('RAXANPDI')||exit(); ?>
<h2>FAQs</h2>
<div class="row">
<form name="frm" id="frm" method="post">
    <label>Topic</label>
    <select name="faq_category_id" id="faq_category_id" class="form-control" >
        <option value="{id}" >{name}</option>
    </select>
    
    <label>Section:</label>
    <select name="faq_group_id" id="faq_group_id" class="form-control" >
        <option value="{id}" >{name}</option>
    </select>
    
    <label>Question:</label>
    <input type="text" class="form-control" name="question" id="question" required data-validation-required-message="Please enter question" placeholder="Please enter question" />
    
    <label>Answer:</label>
    <textarea rows="5" cols="100" class="form-control" name="answer" id="answer" required data-validation-required-message="Please enter answer" placeholder="Please enter answer" maxlength="999" style="resize:none"></textarea>
    <div class="row text-right">
        <button type="button" class="btn btn-default" id="cancel">Cancel</button>
        <button type="submit" class="btn btn-primary" id="btn">Save</button>
    </div>
</form>
</div>