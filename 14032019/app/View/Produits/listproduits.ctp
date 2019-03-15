<?php //print_r ($produit); ?>
<div class="page_header">
		<div class="page_header_parallax">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3><span>Blog</span>Lorem ipsum dolor <br>amet iplus</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="bcrumb-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="bcrumbs">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li>BLog - Single</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
    <div class="inner-content no-padding">
		<div class="container">
           <div class="padding30"></div>
        <article class="blogpost">
 							<div class="space30"></div>
							<!-- Media Gallery -->
							<div class="post-media">
								<div id="blog-slider" class="owl-carousel owl-theme">
                                  <?php	foreach($produit as $prod): ?>
									<div class="item">						
										<img src="<?php  echo $this->webroot;?>/files/produits/<?php echo $prod['Produit']['photo'];?>" class="img-responsive" alt="">
									</div>
                                     <?php endforeach;?>
									 
								</div>
							</div>
                            
                            
                            </article>
                <div class="space60"></div>
                </div> 
		           
                            
                          <section id="portfolio-section" class="pattern-bg3 padding70 ">
                          
                          <div class="container"> 
        	 
            
             <div class="text-center space60">
				<h2 class="title uppercase"><?php echo $cat['Category']['fr_name'];?></h2>
                </div>
                
                <?php echo $cat['Category']['fr_description'];?>
                
                
             </div>
          
            </section>
                            
                            
                            
                            <div class="team-home padding70" >
			<div class="text-center space40">
				<h2 class="title uppercase">Produits sémi</h2>
				<!--<p>Sed laoreet libero eget tempus blandit praesent eu erat sed sem facilisis rutrum metus<br>facilisis eros justo non ipsum aliquam lacinia non eu ex.</p>-->
			</div>
			<div class="team-box">
				<div class="container">
					<div id="home-team" class="owl-carousel owl-theme thumbnails gallery">
                     <?php	foreach($catb as $categ): ?>
						<div class="item clearfix categ ">
							  <div class="thumbnail">
					 	<div class="project-gal">
						<img src="<?php echo $this->webroot;?>files/categorie/<?php echo $categ['Category']['photo'];?>" class="img-responsive" alt="">
		
					<div class="overlay-folio">
							<div class="hover-box alpha-1"  >
                            <div class="project-info">
						<h2><?php echo $categ['Category']['fr_name'];?></h2>
					<!--	<p>Création Graphique</p>-->
					</div>
                    <div style="padding:0px 30px">
                     <hr id="hrprod" />	
                     </div>
                     <div class="hover-zoom">
									<!--<a class="mp-lightbox zoom" href="<?php echo $this->webroot;?>files/categorie/3.jpg"><i class="icon-plus2"></i></a>-->
                                   
									<a class="link" href="<?php echo $this->webroot; ?>produits/listproduits/<?php echo $categ['Category']['id'];?>"><i class="icon-plus2"></i></a>					
								</div>
                    <div class="resum"><?php echo $categ['Category']['fr_resume'];?></div>
							
							</div>
                            
						</div>
					</div></div>
						</div>
                        <?php endforeach; ?>
                         
						 
						 
						 
					</div>
				</div>
			</div>
		</div>
                            
                           </div>