<center>
    <?php 
    echo $this->Html->image("actionlogo.png", array(
    "alt" => "Actiontag.io",
    'height'=>'150', 
    'width'=>'250',
    'url' => array('action' => 'index')
));
    ?>
    <h2><?php echo  $msg1 ? $msg1 : "ERROR!"; ?></h2>
    <h3><?php echo  $msg2 ? $msg2 : "Your request cannot be found!"; ?></h3>
    <h4><?php echo  $msg3 ? $msg3 : "This Actiontag is not valid."; ?></h4>
</center>