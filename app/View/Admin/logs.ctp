<br>
<center>
<div class="row">
<div class="col-sm-10 col-sm-push-1">
<div class="panel panel-info" >
    <div class=" panel-heading panel-title">Actiontag Request Logs</div>
        <table class="table">
            <thead>
                <tr>
                    <th>Tag ID</th>
                    <th>Ip Address</th>
                    <th>Request Status</th>
                    <th>Date Created</th>
                </tr>
            </thead>
            <tbody>
        <?php


        foreach($logs as $log){
            extract($log['logs']);
            ?>
                <tr>
                    <td><?php echo sprintf( '%04d', $tag_id )?></td>
                    <td><?php echo $ip_address?></td>
                    <td><?php echo $request_status?></td>
                    <td><?php echo $created?></td>
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