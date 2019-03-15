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

<section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4">
              <div class="thumb">
                <img src="<?php echo $this->webroot; ?>files/adherents/<?php echo $adherent['Adherent']['photo'];?>" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h5 class="name font-24 mt-0 mb-0"> Nom et prénom: <?php echo $adherent['Adherent']['nom'];?> <?php echo $adherent['Adherent']['prenom'];?></h5>
              <h5 class="name font-24 mt-0 mb-0">Fonction : <?php echo $adherent['Adherent']['fonction'][$lang];?></h5>
             <h5 class="name font-24 mt-0 mb-0"> Grade :<?php echo $adherent['Adherent']['grade'];?></h5>
              <h5 class="name font-24 mt-0 mb-0">Departement : <?php echo $adherent['Adherent']['departement'][$lang];?></h5>
             <h5 class="name font-24 mt-0 mb-0"> Faculte: <?php echo $adherent['Adherent']['faculte'][$lang];?></h5>
              <h5 class="name font-24 mt-0 mb-0">Universite: <?php echo $adherent['Adherent']['university'][$lang];?></h5>
             <h5 class="name font-24 mt-0 mb-0">Adresse:  <?php echo $adherent['Adherent']['adresse'][$lang];?></h5>
		     <h5 class="name font-24 mt-0 mb-0"> Code postal: <?php echo $adherent['Adherent']['code_postal'];?></h5>
             <h5 class="name font-24 mt-0 mb-0"> Pays :<?php echo $adherent['Adherent']['pays'];?></h5>
              <h5 class="name font-24 mt-0 mb-0">Ville: <?php echo $adherent['Adherent']['ville'][$lang];?></h5>
             <h5 class="name font-24 mt-0 mb-0"> Telephone: <?php echo $adherent['Adherent']['tel'];?></h5>
              <h5 class="name font-24 mt-0 mb-0">Fax: <?php echo $adherent['Adherent']['fax'];?></h5>
             <h5 class="name font-24 mt-0 mb-0"> Email: <?php echo $adherent['Adherent']['email'];?></h5>


           <!--   <ul class="styled-icons icon-dark icon-theme-colored icon-sm mt-15 mb-0">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             </ul>-->
            </div>
          </div>
          <div class="col-sm-12 col-md-4">
            <div class="sidebar sidebar-left mt-sm-30 ml-40">
             <div class="widget">
<!--                <h4 class="widget-title line-bottom">Courses <span class="text-theme-color-2">List</span></h4>
-->                     <div class="services-list">
                  <ul class="list list-border angle-double-right">
                    <li><a href="page-courses-accounting-technologies.html">Accounting Technologies</a></li>
                    <li class="active"><a href="page-courses-chemical-engineering.html">Chemical Engineering</a></li>
                    <li><a href="page-courses-computer-technologies.html">Computer Technologies</a></li>
                    <li><a href="page-courses-development-studies.html">Development Studies</a></li>
                    <li><a href="page-courses-electrical-electronic.html">Electrical & Electronic</a></li>
                    <li><a href="page-courses-modern-languages.html">Modern Languages</a></li>
                    <li><a href="page-courses-modern-technologies.html">Modern Technologies</a></li>
                    <li><a href="page-courses-software-engineering.html">Software Engineering</a></li>
                  </ul>
                </div>
              </div>
              </div>
            
             </div>
          </div>
        </div>
      </div>
    </section>