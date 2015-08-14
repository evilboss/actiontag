<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>ActionTag.io</title>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->script(array('jquery-2.1.4.min.js', 'bootstrap.js','jquery.timeago.js'), array('inline'=>false));
        echo $this->Html->css('bootstrap');
        echo $this->fetch('meta');
		echo $this->fetch('script');
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                </div>
	</div>
</body>
</html>