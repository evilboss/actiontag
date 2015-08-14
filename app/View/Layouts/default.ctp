<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>ActionTag.io</title>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->script(array('jquery-2.1.4.min.js', 'bootstrap.js','jquery.timeago.js'), array('inline'=>false));
        echo $this->Html->css(array('bootstrap','style_1'));
        echo $this->fetch('meta');
		echo $this->fetch('script');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="/">
<!--                        <img src="img/actionlogo.png" height="30" width="60">-->
                        Actiontag.io
                    </a>
                  </div>
                    <?php
                    //echo time();
                    /**
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="navbar-text">
                            <?php 
                                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                                    echo  "HTTP_CLIENT_IP = ".$_SERVER['HTTP_CLIENT_IP'];
                                }
                            ?>
                        </li>
                        <li class="navbar-text">
                            <?php
                                if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                    echo  "HTTP_X_FORWARDED_FOR = ".$_SERVER['HTTP_X_FORWARDED_FOR'];
                                }
                            ?>
                        </li>
                        <li class="navbar-text">
                            <?php
                                if (!empty($_SERVER['REMOTE_ADDR'])) {
                                    echo  "REMOTE_ADDR = ".$_SERVER['REMOTE_ADDR'];
                                }
                            ?>
                        </li>  
                    </ul>
                    <?php
                    **/
                    ?>
                </div>
              </nav>
		</div>
		<div id="content">
            <br/><br/><br/>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
            <br/><br/><br/>
        </div>
        <div id="footer" style="height:20px;border-top: #ccc solid 1px" class="navbar-default navbar-fixed-bottom">
			<p id="copyright" class="text-center text-muted">Copyright (c) 2015. All rights reserved.</p>
		</div>
	</div>
</body>
</html>