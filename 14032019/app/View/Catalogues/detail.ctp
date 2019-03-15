     <?php $lang = $this->Session->read('User.language');?> 
 
    <div class="breadcrumb-banner-area bg-img-2 bg-opacity-2 ptb-100 "style="background:url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>)">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<div class="breadcrumb-menu">
								<ul>
									<li><a href="<?php echo $this->webroot;?>"><?php echo __('Accueil');?></a></li>
									<li><span><?php echo $menu['Menu']['name'];?></span></li>
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
                
               
                <h4><?php  echo $catalogue['Catalogue']['titre'][$lang];?></h4>
              <?php  print_r($souscatalogue);?>
										<div class="tab-info" id="catalogf">
                                                                            <?php foreach ($souscatalogue as $souscatalogue):?>
                            <a href="<?php echo $this->webroot; ?>souscatalogues/detail/<?php echo $souscatalogue['Souscatalogue']['id'];?>">

											 <?php echo $souscatalogue['Souscatalogue']['name'][$lang];?> 
                                           </a>
										
										   <?php 
							   endforeach;?>
                                        </div>
                
                
                
                
                
                
                
                
                

				</div>
			</div>
		</div>