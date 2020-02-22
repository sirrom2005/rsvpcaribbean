<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Accommodation</span>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
        <select name="accommodation" id="accommodation" class="form-control filter" >
            <option value="{id}" >{host_name}</option>
        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
		<b>Date Entered:</b> <span id="date_added"></span>
	</div>
    <div class="col-md-4">
		<b>Date Updated:</b> <span id="date_updated"></span>
	</div>
    <div class="col-md-4">
		<b>Updated by:</b> <span id="updated_by"></span>
	</div>
</div>    
<hr>
    
<div class="col-md-12">
    <ul id="myTab" class="nav nav-tabs nav-justified">
        <li class="active"><a href="#service-one" data-toggle="tab">General Information</a></li>
        <li class=""><a href="#service-two" data-toggle="tab">Details</a></li>
        <li class=""><a href="#service-three" data-toggle="tab">Photos</a></li>
        <li class=""><a href="#service-five" data-toggle="tab">Options</a></li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in" id="service-one">
            <form name="frm" id="frm" method="post" class="form-horizontal">            
                <label class="control-label col-lg-4">Host Family Name:</label>
                <div class="col-lg-8">
                <input type="text" class="form-control" name="host_name" id="host_name" required data-validation-required-message="Please enter host name" placeholder="Please enter host name" />
                </div>
                <label class="control-label col-lg-4">Telephone Number (Home):</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter phone number" />
                </div>
                <label class="control-label col-lg-4">Telephone Number (Mobile 1):</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" required data-validation-required-message="Please enter mobile phone" placeholder="Please enter mobile phone" />
                </div>
                
                <label class="control-label col-lg-4">Telephone Number (Mobile 2):</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" name="phone_mobile_2" id="phone_mobile_2" placeholder="Please enter mobile phone 2" />
                </div>
                
                <label class="control-label col-lg-4">Email Address:</label>
                <div class="col-lg-8">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Please enter host email" />
                </div>  
                
                <label class="control-label col-lg-4">Number of Volunteer Spaces:</label>
                <div class="col-lg-8">
                    <input type="number" class="form-control" name="number_of_volunteer_spaces" id="number_of_volunteer_spaces" placeholder="Please enter number of volunteer spaces" />
                </div>       
                <?php include_once("../includes/address_1.php");?>
                <?php include_once("../includes/address_2.php");?>
                <label class="control-label col-lg-3">Archive Accommodation:</label>
                <div class="col-lg-9">
                	<input type="checkbox" value="1" name="archive" id="archive" />
                </div>
                <div class="row text-right">
                    <button type="submit" class="btn btn-primary" id="infobtn">Save</button>
                </div>
            </form>    
        </div>
        
        
        <div class="tab-pane fade" id="service-two">
            <form name="detailFrm" id="detailFrm" method="post" class="form-horizontal">
                <label>Location:</label>
                <textarea rows="5" cols="100" class="form-control" name="location_desc" id="location_desc" required data-validation-required-message="Please enter location information" placeholder="Please enter location information" maxlength="999" style="resize:none"></textarea>
                <label>Overview:</label>
                <textarea rows="5" cols="100" class="form-control" name="overview_desc" id="overview_desc" required data-validation-required-message="Please enter overview information" placeholder="Please enter overview information" maxlength="999" style="resize:none"></textarea>
                <label>Living Accommodation:</label>
                <textarea rows="5" cols="100" class="form-control" name="living_accommodation_desc" id="living_accommodation_desc" required data-validation-required-message="Please enter living Accommodation information" placeholder="Please enter living Accommodation information" maxlength="999" style="resize:none"></textarea>
                <label>About your Room:</label>
                <textarea rows="5" cols="100" class="form-control" name="about_room_desc" id="about_room_desc" required data-validation-required-message="Please enter room information" placeholder="Please enter room information" maxlength="999" style="resize:none"></textarea>
                <label>About the Food:</label>
                <textarea rows="5" cols="100" class="form-control" name="about_food_desc" id="about_food_desc" required data-validation-required-message="Please enter Food information" placeholder="Please enter Food information" maxlength="999" style="resize:none"></textarea>
                <label>General Advice:</label>
                <textarea rows="5" cols="100" class="form-control" name="general_advice_desc" id="general_advice_desc" required data-validation-required-message="Please enter general advice information" placeholder="Please enter general advice information" maxlength="999" style="resize:none"></textarea>
    
                <div class="row text-right">
                    <button type="submit" class="btn btn-primary" id="detailbtn">Save</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="service-three">
            <form name="photoFrm" id="photoFrm" method="post" class="form-horizontal">
            </form>
            <div id="gallery">
            	<span>
                    <img src="../rsvp_photos/{photo}" title="{title}" />
                    <a href="#{id}" class="delete" data-event-confirm="Are you sure you want to remove this photo?"></a>
                </span>
            </div>
   		</div>
		<div class="tab-pane fade" id="service-five">
            <div class="list-group">
            <a href="accommodation.php" class="list-group-item text-center">Add New Host Family</a>
            <a href="#" target="_blank" id="checklist" class="list-group-item text-center">Accommodation Checklist</a>
            <h4 class="text-center">For staff use only</h4>
            <a target="_blank" id="staffupdate" class="list-group-item text-center">Staff updates</a>
            <h4 class="text-center">For volunteers only – information on RSVP page</h4>
            <a target="_blank" id="myacc" class="list-group-item text-center">Accommodation details</a>
            <a class="list-group-item text-center" style="background-color:#d9534f; color:#FFF;" id="remove" data-event-confirm="Are you sure you want to remove this record?">Delete</a>
            </div> 
      	</div>
    </div>
</div>

