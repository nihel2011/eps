
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


<div class="project-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- Start Portfolio -page -->
					<!--<div class="awesome-project fix">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu text-center">
								<ul class="project-menu">
									<li><a href="#" class="active" data-filter="*" ><?php echo __('All');?></a></li>
                                <?php foreach($first_names as $first_names):
			   
			   ?> 
									<li><a href="#" data-filter=".<?php echo $first_names['Reference']['catpar_name'];?>"><?php echo $first_names['Reference']['catpar_name'];?></a></li>
                                     <?php endforeach; ?>
									
								</ul>				
							</div>
						</div>
					</div>-->
                    <div class="project-content">
                        <!-- single-awesome-project start -->
                           <?php   foreach($references as $reference):?> 
                        <div class="col-md-3 col-sm-6 col-xs-12  <?php echo $reference['Reference']['catpar_name'];?>">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a href="#">
                                        <img src="<?php echo $this->webroot; ?>files/references/<?php echo $reference['Reference']['photo'];?>" alt="" />
                                    </a>
                                    <div class="add-actions">
                                        <a class="venobox" data-gall="myGallery" href="<?php echo $this->webroot; ?>files/references/<?php echo $reference['Reference']['photo'];?>">
                                            <i class="port-icon icon icon-picture"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-dec">
                                    <h4><a href="#"> <?php echo $reference['Reference']['name'][$lang];?></a></h4>
                                </div>
                            </div>
                        </div>
                        
                        <?php endforeach; ?>
                    </div>		
                </div>	
            </div>
            <!-- End main content -->
        </div>