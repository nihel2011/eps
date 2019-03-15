
  <?php $lang = $this->Session->read('User.language');?> 
   

<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white"><?php echo $menu['Menu']['name'][$lang];?></h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                <!--<li><a href="#">Pages</a></li>-->
                <li class="active text-gray-silver"><?php echo $menu['Menu']['name'][$lang];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Works Filter -->
            <div class="portfolio-filter font-alt align-center">
              <a href="#" class="active" data-filter="*">All</a>
              
               <?php foreach($first_names as $first_names):
			   
			   ?> 
              <a href="#" class="" data-filter=".<?php echo $first_names['Galery']['catpho_name'];?>"><?php echo $first_names['Galery']['catpho_name'];?></a>
             <?php endforeach; ?>
            </div>
            <!-- End Works Filter -->
            
            <!-- Portfolio Gallery Grid -->
            <div id="grid" class="gallery-isotope grid-3 gutter clearfix">

              <!-- Portfolio Item Start -->
                  <?php   foreach($galeries as $galeries):?> 
              <div class="gallery-item <?php echo $galeries['Galery']['catpho_name'];?>">
                <div class="thumb">
                    <img class="img-fullwidth" src="<?php echo $this->webroot; ?>files/galeries/<?php echo $galeries['Galery']['photo'];?>" alt="project">
                  <div class="overlay-shade"></div>
                  <div class="icons-holder">
                    <div class="icons-holder-inner">
                      <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                        <a data-lightbox="image" href="<?php echo $this->webroot; ?>files/galeries/<?php echo $galeries['Galery']['photo'];?>"><i class="fa fa-plus"></i></a>
                        <a href="#"><i class="fa fa-link"></i></a>
                      </div>
                    </div>
                  </div>
                  <a class="hover-link" data-lightbox="image" href="<?php echo $this->webroot; ?>files/galeries/<?php echo $galeries['Galery']['photo'];?>">View more</a>
                </div>
              </div>
           <?php endforeach; ?>
              
            </div>
            <!-- End Portfolio Gallery Grid -->
          </div>
        </div>
      </div>
    </section>