     <?php $lang = $this->Session->read('User.language');?> 
 
    <div class="breadcrumb-banner-area bg-img-2 bg-opacity-2 ptb-100 "style="background:url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
									<li><span><?php echo $menu['Menu']['name'][$lang];?></span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="teacher-area gray-bg pt-40 pb-20">
			<div class="container">
				
				<div class="row">
                
<!--                                	<div class="testimonial-active owl-carousel">
-->                                    
                                    <?php foreach ($catalogue as $catalogue):?>

					<div class="col-md-4 col-sm-4">
						<div class="single-teacher mb-30">
							<div class="teacher-img">
								<a href="<?php echo $this->webroot; ?>catalogues/detail/<?php echo $catalogue['Catalogue']['id'];?>"><img src="<?php echo $this->webroot; ?>img/teacher/<?php echo $catalogue['Catalogue']['photo'];?>" alt="" /></a>
							</div>
							<div class="teacher-text text-center">
                            <a href="<?php echo $this->webroot; ?>catalogues/detail/<?php echo $catalogue['Catalogue']['id'];?>">
								<h4><?php echo $catalogue['Catalogue']['name'][$lang];?></h4>
								</a>
							</div>
						</div>
					</div>
                    
                    
                    <?php 
							   endforeach;?>
					
                    <!--</div>-->
				</div>
			</div>
		</div>