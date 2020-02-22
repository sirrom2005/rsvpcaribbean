<?php defined('RAXANPDI')||exit(); ?>

<div class="row">
    <div class="col-md-9">
        <span class="pageHeading">FAQs</span>
    </div>
    <div class="col-md-3 text-right">
        <a href="faq.php" class="btn btn-success">Add New</a>
    </div>
</div>
<hr>
<div class="row">
<form method="post" name="frm" id="frm" action="" >
    <select name="category" id="category" class="form-control" >
        <option value="{id}" >{name}</option>
    </select>
</form>
</div>
<div id="datatable" class="list-group" xt-delegate="a.remove #click,removeFaqs">
    <h4>{question}</h4>
    <blockquote>{answer}</blockquote>
    <div class="row text-right">
        <a href="faq.php?id={id}" class="btn btn-primary">Edit</a>
        <a href="#{id}" class="btn btn-danger remove" data-event-confirm="Are you sure you want to remove this record?">Delete</a>
    </div>
    <hr>
</div>