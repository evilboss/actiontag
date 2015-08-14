<br>
<div class="row hidden">
    <div class=" col-sm-10 col-sm-push-1" style="padding-bottom: 5px;">
     <div class="well well-sm ">
         <form class="form-inline" role="form" action="" method="get">
             <button class="btn btn-default" type="button" id="btn_filter">Show Filter &nbsp;<i class="glyphicon glyphicon-filter"></i></button>
            <div class="form-group">
                <label for="field">Column:</label>
                <select class="form-control" name="field" id="field">
                    <option value="id">Tag Id</option>
                    <option value="guid">GUID</option>
                    <option value="name">Tag Name</option>
                    <option value="type">Type</option>
                    <option value="status">Status</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sort">Sort:</label>
                <select class="form-control" name="sort" id="sort">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>
            </div>
             <button class="btn btn-default" type="button" id="btn_sort">SORT &nbsp;<i class="glyphicon glyphicon-sort"></i></button>
             
        </form>
         <div class="well well-sm hidden" style="margin-top:10px;"  id="panel_filter">
             <div class="form-inline">
<!-- 
                <div class="form-group">
                    <label for="sort_type">Sort type:</label>
                    <select class="form-control" name="field" id="sort_type">
                        <option value="">Status</option>
                        <option value="">Type</option>
                        <option value="">Site</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="status">Only show:</label>
                    <select class="form-control" name="field" id="status">
                        <option value="id">Active</option>
                        <option value="guid">Not Active</option>
                        <option value="name">Enabled</option>
                        <option value="type">Disabled</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="type">Only show:</label>
                    <select class="form-control" name="field" id="type">
                        <option value="type">Redirect</option>
                        <option value="type">Send SMS</option>
                        <option value="type">Send Email</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="site">Only show:</label>
                    <select class="form-control" name="field" id="site">
                        <option value="asc">23 - Sydney</option>
                        <option value="desc">12 - Clark</option>
                    </select>
                </div>
                 -->
                <div class="form-group"  style="vertical-align: top">
                    <label>Status:</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="enabled">Enabled</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="disabled">Disabled</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="inactive">Not Active</label>
                </div>
                <div class="form-group"  style="padding-left: 30px;vertical-align: top">
                    <label>Type:</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="redir">Redirect</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="sms">Send SMS</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="email">Send Email</label>
                </div>
                <div class="form-group" style="padding-left: 30px;vertical-align: top">
                    <label>Site:</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="12">12 - Clark</label><br>
                    <label style="padding-left: 15px"><input type="checkbox" class="filters" checked value="23">23 - Sydney</label>
                </div>
                <div class="form-group hidden" style="padding-left: 30px;vertical-align: top">
                    <label>Site:</label><br>
                    <select  class="form-control" multiple> 
                        <option>12 - Clark</option>
                        <option>23 - Sydney</option>
                        <option>1 - test</option>
                        <option>2 - test</option>
                        <option>3 - test</option>
                        <option>4 - test</option>
                    </select>
                </div>
            </div>
         </div>
        </div>
    </div>
</div>
<center>
<div class="row">
<div class="col-sm-10 col-sm-push-1">
<div class="panel panel-info" >
    <div class=" panel-heading panel-title">Actiontags</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Tag ID</th>
                    <th>GUIDs</th>
                    <th>Tag Name</th>
                    <th>Type</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
        <?php


        foreach($actiontags as $actiontag){
            extract($actiontag['actiontags']);
            ?>
                <tr class="tags_tr">
                    <td><?php echo sprintf( '%02d', $site_id ).sprintf( '%04d', $id )?></td>
                    <td><?php echo $guid?></td>
                    <td><?php echo $name?></td>
                    <td><?php 
                    $typeArr = [];
                    if ($type == "" || $type == null){
                        array_push($typeArr,"none");
                    }else{
                        if (strpos($type, 'redir_to_url') !== false){
                            array_push($typeArr,"Redirect");
                        }
                        if (strpos($type, 'send_sms') !== false){
                            array_push($typeArr,"Send SMS");
                        }
                        if (strpos($type, 'send_email') !== false){
                            array_push($typeArr,"Send Email");
                        }
                    }
                    echo implode(', ',$typeArr);
                    ?></td>
                    <td><?php
                    if ($active == false){
                        echo "Not Activated";
                    }else if($status){
                        echo "Enabled";
                    }else{
                        echo "Disabled";
                    }
                    ?></td>
                </tr>    
            <?php
        }



        ?>
            </tbody>
        </table>
</div> 
</div>
</div>
</center>

<script>
    +function($){
        $('#btn_filter').on('click',function(){
           console.log($(this).html());
           if ($(this).text().split(' ')[0] === 'Show'){
               $('#panel_filter').toggleClass('hidden',false);
               $(this).html('Hide Filter &nbsp;<i class="glyphicon glyphicon-filter"></i>');
               $(this).toggleClass('active',true);
           }else{
               $('#panel_filter').toggleClass('hidden',true);
               $(this).html('Show Filter &nbsp;<i class="glyphicon glyphicon-filter"></i>');
               $(this).toggleClass('active',false);
           }
        });
    }(jQuery);
</script>