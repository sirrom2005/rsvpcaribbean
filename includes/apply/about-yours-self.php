<?php
if(!isset($_SESSION['APPLICATION_FORM'])){header('location: apply.php'); exit();}

$obj 		= new site();
$duplicateEmail = '';

$title          = $obj->getResultSet("SELECT * FROM title");
$nationality    = $obj->getResultSet("SELECT country_id AS id, name FROM odb_country");

if(filter_input_array(INPUT_POST)){
    $_SESSION['APPLICATION_FORM']['APPLICATION'] = filter_input_array(INPUT_POST);
    $sql = "CALL sp_is_duplicate_email(3,'".filter_input(INPUT_POST, 'email')."');";
    $rt  = $obj->getResultRow($sql);
    
    if($rt['cnt']){
        $duplicateEmail = '<div class="text-danger">This email is already in our system</div>';        
    }else{
        $_SESSION['APPLICATION_FORM']['APPLICATION']['dob'] = date('Y-m-d', strtotime(filter_input(INPUT_POST, 'dob')));
        header('location: apply.php?section=emergency-contact#frm');
    }
}
?>
<h5>Section 2 of 6: About Yourself</h5>
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
            <p>2. First Name*</p><input name="firstname" id="firstname" placeholder="Your First Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Middle Name</p><input name="middlename" id="middlename" placeholder="Your Middle Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Last Name*</p><input name="lastname" id="lastname" placeholder="Your Last Name" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Date of
            Birth*</p><input type="date" name="dob" id="dob" required placeholder="YYYY-MM-DD" />
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Nationality*</p>
            <select id="nationality_id" name="nationality_id" >
            	<?php foreach($nationality as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Country of Birth*</p>
            <select id="birth_country_id" name="birth_country_id" >
             	<?php foreach($nationality as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Exact Name on Your Passport*</p>
            <input name="name_on_passport" id="name_on_passport" required placeholder="Your Passport Name" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>9. Email Address*</p><input id="email" name="email" placeholder="Your Email Address" required type="email">
            <?php echo $duplicateEmail;?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>10. Confirm Email Address*</p>
            <input id="confirm_email" name="confirm_email" placeholder="Confirm Email" required type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>11. Alternative Email Address</p>
            <input id="email2" name="email2" placeholder="Alternative Email" type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>12. Skype Name</p>
            <input id="skype" name="skype" placeholder="Skype Name" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>13. Email of Parent or Guardian
            (if under 21 years old)</p>
            <input id="guardian_email" name="guardian_email" placeholder="Guardian Email" type="email">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>14. Home Address*</p>
            <div class="add-input">
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
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>15. Home Phone
            Number</p>
            <input id="home_phone" name="home_phone" placeholder="Home Phone Number" type="text">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>16. Mobile Phone
            Number*</p><input id="phone" name="phone" placeholder="Mobile Number" required type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>17. What is the most convenient
            time to speak (your time)?</p>
            <select id="time_to_speak" name="time_to_speak">
                <option value="7:00:00">7am – 12pm</option>
                <option value="12:00:00">12pm – 5pm</option>
                <option value="17:00:00">5pm – 10pm</option>
            </select>
        </div>
    </div>
</div>

<a class="sb-btn" href="apply.php?section=application#frm"><span>Back</span></a>
<input class="sb-btn" type="submit" id="applybtn" value="Next">