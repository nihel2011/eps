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

$cakeDescription = __d('cake_dev', '');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version());
//echo $this->params['controller'];
//echo 'hhh'.$this->params['action'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<?php /*?><title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title><?php */?>

 <meta http-equiv="x-ua-compatible" content="ie=edge">
    
        <title>EPS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">
	<?php
		
		
			echo $this->Html->css('/assets/css/bootstrap.min'); 
			echo $this->Html->css('/assets/css/owl.carousel'); 
			echo $this->Html->css('/assets/css/owl.transitions'); 
			echo $this->Html->css('/assets/css/meanmenu.min'); 
			echo $this->Html->css('/assets/css/font-awesome.min'); 
			echo $this->Html->css('/assets/css/icon'); 
			echo $this->Html->css('/assets/css/flaticon');
			echo $this->Html->css('/assets/css/magnific.min');
			echo $this->Html->css('/assets/css/venobox');
			echo $this->Html->css('/assets/css/style');
			echo $this->Html->css('/assets/css/responsive');
	 ?>
      <?php echo "\n".$this->Html->script('/assets/js/vendor/modernizr-2.8.3.min'); ?>	
      

  
  <!--   <link rel="shortcut icon" href="<?php echo $this->webroot;?>exas.ico" />
     <link rel="icon" type="image/png" href="<?php echo $this->webroot;?>exas.png">

	 Google Fonts -->

	
</head>
<body >

<!--<div id="wrapper-content">--><!-- PAGE WRAPPER-->
<!--<div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>-->
  <div id="preloader"></div>
<?php echo $this->element('header'); ?>
    
             

    <?php
		 if($this->params['controller']=='pages' && $this->params['action']=='accueil'){

	echo $this->element('slider');
	} ?>

   <?php  echo $this->fetch('content'); ?>   
     





        
   
 
  
  	<?php echo $this->element('footer'); ?>

    	<!-- jQuery -->
<!--  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
-->   <!--</div>-->
 <?php /*?>  <?php  if($this->params['controller']=='contacts' ){

		  ?>
         	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script> 

         <?php echo "\n".$this->Html->script('site/js/gmap'); ?><?php */?>
        
       		 <?php echo "\n".$this->Html->script('/assets/js/vendor/jquery-1.12.4.min'); ?>	
          <?php echo "\n".$this->Html->script('/assets/js/bootstrap.min'); ?>
		 <?php echo "\n".$this->Html->script('/assets/js/owl.carousel.min'); ?>	
         <?php echo "\n".$this->Html->script('/assets/js/jquery.counterup.min'); ?>
		 <?php echo "\n".$this->Html->script('/assets/js/waypoints'); ?>	
         <?php echo "\n".$this->Html->script('/assets/js/isotope.pkgd.min'); ?>
		 <?php echo "\n".$this->Html->script('/assets/js/jquery.stellar.min');?>	
         
         <?php echo "\n".$this->Html->script('/assets/js/magnific.min'); ?>
		 <?php echo "\n".$this->Html->script('/assets/js/venobox.min'); ?>	
         <?php echo "\n".$this->Html->script('/assets/js/jquery.meanmenu'); ?>
         <?php echo "\n".$this->Html->script('/assets/js/form-validator.min'); ?>
         
                  <?php echo "\n".$this->Html->script('/assets/js/plugins'); ?>
         <?php echo "\n".$this->Html->script('/assets/js/main'); ?>

       
      
        
        
        
         
</body>
</html>
