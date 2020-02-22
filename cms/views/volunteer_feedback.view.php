<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Volunteer Feedback</span>
    </div>
</div>

<div class="col-md-12">
<label>Volunteer Name:</label> <span id="name"></span>
</div>
    
<div class="col-md-12">
<ul id="myTab" class="nav nav-tabs nav-justified">
    <li class="active"><a href="#service-one" data-toggle="tab">Volunteer Feedback – Form 1</a>
    </li>
    <li class=""><a href="#service-two" data-toggle="tab">Volunteer Feedback – Form 2</a>
    </li>
</ul>

<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="service-one">
    <p class="alert">
        <b>Instructions:</b> This form should be completed by a staff with the
        volunteer in a face-to-face meeting 5 days after arrival.
    </p>
    <form name="frm1" id="frm1" method="post" class="form-horizontal">      
    <div class="col-md-9">      
        <fieldset>
        	<legend>Orientation</legend>
        	<label>Have you received an orientation?:</label>
            <label class="yes_no"><input name="received_orientation" value="1" type="radio">Yes</label> <label class="yes_no"><input name="received_orientation" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="received_orientation_desc" id="received_orientation_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Did you receive a volunteer’s package?:</label>
            <label class="yes_no"><input name="received_package" value="1" type="radio">Yes</label> <label class="yes_no"><input name="received_package" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="received_package_desc" id="received_package_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Did you receive a volunteer’s contact list?:</label>
            <label class="yes_no"><input name="received_contact_list" value="1" type="radio">Yes</label> <label class="yes_no"><input name="received_contact_list" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="received_contact_list_desc" id="received_contact_list_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
        	<legend>Accommodation</legend>
        	<label>Did you feel welcome when you arrived?:</label>
            <label class="yes_no"><input name="felt_welcome" value="1" type="radio">Yes</label> <label class="yes_no"><input name="felt_welcome" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="felt_welcome_desc" id="felt_welcome_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Is your room comfortable?:</label>
            <label class="yes_no"><input name="room_comfortable" value="1" type="radio">Yes</label> <label class="yes_no"><input name="room_comfortable" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="room_comfortable_desc" id="room_comfortable_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Do you have the basic necessities?:</label>
            <label class="yes_no"><input name="basic_necessities" value="1" type="radio">Yes</label> <label class="yes_no"><input name="basic_necessities" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="basic_necessities_desc" id="basic_necessities_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
        	<label>Did you get a clean bathroom?:</label>
            <label class="yes_no"><input name="clean_bathroom" value="1" type="radio">Yes</label> <label class="yes_no"><input name="clean_bathroom" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="clean_bathroom_desc" id="clean_bathroom_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
        	<label>Is your bathroom working properly?:</label>
            <label class="yes_no"><input name="bathroom_working" value="1" type="radio">Yes</label> <label class="yes_no"><input name="bathroom_working" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="bathroom_working_desc" id="bathroom_working_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you happy with the food?:</label>
            <label class="yes_no"><input name="happy_with_food" value="1" type="radio">Yes</label> <label class="yes_no"><input name="happy_with_food" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="happy_with_food_desc" id="happy_with_food_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

       		<label>Are you getting enough food?:</label>
            <label class="yes_no"><input name="getting_enough_food" value="1" type="radio">Yes</label> <label class="yes_no"><input name="getting_enough_food" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="getting_enough_food_desc" id="getting_enough_food_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
        	<label>Are you provided with suitable water?:</label>
            <label class="yes_no"><input name="suitable_water" value="1" type="radio">Yes</label> <label class="yes_no"><input name="suitable_water" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="suitable_water_desc" id="suitable_water_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you satisfied with your accommodation?:</label>
            <label class="yes_no"><input name="satisfied_with_accommodation" value="1" type="radio">Yes</label> <label class="yes_no"><input name="satisfied_with_accommodation" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="satisfied_with_accommodation_desc" id="satisfied_with_accommodation_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>

        <fieldset>
        	<legend>Programme/Project</legend>
        	<label>Did you feel welcome when you arrived?:</label>
            <label class="yes_no"><input name="programme_feel_welcome" value="1" type="radio">Yes</label> <label class="yes_no"><input name="programme_feel_welcome" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="programme_feel_welcome_desc" id="programme_feel_welcome_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Do you have a timetable?:</label>
            <label class="yes_no"><input name="programme_timetable" value="1" type="radio">Yes</label> <label class="yes_no"><input name="programme_timetable" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="programme_timetable_desc" id="programme_timetable_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Were your tasks discussed?:</label>
            <label class="yes_no"><input name="programme_tasks_discussed" value="1" type="radio">Yes</label> <label class="yes_no"><input name="programme_tasks_discussed" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="programme_tasks_discussed_desc" id="programme_tasks_discussed_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
                      
            <label>Are you clear on your tasks?:</label>
            <label class="yes_no"><input name="programme_tasks_clear" value="1" type="radio">Yes</label> <label class="yes_no"><input name="programme_tasks_clear" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="programme_tasks_clear_desc" id="programme_tasks_clear_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Are you satisfied so far with your programme/project?:</label>
            <label class="yes_no"><input name="programme_satisfied" value="1" type="radio">Yes</label> <label class="yes_no"><input name="programme_satisfied" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="programme_satisfied_desc" id="programme_satisfied_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
        	<legend>Health and Safety</legend>
            <label>Are you coping with the weather?:</label>
            <label class="yes_no"><input name="coping_with_weather" value="1" type="radio">Yes</label> <label class="yes_no"><input name="coping_with_weather" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="coping_with_weather_desc" id="coping_with_weather_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Have you experience any health issues since you arrived?:</label>
            <label class="yes_no"><input name="experience_health_issues" value="1" type="radio">Yes</label> <label class="yes_no"><input name="experience_health_issues" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="experience_health_issues_desc" id="experience_health_issues_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
                      
            <label>Are you clear on the safety procedures provided?:</label>
            <label class="yes_no"><input name="clear_on_safety_procedures" value="1" type="radio">Yes</label> <label class="yes_no"><input name="clear_on_safety_procedures" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="clear_on_safety_procedures_desc" id="clear_on_safety_procedures_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Do you have any health or safety concerns?:</label>
            <label class="yes_no"><input name="health_safety_concerns" value="1" type="radio">Yes</label> <label class="yes_no"><input name="health_safety_concerns" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="health_safety_concerns_desc" id="health_safety_concerns_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
        	<legend>RSVP Staff</legend>
            <label>Do you know your assigned Programme/Project Coordinator?:</label>
            <label class="yes_no"><input name="know_programme_coordinator" value="1" type="radio">Yes</label> <label class="yes_no"><input name="know_programme_coordinator" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="know_programme_coordinator_desc" id="know_programme_coordinator_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Do you have his/her contact number?:</label>
            <label class="yes_no"><input name="have_coordinator_contact_number" value="1" type="radio">Yes</label> <label class="yes_no"><input name="have_coordinator_contact_number" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="have_coordinator_contact_number_desc" id="have_coordinator_contact_number_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
                      
            <label>Have you been able to reach him/her (if needed)?:</label>
            <label class="yes_no"><input name="coordinator_reachable" value="1" type="radio">Yes</label> <label class="yes_no"><input name="coordinator_reachable" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="coordinator_reachable_desc" id="coordinator_reachable_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
        	<legend>Adapting to the Culture</legend>
            <label>Are you able to get to work ok?:</label>
            <label class="yes_no"><input name="get_to_work_ok" value="1" type="radio">Yes</label> <label class="yes_no"><input name="get_to_work_ok" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="get_to_work_ok_desc" id="get_to_work_ok_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

        	<label>Are there any cultural concerns?:</label>
            <label class="yes_no"><input name="any_cultural_concerns" value="1" type="radio">Yes</label> <label class="yes_no"><input name="any_cultural_concerns" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="any_cultural_concerns_desc" id="any_cultural_concerns_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
                      
            <label>Are you generally happy so far with all your arrangements?:</label>
            <label class="yes_no"><input name="happy_with_arrangements" value="1" type="radio">Yes</label> <label class="yes_no"><input name="happy_with_arrangements" value="0" type="radio">No</label>
        	<textarea rows="2" cols="100" class="form-control" name="happy_with_arrangements_desc" id="happy_with_arrangements_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>

        <div class="row text-right">
        	<input type="hidden" name="account_id" id="account_id1"/>
            <button type="submit" class="btn btn-primary" id="frm1btn">Save</button>
        </div>
        </div>
        <div class="col-md-3 " >
        	<div class="bg-warning text-center" style="padding:5px;"><a id="doc1" target="_blank">Generate Document</a></div>
        	<div class="bg-primary text-center" style="padding:5px;">Notify Staff</div>
            <div class="emailList bg-warning" style="padding:5px;">
         		<label style="font-weight:normal;"><input type="checkbox" name="email[]" value="{fullname}||{email}"> {fullname}</label>
            </div>
        </div>
    </form>    
    </div>
    
    
    <div class="tab-pane fade" id="service-two">
   	<p class="alert">
        <b>Instructions:</b> This form should be completed by a staff with the
        volunteer in a face-to-face meeting 15 days after arrival.
    </p>
    <form name="frm2" id="frm2" method="post" class="form-horizontal">
    <div class="col-md-9" >
        <fieldset>
            <legend>Accommodation</legend>
            <label>Is your room comfortable?:</label>
            <label class="yes_no"><input name="room_comfortable" value="1" type="radio">Yes</label> <label class="yes_no"><input name="room_comfortable" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="room_comfortable_desc" id="room_comfortable_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Do you have the basic necessities?:</label>
            <label class="yes_no"><input name="basic_necessities" value="1" type="radio">Yes</label> <label class="yes_no"><input name="basic_necessities" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="basic_necessities_desc" id="basic_necessities_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Is your bathroom working properly?:</label>
            <label class="yes_no"><input name="bathroom_working" value="1" type="radio">Yes</label> <label class="yes_no"><input name="bathroom_working" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="bathroom_working_desc" id="bathroom_working_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you happy with the food?:</label>
            <label class="yes_no"><input name="happy_with_food" value="1" type="radio">Yes</label> <label class="yes_no"><input name="happy_with_food" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="happy_with_food_desc" id="happy_with_food_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you getting enough food?:</label>
            <label class="yes_no"><input name="getting_enough_food" value="1" type="radio">Yes</label> <label class="yes_no"><input name="getting_enough_food" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="getting_enough_food_desc" id="getting_enough_food_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Are you provided with suitable water?:</label>
            <label class="yes_no"><input name="suitable_water" value="1" type="radio">Yes</label> <label class="yes_no"><input name="suitable_water" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="suitable_water_desc" id="suitable_water_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you satisfied with your accommodation?:</label>
            <label class="yes_no"><input name="satisfied_with_accommodation" value="1" type="radio">Yes</label> <label class="yes_no"><input name="satisfied_with_accommodation" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="satisfied_with_accommodation_desc" id="satisfied_with_accommodation_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Tell us about your experience so far at your accommodation?:</label>
            <textarea rows="2" cols="100" class="form-control" name="accommodation_experience_desc" id="accommodation_experience_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
            <legend>Programme/Project</legend>
            <label>Are you working the required 5 hours?:</label>
            <label class="yes_no"><input name="working_required_hours" value="1" type="radio">Yes</label> <label class="yes_no"><input name="working_required_hours" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="working_required_hours_desc" id="working_required_hours_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are getting enough to do?:</label>
            <label class="yes_no"><input name="getting_enough_to_do" value="1" type="radio">Yes</label> <label class="yes_no"><input name="getting_enough_to_do" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="getting_enough_to_do_desc" id="getting_enough_to_do_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Do you have enough resources to carry out your work?:</label>
            <label class="yes_no"><input name="resources_to_do_work" value="1" type="radio">Yes</label> <label class="yes_no"><input name="resources_to_do_work" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="resources_to_do_work_desc" id="resources_to_do_work_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>What tasks have you been doing so far?:</label>
            <textarea rows="2" cols="100" class="form-control" name="tasks_desc" id="tasks_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are your tasks meeting your expectations?:</label>
            <label class="yes_no"><input name="meeting_your_expectations" value="1" type="radio">Yes</label> <label class="yes_no"><input name="meeting_your_expectations" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="meeting_your_expectations_desc" id="meeting_your_expectations_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Are you adjusting to the culture, policies and procedures at work?:</label>
            <label class="yes_no"><input name="adjusting_to_culture" value="1" type="radio">Yes</label> <label class="yes_no"><input name="adjusting_to_culture" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="adjusting_to_culture_desc" id="adjusting_to_culture_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Are the comfortable with the staff?:</label>
            <label class="yes_no"><input name="comfortable_with_staff" value="1" type="radio">Yes</label> <label class="yes_no"><input name="comfortable_with_staff" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="comfortable_with_staff_desc" id="comfortable_with_staff_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Have you had any questions?:</label>
            <label class="yes_no"><input name="questions" value="1" type="radio">Yes</label> <label class="yes_no"><input name="questions" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="questions_desc" id="questions_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Have your questions been adequately dealt with?:</label>
            <label class="yes_no"><input name="questions_been_adequately" value="1" type="radio">Yes</label> <label class="yes_no"><input name="questions_been_adequately" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="questions_been_adequately_desc" id="questions_been_adequately_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Is there anything else you would like to do?:</label>
            <label class="yes_no"><input name="anything_else" value="1" type="radio">Yes</label> <label class="yes_no"><input name="anything_else" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="anything_else_desc" id="anything_else_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Have you attended the workshops organized by RSVP?:</label>
            <label class="yes_no"><input name="attended_workshops" value="1" type="radio">Yes</label> <label class="yes_no"><input name="attended_workshops" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="attended_workshops_desc" id="attended_workshops_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Were the topics useful to your work?:</label>
            <label class="yes_no"><input name="topics_useful" value="1" type="radio">Yes</label> <label class="yes_no"><input name="topics_useful" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="topics_useful_desc" id="topics_useful_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Do you have suggestions on topics that could be covered?:</label>
            <label class="yes_no"><input name="suggestions" value="1" type="radio">Yes</label> <label class="yes_no"><input name="suggestions" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="suggestions_desc" id="suggestions_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
            
            <label>Tell us about your experience so far at your work?:</label>
            <textarea rows="2" cols="100" class="form-control" name="experience_at_work_desc" id="experience_at_work_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
            <legend>Health and Safety</legend>
            <label>Are you coping with the weather?:</label>
            <label class="yes_no"><input name="coping_with_weather" value="1" type="radio">Yes</label> <label class="yes_no"><input name="coping_with_weather" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="coping_with_weather_desc" id="coping_with_weather_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Have you experience any health issues since you arrived?:</label>
            <label class="yes_no"><input name="experience_health_issues" value="1" type="radio">Yes</label> <label class="yes_no"><input name="experience_health_issues" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="experience_health_issues_desc" id="experience_health_issues_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>

            <label>Do you have any health or safety concerns?:</label>
            <label class="yes_no"><input name="health_safety_concerns" value="1" type="radio">Yes</label> <label class="yes_no"><input name="health_safety_concerns" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="health_safety_concerns_desc" id="health_safety_concerns_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
            <legend>RSVP Staff</legend>
            <label>Have you been able to reach RSVP staff when needed?:</label>
            <label class="yes_no"><input name="reach_staff" value="1" type="radio">Yes</label> <label class="yes_no"><input name="reach_staff" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="reach_staff_desc" id="reach_staff_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        
            <label>Is there enough contact with you and RSVP?:</label>
            <label class="yes_no"><input name="enough_contact_with_rsvp" value="1" type="radio">Yes</label> <label class="yes_no"><input name="enough_contact_with_rsvp" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="enough_contact_with_rsvp_desc" id="enough_contact_with_rsvp_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <fieldset>
            <legend>Adapting to the Culture</legend>
            <label>Are there any cultural concerns?:</label>
            <label class="yes_no"><input name="any_cultural_concerns" value="1" type="radio">Yes</label> <label class="yes_no"><input name="any_cultural_concerns" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="any_cultural_concerns_desc" id="any_cultural_concerns_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
                      
            <label>Are you generally happy so far with all your arrangements?:</label>
            <label class="yes_no"><input name="happy_with_arrangements" value="1" type="radio">Yes</label> <label class="yes_no"><input name="happy_with_arrangements" value="0" type="radio">No</label>
            <textarea rows="2" cols="100" class="form-control" name="happy_with_arrangements_desc" id="happy_with_arrangements_desc"  placeholder="Please enter comment" maxlength="999" style="resize:none"></textarea>
        </fieldset>
        
        <div class="row text-right">
             <input type="hidden" name="account_id" id="account_id2"/>
            <button type="submit" class="btn btn-primary" id="frm2btn">Save</button>
        </div>
        </div>
        <div class="col-md-3" >
        	<div class="bg-warning text-center" style="padding:5px;"><a id="doc2" target="_blank">Generate Document</a></div>
        	<div class="bg-primary text-center" style="padding:5px;">Notify Staff</div>
            <div class="emailList bg-warning" style="padding:5px;">
         		<label style="font-weight:normal;"><input type="checkbox" name="email[]" value="{fullname}||{email}"> {fullname}</label>
            </div>
        </div>
    </form>
    </div>
    </div>
</div>