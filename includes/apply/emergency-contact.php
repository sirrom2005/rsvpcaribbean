<?php  
if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}
if($_POST){
	$_SESSION['APPLICATION_FORM']['EMERGENCY'] = $_POST;
	header('location: apply.php?section=education-work#frm');
}

$obj 		= new site();
$sql 		= "SELECT * FROM title";
$title 		= $obj->getResultSet($sql);
$sql 		= "SELECT * FROM relationship_type";
$relationship= $obj->getResultSet($sql);
?>
<h5>Section 3 of 6: Emergency Contact</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Title* Please Select:</p>
            <select id="title_id" name="title_id">
            	<?php foreach($title as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. First Name*</p><input id="firstname" name="firstname" placeholder="First Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Middle Name</p><input id="middlename" name="middlename" placeholder="Middle Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Last Name*</p><input id="lastname" name="lastname" placeholder="Last Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Relationship to Applicant*</p>
            <select id="relationship_type_id" name="relationship_type_id">
            	<?php foreach($relationship as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Emergency Telephone Number*</p><input id="phone" name="phone" placeholder="Telephonr Number" required type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Emergency Email*</p>
            <input id="email" name="email" placeholder="Emergency Email" required type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Confirm Emergency Email*</p>
            <input id="confirm_email" name="confirm_email" placeholder="Confirm Email" required type="email">
        </div>
    </div>
</div>

<a class="sb-btn" href="apply.php?section=about-yours-self#frm"><span>Back</span></a>
<input class="sb-btn" type="submit" value="Next">