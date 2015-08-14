<center>
    <?php 
    echo $this->Html->image("actionlogo.png", array(
    "alt" => "Actiontag.io",
    'height'=>'150', 
    'width'=>'250',
    'url' => array('action' => 'index')
));
    ?>
    <h2>Success!</h2>
    <h3>Your request has been sent!</h3>
    <h4><?php echo  $msg ? $msg : "Please wait for further notice!"; ?></h4>
</center>