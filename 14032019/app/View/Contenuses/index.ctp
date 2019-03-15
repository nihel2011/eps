
 <?php $lang = $this->Session->read('User.language');
 ?> 

 
 <div class="page-area">
            <div class="breadcumb-overlay" style="background-image: url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3><?php echo $menu['Menu']['name'][$lang];?></h3>
                            </div>
                            <ul>
                                <li class="home-bread"><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                                <li><?php echo $menu['Menu']['name'][$lang];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        

	<div class="about-page-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
							<h4><span class="color">EPS </span> <?php echo $contenuses['Contenus']['title'][$lang];?> </h4>
                        <?php echo $contenuses['Contenus']['description'][$lang];?>
                            <!--<div class="about-details text-center">
                                <div class="single-about">
                                    <div class="icon-title">
                                    	<a href="#"><i class="icon icon-checkmark-circle"></i></a>
                                        <h5>Certified company</h5>
                                    </div>
									<p>The phrasal sequence of the Lorem Ipsum text is now so widespread</p>
                                </div>
                                <div class="single-about">
                                    <div class="icon-title">
										<a href="#"><i class="icon icon-thumbs-up"></i></a>
										<h5>Our experience</h5>
                                    </div>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread</p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="<?php echo $this->webroot;?>files/contenus/<?php echo $contenuses['Contenus']['photo'];?>" alt="">
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>
        
        
      