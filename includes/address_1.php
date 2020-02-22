<fieldset style="clear:both;">
    <legend id="legendTitle1">Residential Address</legend>
    <label class="control-label col-lg-3">Address 1:</label>
    <div class="col-lg-9">
    	<input type="text" class="form-control" name="address1" id="address1" required data-validation-required-message="Please enter address line 1" placeholder="Please enter address line 1" />
    </div>
    <label class="control-label col-lg-3">Address 2:</label>
    <div class="col-lg-9">
    	<input type="text" class="form-control" name="address2" id="address2" placeholder="Please enter address line 2" />
    </div>
    <label class="control-label col-lg-3">Address 3:</label>
    <div class="col-lg-9">
    	<input type="text" class="form-control" name="address3" id="address3" placeholder="Please enter address line 3" />
    </div>

    <label class="control-label col-lg-3">Country:</label>
    <div class="col-lg-9">
        <select name="country_id" id="country_id" class="form-control" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
    <label class="control-label col-lg-3">City/Town:</label>
    <div class="col-lg-9">
        <select name="state_id" id="state_id" class="form-control" >
            <option value="{id}" >{name}</option>
        </select>
    </div>       
    <label class="control-label col-lg-3">Zip Code:</label>
    <div class="col-lg-9">
    	<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="Please enter zip code" />
    </div>
    <div id="phone1">
        <label class="control-label col-lg-3" id="phone_label">Home phone:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Please enter phone number" />
        </div>
    </div>
    <div id="phone2" class="hide">
        <label class="control-label col-lg-3">Telephone-2:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone_2" id="phone_2" placeholder="Please enter phone number" />
        </div>
    </div>
    <div id="phone3" class="hide">
        <label class="control-label col-lg-3">Telephone-3:</label>
        <div class="col-lg-9">
            <input type="text" class="form-control" name="phone_3" id="phone_3" placeholder="Please enter phone number" />
        </div>
    </div>
</fieldset>
