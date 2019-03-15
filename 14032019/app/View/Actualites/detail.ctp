<?php $lang = $this->Session->read('User.language');
 ?> 

 
 <div class="page-area">
            <div class="breadcumb-overlay" style="background-image: url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3><?php echo $menu['Menu']['name'];?></h3>
                            </div>
                            <ul>
                                <li class="home-bread"><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
                                <li><?php echo $menu['Menu']['name'];?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


<div class="blog-page-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="blog-details">
                        <!-- Start single blog -->
                        <div class="col-md-8 col-sm-8 col-xs-12">
                           <!-- single-blog start -->
                            <article class="blog-post-wrapper">
                                <div class="blog-banner">
                                    <a href="#" class="blog-images">
                                        <img src="<?php echo $this->webroot; ?>files/actualite/<?php echo $actualites['Actualite']['photo'];?>" alt="">
                                    </a>
                                    <div class="blog-content">
                                        <div class="blog-meta">
											<span class="date-type">
												<?php echo $actualites['Actualite']['datea'];?>
											</span>
										</div>
                                        <a href="#"><h4><?php echo $actualites['Actualite']['name'];?></h4></a>
                                        <p><?php echo $actualites['Actualite']['description'];?></p>
                                    </div>
                                </div>
                            </article>
                            <div class="clear"></div>
                            
                            <!-- single-blog end -->
                        </div>
                    </div>
                    <!-- End main column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="left-head-blog">
							
							
							<div class="left-blog-page">
								<!-- recent start -->
								<div class="left-blog">
									<h4><?php echo __('recent post');?></h4>
									<div class="recent-post">
										<!-- start single post -->
                                        <?php foreach($actualites as $act): ?>
										<div class="recent-single-post">
											<div class="post-img">
												<a href="#">
													<img src="<?php echo $this->webroot; ?>files/actualite/<?php echo $act['Actualite']['photo'];?>" alt="">
												</a>
											</div>
											<div class="pst-content">
												<p><a href="#"><?php echo $act['Actualite']['name'][$lang];?></a></p>
												<span class="date-type">
													<?php echo $act['Actualite']['datea'];?>
												</span>
											</div>
										</div>
                                         <?php endforeach;?>
										<!-- End single post -->
										
									
									</div>
								</div>
								<!-- recent end -->
							</div>
							
						</div>
					</div>
					<!-- End left sidebar -->
                </div>
                <!-- End row -->
            </div>
        </div>