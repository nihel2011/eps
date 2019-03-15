<!doctype html>
<html> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Administration</title>

	<!-- Bootstrap -->
    <?php echo "\n".$this->Html->css('bootstrap.min'); ?>
    <?php echo "\n".$this->Html->css('plugins/jquery-ui/jquery-ui.min'); ?>
    	<!-- dataTables -->
	 
    <?php echo "\n".$this->Html->css('plugins/datatable/TableTools'); ?>
     <?php echo "\n".$this->Html->css('plugins/chosen/chosen'); ?>
     <?php echo "\n".$this->Html->css('plugins/colorpicker/colorpicker.css'); ?>
     <?php echo "\n".$this->Html->css('plugins/datepicker/datepicker.css'); ?>
   	 
    <?php echo "\n".$this->Html->css('style'); ?>
    <?php echo "\n".$this->Html->css('themes'); ?>
 
    <?php //echo "\n".$this->Html->css('color-picker.min'); ?>
  <?php echo "\n".$this->Html->script('jquery.min'); ?>
	<!-- Nice Scroll -->
    <?php echo "\n".$this->Html->script('plugins/nicescroll/jquery.nicescroll.min'); ?>
	 
	<!-- imagesLoaded -->
    <?php echo "\n".$this->Html->script('plugins/imagesLoaded/jquery.imagesloaded.min'); ?>
	 
	<!-- jQuery UI -->
    <?php echo "\n".$this->Html->script('plugins/jquery-ui/jquery-ui'); ?>
	 
	<!-- slimScroll -->
    <?php echo "\n".$this->Html->script('plugins/slimscroll/jquery.slimscroll.min'); ?>
	 
	<!-- Bootstrap -->
    <?php echo "\n".$this->Html->script('bootstrap.min'); ?>
	 
	<!-- Bootbox -->
    <?php echo "\n".$this->Html->script('plugins/bootbox/jquery.bootbox'); ?>
	 
	<!-- New DataTables -->
    <?php echo "\n".$this->Html->script('plugins/momentjs/jquery.moment.min'); ?>
 
    <?php echo "\n".$this->Html->script('plugins/momentjs/moment-range.min'); ?>
	 
    <?php echo "\n".$this->Html->script('plugins/datatables/jquery.dataTables.min'); ?>
	 
    <?php echo "\n".$this->Html->script('plugins/datatables/extensions/dataTables.tableTools.min'); ?>
 
    <?php echo "\n".$this->Html->script('plugins/datatables/extensions/dataTables.colReorder.min'); ?>
	 
    <?php echo "\n".$this->Html->script('plugins/datatables/extensions/dataTables.colVis.min'); ?>
	 
    <?php echo "\n".$this->Html->script('plugins/datatables/extensions/dataTables.scroller.min'); ?>
 

	<!-- Chosen -->
    <?php echo "\n".$this->Html->script('plugins/chosen/chosen.jquery.min'); ?>
    <?php echo "\n".$this->Html->script('plugins/datepicker/bootstrap-datepicker.js'); ?>
    <?php echo "\n".$this->Html->script('plugins/colorpicker/bootstrap-colorpicker.js'); ?>
	  
    <?php echo "\n".$this->Html->script('eakroko.min'); ?>
	 
	<!-- Theme scripts -->
    <?php echo "\n".$this->Html->script('application.min'); ?>
	 
	<!-- Just for demonstration -->
    <?php echo "\n".$this->Html->script('demonstration.min'); ?>
   <?php echo "\n".$this->Html->script('jscripts/tiny_mce/tiny_mce.js'); ?>
    <?php //echo "\n".$this->Html->script('color-picker.min'); ?>
    
   <script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "openmanager,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,fullscreen",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks,|,openmanager,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		
		//Open Manager Options
		file_browser_callback: "openmanager",
		open_manager_upload_path: '../../../../../images/uploads/',

		// Example content CSS (should be your site CSS)
	

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",
	content_css : "css/content.css",
		// Style formats
		/*style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],
importcss_append: true,*/
		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
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

<body>
<?php //print_r($this->params);
$controller = $this->params['controller'];
 

 ?>


	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">Administration</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
				<i class="fa fa-bars"></i>
			</a>
			<ul class='main-nav'>
            
				 <li <?php if($controller=='users' || $controller=='menus' || $controller=='infosites') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Paramètres</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						 
						<li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/users" data-toggle="dropdown" class='dropdown-toggle'>Utilisateurs</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/users">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/users/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        <li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/menus" data-toggle="dropdown" class='dropdown-toggle'>Menus</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/menus">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/menus/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        
                            <li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/infosites" data-toggle="dropdown" class='dropdown-toggle'>Info site</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/infosites">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/infosites/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        
                         
                        
                        
                        
                  </ul></li>
                  
                  
				 
				<li <?php if($controller=='slideshows') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Slideshows</span>
						 <span class="caret"></span> 
					</a>
					<ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/slideshows">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/slideshows/add">Ajouter</a>
						</li>
                       
					</ul> 
				</li>
				<li <?php if($controller=='contenuses' || $controller=='actualites' ) echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Contenus</span>
						 <span class="caret"></span> 
					</a>
                    <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/contenuses">Contenus</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/actualites">Actualites</a>
						</li>
						 
                        
						 
					</ul> 
					 
				</li>
                
                
                <li <?php if($controller=='references' || $controller=='partenaires' ||$controller=='souscatalogues') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Demandes</span>
						 <span class="caret"></span> 
					</a>
                    <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/demandes">Demandes</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/partenaires">Partenaires</a>
						</li>
						  <li>
							<a href="<?php echo $this->webroot; ?>admin/souscatalogues">Sous catalogues</a>
						</li>
                         
						 
					</ul> 
					 
				</li>
            
				 <!--<li <?php if($controller=='actualites') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Actualités</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/actualites">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/actualites/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                 <li <?php if($controller=='partenaires') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Partenaires</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/partenaires">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/partenaires/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li> --> 
                	<!--<li <?php if($controller=='references') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Références</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/references">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/references/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>-->
                	<!--<li <?php if($controller=='services') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Services</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/services">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/services/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>-->
                 
                
				<!--<li <?php if($controller=='categories' || $controller=='produits') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Produits</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						 
						<li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/categories" data-toggle="dropdown" class='dropdown-toggle'>Catégories</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/categories">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/categories/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        <li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/produits" data-toggle="dropdown" class='dropdown-toggle'>Produits</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/produits">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/produits/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        
                        
                        
                         
					</ul>
				</li>-->
                
                    <!--<li <?php if($controller=='galeries') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Galeries</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/galeries">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/galeries/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>-->
                
                <li <?php if($controller=='contacts') echo "class='active'"; ?>>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						<span>Contact</span>
						 <span class="caret"></span> 
					</a>
					  <ul class="dropdown-menu">
						<li class='active'>
							<a href="<?php echo $this->webroot; ?>admin/contacts">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/contacts/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                
			</ul>
			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-envelope"></i>
							<span class="label label-lightred"><?php echo count($contactes1);?></span>
						</a>
						<ul class="dropdown-menu pull-right message-ul">
                        <?php foreach($contactes1 as $contac): ?>
							<li>
								<a href="<?php echo $this->webroot;?>admin/contacts/edit/<?php echo $contac['Contact']['id'];?>">
									 
									<div class="details">
										<div class="name">	<?php echo $contac['Contact']['nom'];?> </div>
										<div class="message">
											<?php echo $contac['Contact']['sujet'];?>
										</div>
									</div>
								</a>
							</li>
                            <?php  endforeach;?>
							 
							<li>
								<a  href="<?php echo $this->webroot; ?>admin/contacts" class='more-messages'>Liste Contact
									<i class="fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<!--<li class="dropdown sett">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-cog"></i>
						</a>
						<ul class="dropdown-menu pull-right theme-settings">
							<li>
								<span>Layout-width</span>
								<div class="version-toggle">
									<a href="#" class='set-fixed'>Fixed</a>
									<a href="#" class="active set-fluid">Fluid</a>
								</div>
							</li>
							<li>
								<span>Topbar</span>
								<div class="topbar-toggle">
									<a href="#" class='set-topbar-fixed'>Fixed</a>
									<a href="#" class="active set-topbar-default">Default</a>
								</div>
							</li>
							<li>
								<span>Sidebar</span>
								<div class="sidebar-toggle">
									<a href="#" class='set-sidebar-fixed'>Fixed</a>
									<a href="#" class="active set-sidebar-default">Default</a>
								</div>
							</li>
						</ul>
					</li>-->
					<!--<li class='dropdown colo'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="fa fa-tint"></i>
						</a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">
								Predefined colors
							</li>
							<li>
								<span class='red'></span>
								<span class='orange'></span>
								<span class='green'></span>
								<span class="brown"></span>
								<span class="blue"></span>
								<span class='lime'></span>
								<span class="teal"></span>
								<span class="purple"></span>
								<span class="pink"></span>
								<span class="magenta"></span>
								<span class="grey"></span>
								<span class="darkblue"></span>
								<span class="lightred"></span>
								<span class="lightgrey"></span>
								<span class="satblue"></span>
								<span class="satgreen"></span>
							</li>
						</ul>
					</li>
					<li class='dropdown language-select'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<img src="img/demo/flags/us.gif" alt="">
							<span>US</span>
						</a>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="img/demo/flags/br.gif" alt="">
									<span>Brasil</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/de.gif" alt="">
									<span>Deutschland</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/es.gif" alt="">
									<span>España</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="img/demo/flags/fr.gif" alt="">
									<span>France</span>
								</a>
							</li>
						</ul>
					</li>-->
				</ul>
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown"><?php echo  $this->Session->read('nom_user');
					$phota =  'files/users/avatar.jpg';
					$phot = 'files/users/'.$this->Session->read('photous');
					if(is_file($phot))
					{ $phota=$phot; 
					}
				 
					?>
						<img src="<?php echo $this->webroot.''.$phota; ?>" alt="" style="max-height:30px;max-width:30px;">
					</a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo $this->webroot;?>admin/users/edit/<?php echo  $this->Session->read('user_id');?>">Modifier profil</a>
						</li>
					<!--	<li>
							<a href="#">Account settings</a>
						</li>-->
						<li>
							<a href="<?php echo $this->webroot;?>admin/users/logout">Déconnection</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
		<!--	<form action="http://www.eakroko.de/flat/search-results.html" method="GET" class='search-form'>
				<div class="search-pane">
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit">
						<i class="fa fa-search"></i>
					</button>
				</div>
			</form>-->
			<div class="subnav">
				<div class="subnav-title">
					<a href="#" class='toggle-subnav'>
						<i class="fa fa-angle-down"></i>
						<span>Contenus</span>
					</a>
				</div>
				<ul class="subnav-menu">
					<li class='dropdown'>
						<a href="<?php echo $this->webroot; ?>admin/users" data-toggle="dropdown">Utilisateurs</a>
						<ul class="dropdown-menu">
							<li>
								<a href="<?php echo $this->webroot; ?>admin/users">liste</a>
							</li>
							<li>
								<a href="<?php echo $this->webroot; ?>admin/users/">Ajouter</a>
							</li>
							 
						</ul>
					</li>
					 
                    <li  class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Menus	</a>
					  <ul class="dropdown-menu">
						<li >
							<a href="<?php echo $this->webroot; ?>admin/menus">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/menus/add">Ajouter</a>
						</li>
						 
					</ul> 
					</li>
                    
                    
                    	<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Societe 
					</a>
					<ul class="dropdown-menu">
						<li >
							<a href="<?php echo $this->webroot; ?>admin/contenuses">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/contenuses/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
				<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Service 
					</a>
                    <ul class="dropdown-menu">
						<li  >
							<a href="<?php echo $this->webroot; ?>admin/services">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/services/add">Ajouter</a>
						</li>
						 
					</ul> 
					 
				</li>
				<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Catalogue 
					</a>
					  <ul class="dropdown-menu">
						<li  >
							<a href="<?php echo $this->webroot; ?>admin/catalogues">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/catalogues/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li> 
                	<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Formation planifier
					</a>
					  <ul class="dropdown-menu">
						<li  >
							<a href="<?php echo $this->webroot; ?>admin/formations">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/formations/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li> 
                	<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Demande formation 
					</a>
					  <ul class="dropdown-menu">
						<li >
							<a href="<?php echo $this->webroot; ?>admin/demandes">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/demandes/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                   	<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Partenaires 
					</a>
					  <ul class="dropdown-menu">
						<li  >
							<a href="<?php echo $this->webroot; ?>admin/partenaires">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/partenaires/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                <li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Références
					</a>
					  <ul class="dropdown-menu">
						<li  >
							<a href="<?php echo $this->webroot; ?>admin/references">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/references/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                
                <!--<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Telechargements 
					</a>
					  <ul class="dropdown-menu">
						<li >
							<a href="<?php echo $this->webroot; ?>admin/telechargements">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/telechargements/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>-->
                
                
				<!--<li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Produits 
					</a>
					<ul class="dropdown-menu">
						 
						<li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/categories" data-toggle="dropdown" class='dropdown-toggle'>Catégories</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/categories">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/categories/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        <li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/produits" data-toggle="dropdown" class='dropdown-toggle'>Produits</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/produits">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/produits/add">Ajouter</a>
								</li>
							</ul>
						</li>
                        
                        
                        
                         
					</ul>
				</li>-->
                  <!--<li class='dropdown-submenu'>
							<a href="<?php echo $this->webroot; ?>admin/galeries" data-toggle="dropdown" class='dropdown-toggle'>Galeries</a>
							<ul class="dropdown-menu">
								<li>
									<a href="<?php echo $this->webroot; ?>admin/galeries">Liste</a>
								</li>
								<li>
									<a href="<?php echo $this->webroot; ?>admin/galeries/add">Ajouter</a>
								</li>
							</ul>
						</li>-->
                  
                   <li class='dropdown'>
					<a href="javascript:;" data-toggle="dropdown" class='dropdown-toggle'>
						 Contact
					</a>
					  <ul class="dropdown-menu">
						<li >
							<a href="<?php echo $this->webroot; ?>admin/contacts">Liste</a>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/contacts/add">Ajouter</a>
						</li>
						 
					</ul> 
				</li>
                
				</ul>
			</div>
			 
			 
			 
		</div>
		<div id="main">
			<?php echo $this->fetch('content'); ?>
            
		</div>
	</div>
	 <?php  //echo $this->element('sql_dump'); ?>
</body>

 
</html>
