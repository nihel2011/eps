  
   <?php $lang = $this->Session->read('User.language');
//echo $lang;

 ?> 
  
  
   <!-- Welcome service area start -->
        <div class="welcome-area welcome-area-2 area-padding">
            <div class="container">
				<div class="row">
					<div class="well-inner">
                    
                      <?php $m=0;
	  $tabico = array("flaticon-gear-3","flaticon-industrial-robot","flaticon-factory-1","flaticon-tanks-1");
	    
                    ?>
                     <?php foreach($services as $serv):?>
                    
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="well-services">
								<div class="well-icon">
									 <a  href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $serv['Service']['id'];?>"><i class="<?php echo $tabico[$m];?>" ></i></a>
								</div>
								<div class="well-content">
									<h4><a href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $serv['Service']['id'];?>"><?php echo $serv['Service']['name'][$lang];?></a></h4>
                                    <p><?php echo $serv['Service']['resume'][$lang];?></p>
								</div>
							</div>
						</div>
						<!-- single-well end-->
						
						
						
                        
                         <?php $m++;
							   endforeach;?>
					</div>
                </div>
            </div>
        </div>
     
        <!-- Welcome service area End -->
        <!-- Start About Area -->
         <div class="video-area bg-color area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="<?php echo $this->webroot;?>files/contenus/<?php echo $contenus['Contenus']['photo'];?>img/about/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video-text">
                           <h4><?php echo $contenus['Contenus']['title'][$lang];?></h4>
                            <p><?php echo $contenus['Contenus']['resume'][$lang];?>
                            </p>
                            
                            <!--<ul class="marker-list">
                                <li>Lares dolor sit amet.</li>
                                <li>Animi vero excepturi magnam.</li>
                                <li>ducimus adipisci voluptas.</li>
                                <li>consectetur adipisicing elit.</li>
                                <li>praesentium maxime necessitatibus.</li>
                            </ul>-->
                        </div>
                    </div>
                </div>
                <!-- end Row -->
            </div>
        </div>
        <!-- End About Area -->
      
        <!--Blog Area Start-->
        <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h3><?php echo __('Latest News');?> </h3>
							<p><?php echo __("The world's Latest blockchain-powered online business platform with token investment & grow your business.");?> </p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="blog-grid home-blog">
                    
                     <?php foreach($actualites as $actualite):?>
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                <?php  $phot = "files/actualite/".$actualite['Actualite']['photo'];
						if(is_file($phot))
						{$photoa = $phot; 
						}
						else
						{
							$photoa = "images/defaults/actualite.jpg";
						}
						 ?>
                                    <a class="image-scale" href="#">
                                        <img src="<?php echo $this->webroot; ?><?php echo $photoa;?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                               <?php echo $actualite['Actualite']['datea'];?> 
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4><?php echo $actualite['Actualite']['name'][$lang];?></h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p><?php echo $actualite['Actualite']['resume'][$lang];?></p>
                                        <a class="blog-btn" href="<?php echo $this->webroot; ?>actualites/detail/<?php echo $actualite['Actualite']['id'];?>"><?php echo __('Read more');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                        
                        <?php 
							   endforeach;?>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->
        <!-- Start Brand Area -->
        <div class="brand-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="brand-items">
                            <div class="brand-carousel item-indicator">
                            <?php foreach($references as $reference):?>
               <?php  $phot = "files/references/".$reference['Reference']['photo'];
						if(is_file($phot))
						{$photoa = $phot; 
						}
						else
						{
							$photoa = "images/defaults/reference.jpg";
						}
						 ?>
                            
                            
                                <div class="single-brand-item">
                                    <a href="<?php  if(!empty($reference['Reference']['url'])){echo $reference['Reference']['url'];}else{echo "javascript:;";}?>"><img src="<?php echo $this->webroot; ?><?php echo $photoa;?>" alt="<?php echo $reference['Reference']['name'][$lang] ; ?>"></a>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Brand Area -->
        <!-- Start Banner Area -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content text-left">
                            <h4>Are you looking for professional Services of your company</h4>
                            <div class="banner-contact-btn">
                                <a class="banner-btn" href="#">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>