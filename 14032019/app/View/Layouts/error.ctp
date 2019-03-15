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
	<?php /*?><title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title><?php */?>
    
    
    
     <title>Exas: accompagnement conseil projet, Management des projets de développement, Développement des systèmes locaux d'innovation, Promotion de l'investissement et de l'entrepreneuriat, Accompagnement au lancement de nouveaux projets,Diagnostic & plan de Mise à Niveau, Production</title>
  <META NAME="DESCRIPTION" CONTENT="Exas: accompagnement conseil projet, Management des projets de développement, Développement des systèmes locaux d'innovation, Promotion de l'investissement et de l'entrepreneuriat, Accompagnement au lancement de nouveaux projets,Diagnostic & plan de Mise à Niveau, Production ">

<META NAME="KEYWORDS" CONTENT="">
	<meta name="revisit-after" content="3 days"> 

<META HTTP-EQUIV="Pragma" CONTENT="no-cache"> 

	<META NAME="Expires" CONTENT="never"> 
	


<META NAME="OWNER" CONTENT="Exas: accompagnement conseil projet"> 


	<META NAME="SUBJECT" CONTENT="Exas: accompagnement conseil projet">
	<META NAME="RATING" CONTENT="General"> 

<META NAME="ABSTRACT" CONTENT="Exas: accompagnement conseil projet">
	
	<META HTTP-EQUIV="Content-language" CONTENT="fr"> 
	<META NAME="Language" CONTENT="fr"> 
	
	<META NAME="COPYRIGHT" CONTENT="Exas: accompagnement conseil projet"> 
	
	<META NAME="CATEGORY" CONTENT="conseil"> 
	
	<META NAME="REPLY-TO" CONTENT="contact@exas.tn"> 
    
    
    
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
		
			echo $this->Html->css('site/css/error/bootstrap.min');
			echo $this->Html->css('site/css/error/jquery-ui.min');
			echo $this->Html->css('site/css/error/animate');
			echo $this->Html->css('site/css/error/css-plugin-collections');
			echo $this->Html->css('site/css/error/menuzord-rounded-boxed');
			echo $this->Html->css('site/css/error/style-main');
			echo $this->Html->css('site/css/error/preloader');
			echo $this->Html->css('site/css/error/custom-bootstrap-margin-padding');
			echo $this->Html->css('site/css/error/responsive');
			echo $this->Html->css('site/css/error/theme-skin-color-set-1');
			
			
	 ?>
        
  
     
      <?php echo "\n".$this->Html->script('site/js/error/jquery-2.2.4.min'); ?>	
       <?php echo "\n".$this->Html->script('site/js/error/jquery-ui.min'); ?>	
        <?php echo "\n".$this->Html->script('site/js/error/bootstrap.min'); ?>	
         <?php echo "\n".$this->Html->script('site/js/error/jquery-plugin-collection'); ?>	
     
     
     
     <link rel="shortcut icon" href="<?php echo $this->webroot;?>exas.ico" />
     <link rel="icon" type="image/png" href="<?php echo $this->webroot;?>exas.png">

	 
	
</head>
<body>
<?php 	
?> 

	


<?php echo $this->fetch('content'); ?>   


 



 


 
 
  
	

	 	
		 <?php echo "\n".$this->Html->script('site/js/error/custom'); ?>	
          
 
</body>
</html>
