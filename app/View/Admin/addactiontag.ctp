
<br>
<div class="container">
    <div class="row">
		<div id="generatetags" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    		<div class="panel panel-info">
			  	<div class="panel-heading"><h3 class="panel-title">Generate Actiontags</h3></div>
                <div class="panel-body">
                    <form  method="post">
                    <fieldset>
                        <div class="form-group">
                            <label for="tag_qty">Number of tags</label>
                            <input class="form-control" id="tag_qty" name="tag_qty" required="" placeholder="Number of tags" type="number" max="1000" min="1">
                        </div>
                        <div class="form-group">
                            <label for="site">Tag Site</label>
                            <select id="site" name="site" class="form-control " required=""  style="border-radius: 4px !important;  " >
                                <option value="">Select Site</option>
                                <?php
                                foreach($sites as $site){
                                ?>
                                <option><?php echo $site['sites']['id']." - ".$site['sites']['name'] ;?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="user">User Assignment</label>
                            <div class="input-group">
                                <span class="input-group-addon" style="border: none; background-color: white !important;">
                                    <input type="checkbox"  id="chk_user">
                                </span>
                                <select id="user" name="user" class="form-control " required disabled  style="border-radius: 4px !important;  " >
                                    <option value="">Select User</option>
                                    <?php
                                    foreach($users as $user){
                                    ?>
                                    <option><?php echo $user['users']['id']." - ".$user['users']['email']." of ".$user['users']['company'] ;?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    <button class="btn btn-lg btn-success btn-block" type="submit"> Generate </button> 
                    </fieldset>
                    </form>
                </div>
            </div>
		</div>
	</div>
</div>
<script>
    +function($){
//        $('#site').closest('div').hide();
        $('#chk_user').closest('div').parent().hide();
        
        $('#chk_site').on('click',function(){
            $('#site').prop('disabled', function(i, v) { return !v; });
        });
        
        $('#chk_user').on('click',function(){
            $('#user').prop('disabled', function(i, v) { return !v; });
        });
    }(jQuery);
</script>