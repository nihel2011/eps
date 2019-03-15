  <?php $lang = $this->Session->read('User.language');?> 

 
<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white"><?php echo $menu['Menu']['name'];?></h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                <!--<li><a href="#">Pages</a></li>-->
                <li class="active text-gray-silver"><?php echo $menu['Menu']['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Upcoming Events -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php foreach($actualites as $act): ?>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="<?php echo $this->webroot; ?>files/actualite/<?php echo $act['Actualite']['photo'];?>" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="mt-0 text-uppercase font-weight-500"><?php echo $act['Actualite']['name'][$lang];?></h4>
                    <p><?php echo $act['Actualite']['resume'][$lang];?></p>
                    <a href="<?php echo $this->webroot;?>" class="btn btn-flat btn-dark btn-theme-colored btn-sm mt-10"><?php echo __('Details');?> <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-lightest"><?php echo $act['Actualite']['datea'];?></li>
                      <!--<li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>
                      <li class="p-15 bg-lightest">2015</li>-->
                    </ul>
                    <ul>
                      <li class="mb-10"><a href="#"><i class="fa fa-clock-o mr-5"></i> at 5.00 pm - 7.30 pm</a></li>
                      <li><a href="#"><i class="fa fa-map-marker mr-5"></i> <?php echo $act['Actualite']['position'];?>.</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
             <?php endforeach;?>
            
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <ul class="pagination theme-colored pull-right xs-pull-center mb-xs-40">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>