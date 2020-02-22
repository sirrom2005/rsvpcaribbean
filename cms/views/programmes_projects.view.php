<?php defined('RAXANPDI')||exit(); ?>

<div class="row">
    <div class="col-md-9">
        <span class="pageHeading"></span>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-4">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
    <div class="col-md-6">
        <select name="category_id" id="category_id" class="form-control filter" required data-validation-required-message="Please select category" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
    <div class="col-md-2">
    	<a href="" class="btn btn-primary" id="btn"></a>
    </div>
    
    <table class="table table-bordered table-hover">
    	<tr>
            <th>Institution</th>
            <th>Category</th>
            <th>Sub category</th>
            <th>Date added</th>
            <th width="20"></th>
        </tr>
        <tbody id="data">
        <tr>
            <td>{institution}</td>
            <td>{category}</td>
            <td>{project_sub_type}</td>
            <td>{date_added}</td>
            <td nowrap>
            	<a class="view" href="project.php?cat={category_id}&id={id}" title="view information"></a>
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


