  <?php $lang = $this->Session->read('User.language');?> 

<section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="<?php echo $this->webroot;?>files/menus/<?php echo $menua['Menu']['photo'];?>">
      <div class="container pt-70 pb-20">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <h2 class="title text-white"><?php echo $menua['Menu']['name'];?></h2>
              <ol class="breadcrumb text-left text-black mt-10">
                <li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                <!--<li><a href="#">Pages</a></li>-->
                <li class="active text-gray-silver"><?php echo $menua['Menu']['name'];?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>





    <!-- Section: Team -->
    <section id="team">
      <div class="container">
        <div class="row mtli-row-clearfix">
      
        <?php foreach ($ligneadherperiodes as $ligneadherperiodes):
		 
			$adherentb = $this->requestAction('/adherents/affiche_adherent/'.$ligneadherperiodes['Ligneadherperiode']['adherents_id']);
			
			
	
		?>
        
        
          <div class="col-xs-12 col-sm-6 col-md-3 sm-text-center mb-30 mb-sm-30">
            <div class="team-members maxwidth400">
              <div class="team-thumb">
                <img class="img-fullwidth" alt="" src="<?php echo $this->webroot; ?>files/adherents/<?php echo $adherentb['Adherent']['photo'];?>">
              </div>
              <div class="team-bottom-part border-bottom-theme-color-2-2px bg-lighter border-1px text-center p-10 pt-20 pb-10">
                <h4 class="text-uppercase font-raleway font-weight-600 m-0"><a class="text-theme-color-2" href="<?php echo $this->webroot; ?>adherents/view/<?php echo $adherentb['Adherent']['id'];?>"><?php echo $adherentb['Adherent']['nom'];?> <?php echo $adherentb['Adherent']['prenom'];?> </a></h4>
                <h5 class="text-theme-color"><?php echo $adherentb['Adherent']['fonction'][$lang];?> </h5>
                <!--<ul class="styled-icons icon-sm icon-dark icon-theme-colored">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-skype"></i></a></li>
                </ul>-->
              </div>
            </div>
          </div>
         <?php endforeach;?>
        </div>
      </div>
    </section>