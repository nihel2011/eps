<!doctype html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Admin</title>

 

    
    <?php echo "\n".$this->Html->css('bootstrap.min'); ?>
    <?php echo "\n".$this->Html->css('plugins/icheck/all.css'); ?>
    <?php echo "\n".$this->Html->css('style'); ?>
    <?php echo "\n".$this->Html->css('themes'); ?>
 	<?php echo "\n".$this->Html->script('jquery.min'); ?>
	<?php echo "\n".$this->Html->script('plugins/nicescroll/jquery.nicescroll.min'); ?>
	<?php echo "\n".$this->Html->script('plugins/validation/jquery.validate.min.js'); ?>
	<?php echo "\n".$this->Html->script('plugins/icheck/jquery.icheck.min.js'); ?>
    <?php echo "\n".$this->Html->script('bootstrap.min'); ?>
    <?php echo "\n".$this->Html->script('eakroko.min'); ?>
	 
	 
 
	<!--[if lte IE 9]>
      <?php echo "\n".$this->Html->script('plugins/placeholder/jquery.placeholder.min.js'); ?>
		 
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
		<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/abadmin.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/abadmin.png" />

</head>

 <body class='login'>
	<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
 	<?php //echo $this->element('sql_dump'); ?>

</body>

 
</html>
