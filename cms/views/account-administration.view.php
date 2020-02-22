<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("#date").datepicker({dateFormat: 'yy-mm-dd'});
	$("#date_amt").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<style>
    .converter{ padding:1px 5px;}
</style>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Account Administration</span>
    </div>
</div>
<p>&nbsp;</p>
<table class="table" id="summery">
    <tr>
        <td><b>{fullname}</b></td>
        <td><b>Volunteer ID#:</b> {id}</td>
        <td><b>Username:</b> {username}</td>
    </tr>
    <tr>
        <td><b>Status:</b> {status}</td>
        <td><b>Updated By:</b> {admin}</td>
        <td><b>Date Updated:</b> {date_added}</td>
    </tr>
</table>
<div class="col-md-12">
<ul id="myTab" class="nav nav-tabs nav-justified">
    <li class="active"><a href="#amounts" data-toggle="tab">Amounts</a></li>
    <li class=""><a href="#history" data-toggle="tab">History</a></li>
</ul>
<div id="myTabContent" class="tab-content">   
    <div class="tab-pane fade active in" id="amounts">
        <fieldset>
            <legend>Amount Due</legend>
            <form name="frmdue" id="frmdue" method="post"> 
                <div class="col-lg-2">
                    <input type="text" class="form-control" name="date" id="date" required data-validation-required-message="date" placeholder="YYYY-M-D" />
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" name="price" id="price" required data-validation-required-message="Amount Due" placeholder="Amount Due ($ USD)" />
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="description" id="description" required data-validation-required-message="Description" placeholder="Description" />
                </div>
                <div class="col-lg-1">
                    <input type="hidden" name="id" id="id">
                    <button type="submit" class="btn btn-primary" id="btndue">Save</button>
                </div>
            </form>
            <table class="table">
                <tr>
                    <th>Date</th>
                    <th>Price 
                        <select id="optdue" class="converter">
                            <option value="{rate}">{currency}</select>
                        </select>
                    </th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <tbody id="due">
                    <tr>
                        <td>{Date}</td>
                        <td class="due_covt">{Price}</td>
                        <td>{Description}</td>
                        <td class="text-right">
                        	<a href="#{id}" class="edit" id="edit"></a>
                            <a href="#{id}" class="delete" data-event-confirm="Are you sure you want to remove this record?" title="delete record"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
        
        <hr>
        
        <fieldset>
            <legend>Amount Paid or Credited</legend>
            <form name="frmamt" id="frmamt" method="post">
                <div class="col-lg-2">
                    <input type="text" class="form-control" name="date" id="date_amt" required data-validation-required-message="date" placeholder="YYYY-M-D" />
                </div>
                <div class="col-lg-3">
                    <input type="text" class="form-control" name="amount" id="amount" required data-validation-required-message="Amount Paid" placeholder="Amount Paid ($ USD)" />
                </div>
                <div class="col-lg-6">
                    <select name="description_id" id="description_id" class="form-control" required data-validation-required-message="Select description" >
                        <option value="{id}" >{Description}</option>
                    </select>
                </div>
                <div class="col-lg-1">
                    <input type="hidden" name="id" id="id_amt">
                    <button type="submit" class="btn btn-primary" id="btnamt">Save</button>
                </div>
            </form>
            <table class="table">
                <tr>
                    <th>Date</th>
                    <th>Price
                        <select id="optpay" class="converter">
                            <option value="{rate}">{currency}</select>
                        </select>
                    </th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <tbody id="paid">
                <tr>
                    <td>{Date}</td>
                    <td class="pay_covt">{Price}</td>
                    <td>{Description}</td>
                    <td class="text-right">
                        <a href="#{id}" class="edit" id="edit2"></a>
                        <a href="#{id}" class="delete delpayment" data-event-confirm="Are you sure you want to remove this record?" title="delete record"></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
    <div class="tab-pane fade" id="history">
    <fieldset>
        <legend>Payment History</legend>
       	<table class="table" >
            <tr>
            	<th>Description</th>
                <th>Price
                    <select id="opthis" class="converter">
                        <option value="{rate}">{currency}</select>
                    </select>
                </th>
                <th>Transaction Type</th>
                <!--th>Dir</th-->
                <th>Item Date</th>
                <th>Created Date</th>
                <th>Date Modified</th>
                <th>Entered By</th>
            </tr>
            <tbody id="historydata">
            <tr>
                <td>{Description}</td>    
                <td class="prc">{Price}</td>
                <td>{Transaction Type}</td>
                <!--td>{Dir}</td-->
                <td>{Date}</td>
                <td>{Date Added}</td>
                <td>{Date Modified}</td>
                <td>{Entered By}</td>
            </tr>
            </tbody>
            <tr>
                <td colspan="9" class="text-right">
                    <a href="#" class="btn btn-primary export" >Export</a>
                </td>
            </tr>
        </table>
    </fieldset>
    </div>
</div>
</div>

<script>
var dueTmp = new Array();
var payTmp = new Array();
var hisTmp = new Array();
var i=0;
$(function() {
    $('table #due tr td.due_covt').each(function(){
        dueTmp[i] = $(this).text().replace("$","").replace(",",""); 
        i++;
    });
    i=0;
    $('table #paid tr td.pay_covt').each(function(){
        payTmp[i] = $(this).text().replace("$","").replace(",",""); 
        i++;
    });
    i=0;
    $('table #historydata tr td.prc').each(function(){
        hisTmp[i] = $(this).text().replace("$","").replace(",","");
        i++;
    });
});

$("#optdue").change(function() {
    var currency = $(this).val();
    i=0;
    val = null;
    $('table #due tr td.due_covt').each(function(){
        val = dueTmp[i]*currency;
        val = val.toFixed(2);
        val = "$" + val.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        $(this).html(val);
        i++;
    });
});

$("#optpay").change(function() {
    var currency = $(this).val();
    i=0;
    val = null;
    $('table #paid tr td.pay_covt').each(function(){
        val = payTmp[i]*currency;
        val = val.toFixed(2);
        val = "$" + val.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        $(this).html(val);
        i++;
    });
});

$("#opthis").change(function() {
    var currency = $(this).val();
    i=0;
    val = null;
    $('table #historydata tr td.prc').each(function(){
        val = hisTmp[i]*currency;
        val = val.toFixed(2);
        val = "$" + val.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        $(this).html(val);
        i++;
    });
});
</script>