<?php //print_r($produit);?>

	<div class="page_header">
		<div class="page_header_parallax" style="background:url(<?php /*echo $this->webroot;?>/files/menus/<?php echo $cat['Category']['photo'];*/?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><!--<span>Portfolio</span>--><?php //echo $cat['Category']['fr_name'];?></h3>
					</div>
				</div>
			</div>
		</div>
		<div class="bcrumb-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!--<ul class="bcrumbs">
							<li><a href="<?php echo $this->webroot;?>pages/accueil"><i class="fa fa-home"></i> Accueil</a></li>
							<li>Produits</li><li><?php echo $cat['Category']['fr_name'];?></li>
						</ul>-->
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- INNER CONTENT -->
	<div class="inner-content">
		<div class="container">
			<section id="portfolio-section">
			<!--	<ul class="filter no-margin-top" data-option-key="filter">
					<li><a class="selected" href="#filter" data-option-value="*">All</a></li>
					<li><a href="#" data-option-value=".branding">Branding</a></li>
					<li><a href="#" data-option-value=".illustration">Illustration</a></li>
					<li><a href="#" data-option-value=".web-design">Web Design</a></li>
					<li><a href="#" data-option-value=".print">Print</a></li>
				</ul>-->
               
				<div id="portfolio-section" class="isotope tiles folio-boxed-3col">
                <ul class="thumbnails gallery">
                 <?php	foreach($produit as $prod): ?>
		 
                    
                    	
				 <li class="col-sm-3 clearfix categ" data-tag='graphique'>
                <div class="thumbnail">
					 	<div class="project-gal">
						<img src="<?php echo $this->webroot;?>files/produit/<?php echo $prod['Produit']['photo'];?>" class="img-responsive" alt="">
		
					<div class="overlay-folio">
							<div class="hover-box alpha-1"  >
                            <div class="project-info">
						<h2><?php echo $prod['Produit']['fr_name'];?></h2>
					<!--	<p>Création Graphique</p>-->
					</div>
                    <div style="padding:0px 30px">
                     <hr id="hrprod" />	
                     </div>
                     <div class="hover-zoom">
									<!--<a class="mp-lightbox zoom" href="<?php echo $this->webroot;?>files/categorie/3.jpg"><i class="icon-plus2"></i></a>-->
                                   
									<!--<a class="link" href="<?php echo $this->webroot; ?>produits/listproduits/<?php echo $categ['Category']['id'];?>"><i class="icon-plus2"></i></a>			-->		
								</div>
                    <div class="resum"><?php echo $prod['Produit']['fr_resume'];?></div>
							
							</div>
                            
						</div>
					</div></div>
				</li>
                      <?php endforeach;?>
					 
					  
				 
				</div>
			</section>
		</div>
	</div>