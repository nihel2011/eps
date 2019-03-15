
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

    <!-- Section: event calendar -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
           <?php foreach($comites as $comite):?>
            <div class="upcoming-events bg-white-f3 mb-20">
              <div class="row">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="<?php echo $this->webroot; ?>files/comite/<?php echo $comite['Comite']['photo'];?>" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                  
                    <ul>
                      <li class="mb-10"><a href="#"><i ></i><p>Nom :</p><?php echo $comite['Comite']['nom'];?></a></li>
                      <li class="mb-10"><a href="#"><i ></i><p>Prenom :</p> <?php echo $comite['Comite']['prenom'];?></a></li>
                      <li class="mb-10"><a href="#"><i ></i><p>Fonction :</p> <?php echo $comite['Comite']['fonction'][$lang];?></a></li>
                    </ul>
                    
                  </div>
                </div>
                <div class="col-sm-4 pl-0 pl-sm-15">
                  <div class="eevent-details p-15 mt-20">
                    <ul>
                      <li class="mb-10"><p>Grade :</p><?php echo $comite['Comite']['grade_id'];?></li>
                      <li class="mb-10"><p>Email :</p><?php echo $comite['Comite']['email'];?></li>
                      <li class="mb-10"><p>CV :</p><?php echo $comite['Comite']['cv'][$lang];?></li>
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