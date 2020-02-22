<?php
if($_POST){
	$_SESSION['APPLICATION_FORM']['PREFERENCE'] = $_POST;
	if(isset($_POST['startdate'])){
		$date = explode('&&',$_POST['startdate']);
		$_POST['start_date'] 	= $date[0];
		$_POST['end_date'] 		= $date[1];
		unset($_SESSION['APPLICATION_FORM']['PREFERENCE']['startdate']);
	}
	$_SESSION['APPLICATION_FORM']['PREFERENCE']['start_date'] 	= date('Y-m-d', strtotime($_POST['start_date']));
	$_SESSION['APPLICATION_FORM']['PREFERENCE']['end_date'] 	= date('Y-m-d', strtotime($_POST['end_date']  ));
    
	//Get the correct id for the project/programme    
	$obj = new site();
	$sql = 'SELECT c.id FROM project_category c WHERE c.name IN (SELECT c.name FROM project_category c WHERE id = '.$_POST['project_category_id'].') AND country_id = '.$_POST['country_id'];
	$rt  = $obj->getResultRow($sql);

	$_SESSION['APPLICATION_FORM']['PREFERENCE']['project_category_id'] 	=  $rt['id'];
	header('location: apply.php?section=about-yours-self#frm');
}

$obj 		= new site();
$sql 		= "SELECT p.id, p.name FROM project_category p GROUP BY p.name ORDER BY p.name";
$category 	= $obj->getResultSet($sql);
?>
<h5>Section 1 of 6: Your Preferences</h5>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>1. Select Your Programme or Project*</p>
            <select id="project_category_id" name="project_category_id" required>
            	<option value="">Select Programme or Project</option>
            	<?php foreach($category as $key => $value){ ?>
                	<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>2. Select Your Destination*</p>
            <select id="country_id" name="country_id" required>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>3. Select Dates*</p>
            <input name="start_date" id="start_date" type="text" required placeholder="YYYY-MM-DD : Start date"> 
            <input name="end_date" id="end_date" type="text" required placeholder="YYYY-MM-DD : End date">
            <div id="startdate" style="display:none;">
            	<select name="startdate">
                  <option value="">Select Date</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>4. Select Add-Ons (If you want
            to do lessons in the evenings or weekends)*</p>
            <select id="lessons_add_on" name="lessons_add_on" required>
            	<option value="0">None</option>
                <option value="English Lesson">English Lesson</option>
                <option value="Patois Lesson">Patois Lesson</option>
            </select>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>5. Independent Travel Time (Do
            you plan to do independent travel
            before/after your
            programme)*</p>
            <select id="independent_travel" name="independent_travel">
            	<option value="0">No</option>
                <option value="1">Yes - Before programme</option>
                <option value="2">Yes - After programme</option>
            </select>
            <input name="independent_travel_days" id="independent_travel_days" placeholder="How many days?" type="text" >
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>6. Combine programme (Do you
            want to do another
            programme)*</p>
            <select id="" name="">
                <option value="#">
                    Yes (provide programme
                    options as above)
                </option>
                <option value="#">
                    No
                </option>
                <option value="#">
                    State number of weeks on
                    each programme
                </option>
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>7. Do you have any special interests related to your programme or project?</p>
            <input name="project_special_interest" id="project_special_interest" placeholder="Any special interests" type="text">
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="single-select">
            <p>8. Do you have any special requests related to your host family?</p>
            <select id="host_request" name="host_request">
            	<option value="0">No</option>
                <option value="1">Yes</option>
            </select>
            <input name="host_request_desc" id="host_request_desc" placeholder="If yes" type="text">
        </div>
    </div>
</div>
<input class="sb-btn" type="submit" value="Next">