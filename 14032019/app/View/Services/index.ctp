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
        
        
<div class="Services-area area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<!--<div class="section-headline text-center">
							<h3><?php echo __('Our Services');?></h3>
							<p><?php echo __("The world's Latest blockchain-powered online business platform with token investment & grow your business.");?></p>
						</div>-->
					</div>
				</div>
                <div class="row">
                    <div class="services-all">
                                  <?php $m=0;
	  $tabico = array("flaticon-gear-3","flaticon-industrial-robot","flaticon-factory-1","flaticon-warehouse");
	   foreach($services as $service):
                    ?>
                    
                    
                    	<!-- single-well end-->
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="single-services text-center">
								<div class="services-img">
									<img src="<?php echo $this->webroot;?>files/services/<?php echo $service['Service']['photo'];?>" alt="">
									<div class="image-layer">
										<a href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $service['Service']['id'];?>"><i class="<?php echo $tabico[$m];?>" ></i></a>
									</div>
								</div>
								<div class="main-services">
									<div class="service-content">
										<h4><?php echo $service['Service']['name'][$lang];?></h4>
										<p><?php echo $service['Service']['resume'][$lang];?></p>
									<a class="service-btn" href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $service['Service']['id'];?>">read more</a>
									</div>
								</div>
							</div>
						</div>
						
                       <?php 
							$m++;
							   endforeach;?>
                    </div>
                </div>
            </div>
        </div>