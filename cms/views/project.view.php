<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading" id="pageheading"></span>
    </div>
</div>
<hr>
<div class="col-md-3">
    <b>Date Entered:</b> <span id="date_added"></span>
</div>
<div class="col-md-3">
    <b>Entered By:</b> <span id="entered_by"></span>
</div>
<div class="col-md-3">
    <b>Date Updated:</b> <span id="date_updated"></span>
</div>
<div class="col-md-3">
    <b>Updated by:</b> <span id="updated_by"></span>
</div>
<hr>
&nbsp;          
<div class="row">
    <div class="col-md-12">
        <ul  class="nav nav-tabs nav-justified rax-tabstrip nicetab">
            <li class="selected-tab"><a href="#service-one">General Information</a></li>
            <li class=""><a href="#service-two">Details</a></li>
            <li class=""><a href="#service-three">Photos</a></li>
            <li class=""><a href="#service-four">Options</a></li>
        </ul>
               
        <div id="myTabContent" class="tab-content">
            <div class="tabContent" id="service-one">       
                <form name="frm" id="frm" method="post" class="form-horizontal">   
                	<label class="control-label col-lg-3">&nbsp;</label>
                    <div class="col-lg-9">
                        <select name="project_sub_type_id" id="project_sub_type_id" class="form-control filter" required data-validation-required-message="Sub category required"  >
                            <option value="{id}" >{name}</option>
                        </select> 
                     </div>
                    <label class="control-label col-lg-3">Partner/Oganizations:</label>
                    <div class="col-lg-9">
                    	<input type="text" class="form-control" name="institution" id="institution" required data-validation-required-message="Please enter name of institution" placeholder="Please enter name of institution" />
                    </div>        
                    <fieldset style="clear:both;">
                        <legend>Supervisor</legend>                  
                        <label class="control-label col-lg-3">Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="key_contact" id="key_contact" required data-validation-required-message="Please enter key contact person" placeholder="Please enter key contact person" />
                        </div>
                        <label class="control-label col-lg-3">Job Title:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Please enter job title" />
                        </div>
                        <label class="control-label col-lg-3">Mobile number:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="mobile_phone" id="mobile_phone" placeholder="Please enter mobile phone number" />
                        </div> 
                        <label class="control-label col-lg-3">Email:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Please enter email" />
                        </div>
                        <label class="control-label col-lg-3">Supervisor Role:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="supervisor_role" id="supervisor_role" placeholder="Please enter supervisor role" />
                        </div>
                	</fieldset>
                    <fieldset style="clear:both;">
                        <legend>Assistant Supervisor</legend>                  
                        <label class="control-label col-lg-3">Name:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="key_contact_2" id="key_contact_2" placeholder="Please enter key assistant contact person" />
                        </div>
                        <label class="control-label col-lg-3">Job Title:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="job_title_2" id="job_title_2" placeholder="Please enter job title" />
                        </div>
                        <label class="control-label col-lg-3">Mobile number:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="mobile_phone_2" id="mobile_phone_2" placeholder="Please enter mobile phone number" />
                        </div> 
                        <label class="control-label col-lg-3">Email:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email_2" id="email_2" placeholder="Please enter email" />
                        </div>
                        <label class="control-label col-lg-3">Supervisor Role:</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="supervisor_role_2" id="supervisor_role_2" placeholder="Please enter assistant supervisor role" />
                        </div>
                	</fieldset>

                    <?php include_once("../includes/address_1.php");?>

                    <label class="control-label col-lg-3">Archive:</label>
                    <div class="col-lg-9">
                        <input type="checkbox" value="1" name="archive" id="archive" />
                    </div>
                    <div class="row text-right">
                    	<input type="hidden" name="type" id="type"/>
                        <button type="submit" class="btn btn-primary" id="infobtn">Save</button>
                    </div>
                </form>    
            </div>
           
            <div class="tabContent" id="service-two">
                <h4>&nbsp;</h4>
                <form name="detail" id="detail" method="post" class="form-horizontal">
                    <label>Background Information:</label>
                    <textarea rows="5" cols="100" class="form-control" name="background_info" id="background_info" required data-validation-required-message="Please enter location information" placeholder="Please enter location information" maxlength="999" style="resize:none"></textarea>
                    <label>Location:</label>
                    <textarea rows="5" cols="100" class="form-control" name="location_desc" id="location_desc" required data-validation-required-message="Please enter location information" placeholder="Please enter location information" maxlength="999" style="resize:none"></textarea>
                    <label>Project Mission:</label>
                    <textarea rows="5" cols="100" class="form-control" name="overview_desc" id="overview_desc" required data-validation-required-message="Please enter project mission" placeholder="Please enter project mission" maxlength="999" style="resize:none"></textarea>
                    <label>Project Goals:</label>
                    <textarea rows="5" cols="100" class="form-control" name="project_goal_desc" id="project_goal_desc" required data-validation-required-message="Please enter project goal" placeholder="Please enter project goal" maxlength="999" style="resize:none"></textarea>
                    <label>Volunteer’s Role:</label>
                    <textarea rows="5" cols="100" class="form-control" name="volunteer_role_desc" id="volunteer_role_desc" required data-validation-required-message="Please enter volunteer role" placeholder="Please enter volunteer role" maxlength="999" style="resize:none"></textarea>
                    <label>Volunteer’s Tasks:</label>
                    <textarea rows="5" cols="100" class="form-control" name="volunteer_task_desc" id="volunteer_task_desc" required data-validation-required-message="Please enter volunteer task" placeholder="Please enter volunteer task" maxlength="999" style="resize:none"></textarea>
                    <label>Typical Day:</label>
                    <textarea rows="5" cols="100" class="form-control" name="typical_day_desc" id="typical_day_desc" required data-validation-required-message="Please enter typical day information" placeholder="Please enter typical day information" maxlength="999" style="resize:none"></textarea>
                    <label>Dress Code:</label>
                    <textarea rows="5" cols="100" class="form-control" name="dress_code_desc" id="dress_code_desc" required data-validation-required-message="Please enter dress code information" placeholder="Please enter dress code information" maxlength="999" style="resize:none"></textarea>
                    <label>Other Information:</label>
                    <textarea rows="5" cols="100" class="form-control" name="other_information_desc" id="other_information_desc" required data-validation-required-message="Please enter other information" placeholder="Please enter other information" maxlength="999" style="resize:none"></textarea>
                    <label>Other Activities:</label>
                    <textarea rows="5" cols="100" class="form-control" name="other_activitie_desc" id="other_activitie_desc" required data-validation-required-message="Please enter other activities" placeholder="Please enter other information" maxlength="999" style="resize:none"></textarea>
                    <!--label>Project Resources:</label>
                    <textarea rows="5" cols="100" class="form-control" name="project_resources_desc" id="project_resources_desc" required data-validation-required-message="Please enter project resources" placeholder="Please enter project resources" maxlength="999" style="resize:none"></textarea-->
        
        
                    <div class="row text-right">
                        <button type="submit" class="btn btn-primary" id="detailbtn">Save</button>
                    </div>
                </form>
            </div>
            <div class="tabContent" id="service-three">
                <form name="photoFrm" id="photoFrm" method="post" class="form-horizontal">
                </form>
                <div id="gallery">
                    <span>
                        <img src="../rsvp_photos/{photo}" title="{title}" />
                        <a href="#{id}" class="delete" data-event-confirm="Are you sure you want to remove this photo?"></a>
                    </span>
                </div>
             </div>
             <div class="tabContent" id="service-four">
              	<div class="list-group">
                	<a href="#" class="list-group-item text-center" target="_blank" id="document">Generate Document</a>
                    <a href="#" class="list-group-item text-center key_facts">Partner Key Facts</a>
                    <a href="#" class="list-group-item text-center" style="background-color:#d9534f; color:#FFF;" id="remove" data-event-confirm="Are you sure you want to remove this record?">Delete</a>
                </div> 
             </div>
        </div>
    </div>
</div>