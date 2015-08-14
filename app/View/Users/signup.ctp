<style>
    div.input{
        padding: 5px;
        display: block;
    }
</style>
<br>
<div class="row">
<div class="col-sm-6 col-sm-push-3">
    <div class="panel panel-primary" style="border: 0 !important;">
    <div class=" panel-heading panel-title">Signup</div>
        <table class="table">
            <tr><td>
<div class="users form">
 
<?php echo $this->Form->create('User');?>
    <fieldset>
               
        <?php
        
        echo $this->Form->input('email',
                array('class' => 'form-control','label' => 'Email Address', 'title' => 'Email Address', 'placeholder' => 'username@example.com'));
        
        echo $this->Form->input('password',
                array('class' => 'form-control','label' => 'Password', 'title' => 'Password', 'placeholder' => 'Password'));
        echo $this->Form->input('password_confirm', array('class' => 'form-control','label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm Password', 'placeholder' => 'Confirm Password', 'type'=>'password'));
        echo $this->Form->input('type', array(
            'options' => array( 'user' => 'User'),'class' => 'form-control','label' => 'Type'
        ));  
        
        echo $this->Form->input('company',
                array('class' => 'form-control','label' => 'Company', 'title' => 'Company name', 'placeholder' => 'Company Name'));
        
        echo "<br>";
        echo $this->Form->submit('Submit', array('class' => 'form-submit btn btn-primary',  'title' => 'Click here to add the user') ); 
?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
                     </td>
            </tr>
        </table>
       
</div>
</div>
</div>
<script>
+function($){
   
    $(".error-message").css('color','red');
    $(".select").hide();
    $("#flashMessage").delay(2000).animate({width:'toggle'},500);
    
}(jQuery);
</script>