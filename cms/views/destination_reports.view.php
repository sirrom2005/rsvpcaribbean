<?php 
defined('RAXANPDI')||exit(); 
?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading" id="pageheading">Destination Application</span>
    </div>
</div>
<hr>
<form name="frm" id="frm" method="post">
    <div class="row">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
    </div>  
    
    <div class="row" >
    <div class="col-md-6">
        <table class="table table-bordered table-striped">
            <tr>
                <td><input type="text" class="form-control" name="syear" id="syear" /></td>
                <td><input type="text" class="form-control" name="eyear" id="eyear" /></td>
                <td><button type="submit" class="btn btn-primary" id="btnfilter">Filter</button></td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <table id="data" class="table table-bordered table-striped">
        </table>
    </div>
    </div> 
</form>