<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("#departure_date").datepicker({dateFormat: 'yy-mm-dd'});
	$("#arrival_date").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>

<div class="row">
    <div class="col-md-12">
    	<span style="float:right;"><a href="" class="btn btn-primary">New</a></span>
    	<span class="pageHeading">Travel Detail</span>
    </div>
</div>
<hr>
<div class="row">
<div id="summery">
    <div class="col-lg-3">
        <b>{fullname}</b>
    </div>
</div>
</div>
<hr>
<div class="row">
    <div class="col-lg-4">
        <b>Date Added:</b> <span id="date_added"></span>
    </div>
    <div class="col-lg-4">
        <b>Date Updated:</b> <span id="date_updated"></span>
    </div>
    <div class="col-lg-4">
        <b>Update By:</b> <span id="user_id"></span>
    </div>
</div>
<hr>
<div class="row">
    <form name="frm" id="frm" method="post" class="form-horizontal">     
   		<label class="control-label col-lg-3">Departure Airport:</label>       
        <div class="col-lg-9">
        <input type="text" class="form-control" name="departure_airport" id="departure_airport" required data-validation-required-message="Please enter departure airport" placeholder="Please enter departure airport" />
        </div>
        
        <label class="control-label col-lg-3">Departure Date:</label>
        <div class="col-lg-2">
            <input type="text" class="form-control" name="departure_date" id="departure_date" required data-validation-required-message="Enter departure date" placeholder="YYYY-MM-DD" />
        </div>
        <div class="col-lg-7">
        	<div class="col-lg-3">
                <label class="control-label" style="white-space:nowrap;">Departure Time:</label>
            </div>
            <div class="col-lg-3">
                <select name="dh" id="dh" class="form-control" >
                    <option value="{hour}">{hour}</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select name="dm" id="dm" class="form-control" >
                    <option value="{min}">{min}</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select name="da" id="da" class="form-control" >
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div>  
        </div>
        <div class="row">
            <label class="control-label col-lg-3">Check-in Time:</label>
            <div class="col-lg-2">
                <select name="check_in_h" id="check_in_h" class="form-control" >
                    <option value="{hour}">{hour}</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select name="check_in_m" id="check_in_m" class="form-control" >
                    <option value="{min}">{min}</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select name="check_in_a" id="check_in_a" class="form-control" >
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div>
        </div>
        
        <label class="control-label col-lg-3">Airline Name:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="airline_name" id="airline_name" placeholder="Please enter airline name" />
        </div> 
        
        <label class="control-label col-lg-3">Flight Number:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="flight_number" id="flight_number" placeholder="Please enter flight number" />
        </div>      
        
        <label class="control-label col-lg-3">Arrival Airport:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="arrival_airport" id="arrival_airport" placeholder="Please enter arrival airport" />
        </div> 
        
        <label class="control-label col-lg-3">Arrival Date:</label>
        <div class="col-lg-2">
            <input type="text" class="form-control" name="arrival_date" id="arrival_date" required data-validation-required-message="Please enter arrival date" placeholder="YYYY-MM-DD" />
        </div>
        <div class="col-lg-7">
            <div class="col-lg-3">
                <label class="control-label">Arrival Time:</label>
            </div>
            <div class="col-lg-3">
                <select name="arh" id="arh" class="form-control" >
                    <option value="{hour}">{hour}</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select name="arm" id="arm" class="form-control" >
                    <option value="{min}">{min}</option>
                </select>
            </div>
            <div class="col-lg-3">
                <select name="ara" id="ara" class="form-control" >
                    <option value="am">AM</option>
                    <option value="pm">PM</option>
                </select>
            </div> 
        </div>
        <label class="control-label col-lg-3">Staff Notes:</label>
        <div class="col-lg-9">
            <textarea rows="5" cols="100" class="form-control" name="staff_note" id="staff_note" placeholder="Please enter food information" maxlength="999" style="resize:none"></textarea>
        </div>
        <div class="row text-right">
        	<input type="hidden" name="id" id="id" />
            <button type="submit" class="btn btn-primary" id="btn">Save</button>
        </div>
    </form>    
</div>

<hr>	
<div class="row">
    <div class="col-lg-12">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Departure Airport</th>
                <th>Departure date</th>
                <th>Airline Name</th>
                <th>Flight Number</th>
                <th width="20"></th>
            </tr>
            <tbody id="data">
            <tr>
                <td>{departure_airport}</td>
                <td>{departure_date}</td>
                <td>{airline_name}</td>
                <td>{flight_number}</td>
                <td nowrap>
                    <a class="edit" href="#{id}" title="view information"></a>
                    <a class="delete" href="#{id}" title="delete record" data-event-confirm="Are you sure you want to remove this record?"></a>
                </td>
            </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" id="pager"></td>
                </tr>
            </tfoot>
        </table>
    </div> 
</div>
