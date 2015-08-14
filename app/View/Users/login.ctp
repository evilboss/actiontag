<style>
    div.input{
        padding: 5px;
        display: block;  
    }
</style>

<!--<br><div class="row">
    <div class="col-md-4 col-md-push-4">
    <div class="panel panel-primary" style="border: 0 !important;">
    <div class=" panel-heading panel-title">Login</div>
        <table class="table">
            <tr><td>
<div class="users form">
            <?php 
//            
//            echo $this->Session->flash('auth'); 
//            echo $this->Form->create('User');
//            echo $this->Form->input('email',array('class'=>'form-control'));
//            echo $this->Form->input('password',array('class'=>'form-control'));
//            echo "<br>";
//            echo $this->Form->submit('Login',array('class'=>'btn btn-primary'));
//            echo $this->Form->end();
            ?> 
        </div>
                     </td>
            </tr>
        </table>
       
</div>
    </div>
</div>-->
        
           <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
<!--                        <form id="loginform" class="form-horizontal" role="form">-->
                               
                            <?php    echo $this->Session->flash('auth'); 
                                     echo $this->Form->create('User', array(
                                     'inputDefaults' => array(
                                     'label' => false,
                                     'div' => false))); 
                            ?>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<!--                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="example@example.com">                                        -->
                            <?php echo $this->Form->input('email',array('class'=>'form-control', 'placeholder' => 'example@example.com'));  ?>
                            </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<!--                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">-->
                                    <?php echo $this->Form->input('password',array('class'=>'form-control', 'placeholder' => 'password')); ?>
                            </div>

                            <div style="margin-top:10px" class="form-group">
                                    <div class=" controls">
<!--                                      <a id="btn-login" href="#" class="btn btn-success">Login</a>-->
                                    <?php echo $this->Form->button('<i class="glyphicon glyphicon-log-in"></i> &nbsp; Login', array(
                                            'type' => 'submit', 
                                            'class' => 'btn btn-success', 
                                            'escape' => false
                                        ));?>
                                    </div>
                            </div>

<!--                            </form>-->
                            <?php echo $this->Form->end(); ?>
                    </div>                     
                    </div>  
        </div>
               
<script>
    +function($){
       $('.navbar-right').hide();
                
    }(jQuery);
</script>            
                                    
                              
                                  
