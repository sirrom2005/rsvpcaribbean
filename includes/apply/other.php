<?php
//echo "<pre>";print_r($_SESSION['APPLICATION_FORM']);echo "</pre>";
if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}
if($_POST){
	$_SESSION['APPLICATION_FORM']['OTHER'] = $_POST;
	include_once('fin.php');
}

$obj = new site();
$sql = "SELECT * FROM heard_about";
$heard_about = $obj->getResultSet($sql);
?>
<h5>Section 6 of 6: Other</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Do you have any travel companions?*</p>
            <select id="have_travel_companions" name="have_travel_companions" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If yes, please provide names</p>
            <input id="travel_companions_name" name="travel_companions_name" placeholder="Details" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. Do you have any special diet restrictions?*</p>
            <select id="special_diet_restrictions" name="special_diet_restrictions" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If Yes, please state</p>
            <input id="special_diet_restrictions_desc" name="special_diet_restrictions_desc" placeholder="Details" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Are you on any medication?*</p>
            <select id="on_medication" name="on_medication" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If yes, please provide details</p>
            <input id="medication_name" name="medication_name" placeholder="Details" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Do you have any current or
            past disabilities or mental or
            psychological
            illnesses?*</p>
            <select id="any_illnesses" name="any_illnesses" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If yes, please provide details</p>
            <input id="illnesses_desc" name="illnesses_desc" placeholder="Details" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Do you have any allergies?*</p>
            <select id="any_allergies" name="any_allergies" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If yes, please provide details</p>
            <input id="allergies_desc" name="allergies_desc" placeholder="Details" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Do you have any previous criminal convictions?*</p>
            <select id="criminal_convictions" name="criminal_convictions" >
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            <p class="smop">If yes, please
            provide details</p>
            <input id="criminal_convictions_desc" name="criminal_convictions_desc" placeholder="Details" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. How did you hear about RSVP
            Caribbean?*</p>
            <select id="heard_about_id" name="heard_about_id" >
              	<?php foreach($heard_about as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
     </div>
</div>

<div class="check-bx">
    <input id="agree" name="agree" value="1" type="checkbox" required>
    <p>I have read and agree to the RSVP
    Caribbean Terms and Conditions (Check box
    to the left of this statement)</p>
</div>

<a class="sb-btn" href="apply.php?section=reference#frm"><span>Back</span></a>
<input class="sb-btn btn-success" type="submit" value="Submit Application">