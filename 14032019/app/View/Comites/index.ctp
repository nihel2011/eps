
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

  <section class="bg-lighter" id="pricing">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <?php foreach ($comites as $comite):?>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table maxwidth400">
                <div class="font-36 pl-20 bg-theme-colored text-white text-left pr-20 p-10"><p>Nom :</p><?php echo $comite['Comite']['nom'];?>
                <p>Prenom :</p> <?php echo $comite['Comite']['prenom'];?> 
                </div>
                <img src="<?php echo $this->webroot; ?>files/comite/<?php echo $comite['Comite']['photo'];?>" alt="">
                <div class=" bg-white border-1px p-30 pt-20 pb-20">
                  <h3 class="package-type font-28 m-0 text-black"><?php echo $comite['Comite']['grade_id'];?></h3>
                  <ul class="table-list list-icon theme-colored pb-0">
                    <li><i class="fa fa-check"></i><p>Fonction :</p> <?php echo $comite['Comite']['fonction'][$lang];?></li>
                    <li><i class="fa fa-check"></i><p>Email :</p><?php echo $comite['Comite']['email'];?></li>
                    <li><i class="fa fa-check"></i><p>CV :</p><?php echo $comite['Comite']['cv'][$lang];?></li>
                    
                  </ul>
                </div>
<!--                <a href="#" class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat">Signup</a>
-->              </div>
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