<?php
//$this->User = ClassRegistry::init('User');
 
//$test = $this->User->query("SELECT id, redirect, is_redir, status FROM actiontags WHERE guid = '6000110d-f7d1-403d-bfc5-ce303b8db8cb' AND status = 1 ");

//debug($test[0]['actiontags']['id']);
// echo $this->Html->link( "Logout",   array('controller'=>'users','action'=>'logout'),array('class' => 'btn btn-link pull-right') )." "; 
?>
<style>
    td {
        padding-left: 15px !important;
    }
</style>

<center>
    <div class="row">
    <div class="col-sm-10 col-sm-push-1">
 <!-- New Interface -->

<br>
<div class="row">
    <div class="col-md-3">
        <div class="row">
            <div class="col-md-12"> 
                <div class="panel panel-info">
                    <div class="panel-heading text-left" >Actiontags</div>

                    <select  class="form-control" id="tags" size="11">
                        <?php
                            foreach($actiontags as $actiontag){
                                extract($actiontag);
                                ?>
                        <option value="<?php echo $actiontags['id'];?>" data-status="<?php echo $actiontags['status']?>" data-type="<?php echo $actiontags['type']?>" class="<?php
                        if ($actiontags['status'] === false && ($actiontags['type'] === null || $actiontags['type'] === "")){
                            echo 'text-success';
                        }else if($actiontags['status'] === true){
                            echo 'text-primary';
                        }else{
                            echo 'text-danger';
                        }
                        ?> actiontags tagSite<?php echo $actiontags['site_id'];?>"  ><?php 
                        echo sprintf( '%02d', $actiontags['site_id'] ).sprintf( '%04d', $actiontags['id'] ). " " . $actiontags['name'];
                        ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <div class="row">
            <div class="col-md-12"> 
                <div class="inner-addon right-addon">
                    <button class="btn  text-danger" type="button" id="search_clear">
                        <i class="glyphicon glyphicon-remove"></i>
                        </button>
                    <input type="text" class="form-control" maxlength="60" id="search_tags"  placeholder="Search Actiontags" />
                </div>
                <br>
            </div>
        </div>
<!-- ------------------------------------------------------------------------------------------------------------------------------ -->
    </div>
    <div class="col-md-9">
        <center>
        <div class="row hidden" id="displayActivation">
            <div class="col-sm-6 col-sm-push-1">
                <br><br><br><br>
                <button class="btn btn-md btn-primary btn-block" id="btn_activate"><br><br>ACTIVATE TAG<br><br><br></button>
            </div>
        </div>
        </center>
        <div class="row" id='main'>
            <div class="col-md-7">
                <div class="panel panel-default">
                    <div class="panel-heading text-left" style="font-size:20px; height: 55px;">
                        <span >Tag ID: <strong><span class="tagDetailsSpan text-primary" id="tag_id"></span></strong></span>
                        <div class="pull-right">
                             <!-- on/off toggle button -->

                            <div class="status-onoffswitch"> 
                                <input disabled type="checkbox" name="status-onoffswitch" class="status-onoffswitch-checkbox" id="tag_status" >
                                <label class="status-onoffswitch-label" for="tag_status">
                                    <span class="status-onoffswitch-inner"></span>
                                    <span class="status-onoffswitch-switch"></span>
                                </label>
                            </div>   
                             
                        </div>
                    </div>
                    <input type="hidden" class="tagDetailsText" id="tag_id_hidden"/>
                    <table class="table table-condensed ">
                        <tr>
                            <td width="25%">
                                Name: 
                            </td>
                            <td>
                                <input class="tagDetailsText form-control" id="tag_name"></input>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                Times Used:

                            </td>
                            <td>
                                 <span class="tagDetailsSpan text-primary" id="tag_times_used"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Used:  

                            </td>
                            <td>
                                <span class="tagDetailsSpan text-primary" id="tag_last_used"></span>
                            </td>
                        </tr>
                        <tr class="hidden">
                            <td>
                                 Tag Status: 
                            </td>
                            <td>
                                <span id="tag_status_span">
                                    <label><input disabled class="tagDetailsCheck checkStatus" id="tag_status_ena" value="1" type="checkbox" />Enabled</label> 
                                    <label><input disabled class="tagDetailsCheck checkStatus" id="tag_status_dis" value="0" type="checkbox" />Disabled</label> 
                                </span> 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 Cloud Stamps: 
                            </td>
                            <td>
                                <span class="badge hidden" id="tag_stamps">

                                </span> 
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-5">
                <div class="panel panel-info">
                    <div class="panel-heading text-left">Tag Details</div>
                    <div style="min-height: 190px; height: 100%;" class="panel-body text-center text-center">
                        <img id="qrcode" class="hidden"  width="160px" height="160px" src=""  />
                        <h5 class="tagDetailsSpan text-primary" id="tag_guid"></h5>
                        <h5 class="tagDetailsSpan text-primary" id="tag_created"></h5>
                    </div>
                    
                    
                </div>
            </div>
        </div>         
    </div>
</div>
<div class="row">
            <div class="col-md-12">
                <div class="panel panel-info" id="mainPanel_action">
                    <!-- Default panel contents -->
                    <div class="panel-heading  panel-title">Action</div>

                    <table class="table table-condensed " >

                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <div class="panel-onoffswitch pull-left">
                                        <input  disabled  type="checkbox" value="redir_to_url" data-panel="redir"  class="panel-onoffswitch-checkbox tagDetailsCheck checkPanel" id="action_redir">
                                        <label class="panel-onoffswitch-label" for="action_redir">
                                            <span class="panel-onoffswitch-inner"></span>
                                            <span class="panel-onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                    <label>Take user to Web Site</label>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_redir">
                                <td width="20%" style="border-top: none;">
                                   &emsp;URL:
                                </td> 
                                <td style="border-top: none;">
                                    <input class="tagDetailsText form-control" pattern="https?://.+" title="Include http://" id="action_redir_url"/>
                                </td> 
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="panel-onoffswitch pull-left">
                                        <input  disabled  type="checkbox" value="send_sms" data-panel="sms"  class="panel-onoffswitch-checkbox tagDetailsCheck checkPanel" id="action_sms">
                                        <label class="panel-onoffswitch-label" for="action_sms">
                                            <span class="panel-onoffswitch-inner"></span>
                                            <span class="panel-onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                    <label>Send SMS</label>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_sms">
                                <td width="20%"  style="border-top: none;">
                                   &emsp;Phone Number:
                                </td> 
                                <td style="border-top: none;">
                                    <input class="tagDetailsText form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  title="11 digit number Ex. 09123456789"  id="action_sms_num"/>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_sms">
                                <td style="border-top: none;">
                                   &emsp;Message:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_sms_msg"/>
                                </td> 
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class="panel-onoffswitch pull-left">
                                        <input type="checkbox" name="onoffswitch"  value="send_email" data-panel="email"   class="panel-onoffswitch-checkbox tagDetailsCheck checkPanel" id="action_email">
                                        <label class="panel-onoffswitch-label" for="action_email">
                                            <span class="panel-onoffswitch-inner"></span>
                                            <span class="panel-onoffswitch-switch"></span>
                                        </label>
                                    </div>
                                    <label>Send Email</label>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_email">
                                <td width="20%"  style="border-top: none;">
                                   &emsp;To:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_email_to"/>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_email">
                                <td style="border-top: none;">
                                   &emsp;From:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_email_from"/>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_email">
                                <td style="border-top: none;">
                                   &emsp;Subject:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_email_subj"/>
                                </td> 
                            </tr>
                            <tr hidden class="actionPanel panel_email">
                                <td style="border-top: none;">
                                   &emsp;Body:
                                </td> 
                                <td style="border-top: none;">
                                    <textarea rows="5" class="tagDetailsText form-control" id="action_email_body" style="resize:vertical;"></textarea>
                                </td> 
                            </tr>
                            <tr  class="actionPanel panel_message">
                               <td colspan="2">
                                   <br>
                                   <label>Status Messages</label>
                                </td> 
                            </tr>
                            </tr>
                            <tr  class="actionPanel panel_message">
                                <td width="20%"  style="border-top: none;">
                                   &emsp;Success Message:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_sms_success"/>
                                </td> 
                            </tr>
                            <tr  class="actionPanel panel_message">
                                <td width="20%"  style="border-top: none;">
                                   &emsp;Error Message:
                                </td> 
                                <td style="border-top: none;">
                                   <input class="tagDetailsText form-control" id="action_sms_error"/>
                                </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<div class="row">
    <div class="col-md-12">
        <div class="row pull-right">
            <button class="btn btn-default btn_action" id="btn_cancel"  disabled>Restore</button>
            <button class="btn btn-primary btn_action" id="btn_submit"  disabled>Save</button>
        </div>
    </div>
</div>
<!-- End New Interface -->
    </div>
    </div>
</center>
<div id="status_saved" style="display:none" class="alert-box-status">
    
</div>
<div id="status_restored" style="display:none;
    //background-color: #a94442 ;" class="alert-box-status">
    
</div>

<script>
    +function($){
        $("#tag_guid").html('<br><br><br><br><br><br><br><br><br>');
        $("#tag_created").html('<br><br><br><br>');
        $("#mainPanel_action").hide();    
        //checkPanel();
        init();
        
        
        $("#search_clear").on("click", function(){
            $('#search_tags').val('');
            resetTags();
        });
        
        $("#tags").on("change", function(){
            var tag_id = $(this).val();
            
            init();
            $("#tag_status").prop('disabled',false);
            
            
            $(".tagDetailsSpan").text("");
            $("#tag_guid").html('<br><br><br><br><br><br><br><br><br>');
            $("#tag_created").html('<br><br><br><br>');
            $(".tagDetailsCheck").prop("checked",false);
            $(".tagDetailsText").val("");

            $.post("/users/tag/"+tag_id, function(data) {
                
                var json = jQuery.parseJSON(data);
                
                var tag = json.a;
                var site = json.s;
                var log = json.l;
                
                
                    $("#tag_id_hidden").val(tag.id);
                    
                if ((tag.redirect === "" || tag.redirect === null) && (tag.type === "" || tag.type === null) && tag.status === false ){
                    $("#main").toggleClass("hidden",true);
                    $("#mainPanel_action").hide();
                    $(".btn_action").hide();
                    $("#displayActivation").toggleClass("hidden",false);
                }else {
                    
                    $(".btn_action").show();
                    $("#main").toggleClass("hidden",false);
                    $("#displayActivation").toggleClass("hidden",true);
                    
                    $("#tag_id").text(PrependZeros(tag.site_id,2)+PrependZeros(tag.id,4));
                    //$("#tag_guid").val(tag.guid);
                    $("#tag_guid").text(tag.guid);
                    $("#tag_name").val(tag.name);
                    $("#tag_created").html('Created: <strong>'+formatDate(tag.created)+'</strong>');

                    $("#tag_times_used").text(log.count !== '0'?log.count:'never');
                    var lastUsed = "n/a";
                    if (log.lastUsed !== '0'){
                        lastUsed = jQuery.timeago(log.lastUsed);
                    }
                    $("#tag_last_used").text(lastUsed);


                    $("#qrcode").prop("src", "/users/qr/"+tag.guid);


                    $("#qrcode").toggleClass("hidden",false);
               //     $.post("/users/qr/"+tag.quid, function(data) {

              //      });

                    switch(tag.status){
                        case true:
                            $("#tag_status_ena").prop("checked",true);
                            $("#tag_status").prop("checked",true);
                            break;
                        case false:
                            $("#tag_status_dis").prop("checked",true);
                            $("#tag_status").prop("checked",false);
                            break;
                    }

//                    switch(tag.type){
//                        case "redir_to_url":
//                            $("#action_redir").prop("checked",true);
//                            $("#action_redir_url").val(tag.redirect);
//                            break;
//                        case "send_sms":
//                            $("#action_sms").prop("checked",true);
//                            $("#action_sms_num").val(tag.sms_to);
//                            $("#action_sms_msg").val(tag.sms_msg);
//                            $("#action_sms_success").val(tag.msg_success);
//                            $("#action_sms_error").val(tag.msg_error);
//
//                            break;
//                        case "send_email":
//                            $("#action_email").prop("checked",true);
//                            $("#action_email_to").val(tag.email_to);
//                            $("#action_email_from").val(tag.email_from);
//                            $("#action_email_subj").val(tag.email_subj);
//                            $("#action_email_body").val(tag.email_body);
//                            break;
//                        default:
//                            $(".checkPanel").prop("checked",false);
//                            //$("#mainPanel_action").toggleClass("hidden",true);
//                            $("#mainPanel_action").hide();
//                            break;
//                    }
                    
                    var typeArr = tag.type.split(',');
                    if (typeArr.indexOf("redir_to_url") !== -1){
                            $("#action_redir").prop("checked",true);
                            $("#action_redir_url").val(tag.redirect);
                    }
                    if (typeArr.indexOf("send_sms") !== -1){
                            $("#action_sms").prop("checked",true);
                            $("#action_sms_num").val(tag.sms_to);
                            $("#action_sms_msg").val(tag.sms_msg);
                            $("#action_sms_success").val(tag.msg_success);
                            $("#action_sms_error").val(tag.msg_error);
                    }
                    if (typeArr.indexOf("send_email") !== -1){
                            $("#action_email").prop("checked",true);
                            $("#action_email_to").val(tag.email_to);
                            $("#action_email_from").val(tag.email_from);
                            $("#action_email_subj").val(tag.email_subj);
                            $("#action_email_body").val(tag.email_body);
                            $("#action_sms_success").val(tag.msg_success);
                            $("#action_sms_error").val(tag.msg_error);
                    }
                    if (typeArr.length === 0) {
                            $(".checkPanel").prop("checked",false);
                            //$("#mainPanel_action").toggleClass("hidden",true);
                            $("#mainPanel_action").hide();
                    }
                    
                    $("#tag_stamps").text(site.name);
                    $("#tag_stamps").toggleClass("hidden", false);
                }
            checkPanel();
                
                $(".tagDetailsSpan").toggleClass("text-primary",true);
                $(".tagDetailsText").prop("disabled",false);
                $("#btn_cancel").prop("disabled",false);
                $(".tagDetailsCheck").prop("disabled",false);
            });
           
        });
        
        $("#tag_status").on("change",function(){
            if ($("#tag_status").is(':checked')){
                $("#tag_status_ena").prop("checked",true);
                $("#tag_status_dis").prop("checked",false);
            } else {
                $("#tag_status_dis").prop("checked",true);
                $("#tag_status_ena").prop("checked",false);
            }
            
            checkPanel();
        });
        
        $(".checkPanel").on("change",function(){
            //$('.checkPanel').not(this).prop('checked', false);
            checkPanel();
        });
        
        $(".checkStatus").on("change",function(){
            if ($(this).is(":checked") === true){
                $('.checkStatus').not(this).prop('checked', false);
            } else {
                $('.checkStatus').not(this).prop('checked', true);
            }
            checkPanel();
        });
        
        $("#btn_submit").on("click",function(){
            if ($(this).text() === "Edit"){
                //$("#tags").prop("disabled", true);
                $(".tagDetailsSpan").toggleClass("text-primary",true);
                $(this).text("Save");
                $(".tagDetailsText").prop("disabled",false);
                $("#btn_cancel").prop("disabled",false);
                $(".tagDetailsCheck").prop("disabled",false);
                $("#action_title").text("Edit Action Tag");
            checkPanel();
            }else{

                
                var tagArray= new Object();
                tagArray['id'] = $("#tag_id_hidden").val();
                tagArray['msg_success'] = "";
                tagArray['msg_error'] = "";
                if($(".checkStatus:checked").val() === "1"){
                    tagArray['status'] = true;
                }else{
                    tagArray['status'] = false;
                }
                var typeArr = [];
                tagArray['type'] = null;
                $(".checkPanel:checked").each(function(){
                    var type = $(this).val() ? $(this).val() : "" ;
                    typeArr.push(type);
                });
                
                
                tagArray['type'] = typeArr.join(',') ;
                
                
                if (typeArr.indexOf("redir_to_url") !== -1){
                    tagArray['is_redir'] = true;
                    tagArray['redirect'] = $("#action_redir_url").val();
                    if((tagArray['redirect'].indexOf("http://") > -1) ||
                    (tagArray['redirect'].indexOf("https://") > -1)){}else {
                        return alert("URL should start with \n'http://'\n or \n'https://'");
                    }
                }
                if (typeArr.indexOf("send_sms") !== -1){
                    tagArray['is_redir'] = false;
                    if ($("#action_sms_num").val().length < 11){
                        return alert("Phone number should contain 11 digits \nex. 09123456789");
                    } else if ($("#action_sms_msg").val().length < 1){
                        return alert("Message should not be empty");
                    }
                    tagArray['sms_to'] = $("#action_sms_num").val();
                    tagArray['sms_msg'] = $("#action_sms_msg").val();
                    tagArray['msg_success'] = $("#action_sms_success").val();
                    tagArray['msg_error'] = $("#action_sms_error").val();
                }
                if (typeArr.indexOf("send_email") !== -1){
                    tagArray['is_redir'] = false;
                    var header = "http://mail.cloudstaff.com/index.php?app=mail&u=admin";
                    var to = "&to="+$("#action_email_to").val();
                    var from = "&from="+$("#action_email_from").val();
                    var subj = "&subj="+$("#action_email_subj").val();
                    var body = "&body="+$("#action_email_body").val();
                    if ($("#action_email_to").val().length < 1){
                        return alert("to should not be empty");
                    } else if ($("#action_email_from").val().length < 1){
                        return alert("from should not be empty");
                    } else if ($("#action_email_subj").val().length < 1){
                        return alert("subject should not be empty");
                    } else if ($("#action_email_body").val().length < 1){
                        return alert("body should not be empty");
                    }
                    tagArray['email_to'] = $("#action_email_to").val();
                    tagArray['email_from'] = $("#action_email_from").val();
                    tagArray['email_subj'] = $("#action_email_subj").val();
                    tagArray['email_body'] = $("#action_email_body").val();
                    tagArray['msg_success'] = $("#action_sms_success").val();
                    tagArray['msg_error'] = $("#action_sms_error").val();
                }
                if (typeArr.length === 0) {
                    tagArray['type'] = null;
                    tagArray['is_redir'] = true;
                    tagArray['redirect'] = "";
                }
                
                
                
                
                    var tagName ="";
                    tagArray['name'] = $("#tag_name").val();
                    if (tagArray['name'] !== ""){
                        tagName = '"' + tagArray['name'] + '" ';
                    }
                    $('#status_saved').text('Actiontag ' + tagName + 'Saved');
                    $('#status_restored').hide();
                    $('#status_saved').stop(true,false).slideDown();
                var myJsonString = JSON.stringify(tagArray);
                var newData = encodeURIComponent(myJsonString);
                
                $.ajax({
                    url: '/users/tagEdit/',
                    type: 'get',
                    dataType: 'json',
                    data: tagArray,
                    traditional: true,
                    success: function (res) {
                        if (res){
                            resetTags();
                            $('#status_saved').delay(2000).slideUp();
                        }
                    }
                });
                
                
                
            }
        });
 
        $("#btn_cancel").on("click",function(){
            resetTags();
            
                
            if ($("#btn_submit").text() === "Save"){
                $(".tagDetailsSpan").toggleClass("text-primary",false);
                //$("#btn_submit").text("Edit");
                //$("#tags").triggerHandler('change');
                $("#tags").change();
                $(".tagDetailsText").prop("disabled",true);
                //$("#btn_submit").prop("disabled",false);
                $("#btn_cancel").prop("disabled",true);
                $("#action_title").text("View Action Tags");
                
                checkPanel();
                $('#status_restored').text('All Changes in this tag is restored');
                $('#status_saved').hide();
                $('#status_restored').stop(true,false).slideDown();
                $('#status_restored').delay(2000).slideUp();
            }
        });
        
        $("#btn_activate").on("click",function(){
            var id = $("#tag_id_hidden").val();
                
                $.get("/users/tagActivate/",
                {
                    id: id
                },
                function(res) {
                    if (res){
                        
                        $(".btn_action").show();
                        resetTags();
                    }
                },
                'json');
            
        });
        
        function resetTags(){
        
            
                $("#tags").prop("disabled", false);
                var tag_id = $("#tag_id_hidden").val();
                var output = [];
                var text = "";
                var select = "";
                $.post("/users/tagAll/", function(data) {
                    var json = jQuery.parseJSON(data);
                    
                  
                    
                    $.each(json, function(key,value)
                    {
                        if (value.actiontags.active === false){
                            text = "text-success";
                        } else if (value.actiontags.status === true) {
                            text = "text-primary";
                        } else {
                            text = "text-danger";
                        }
                        
                        if (tag_id === value.actiontags.id ){
                            select = "selected";
                        }else{
                            select = "";
                        }
                        
                        output.push(
                            "<option value='"+ value.actiontags.id  +"' "
                            +"data-status='" + value.actiontags.status +"' "
                            +"data-type='"+ value.actiontags.type+"' "
                            +"class='"
                                +text+" "
                                +"actiontags "
                                +"tagSite"+ value.actiontags.site_id +""
                            +"' "
                            +select+" > "
                            + PrependZeros(value.actiontags.site_id,2)+PrependZeros(value.actiontags.id,4)
                            +" "
                            +value.actiontags.name
                            +" </option>"
                          );
                    });
                    $("#tags").html(output.join(" "));
                    if (tag_id !== ""){
                        $("#tags").change();
                    }
                    
                });

        }
        
        function checkPanel(){
            var panelArr = [];
            if ($("#tag_status_ena").is(":checked")){
                //$("#mainPanel_action").toggleClass("hidden",false);
                //$("#mainPanel_action").hide();
                $("#mainPanel_action").slideDown();
                $(".actionPanel").hide();
                $(".checkPanel:checked").each(function(){
                    $(".panel_"+$(this).data("panel")).show();
                    panelArr.push($(this).data("panel"));
                });
                if (panelArr.length === 0){
                    panelArr.push('none');
                }
            }else{
                panelArr.push('none');
                //$("#mainPanel_action").toggleClass("hidden",true);
                $("#mainPanel_action").slideUp();
                
            }
            if (panelArr.indexOf('none') !== -1 || panelArr.indexOf('redir') !== -1){
                $('.panel_message').hide();
            }else{
                $('.panel_message').show();
            }
             
            if($(".checkPanel").is(":checked") === false && $("#tag_status_ena").is(":checked") === true){
                
                
                $("#mainPanel_action").toggleClass("panel-default",false);
                $("#mainPanel_action").toggleClass("panel-danger",true);
                if ($("#btn_submit").text() === "Edit"){
                    $("#btn_submit").prop("disabled", false);
                } else {
                    $("#btn_submit").prop("disabled", true);
                }
            }else{
                $("#mainPanel_action").toggleClass("panel-default",true);
                $("#mainPanel_action").toggleClass("panel-danger",false);
                $("#btn_submit").prop("disabled", false);
                
            }
        }
        
        function init(){
            //$(".tagDetailsSpan").toggleClass("text-primary",false);
            $("#tag_guid").html('<br><br><br><br><br><br><br><br><br>');
            $("#tag_created").html('<br><br><br><br>');
            $(".tagDetailsCheck").prop("disabled",true);
            $(".tagDetailsText").prop("disabled",true);
            $(".btn_action").prop("disabled",true);
            //$("#btn_submit").text("Edit");
            $("#qrcode").toggleClass("hidden",true);
            $("#action_title").text("View Action Tags");
            $("#tag_stamps").text();
            $("#tag_stamps").toggleClass("hidden", true);


        }
        
        
        var formatDate = function(input){
            var d = new Date(Date.parse(input.replace(/-/g, "/")));
            var day = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
            var month = ["January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December"];
            var date = month[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear() + " " + day[d.getDay()];
            var time = d.toLocaleTimeString().toLowerCase().replace(/([\d]+:[\d]+):[\d]+(\s\w+)/g, "$1$2");
            return (date + " " + time);  
        };
        var PrependZeros = function (str, len, seperator) {
            if (typeof str === 'number' || Number(str)) {
                str = str.toString();
                return (len - str.length > 0) ? new Array(len + 1 - str.length).join('0') + str : str;
            }
            else {
                var spl = str.split(seperator || ' ');
                    for (var i = 0 ; i < spl.length; i++) {
                        if (Number(spl[i]) && spl[i].length < len) {
                        spl[i] = PrependZeros(spl[i], len);
                    }
                }
                return spl.join(seperator || ' ');
            }
        };
        
    $("#flashMessage").delay(2000).animate({width:'toggle'},500);
    
    
    
    

	$("#search_tags").keyup(function(){
		if( $(this).val() !== "")
		{
			$(".actiontags").hide();
			$(".actiontags:contains-ci('" + $(this).val() + "')").show();
            if ($('.actiontags:visible').length <= 0){
                $(".actiontags").show();
                $("#search_tags").css('color','red');
            }else{
                $("#search_tags").css('color','black');
            }
		}
		else
		{
			$(".actiontags").show();
		}
	});
	

    }(jQuery);

$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});


</script>
