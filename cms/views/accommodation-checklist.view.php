<?php defined('RAXANPDI')||exit(); ?>
<h2>Accommodation Checklist</h2>
<div class="row">
    <div class="col-md-12">
        <select name="country_db" id="country_db" class="form-control filter" required data-validation-required-message="Please select country" >
            <option value="{id}" >{name}</option>
        </select>
    </div>
</div>
<form name="frm" method="post">
<div class="row">
    <div class="col-md-12">
        <table id="checklistTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th rowspan="2">Accommodation</th>
                    <th colspan="3">Type</th> 
                    <th rowspan="2">Capacity:</th>
                    <th rowspan="2">Number of Rooms:</th>
                    <th colspan="2">Type of room</th>
                    <th colspan="2">Bedding</th>
                    <th colspan="6">Bathroom</th>
                    <th colspan="3">Food</th>
                    <th colspan="4">Drinking Water</th>
                    <th rowspan="2">Children</th>
                    <th rowspan="2">Pets</th>
                    <th colspan="3">Smoking</th> 
                    <th colspan="4">Internet</th>
                    <th colspan="5">Laundry</th>
                    <th rowspan="2">Languages</th>
                    <th>Curfew</th>
                    <th colspan="5">Safety and Security</th>
                    <th colspan="3">Mosquito Net</th>
                    <th>Wheelchair access</th>                    
                </tr>
                <tr class="subHeading">
                    <td>Host Family</td>
                    <td>Hostel</td>
                    <td>Hotel</td>
                    <td>Own room</td>
                    <td>Shared room with same sex volunteer</td>
                    <td>Bring sheet</td>
                    <td>Bring own towel</td>
                    <td>Own bathroom</td>
                    <td>Shared bathroom</td>
                    <td>Running water</td>
                    <td>Bucket shower</td>
                    <td>Hot water available</td>
                    <td>Toiletries not provided</td>
                    <td>Vegetarian option</td>
                    <td>Vegan option</td>
                    <td>Regular meals</td>
                    <td>Drinking tap water is ok</td>
                    <td>Do not drink tap water</td>
                    <td>Boiled water provided</td>
                    <td>Purchase own bottled water</td>
                    <td>Allowed</td>
                    <td>Allowed outside the house</td>
                    <td>Not allowed</td>
                    <td>Available – free</td>
                    <td>Available with fee</td>
                    <td>Not available</td>
                    <td>Internet café in town</td>
                    <td>Washing machine</td>
                    <td>Handwash</td>
                    <td>Wash by host family with fee</td>
                    <td>Wash by helper with fee</td>
                    <td>Laundromat in town</td>
                    <td>Yes at</td>
                    <td>Lockable wardrobe</td>
                    <td>Lockable drawers</td>
                    <td>Lockable room</td>
                    <td>Room key provided</td>
                    <td>House key provided</td>
                    <td>Bring own mosquito net</td>
                    <td>Can buy in country</td>
                    <td>Not necessary</td>
                    <td>Yes</td>

                </tr>
            </thead>
            <tbody id="data">
                <tr>
                    <td>{host_name}<input type="hidden" value="{id}" name="accommodation_id[{id}]" id="accommodation_id[{id}]" /></td>
                    <td><input type="radio" value="1" name="accommodation_type[{id}]" id="accommodation_type[{id}]" /></td>
                    <td><input type="radio" value="2" name="accommodation_type[{id}]" id="accommodation_type[{id}]" /></td>
                    <td><input type="radio" value="3" name="accommodation_type[{id}]" id="accommodation_type[{id}]" /></td>
                    <td><input type="text" name="capacity[{id}]" id="capacity[{id}]" /></td>
                    <td><input type="text" name="rooms[{id}]" id="rooms[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="own_room[{id}]" id="own_room[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="share_room[{id}]" id="share_room[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="sheet[{id}]" id="sheet[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="towel[{id}]" id="towel[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="own_bathroom[{id}]" id="own_bathroom[{id}]" /></td>
                    <td><input type="checkbox" value="2" name="share_bathroom[{id}]" id="share_bathroom[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="running_water[{id}]" id="running_water[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="bucket_shower[{id}]" id="bucket_shower[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="bathroom_hot_water[{id}]" id="bathroom_hot_water[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="bathroom_toiletries[{id}]" id="bathroom_toiletries[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="food_vegetarian[{id}]" id="food_vegetarian[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="food_vegan[{id}]" id="food_vegan[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="food_regular[{id}]" id="food_regular[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="water_tap[{id}]" id="water_tap[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="water_donot_drink[{id}]" id="water_donot_drink[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="water_boiled[{id}]" id="water_boiled[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="water_purchase[{id}]" id="water_purchase[{id}]" /></td>
                    <td><input type="text" name="children[{id}]" id="children[{id}]" /></td> 
                    <td><input type="text" name="pets[{id}]" id="pets[{id}]" /></td>
                    <td><input type="radio" value="1" name="smoke[{id}]" id="smoke[{id}]" /></td>
                    <td><input type="radio" value="2" name="smoke[{id}]" id="smoke[{id}]" /></td>
                    <td><input type="radio" value="3" name="smoke[{id}]" id="smoke[{id}]" /></td>
                    <td><input type="radio" value="1" name="internet[{id}]" id="internet[{id}]" /></td>
                    <td><input type="radio" value="2" name="internet[{id}]" id="internet[{id}]" /></td>
                    <td><input type="radio" value="3" name="internet[{id}]" id="internet[{id}]" /></td>
                    <td><input type="radio" value="4" name="internet[{id}]" id="internet[{id}]" /></td>
                    <td><input type="radio" value="1" name="laundry[{id}]" id="laundry[{id}]" /></td>
                    <td><input type="radio" value="2" name="laundry[{id}]" id="laundry[{id}]" /></td>
                    <td><input type="radio" value="3" name="laundry[{id}]" id="laundry[{id}]" /></td>
                    <td><input type="radio" value="4" name="laundry[{id}]" id="laundry[{id}]" /></td>
                    <td><input type="radio" value="5" name="laundry[{id}]" id="laundry[{id}]" /></td>
                    <td><input type="text" name="languages[{id}]" id="languages[{id}]" /></td>
                    <td><input type="text" name="curfew[{id}]" id="curfew[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="lockable_wardrobe[{id}]" id="lockable_wardrobe[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="lockable_drawers[{id}]" id="lockable_drawers[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="lockable_room[{id}]" id="lockable_room[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="room_key_provided[{id}]" id="room_key_provided[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="house_key_provided[{id}]" id="house_key_provided[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="mosquito_net_bring[{id}]" id="mosquito_net_bring[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="mosquito_net_buy[{id}]" id="mosquito_net_buy[{id}]" /></td> 
                    <td><input type="checkbox" value="1" name="mosquito_net_not_need[{id}]" id="mosquito_net_not_need[{id}]" /></td>
                    <td><input type="checkbox" value="1" name="wheelchair[{id}]" id="wheelchair[{id}]" /></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        &nbsp;&nbsp;<input type="submit" value="Submit" class="btn btn-primary" id="btn" />
        <!--a href="accommodation.php" class="btn btn-warning">Back</a-->
    </div>
</div>
</form>





