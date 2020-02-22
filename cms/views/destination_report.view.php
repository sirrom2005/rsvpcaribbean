<?php 
defined('RAXANPDI')||exit(); 
?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading" id="pageheading"></span>
    </div>
</div>
<hr>

<a href="" class="btn btn-primary" id="btnExport" target="_blank">Export to csv</a>
<a href="destination_reports.php" class="btn btn-primary">Back</a>
<table class="table table-bordered table-striped">
    <tr>
    	<th>&nbsp;</th>
        <th>Volunteer Number</th>
        <th>Type</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Middle Name</th>
        <th>Last Name</th>
        <th>Arrival Date and Time</th>
        <th>Flight Number</th>
        <th>Airline</th>
        <th>Departure</th>
        <th>Destination</th>
        <th>Programme/Project</th>
        <th>Balance</th>
        <th>Accommodation Detail</th>
        <th>Programme/Project Detail</th>
        <th>Language Lesson</th>
        <th>Duration</th>
        <th>Date of Birth</th>
        <th>Group</th>
        <th>Country</th>
        <th>Marketing Executive</th>
    </tr>
    <tbody id="data">
        <tr>
        	<td>{ROWCOUNT}</td>
            <td><a target="_blank" href="volunteer_info.php?id={id}">{id}</a></td>
            <td>{type}</td>
            <td>{title}</td>
            <td><a target="_blank" href="volunteer_info.php?id={id}">{firstname}</a></td>
            <td>{middlename}</td>
            <td>{lastname}</td>
            <td nowrap>{arrival_date}</td>
            <td>{flight_number}</td>
            <td>{airline_name}</td>
            <td nowrap>{departure}</td>
            <td>{destination}</td>
            <td>{project}</td>
            <td>{balance}</td>
            <td>{accommodation_detail}</td>
            <td>{project_detail}</td>
            <td nowrap>{language_lesson}</td>
            <td>{duration}</td>
            <td nowrap>{dob}</td>
            <td>{group}</td>
            <td>{country}</td>
            <td>{marketing}</td>
        </tr>
    </tbody>
</table>
