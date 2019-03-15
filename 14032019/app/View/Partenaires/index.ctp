
    
    
     <?php $lang = $this->Session->read('User.language');?> 

 

 
    <div class="breadcrumb-banner-area bg-img-2 bg-opacity-2 ptb-100 " style="background:url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
									<li><span><?php echo $menu['Menu']['name'][$lang];?></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <!--<div class="portfolio-filter font-alt align-center">
              <a href="#" class="active" data-filter="*"><?php echo __('All');?></a>
              
               <?php foreach($first_names as $first_names):
			   
			   ?> 
              <a href="#" class="" data-filter=".<?php echo $first_names['Partenaire']['catpar_name'];?>"><?php echo $first_names['Partenaire']['catpar_name'];?></a>
             <?php endforeach; ?>
            </div>-->
          
            <!-- Works Filter -->
            <!--<div class="portfolio-filter font-alt align-center">
              <a href="#" class="active" data-filter="*">All</a>
              <a href="#select1" class="" data-filter=".select1">Photos</a>
              <a href="#select2" class="" data-filter=".select2">Campus</a>
              <a href="#select3" class="" data-filter=".select3">Students</a>
            </div>-->
            <!-- End Works Filter -->
            
            <!-- Portfolio Gallery Grid -->
         
              <!-- Portfolio Item Start -->
                    <div id="grid" class="gallery-isotope grid-4 gutter clearfix">
               <?php   foreach($partenaires as $partenaires):?> 
              <div class="col-xs-12 col-sm-3 col-md-2 mt-10 gallery-item   <?php echo $partenaires['Partenaire']['catpar_name'];?>" >
              <div class="part">
                           <a href="#" target="_blank"> <img class="img-fullwidth" src="<?php echo $this->webroot; ?>files/partenaires/<?php echo $partenaires['Partenaire']['photo'];?>" alt="project"></a>
                        

                   
                </div>
                  
               
              </div>
              <!-- Portfolio Item End -->

             <?php endforeach; ?>
              
          </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
      </div>
    </section>

 