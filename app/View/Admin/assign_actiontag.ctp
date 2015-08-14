<style>
    div.input{
        padding: 5px;
        display: block;
    }
</style>
<br>
<div class="row">
<div  class="col-sm-6 col-sm-push-3">
    <div class="panel panel-info">
    <div class=" panel-heading panel-title">Add User</div>
        <table class="table">
            <tr><td>
<div class="users form">
 
<?php echo $this->Form->create();?>
    <fieldset>
               
        <?php
        
        echo $this->Form->input('from',
                array('class' => 'form-control','label' => 'ID FROM:', 'title' => 'set tag ID from', 'placeholder' => '0000'));
        
        echo $this->Form->input('to',
                array('class' => 'form-control','label' => 'ID TO:', 'title' => 'set tag ID to', 'placeholder' => '0000'));
        echo $this->Form->input('User', array('class' => 'form-control','label' => 'User','title' => 'User', 'placeholder' => 'example@example.com'));
        echo "<br>";
        echo $this->Form->submit('Assign Tags', array('class' => 'form-submit btn btn-block btn-success',  'title' => 'Click here to assign the tag') ); 
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
    
    $("#flashMessage").delay(2000).animate({width:'toggle'},500);
    
}(jQuery);
</script>