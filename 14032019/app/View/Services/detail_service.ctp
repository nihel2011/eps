
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
<div class="single-services-page area-padding">
            <div class="container">
                <div class="row">


<div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="page-head-left">
                           <!-- strat single area -->
                            <!--<div class="single-page-head">
                                <div class="left-menu">
                                    <ul>
                                    
                                    <li class="active"><a href="#">Industry</a></li>
                                <?php     foreach($service2 as $service2): ?>
                                        
                                        
                                        <li><a href="<?php echo $this->webroot; ?>services/detail_service/<?php echo $service2['Service']['id'];?>"><?php echo $service2['Service']['name'][$lang];?> </a></li>
                                      <?php 
							
							   endforeach;?>
                                    </ul>
                                </div>
                            </div>-->
                            <!--<div class="single-page-head">
                                <div class="download-btn">
                                    <h4>Download</h4>
                                    <div class="about-btn">
										<a href="#" class="down-btn"><i class="fa fa-file-pdf-o"></i>Business.PDF</a>
										<a href="#" class="down-btn"><i class="fa fa-file-word-o"></i>Consultant.DOC</a>
									</div>
                                </div>
                            </div>-->
                            <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="support-text">
									<h4><?php echo __('Online Support');?></h4>
									<a><i class="icon icon-phone"></i><?php echo $infosites['Infosite']['fixe']; ?></a>
									<?php echo __('24 hours online support our customer.replacing a multi-lined selection of text');?>
								</div>
                            </div>
                        </div>
                    </div>



<div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                 <?php  $phot = "files/services/".$service['Service']['photo'];
						if(is_file($phot))
						{$photoa = $phot; 
						
						}
						else
						{
							$photoa = "images/defaults/client.jpg";
						}
						 ?>
                                    <div class="page-img">
                                        <img src="<?php echo $this->webroot;?><?php echo  $photoa ;?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <h3><?php echo $service['Service']['name'][$lang];?></h3>
                                    </a>
                                   <?php echo $service['Service']['description'][$lang];?>
                                </div>
                            </div>
                        </div>
		</div>
        </div>
        </div>
        </div>
       