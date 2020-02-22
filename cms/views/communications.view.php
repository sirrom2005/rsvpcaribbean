<?php defined('RAXANPDI')||exit(); ?>
<div class="row">
    <div class="col-md-9">
        <span class="pageHeading">Communications and PR</span>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-md-12">
        <ul id="myTab" class="nav nav-tabs nav-justified">
            <li class="active"><a href="#service-one" data-toggle="tab">Notice Board</a></li>
            <li class=""><a href="#service-two" data-toggle="tab">Ideas Board</a></li>
            <li class=""><a href="#service-three" data-toggle="tab">RSVP Bulletin</a></li>
        </ul>
        
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="service-one">
                <form name="frm_notice" id="frm_notice" method="post" class="form-horizontal">     
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Notice</th>
                            <th width="100">Date</th>
                            <th width="20" class="admin"></th>
                        </tr> 
                        </thead>
                        <tbody id="data">
                        <tr>
                            <td>{info}</td>
                            <td>{date_added}</td>
                            <td nowrap class="admin">
                                <a class="edit" href="#{id}" title="edit record"></a>
                                <a class="delete" href="#{id}" data-event-confirm="Are you sure you want to remove this record?" title="delete record"></a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                                <tr>
                                <td colspan="6" id="pager"></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="admin">
                        <textarea rows="5" cols="100" class="form-control" name="info" id="info" required data-validation-required-message="Enter notice" placeholder="Enter notice" maxlength="999" style="resize:none"></textarea>
                        <div class="row text-right">
                            <input type="text" name="note_id" id="note_id">
                            <button type="submit" class="btn btn-primary" id="btn">Send</button>
                        </div>
                    </div>
                </form>   
            </div>
            
            <div class="tab-pane fade" id="service-two">
                <form name="frm_send_mail" id="frm_send_mail" method="post" class="form-horizontal">     
                	<label class="control-label">Send your ideas to the management team</label>       
                    <textarea rows="5" cols="100" class="form-control" name="email_msg" id="email_msg" required data-validation-required-message="Please enter your idea" placeholder="Please enter your idea" maxlength="999" style="resize:none"></textarea>
                    <div class="row text-right">
                        <button type="submit" class="btn btn-primary" id="btn_send_email">Send</button>
                    </div>
                </form>    
            </div>
            
            <div class="tab-pane fade" id="service-three">
                <iframe style="width:100%; height:700px; border:0;" src="../filemanager/views/rsvp_bulletin.php"></iframe>    
            </div>
        </div>
        
    </div>
</div>
