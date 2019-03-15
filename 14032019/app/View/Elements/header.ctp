
  <?php $lang = $this->Session->read('User.language');

 ?> 




<header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-10 col-sm-9">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-map-marker"></i><?php  echo $infosites['Infosite']['adresse'][$lang];?></a></li>
                                  <!--  <li class="hidden-sm"><a href="#"><i class="fa fa-clock-o"></i> Mon - Fri: 10:00 - 18:00</a></li>-->
                                    <li><a href="#"><i class="fa fa-envelope"></i> <?php  echo $infosites['Infosite']['email'];?></a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> <?php  echo $infosites['Infosite']['fixe'];?></a></li>
                                </ul>  
                            </div>
                        </div>
                     <!--   <div class="col-md-2 col-sm-3">
                            <div class="quote-button">
								<a href="contact.html" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">Get a quote</a>
							</div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area header-area-4 hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="<?php echo $this->webroot;?>">
                                    <img src="<?php echo $this->webroot; ?>img/logo/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start -->
                                
                                
                                
                                
                                <?php echo $this->Flash->render(); ?>
            <?php /*?><?php echo $this->Form->create('Contact',array('url'   => array(
               'controller' => 'contacts','action' => 'view'),'type'=>'POST','id'=>'contact_form', 'class'=>'' , 'data-form-output'=>'form-output-global', 'data-form-type'=>'contact' )); ?> <?php */?>
                                
                                
                                    <div class="search-option">
         <?php echo $this->Form->input(array('autocomplete'=>'off','required'=>true,'placeholder'=>__('Search...'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input'  ,'id'=>'contact-nom') ); ?>  
                                       
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                <?php echo $this->Form->end(); ?>
                                <!-- search option end -->
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                        
                                        
                                        
                                        
                                                  <?php 
						//debug($menus);
						foreach($menus as $menu):
						$active='';
						
						if($menu['Menu']['type']==1)
						{
							?>
              
                                        
                                        
                                               
   <li><i class="<?php if($this->params['controller']=='pages' && $this->params['action']=='accueil') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>accueil"><?php echo $menu['Menu']['name'][$lang];?></a></li>
   
   
   									  <?php }
                                        
                                            if($menu['Menu']['id']==2)
						{?>
                                        
                                        
                                                   <li><i class="<?php if($this->params['controller']=='Présentation') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>contenuses" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
								    if($menu['Menu']['id']==3)
						{?>
											
                                            <li><i class="<?php if($this->params['controller']=='Services') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>services" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                         <?php }
                      
                       if($menu['Menu']['id']==4)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='Réferences') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>references" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                    
                                                    
                                                     <?php }
											
											
											   if($menu['Menu']['id']==5)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='actualites') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>actualites" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php } 
                                    
									 
                                       if($menu['Menu']['id']==6)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='contacts') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>contacts"><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                                                      
                      <?php } ?>
                        <?php endforeach;?> 
                                
                                
											
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="<?php echo $this->webroot; ?>">
                                     <img src="<?php echo $this->webroot; ?>img/logo/logo.png" alt="">

                                    </a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                                                       <?php 
						//debug($menus);
						foreach($menus as $menu):
						$active='';
						
						if($menu['Menu']['type']==1)
						{
							?>
              
                                        
                                        
                                               
   <li><i class="<?php if($this->params['controller']=='pages' && $this->params['action']=='accueil') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>accueil"><?php echo $menu['Menu']['name'][$lang];?></a></li>
   
   
   									  <?php }
                                        
                                            if($menu['Menu']['id']==2)
						{?>
                                        
                                        
                                                   <li><i class="<?php if($this->params['controller']=='Présentation') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>contenuses" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
								    if($menu['Menu']['id']==3)
						{?>
											
                                            <li><i class="<?php if($this->params['controller']=='Services') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>services" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                         <?php }
                      
                       if($menu['Menu']['id']==4)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='references') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>references" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                    
                                                    
                                                     <?php }
											
											
											   if($menu['Menu']['id']==5)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='actualites') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>actualites" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php } 
                                    
									 
                                       if($menu['Menu']['id']==6)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='contacts') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>contacts"><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                                                      
                      <?php } ?>
                        <?php endforeach;?> 
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>