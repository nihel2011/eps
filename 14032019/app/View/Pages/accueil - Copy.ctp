<?php $lang = $this->Session->read('User.language');
//echo $lang;
 ?>
   
 <!-- Section: About Presentation -->
    <section class="">
      <div class="container">
        <div class="section-content">
          <div class="row">
              <div class="col-md-6">
<!--                  <h6 class="letter-space-4 text-gray-darkgray text-uppercase mt-0 mb-0"></h6>
-->                  <h2 class="text-uppercase font-weight-600 mt-0 font-28 line-bottom"><?php echo $contenus['Contenus']['title'][$lang];?></h2>
                  <h4 class="text-theme-colored"><?php echo $contenus['Contenus']['resume'][$lang];?></h4>
                  
                  <a class="btn btn-theme-colored btn-flat btn-lg mt-10 mb-sm-30" href="<?php echo $this->webroot;?>contenuses/detail_contenuses/<?php echo $contenus['Contenus']['id'];?>">VOIR PLUS →</a>
                </div>
            <div class="col-md-6">
                 
                    <img src="<?php echo $this->webroot;?>files/contenus/<?php echo $contenus['Contenus']['photo'];?>" class="img-fullwidth" alt="">
                   
              </div>
          </div>
        </div>
      </div>
      
    </section>

    <!-- Section: COURSES -->
    
     <!-- Section: team Actualites -->
    
    <section  class="bg-lighter">
        <div class="container">
               <div class="section-title mb-10">
                 <div class="row">
                   <div class="col-md-12">
                   </div>
                 </div>
               </div>
      
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-8">
              <h2 class="mt-0 text-uppercase font-28 line-bottom line-height-1"> <span class="text-theme-color-2 font-weight-400">Actualités</span></h2>
           </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 sm-text-center mb-sm-30">
            <?php foreach($actualites as $actualite):?>
            
              <div class="team maxwidth400">
                <div class="thumb"><img class="img-fullwidth" src="<?php echo $this->webroot; ?>files/actualite/<?php echo $actualite['Actualite']['photo'];?>" alt=""></div>
                <div class="content border-1px border-bottom-theme-color-2-2px p-15 bg-light clearfix">
                  <h4 class="name text-theme-color-2 mt-0"><small><?php echo $actualite['Actualite']['name'][$lang];?></small></h4>
                  <p class="mb-20"><?php echo $actualite['Actualite']['resume'][$lang];?></p>
                <!--  <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm pull-left flip">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>-->
                  <a class="btn btn-theme-colored btn-sm pull-right flip" href="#">view details</a>
                </div>
              </div>
              <?php 
							   endforeach;?>
            </div>
           
            
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
   
    <section id="blog">
        <div class="container">
        <div class="section-title mb-10">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 text-uppercase text-theme-colored title line-bottom line-height-1">Our<span class="text-theme-color-2 font-weight-400"> Gllery</span></h2>
            </div>
          </div>
        </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <div class="owl-carousel-3col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img src="images/blog/7.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      </div>
                    </div>
                    
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      
                      <div class="clearfix"></div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img src="images/blog/4.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      
                      <div class="clearfix"></div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix maxwidth600 mb-sm-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> <img src="images/blog/8.jpg" alt="" class="img-responsive img-fullwidth"> </div>
                      <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      </div>
                    </div>
                  </article>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  

    <!-- Section: Why Choose Us Evenement -->
    <section id="event" class="bg-lighter">
              <div class="container pb-50">

               <div class="section-title mb-10">
                 <div class="row">
                   <div class="col-md-12">
                   </div>
                 </div>
               </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-uppercase line-bottom mt-0 line-height-1"><i class="fa fa-calendar mr-10"></i>Upcoming <span class="text-theme-color-2">Events</span></h3>
              
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="images/event/2.jpg"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb mr-20"><img alt="" src="images/event/3.jpg"></a>
                <div class="post-right">
                  <h4 class="mt-0 mb-5"><a href="#">Upcoming Event Title</a></h4>
                  <ul class="list-inline font-12 mb-5">
                    <li class="pr-0"><i class="fa fa-calendar mr-5"></i> June 26, 2016 |</li>
                    <li class="pl-5"><i class="fa fa-map-marker mr-5"></i>New York</li>
                  </ul>
                  <p class="mb-0 font-13">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas eveniet, nemo dicta. Ullam nam.</p>
                  <a class="text-theme-colored font-13" href="#">Read More →</a>
                </div>
              </article>
            </div>
            <div class="col-md-6">
              <h3 class="line-bottom mt-0 line-height-1">P<span class="text-theme-color-2">UBLICATION</span></h3>
              <div id="accordion1" class="panel-group accordion">
                <div class="panel">
                  <div class="panel-title"> <a class="active" data-parent="#accordion1" data-toggle="collapse" href="#accordion11" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion11" class="panel-collapse collapse in" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion12" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title"> <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="" aria-expanded="true"> <span class="open-sub"></span> Why this Company is Best?</a> </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="true">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess.  iure poss imusven am aliquam</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: testimonials -->
    
    <!-- Section: blog -->
    

    <!-- Divider: Clients Partenaires -->
    <section class="clients bg-theme-color-2">
      <div class="container pt-10 pb-0">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center owl-nav-top">
            <?php foreach($partenaires as $partenaire):?>
              <div class="item"> <a href="#"><img src="<?php echo $this->webroot; ?>files/partenaires/<?php echo $partenaire['Partenaire']['photo'];?>" alt=""></a></div>
              <?php 
							   endforeach;?>
            </div>
          </div>
        </div>
      </div>
    </section>
