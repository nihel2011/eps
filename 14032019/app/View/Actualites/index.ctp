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
        

   <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                         <?php foreach($actualites as $act): ?>
                        <!-- End single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="<?php echo $this->webroot; ?>files/actualite/<?php echo $act['Actualite']['photo'];?>" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                <?php echo $act['Actualite']['datea'];?>
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4><?php echo $act['Actualite']['name'][$lang];?></h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <?php echo $act['Actualite']['resume'][$lang];?>
                                        <a class="blog-btn" href="<?php echo $this->webroot;?>actualites/detail/<?php echo $act['Actualite']['id'];?>"><?php echo __('Read more');?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End single blog -->
                      
                      <?php endforeach;?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="blog-pagination">
							   <ul class="pagination">
								   <li><a href="#">&lt;</a></li>
								   <li class="active"><a href="#">1</a></li>
								   <li><a href="#">2</a></li>
								   <li><a href="#">3</a></li>
								   <li><a href="#">&gt;</a></li>
							   </ul>
							</div>
						</div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>