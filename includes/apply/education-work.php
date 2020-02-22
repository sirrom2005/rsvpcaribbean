<?php
if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}
if($_POST){
	$_SESSION['APPLICATION_FORM']['EDUCATION'] = $_POST;
	header('location: apply.php?section=reference#frm');
}

$obj 		= new site();
$sql 		= "SELECT * FROM current_status";
$current    = $obj->getResultSet($sql);
$sql 		= "SELECT * FROM qualifications_type";
$qualifications = $obj->getResultSet($sql);

?>
<h5>Section 4 of 6: Education and Work</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Current
            Status*</p>
            <select id="current_status_id" name="current_status_id">
            	<?php foreach($current as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. Status on Arrival in
            Destination* (if different)</p>
            <select id="current_status_other_id" name="current_status_other_id">
            	<?php foreach($current as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. High School</p>
            <input id="high_school" name="high_school" placeholder="High School" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Undergraduate University</p>
            <input id="undergraduate_university" name="undergraduate_university" placeholder="Undergraduate University" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Post Graduate</p>
            <input id="post_graduate" name="post_graduate" placeholder="Post Graduate" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Qualifications</p>
            <select id="qualifications_id" name="qualifications_id" >
                 <?php foreach($qualifications as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Skills*</p><input id="skills" name="skills" placeholder="Skills" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Occupation*</p><input id="occupation" name="occupation" placeholder="Occupation" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>9. Will you be using RSVP
            Caribbean programme as credit for
            your school or
            university?*</p>
            <select id="credit_for_school" name="credit_for_school">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <input id="credit_for_school_desc" name="credit_for_school_desc" placeholder="If Yes, What other information required" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>10. Are you getting a scholarship or sponsorship to fund
            your programme with us?*</p>
            <select id="sponsored" name="sponsored">
                <option value="1">Yes</option>
                <option value="0">No</option>
                <input id="sponsored_desc" name="sponsored_desc" placeholder="If Yes, please provide the name of the funder" type="text">
            </select>
        </div>
    </div>
</div>

<a class="sb-btn" href="apply.php?section=emergency-contact#frm"><span>Back</span></a>
<input class="sb-btn" type="submit" value="Next">