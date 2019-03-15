 <?php $lang = $this->Session->read('User.language');
//echo $lang;
 ?> 
  
 <section>
      <div class="range range-condensed range-xs-center range-sm-left shell">
      <?php $m=0;
	  $tabico = array("icon-1","icon-2","icon-3","icon-4","icon-5","icon-6","icon-7","icon-8","icon-9");
	   foreach($services as $service):
	   ?>
        <div class="cell-xs-10 cell-sm-6 height-fill">
          <article class="icon-box icon-box-top-line">
            <div class="box-top">
           <!-- <span class="icon icon-primary icon-lg <?php echo $tabico[$m];?>"></span>-->
           
         <div class="box-icon">  <?php  $phot = "files/services/".$service['Service']['photo'];
						if(is_file($phot))
						{
						 ?>
         
           
           
             <img src="<?php echo $this->webroot; ?><?php echo $phot;?>" alt="" class="imgserv" />
              
              <?php }  else { ?><span class="icon icon-primary icon-lg <?php echo $tabico[$m];?>"></span> <?php } ?>
             </div> <div class="box-header">
                <h5><a href="<?php echo $this->webroot; ?>services/index/<?php echo $service['Service']['id'];?>"><?php echo $service['Service']['name'][$lang];?></a></h5>
                
              <!--  detail_service/-->
              </div>
            </div>
            <div class="box-body">
              <p class="text-gray-base"><?php echo utf8_decode($service['Service']['resume'][$lang]);?></p>
            </div>
            <a href="<?php echo $this->webroot; ?>services/index/<?php echo $service['Service']['id'];?>" class="btn btn-icon-only btn-icon-single btn-icon-default"><span class="icon icon-sm material-icons-arrow_forward"></span></a> </article>
        </div>
        	 <?php $m++; endforeach;?>

       
         
         
         
      </div>
    </section>
    <section class="section-with-counters bg-primary text-center">
      <div class="shell bg-cape-cod context-dark section-60 section-md-90">
        <h4 class="text-rolling-stone text-bold text-uppercase">Vous recherchez</h4>
        <h3 class="offset-top-2"><span class="text-thin">Un logiciel</span> stable? </h3>
        <p class="text-white">Avec beaucoup d'expérience, nous deviendrons l'embauche d'une bonne solution pour votre entreprise!</p>
        <div class="range offset-top-60 list-md-dashed">
           <?php 
			foreach($statis as $statis): ?>
          <div class="cell-sm-3">
            <div class="h1 small counter-bold counter"><?php echo $statis['Statistique']['valeurs'];?></div>
            <div class="offset-top-0 text-bold text-white text-uppercase"><?php echo $statis['Statistique']['name'][$lang];?></div>
          </div>
           <?php endforeach; ?>
		 
        </div>
        <div class="offset-top-50 offset-md-top-75 inset-xs-left-60 inset-xs-right-60">
          <div class="reveal-sm-flex range-sm-center range-sm-middle"><a href="<?php echo $this->webroot; ?>contacts" class="btn btn-rect btn-primary reveal-block reveal-sm-inline-block">Contactez-nous</a><span class="text-italic text-white inset-sm-left-20 inset-sm-right-20 reveal-block reveal-sm-inline-block text-big-18">ou</span><a href="<?php echo $this->webroot; ?>contacts/index/0/1" style="min-width:236px;" class="btn btn-rect btn-white-outline offset-top-0 reveal-block reveal-sm-inline-block">Demande Démo</a></div>
        </div>
      </div>
    </section>
   <?php /*?>  
    <section class="bg-cape-cod context-dark">
      <div class="shell">
        <div class="range range-xs-center range-md-left">
          <div class="cell-xs-10 cell-md-6 text-left section-60 section-sm-90">
            <div>
              <h3>successful <span class="text-thin">cases</span> </h3>
              <div class="offset-top-40 carousel-testimonials-home">
                <div class="inset-lg-right-50">
                  <div id="child-carousel" data-for=".carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-xs-items="3" data-sm-items="3" data-md-items="3" data-lg-items="4" data-slide-to-scroll="1" data-center-mode="false" data-center-padding="0" class="slick-slider slick-slider slick-carousel-round-image slick-images">
                    <div class="item">
                      <div class="imp-wrap"><img src="images/home-testimonials-1-99x99.jpg" alt="" width="99" height="99"/> </div>
                    </div>
                    <div class="item">
                      <div class="imp-wrap"><img src="images/home-testimonials-2-99x99.jpg" alt="" width="99" height="99"/> </div>
                    </div>
                    <div class="item">
                      <div class="imp-wrap"><img src="images/home-testimonials-3-99x99.jpg" alt="" width="99" height="99"/> </div>
                    </div>
                    <div class="item">
                      <div class="imp-wrap"><img src="images/home-testimonials-4-99x99.jpg" alt="" width="99" height="99"/> </div>
                    </div>
                  </div>
                </div>
                <div data-arrows="false" data-loop="false" data-dots="true" data-swipe="true" data-child="#child-carousel" data-for="#child-carousel" data-items="1" data-xs-items="1" data-sm-items="1" data-md-items="1" data-lg-items="1" data-slide-to-scroll="1" data-center-mode="false" class="slick-slider carousel-parent slick-dots-variant-1 offset-top-35">
                  <div class="item inset-left-10 inset-right-10 inset-">
                    <div class="inset-lg-right-85">
                      <blockquote class="quote-left">
                        <div class="range range-xs-bottom">
                          <div class="cell-xs-6">
                            <div class="quote-name"> <cite>Amelia Lee</cite> </div>
                            <div class="text-dusty-gray">Sales, demolink.org</div>
                          </div>
                          <div class="cell-xs-6 text-center offset-top-22 offset-xs-top-0">
                            <div class="quote-desc range reveal-flex">
                              <div class="cell-xs-6">
                                <div class="quote-desc-text text-fuel-yellow">-20%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                              </div>
                              <div class="cell-xs-6 offset-top-0">
                                <div class="quote-desc-text text-primary">+17%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Profit</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="quote-body"> <q>I would not hesitate even one bit to work with them for my future tax and accounting needs.</q> </div>
                      </blockquote>
                      <div class="offset-top-22"><a href="#" class="btn btn-primary">read more</a></div>
                    </div>
                  </div>
                  <div class="item inset-left-10 inset-right-10 inset-">
                    <div class="inset-lg-right-85">
                      <blockquote class="quote-left">
                        <div class="range">
                          <div class="cell-xs-6">
                            <div class="quote-name"> <cite>Mark Wilson</cite> </div>
                            <div class="text-dusty-gray">CEO "WilsonCompany"</div>
                          </div>
                          <div class="cell-xs-6 text-center offset-top-22 offset-xs-top-0">
                            <div class="quote-desc range reveal-flex">
                              <div class="cell-xs-6">
                                <div class="quote-desc-text text-fuel-yellow">-30%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                              </div>
                              <div class="cell-xs-6 offset-top-0">
                                <div class="quote-desc-text text-primary">+22%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Profit</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="quote-body"> <q>I've never known another auditor more prepared or focused. You havethe ability to dissect a case much like a skilled surgeon, with absolute calm. Nothing seems to rattle you or distract from the goal on a case.</q> </div>
                      </blockquote>
                      <div class="offset-top-22"><a href="#" class="btn btn-primary">read more</a></div>
                    </div>
                  </div>
                  <div class="item inset-left-10 inset-right-10 inset-">
                    <div class="inset-lg-right-85">
                      <blockquote class="quote-left">
                        <div class="range">
                          <div class="cell-xs-6">
                            <div class="quote-name"> <cite>Jill Miller</cite> </div>
                            <div class="text-dusty-gray">Artist</div>
                          </div>
                          <div class="cell-xs-6 text-center offset-top-22 offset-xs-top-0">
                            <div class="quote-desc range reveal-flex">
                              <div class="cell-xs-6">
                                <div class="quote-desc-text text-fuel-yellow">-29%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                              </div>
                              <div class="cell-xs-6 offset-top-0">
                                <div class="quote-desc-text text-primary">+19%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Profit</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="quote-body"> <q>I am happy that I chose Easy Audit for my US tax returns and would recommend it to everyone.</q> </div>
                      </blockquote>
                      <div class="offset-top-22"><a href="#" class="btn btn-primary">read more</a></div>
                    </div>
                  </div>
                  <div class="item inset-left-10 inset-right-10 inset-">
                    <div class="inset-lg-right-85">
                      <blockquote class="quote-left">
                        <div class="range">
                          <div class="cell-xs-6">
                            <div class="quote-name"> <cite>Christopher Taylor</cite> </div>
                            <div class="text-dusty-gray">Financial Consultant</div>
                          </div>
                          <div class="cell-xs-6 text-center offset-top-22 offset-xs-top-0">
                            <div class="quote-desc range reveal-flex">
                              <div class="cell-xs-6">
                                <div class="quote-desc-text text-fuel-yellow">-28%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Expenses</div>
                              </div>
                              <div class="cell-xs-6 offset-top-0">
                                <div class="quote-desc-text text-primary">+21%</div>
                                <div class="text-medium text-dusty-gray text-uppercase">Profit</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="divider-fullwidth"></div>
                        <div class="quote-body"> <q>Over the last 6 years I have found their services to be reliable and their advice to be practical and clear.</q> </div>
                      </blockquote>
                      <div class="offset-top-22"><a href="#" class="btn btn-primary">read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-md-6 section-image-aside section-image-aside-right">
            <div style="background-image: url(images/home-4-946x689.jpg)" class="section-image-aside-img veil reveal-md-block"></div>
          </div>
        </div>
      </div>
    </section><?php */?>
    <section class="section-50 section-sm-90 section-sm-bottom-100">
      <div class="shell text-center">
        <h3>Actualités</h3>
         <div data-items="1" data-sm-items="3" data-stage-padding="15" data-loop="false" data-margin="15" data-mouse-drag="false" data-nav="true" data-dots="true" class="owl-carousel owl-carousel-center owl-nav-modern owl-style-minimal owl-style-minimal-inverse text-center offset-top-40">
        <?php foreach($actualites as $act):?>
        
          <div class="owl-item text-center">
            <div class="post-boxed reveal-lg-inline-block">
              <div class="post-boxed-img-wrap"><a href="<?php echo $this->webroot; ?>actualites/detail/<?php echo $act['Actualite']['id'];?>"><img src="<?php echo $this->webroot; ?>files/actualite/<?php echo $act['Actualite']['photo'];?>" alt="" width="322" height="219"/></a></div>
              <div class="post-boxed-caption">
                <div class="post-boxed-title text-bold"><a href="<?php echo $this->webroot; ?>actualites/detail/<?php echo $act['Actualite']['id'];?>"><?php echo $act['Actualite']['name'][$lang];?></a></div>
                <div class="offset-top-5">
                  <ul class="list-inline list-inline-dashed text-uppercase">
                    <li><?php echo $act['Actualite']['datea'];?></li>
                   <!-- <li><span>by <a href="#" class="text-primary">Sam Kromstain</a></span></li>-->
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <?php  endforeach;?>
          
         
        </div>
      </div>
    </section>
    
    