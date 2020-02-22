<?php
if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}
if($_POST){
	$_SESSION['APPLICATION_FORM']['REFERENCE'] = $_POST;
	header('location: apply.php?section=other#frm');
}

$obj 		= new site();
$sql 		= "SELECT * FROM title";
$title 		= $obj->getResultSet($sql);
$sql 		= "SELECT country_id AS id, name FROM odb_country";
$nationality= $obj->getResultSet($sql);
?>
<h5>Section 5 of 6: Reference Information</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Title* Please
            Select:</p>
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
            <p>5. Relationship to
            Applicant*</p>
            <input id="relationship" name="relationship" placeholder="Relationship" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>9. Telephone Number*</p><input id="phone" name="phone" placeholder=" Telephone Numberl" required type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Email Address *</p>
            <input id="email" name="email" placeholder="Email" required type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Confirm Email*</p><input id="confirm_email" name="confirm_email" placeholder="Confirm Email" required type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
			<p>9. Full Address*</p>
            <input id="address1" name="address1" placeholder="Address Line 1" required type="text"> 
            <input id="address2" name="address2" placeholder="Address Line 2" type="text">
            <input id="address3" name="address3" placeholder="Town/City" required type="text">
            <select id="country_id" name="country_id" required >
                <option value="">Select Country</option>
                <?php foreach($nationality as $key => $value){ ?>
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
            <select id="state_id" name="state_id" required ></select>
            <input id="zip_code" name="zip_code" placeholder="Zip code/Post or Country Code" required type="text">
        </div>
    </div>
</div>


<a class="sb-btn" href="apply.php?section=education-work#frm"><span>Back</span></a>
<input class="sb-btn" type="submit" value="Next">