<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Marketing & Sales</span>
    </div>
</div>
<hr>
<div class="col-md-12">
<form name="frm" id="frm" method="post" class="form-horizontal">            
    <label class="control-label col-lg-4">Number of Prospects:</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="number_of_prospect" id="number_of_prospect" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Number of Quotes:</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="number_of_quotes" id="number_of_quotes" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Quote Conversion Rate(%):</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="quote_conversion_rate" id="quote_conversion_rate" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Number of Customers:</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="number_of_customer" id="number_of_customer" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Sales Conversion Rate(%):</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="sales_conversion_rate" id="sales_conversion_rate" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Total Sales($):</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="total_sales" id="total_sales" required data-validation-required-message="Please enter"/>
    </div>
    <label class="control-label col-lg-4">Average $ Sale:</label>
    <div class="col-lg-8">
    <input type="text" class="form-control" name="average_sale" id="average_sale" required data-validation-required-message="Please enter "/>
    </div>
    <div class="row text-right">
    	<input type="hidden" name="id" id="id"/>
        <button type="submit" class="btn btn-primary" id="btn">Save</button>
    </div>
</form> 
<hr>
<form name="fdmdata" id="fdmdata" method="post">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Number of Prospects</th>
            <th>Number of Quotes</th>
            <th>Quote Conversion Rate(%)</th>
            <th>Customers</th>
            <th>Sales Conversion Rate(%)</th>
            <th>Total Sales</th>
            <th>Average Sale</th>
            <th width="20"></th>
        </tr>
        <tbody id="data">
        <tr>
            <td>{number_of_prospect}</td>
            <td>{number_of_quotes}</td>
            <td>{quote_conversion_rate}(%)</td>
            <td>{number_of_customer}</td>
            <td>{sales_conversion_rate}(%)</td>
            <td>{total_sales}</td>
            <td>{average_sale}</td>
            <td nowrap>
            	<a class="edit" href="#{id}" title="edit this record"></a>
                <a class="delete" href="#{id}" data-event-confirm="Are you sure you want to remove this record?" title="delete this record"></a>
            </td>
        </tr>
        </tbody>
        <tfoot>
            <tr>
                <td id="pager" colspan="8"></td>
            </tr>
        </tfoot>
    </table>
</form>
</div>