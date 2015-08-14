<br>
<center>
<div class="row">
<div class="col-sm-10 col-sm-push-1">
<div class="panel panel-info" >
    <div class=" panel-heading panel-title"><?php echo $title?></div>
        <table class="table">
            <thead>
                <?php
            if ($viewType == 'Admin'){
            ?>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date Created</th>
                </tr>
            <?php
            }else{
            ?>
                <tr>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Type</th>
                    <th>Date Created</th>
                </tr>    
            <?php
            }
            ?>
            </thead>
            <tbody>
        <?php


        foreach($users as $user){
            extract($user['users']);
            if ($viewType == 'Admin'){
            ?>
                <tr>
                    <td><?php echo $email?></td>
                    <td><?php echo $password?></td>
                    <td><?php echo $created?></td>
                </tr>    
            <?php
            }else{
                
            ?>
                <tr>
                    <td><?php echo $company?></td>
                    <td><?php echo $email?></td>
                    <td><?php echo $password?></td>
                    <td><?php echo $type?></td>
                    <td><?php echo $created?></td>
                </tr>    
            <?php
            }
        }



        ?>
            </tbody>
        </table>
</div> 
</div>
</div>
</center>