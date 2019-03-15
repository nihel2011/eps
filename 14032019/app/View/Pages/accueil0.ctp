 <?php $lang = $this->Session->read('User.language');

 ?> 
<section class="service sec-padd2">
    <div class="container">
        <div class="section-title center">
            <!--<h5>We are determind to fulfill our services</h5>-->
            <h1> <?php echo __('Nos services');?></h1>
            <span class="decor"></span>
           <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>-->
        </div>
        <div class="row">
         <div class="service-carousel">
         <?php foreach($services as $service):?>
            <article class="">
                <div class="item center">
                    <div class="icon-holder hexagon">
                        <i class="icon-chart"></i>
                    </div>
                    <a href="<?php echo $this->webroot;?>services/detail_service/<?php echo $service['Service']['id'];?>"><h4><?php echo $service['Service']['name'][$lang];?></h4></a>
                   <?php echo $service['Service']['resume'][$lang];?>
                   <a href="<?php echo $this->webroot;?>services/detail_service/<?php echo $service['Service']['id'];?>" class="thm-btn"><?php echo __('Lire la suite');?></a>

                </div>
            </article>
           <?php endforeach;?>
            </div>
        </div>
    </div>
</section>



</section>

<section class="call-out">
    <div class="container">
        <div class="content clearfix">
            <div class="float_left">
                <h2><?php echo __('Voulez-vous consulter notre consultant?');?></h2>
            </div>            

            <div class="float_right"><a href="<?php echo $this->webroot;?>contacts" class="thm-btn"> <?php echo __('Contactez-nous');?><i class="fa fa-sort-desc"></i></a></div>
        </div>
    </div>
</section>

<section class="default-section sec-padd60" style="background:#eee">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12  ">
                <div class="section-title">
                    <h1><?php echo $contenus['Contenus']['title'][$lang];?></h1>
                </div>
                <div class="col-md-4 col-sm-12">
                 <div class="img-box">
                            <a href="#"><img src="<?php echo $this->webroot;?>files/contenus/<?php echo $contenus['Contenus']['photo'];?>" alt=""></a>
                        </div>
                        
                        </div>
                  <div class="col-md-8 col-sm-12">      
                <div class="content">
                   <?php echo $contenus['Contenus']['resume'][$lang];?>
                </div>
                 <div style="text-align:right; margin-top:10px;"> <a href="<?php echo $this->webroot;?>contenuses/liste_contenu/2" class="thm-btn"><?php echo __('Lire la suite');?></a></div>
                </div>
                 
            </div>
             
        </div>
            
    </div>
</section>

<?php /*?><section class="fact-counter bg-style1" style="background-image: url(images/background/1.jpg);">
    <div class="container">
        <div class="row clearfix">
            <div class="counter-outer clearfix">
                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer hexagon"><i class="fa fa-tasks"></i><br><span class="count-text" data-speed="3000" data-stop="150">0</span></div>
                        <h4 class="counter-title">Projets réussis</h4>
                    </div>
                        
                </article>
                
                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer hexagon"><i class="fa fa-users"></i><br><span class="count-text" data-speed="3000" data-stop="28">0</span></div>
                        <h4 class="counter-title">Expert Consultant</h4>
                    </div>
                </article>
                
                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer hexagon"><i class="fa fa-trophy"></i><br><span class="count-text" data-speed="3000" data-stop="25">0</span></div>
                        <h4 class="counter-title">Prix gagnants</h4>
                    </div>
                </article>
                
                <!--Column-->
                <article class="column counter-column col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="0ms">
                    <div class="item">
                        <div class="count-outer hexagon"><i class="fa fa-graduation-cap"></i><br><span class="count-text" data-speed="3000" data-stop="5">0</span></div>
                        <h4 class="counter-title">Expérience d'année</h4>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section><?php */?>



<?php /*?><section class="brand-logo sec-padd1a">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="partner-column">
                    <div class="section-title">
                        <h1>Nos réferences</h1>
                        <span class="decor"></span>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur amet   <br>incididunt ut labore et dolore.</p>-->
                    </div>
                    <ul class="brand-carousel">
                    <?php foreach($references as $ref):
					?>
                        <li><a href="#"><img src="<?php echo $this->webroot;?>files/references/<?php echo $ref['Reference']['photo'];?>" alt=""></a></li>
                        <?php endforeach;?>
                  </ul>
                </div>
            </div>
             
        </div>
    </div>
</section><?php */?>