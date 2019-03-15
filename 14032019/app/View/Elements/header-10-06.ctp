 <?php $lang = $this->Session->read('User.language');

 ?> 


<div class="top-bar">
    <div class="container">
 
        <div class="topbar-info"><div><p><i class="fa fa-phone"></i>  <?php echo $infosites['Infosite']['gsm']; ?>  <i class="fa fa-map-marker"></i><?php echo $infosites['Infosite']['adresse'][$lang]; ?> </p></div></div>
        
        <strong style=" font-size:15px;"><a href="<?php echo $this->webroot;?>contenuses/change_longa/fre">Fr</a> | <a href="<?php echo $this->webroot;?>contenuses/change_longa/eng">En</a></strong>
  
    </div>
</div>

<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>images/logo/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                   
                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                        <?php 
						//debug($menus);
						foreach($menus as $menu):
						$active='';
						
						if($menu['Menu']['type']==1)
						{
							?>
							
							
                            <li class="<?php if($this->params['controller']=='pages' && $this->params['action']=='accueil') echo 'active';?>"><a href="<?php echo $this->webroot;?>pages/accueil/<?php echo $menu['Menu']['id'];?>" >
								<?php echo $menu['Menu']['name'][$lang];?> 
							</a>
                            </li>
                            <?php }
                            if($menu['Menu']['type']==2)
						{?>
							<li class="<?php if($this->params['controller']=='contenuses' && $this->params['pass'][0]==$menu['Menu']['id']) echo 'active';?>">
							<a href="<?php echo $this->webroot;?>contenuses/liste_contenu/<?php echo $menu['Menu']['id'];?>" >
								<?php echo $menu['Menu']['name'][$lang];?> 
								<!--<div class="arrow-up"><i class="fa fa-angle-down"></i></div>-->
							</a>
                            </li>
						<?php }
                            if($menu['Menu']['type']==7)
						{?>
                          
                            <li class="<?php if($this->params['controller']=='services') echo 'active';?>">
							<a href="<?php echo $this->webroot;?>services" ><?php echo $menu['Menu']['name'][$lang];?></a>
                            </li>
                            <?php }
                           if($menu['Menu']['type']==6)
						{?>
							<li class="<?php if($this->params['controller']=='references') echo 'active';?>">
							<a href="<?php echo $this->webroot;?>partenaires" >
								<?php echo $menu['Menu']['name'][$lang];?> 
								<!--<div class="arrow-up"><i class="fa fa-angle-down"></i></div>-->
							</a>
                            </li>
						<?php }
                           if($menu['Menu']['type']==5)
						{?>
							<li class="<?php if($this->params['controller']=='contacts') echo 'active';?>">
							<a href="<?php echo $this->webroot;?>contacts" >
								<?php echo $menu['Menu']['name'][$lang];?> 
								<!--<div class="arrow-up"><i class="fa fa-angle-down"></i></div>-->
							</a>
                            </li>
						<?php }?>
							
							<?php endforeach;?>
                        </ul>
                        <!--<ul class="mobile-menu clearfix">

                            <li><a href="index-2.html">home</a>
                            </li>
                            <li class="dropdown"><a href="#">about us</a>
                                <ul>
                                    <li><a href="companyo-history.html">Company History</a></li>
                                    <li><a href="feature.html">Our Features</a></li>
                                    <li><a href="leadership.html">Leadership</a></li>
                                    <li><a href="consultation.html">Free Consaltation</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="location.html">Locations</a></li>
                                    <li><a href="carrier.html">Carrier</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="all-cause.html">cases</a>
                                <ul>
                                    <li><a href="all-cause.html">all cases</a></li>
                                    <li><a href="single-cause.html">single case</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="services.html">services</a>
                                <ul>
                                    <li><a href="business-growth.html">business growth</a></li>
                                    <li><a href="audit-assurance.html">audit and assurance</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="news-event.html">News & Events</a>
                                <ul>
                                    <li><a href="news-event1.html">News & Events</a></li>
                                    <li><a href="news-details.html">News details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>-->
                    </div>
                </nav>
                <ul class="social-icon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
                
    </div>
</section>
 