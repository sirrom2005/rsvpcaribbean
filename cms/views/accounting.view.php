<?php defined('RAXANPDI')||exit(); ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
	$("#date").datepicker({dateFormat: 'yy-mm-dd'});
	$("#start_date_cat").datepicker({dateFormat: 'yy-mm-dd'});
	$("#end_date_cat").datepicker({dateFormat: 'yy-mm-dd'});
	$("#start_date_subcat").datepicker({dateFormat: 'yy-mm-dd'});
	$("#end_date_subcat").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<style>
    .form-control{margin:0 0 3px 0;}
	#subreportdata ul, #subreportdata li{margin:0; padding:0;}
	#subreportdata li{list-style:none; float:left; margin-right:10px;}
</style>
<div class="row">
    <div class="col-md-12">
        <span class="pageHeading">Accounting</span>
    </div>
</div>

<div class="col-md-12">
<ul id="myTab" class="nav nav-tabs nav-justified">
    <li class="active"><a href="#service-1" data-toggle="tab">Expense/Income</a></li>
    <!--li class=""><a href="#service-2" data-toggle="tab">Income</a></li-->
    <li class=""><a href="#service-3" data-toggle="tab">Tools</a></li>
    <li class=""><a href="#service-4" data-toggle="tab">Payee</a></li>
    <li class=""><a href="#service-5" data-toggle="tab">Category</a></li>
    <li class=""><a href="#service-6" data-toggle="tab">Reports</a></li>
    <li class=""><a href="#service-7" data-toggle="tab">Attachment</a></li>
</ul>
    
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="service-1">
        <form name="frm1" id="frm1" method="post" class="form-horizontal">            
            <h4>Expense</h4>
            <div class="col-md-6">
                <select name="payee_id" id="payee_id" class="form-control payee_id" required data-validation-required-message="Select payee" >
                    <option value="{id}">{name}</option>
                </select>
                <select name="category_id" id="category_id_list" class="form-control category_id" required data-validation-required-message="Select category" >
                    <option value="{id}">{name}</option>
                </select>
                <select name="sub_category_id" id="sub_category_id" class="form-control" required data-validation-required-message="Select sub category" >
                    <option value="{id}">{name}</option>
                </select>
                <input type="text" class="form-control" name="account" id="account" required data-validation-required-message="Enter GL Account Number" placeholder="Enter GL Account Number" />
                <textarea rows="2" cols="100" class="form-control editcontrol" name="detail" id="detail" required data-validation-required-message="Please enter details of Transaction" placeholder="Please enter details of Transaction" maxlength="999" style="resize:none"></textarea>

                <input type="hidden" name="id" id="id" />
                <div class="col-md-4"><button type="submit" class="btn btn-primary" id="addexpense">Save</button></div>
                <div class="col-md-3"><button type="button" class="btn btn-primary" id="clearexpense">Clear</button></div>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="date" id="date" required data-validation-required-message="Enter date" placeholder="Enter date" />
                <input type="text" class="form-control" name="amount" id="amount" required data-validation-required-message="Enter amount" placeholder="Enter amount" />
                <input type="text" class="form-control" name="cheque_number" id="cheque_number" placeholder="Enter Cheque Number" />
                <input type="checkbox" name="receipt" id="receipt" value="1" /> <label for="receipt">&nbsp;Receipt</label><br>   
                <input type="radio" name="trans_type" id="expense" value="expense" required data-validation-required-message="Select payment type"  checked="checked" /> <label for="expense">&nbsp;Expense</label>
                <input type="radio" name="trans_type" id="income"  value="income"  required data-validation-required-message="Select payment type" /> <label for="income">&nbsp;Income</label>
            </div>
        </form> 
        <p><br style="clear:both;"></p>
        <div class="col-md-12">
        <form name="frmexpense" id="frmexpense" method="post">
            <table class="table table-bordered table-hover">
                <tr>
                    <th width="20"></th>
                    <th width="2"><input type="checkbox" name="selectall" id="selectall" value="1" /></th>
                    <th width="2"><button type="submit" class="btn btn-danger del" id="groupbtn" data-event-confirm="Delete selected item(s)?">Del</button></th>
                    <th>Receipt</th>
                    <th nowrap>Add/Modif Date</th>
                    <th nowrap>Transaction Date</th>
                    <th>Payee</th>
                    <th nowrap>GL Category</th>
                    <th nowrap>GL Sub-Category</th>
                    <th nowrap>GL Account Number</th>
                    <th>Amount</th>
                    <th>Deposit</th>
                    <th>Balance</th>
                    <th nowrap>Cheque Number</th>
                </tr>
                <tbody id="data">
                <tr>
                    <td nowrap><a class="edit" href="#{id}" title="edit"></a></td>
                    <td><input type="checkbox" name="del[]" value="{id}" class="checkbox" /></td>
                    <td>{ROWCOUNT}</td>
                    <td>{receipt}</td>
                    <td nowrap>{date_added}</td>
                    <td>{transaction_date}</td>
                    <td>{payee}</td>
                    <td>{category}</td>
                    <td>{sub_category}</td>
                    <td>{account_number}</td>
                    <td>{amount}</td>
                    <td>{deposit}</td>
                    <td>{balance}</td>
                    <td>{cheque_number}</td>
                </tr>
                </tbody>
                <tfoot>
                	<tr>
                    	<td colspan="14"></td>
                    </tr>
                </tfoot>
            </table>
        </form>  
        </div>   
    </div>
    <div class="tab-pane fade" id="service-2">
        <form name="frm2" id="frm2" method="post" class="form-horizontal">
           2222
        </form>
    </div>
    
    <div class="tab-pane fade" id="service-3">       
        <a class="btn btn-primary" id="expTran" target="_blank">Print Transactions</a>
        <button type="submit" class="btn btn-primary" id="exppayee">Export Payees</button>
        <button type="submit" class="btn btn-primary" id="expCat">Export GL Categories</button>
        <button type="submit" class="btn btn-primary" id="expSubCat">Export GL Sub-categories</button>
    </div>
    
    <div class="tab-pane fade" id="service-4">
        <form name="frm4" id="frm4" method="post" class="form-horizontal">
           <h4>Payee</h4>
            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Enter Payee name" placeholder="Enter Payee name" />
            <input type="text" class="form-control" name="type" id="type" required data-validation-required-message="Enter Type" placeholder="Enter Type" />
            <button type="submit" class="btn btn-primary" id="addpayee">Add Payee</button>
        </form>
    </div>
    
    <div class="tab-pane fade" id="service-5">
        <form name="frm5a" id="frm5a" method="post" class="form-horizontal">
            <div class="col-md-6">
                <h4>GL Category</h4>
                <input type="text" class="form-control" name="category" id="category" required data-validation-required-message="Enter category name" placeholder="Enter category name" />
                <button type="submit" class="btn btn-primary" id="addcat">Add GL Category</button>
            </div>
        </form>
        <form name="frm5b" id="frm5b" method="post" class="form-horizontal">
            <div class="col-md-6">
                <h4>GL Sub-Category</h4>
                <select name="category_id" id="category_id" class="form-control category_id" required data-validation-required-message="Enter category name" >
                    <option value="{id}">{name}</option>
                </select>
                <input type="text" class="form-control" name="sub_category" id="sub_category" required data-validation-required-message="Enter sub-category name" placeholder="Enter sub-category name" />
                <button type="submit" class="btn btn-primary" id="addsubcat">Add GL Sub-Category</button>
            </div>
        </form>
    </div>
    
    <div class="tab-pane fade" id="service-6">
    	<div class="col-md-6">
        <form name="frm6a" id="frm6a" method="post" class="form-horizontal">
        	<h4>Main GL Category Report</h4>
            <div class="col-md-6"><input type="text" class="form-control" name="start_date_cat" id="start_date_cat" required data-validation-required-message="Enter start date" placeholder="Enter start date" /></div>
            <div class="col-md-6"><input type="text" class="form-control" name="end_date_cat" id="end_date_cat" required data-validation-required-message="Enter end date" placeholder="Enter end date" /></div>
            <div class="col-md-12 text-right"><button type="submit" class="btn btn-primary" id="rptcat">Report</button></div>
        </form>
    	</div>

        <div class="col-md-6">
        <form name="frm6b" id="frm6b" method="post" class="form-horizontal">
        	<h4>Main GL Sub-Category Report</h4>
            <div class="col-md-6"><input type="text" class="form-control" name="start_date_subcat" id="start_date_subcat" required data-validation-required-message="Enter start date" placeholder="Enter start date" /></div>
            <div class="col-md-6"><input type="text" class="form-control" name="end_date_subcat" id="end_date_subcat" required data-validation-required-message="Enter end date" placeholder="Enter end date" /></div>
            <div class="col-md-12 text-right"><button type="submit" class="btn btn-primary" id="rptsubcat">Report</button></div>
        </form>
    	</div>
        <p>&nbsp;</p>
       <div class="col-md-12"> 
       		<div id="reportdata">
            <table class="table table-bordered table-striped">
            </table>
            </div>
            
            <div id="subreportdata">
            
            </div>
        </div>
    </div>
    
    <div class="tab-pane fade" id="service-7">
        <form name="frm7" id="frm7" method="post" class="form-horizontal">
            <div class="col-md-12">
                <div class="well">
                    <ul>
                        <li>Please do not attach files over 1MB</li>
                        <li>Please upload only JPEG or PDF files</li>
                    </ul>       
                </div>
                <div id="photoFrm"></div>
                
                <input type="checkbox" name="select_all" id="select_all" /> &nbsp;
                <button type="submit" class="btn btn-danger del_photo" id="photogroupbtn" data-event-confirm="Delete selected photo(s)?">Del</button>
                
                <div id="gallery">
                	<input type="checkbox" name="delphoto[]" value="{id}" class="photocheckbox"/>&nbsp;<a href="../rsvp_docs/accounting/{document}" target="_blank">{document}</a><br>
                </div>
             </div>
        </form>
    </div>
</div>
</div>

<script type="text/javascript" language="javascript">
	$("#groupbtn").hide();
    var fn1 = function(){
		//single select.
		$("#selectall")[0].checked = false;
        var len = $(".checkbox").length;
        for(var i=0; i<len; i++)
        {
            if($(".checkbox")[i].checked == true)
            {
                $("#groupbtn").show();
                return;
            }
        }
		$("#groupbtn").hide();
    };
	
	var fn2 = function(){
		//group select.
		var len = $(".checkbox").length;
		var check = ($("#selectall")[0].checked)? true : false;
		if(check){
			$("#groupbtn").show();
		}
		else{
			$("#groupbtn").hide();
		}

		for(var i=0; i<len; i++)
		{
			$(".checkbox")[i].checked = check;
		}
	};
    $(".checkbox").click(fn1);
    $("#selectall").click(fn2);
	
	
	//$("#photogroupbtn").hide();
    var fn3 = function(){
		//single select.
		$("#select_all")[0].checked = false;
        var len = $(".photocheckbox").length;
        for(var i=0; i<len; i++)
        {
            if($(".photocheckbox")[i].checked == true)
            {
                //$("#photogroupbtn").show();
                return;
            }
        }
		//$("#photogroupbtn").hide();
    };
	
	var fn4 = function(){
		//group select.
		var len = $(".photocheckbox").length;
		var check = ($("#select_all")[0].checked)? true : false;
		if(check){
			//$("#photogroupbtn").show();
		}
		else{
			//$("#photogroupbtn").hide();
		}

		for(var i=0; i<len; i++)
		{
			$(".photocheckbox")[i].checked = check;
		}
	};
    $(".photocheckbox").click(fn3);
    $("#select_all").click(fn4);
</script>
