<?php defined('RAXANPDI')||exit(); ?>
<h2>Staff Information</h2>

<ul id="myTab" class="nav nav-tabs nav-justified">
    <li class="active"><a href="#service-one" data-toggle="tab">Destination Information</a>
    </li>
    <li class=""><a href="#service-two" data-toggle="tab">Staff Information</a>
    </li>
</ul>

<div id="myTabContent" class="tab-content">
<div class="tab-pane fade active in" id="service-one">
     <select name="office" id="office" class="form-control filter" >
        <option value="{id}" >{name}</option>
    </select>
    <form method="post" name="officefrm" id="officefrm" >
        <label class="control-label col-lg-4">Destination Name:</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="name" id="name"  required data-validation-required-message="Please enter office name" placeholder="Please enter office name" />
        </div>
        <label class="control-label col-lg-4">Emergency Staff Contact #1:</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="staff_contact_1" id="staff_contact_1" placeholder="Please enter emergency Staff Contact #1" />
        </div>
        <label class="control-label col-lg-4">Telephone Number (Mobile):</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="contact_number_1" id="contact_number_1" placeholder="Please enter Telephone Number (Mobile)" />
        </div>
        <label class="control-label col-lg-4">Emergency Staff Contact #2:</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="staff_contact_2" id="staff_contact_2" placeholder="Please enter emergency Staff Contact #2" />
        </div>
        <label class="control-label col-lg-4">Telephone Number (Mobile):</label>
        <div class="col-lg-8">
            <input type="text" class="form-control" name="contact_number_2" id="contact_number_2" placeholder="Please enter Telephone Number (Mobile)" />
        </div>
        <?php include_once("../includes/address_1.php");?>
        <div class="row text-right">
            <button type="submit" class="btn btn-primary" id="offbtn">Save</button>
        </div>
    </form>
</div>
	
	
<div class="tab-pane fade" id="service-two">
     <select name="staff_id" id="staff_id" class="form-control filter" >
        <option value="{id}" >{name}</option>
    </select>
	<form method="post" name="stafffrm" id="stafffrm" >
        <label class="control-label col-lg-3">Title:</label>
        <div class="col-lg-9">
            <select name="title_id" id="title_id" class="form-control" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
        <label class="control-label col-lg-3">First Name:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="firstname" id="firstname" required data-validation-required-message="Please enter firstname"  placeholder="Please enter firstname" />
        </div>
        <label class="control-label col-lg-3">Last Name:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="lastname" id="lastname" required data-validation-required-message="Please enter lastname" placeholder="Please enter lastname" />
        </div>     
        <label class="control-label col-lg-3">Job Title:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Please enter job title" />
        </div>
        <label class="control-label col-lg-3">Department:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="department" id="department" placeholder="Please enter department" />
        </div>
        <label class="control-label col-lg-3">Email:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="email" id="email" placeholder="Please enter email address" />
        </div>
        <label class="control-label col-lg-3">Phone (mobile):</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone_mobile" id="phone_mobile" placeholder="Please enter mobile phone" />
        </div>
        <label class="control-label col-lg-3">Phone (office):</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone_office" id="phone_office" placeholder="Please enter office phone" />
        </div>
        <label class="control-label col-lg-3">Fax:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="fax" id="fax" placeholder="Please enter fax number" />
        </div>
        <label class="control-label col-lg-3">Skype:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="skype" id="skype" placeholder="Please enter skype name" />
        </div>
        <label class="control-label col-lg-3">WhatsApp:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="whats_app" id="whats_app" placeholder="Please enter WhatsApp number" />
        </div>
        <label class="control-label col-lg-3">Address:</label>
        <div class="col-lg-9">
            <select name="staff_office_id" id="staff_office_id" class="form-control" >
                <option value="{id}" >{name}</option>
            </select>
        </div> 
        <div class="row text-right">
            <button type="submit" class="btn btn-primary" id="staffbtn">Save</button>
        </div>
    </form>
</div>
</div>	



