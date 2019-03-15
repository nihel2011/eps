<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Exas: accompagnement conseil projet');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
//echo $this->params['controller'];
//echo 'hhh'.$this->params['action'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
		
			echo $this->Html->css('site/css/style');
			echo $this->Html->css('site/css/responsive');
			
	 ?>
     <link rel="shortcut icon" href="<?php echo $this->webroot;?>exas.ico" />
     <link rel="icon" type="image/png" href="<?php echo $this->webroot;?>exas.png">

	<!-- Google Fonts -->
	
	
</head>
<body>
<?php 	
?>
	<div class="boxed_wrapper">

		<?php echo $this->element('header'); ?>



<!--Start rev slider wrapper-->    
<?php
		 if($this->params['controller']=='pages' && $this->params['action']=='accueil'){

		 echo $this->element('slider');} ?>
<!--End rev slider wrapper--> 







<?php echo $this->fetch('content'); ?>   


 

		<?php echo $this->element('footer'); ?>


 



 
 


    <!-- Scroll Top  -->



	<?php // echo $this->element('sql_dump'); ?>
    
     	<button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button>
	<!-- preloader  -->
	<div class="preloader"></div>
    	<!-- jQuery -->

     <?php echo "\n".$this->Html->script('site/js/jquery'); ?>
          <?php echo "\n".$this->Html->script('site/js/bootstrap.min'); ?>

     <?php echo "\n".$this->Html->script('site/js/menu'); ?>

     <?php echo "\n".$this->Html->script('site/js/owl.carousel.min'); ?>

     <?php echo "\n".$this->Html->script('site/js/jquery.mixitup.min.js'); ?>
     <?php echo "\n".$this->Html->script('site/js/jquery.fancybox.pack.js'); ?>

     <?php echo "\n".$this->Html->script('site/js/imagezoom'); ?>
     <?php echo "\n".$this->Html->script('site/js/jquery.polyglot.language.switcher'); ?>
     <?php echo "\n".$this->Html->script('site/js/SmoothScroll'); ?>
     <?php echo "\n".$this->Html->script('site/js/jquery.appear'); ?>
     <?php echo "\n".$this->Html->script('site/js/jquery.countTo'); ?>
     <?php echo "\n".$this->Html->script('site/js/validation'); ?>
     <?php echo "\n".$this->Html->script('site/js/wow'); ?>
     <?php echo "\n".$this->Html->script('site/js/jquery.fitvids'); ?>
     <?php echo "\n".$this->Html->script('site/js/nouislider'); ?>
 	 <?php echo "\n".$this->Html->script('site/js/isotope'); ?>
  


	

	<!-- revolution slider js -->
         <?php echo "\n".$this->Html->script('site/js/rev-slider/jquery.themepunch.tools.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/jquery.themepunch.revolution.min'); ?>

         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.actions.min'); ?>

         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.carousel.min'); ?>

         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.kenburn.min'); ?>

         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.layeranimation.min'); ?>

         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.migration.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.navigation.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.parallax.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.slideanims.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.video.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.video.min'); ?>
         <?php echo "\n".$this->Html->script('site/js/rev-slider/revolution.extension.video.min');
		 		 if($this->params['controller']=='contacts' ){

		  ?>
         	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 

         <?php echo "\n".$this->Html->script('site/js/gmap'); ?>
		 <?php echo "\n".$this->Html->script('site/js/default-map');} ?>	
		 <?php echo "\n".$this->Html->script('site/js/custom'); ?>	

</div>
   
</body>
</html>
