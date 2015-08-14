<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>ActionTag.io</title>
	<?php
        echo $this->Html->meta('icon');
        echo $this->Html->script(array('jquery-2.1.4.min.js', 'bootstrap.js','jquery.timeago.js'), array('inline'=>false));
        echo $this->Html->css(array('bootstrap','style_1','myonoffswitch'));
        echo $this->fetch('meta');
		echo $this->fetch('script');
		echo $this->fetch('css');
	?>
</head>
<body style="background-color: #f4fbff">
	<div id="container">
		<div id="header">
            <nav style="background-color: #f2f5f7" class="navbar navbar-fixed-top">
                <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="/"><div class="form-inline"><?php echo $this->Html->image("nav-logo.png", array('width' => 30,'height' => 30)); ?> ACTIONTAG.IO</div></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-left hidden">
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='glyphicon glyphicon-cloud'> </i> ACTIONTAGS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><?php echo $this->Html->link( 
                                    "View Actiontags",
                                    array('controller'=>'admin','action'=>'index'),
                                    array('escape' => false)
                                  )." ";  ?></li>
                              <li role="separator" class="divider"></li>
                              <li><a href="#">Generate Actiontags</a></li>
                              <li><a href="#">Assign Actiontags</a></li>
                            </ul>
                        </li>
                          <li><?php echo $this->Html->link( 
                                    "<i class='glyphicon glyphicon-book'></i> LOGS",
                                    array('controller'=>'admin','action'=>'logs'),
                                    array('escape' => false)
                                  )." ";  ?></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='glyphicon glyphicon-user'> </i> USERS <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><?php echo $this->Html->link( 
                                    "View Users",
                                    array('controller'=>'admin','action'=>'viewUsers'),
                                    array('escape' => false)
                                  )." ";  ?></li>
                              <li><?php echo $this->Html->link( 
                                    "View Administrators",
                                    array('controller'=>'admin','action'=>'viewUsers?admin')
                                  )." ";  ?></li>
                              <li role="separator" class="divider"></li>
                              <li><?php echo $this->Html->link( 
                                    "Add User",
                                    array('controller'=>'admin','action'=>'addUser'),
                                    array('escape' => false)
                                  )." ";  ?></li>
                            </ul>
                        </li>
                        
                      </ul><ul class="nav navbar-nav navbar-right">
                          <li><?php echo $this->Html->link( 
                                    "<i class='glyphicon glyphicon-log-out'> </i> LOGOUT",
                                    array('controller'=>'users','action'=>'logout'),
                                    array('escape' => false)
                                  )." ";  ?></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
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