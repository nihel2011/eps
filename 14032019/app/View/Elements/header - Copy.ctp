
  <?php $lang = $this->Session->read('User.language');

 ?> 



<header>
			<div class="header-top-area blue-bg hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-8">
							<ul class="header-left">
								<li class="header-middle">Open hours: 8.00-18.00 Mon-Sat</li>
								<li>
									<a href="http://facebook.com/"><i class="fa fa-facebook"></i></a>
									<a href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
									<a href="http://pinterest.com/"><i class="fa fa-pinterest-p"></i></a>
									<a href="http://linkedin.com/"><i class="fa fa-linkedin"></i></a>
									<a href="http://vimeo.com/"><i class="fa fa-youtube-square"></i></a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-4">
							<ul class="header-right">
								<li><a href="login.html"><i class="fa fa-key"></i>Login</a></li>
								<li><a href="signup.html"><i class="fa fa-lock"></i>Sign up</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2">
							<div class="logo">
								<a href="index.html"><img src="<?php echo $this->webroot; ?>img/logo/4.jpg" alt="" /></a>
							</div>
						</div>
						<div class="col-md-14 col-sm-16">
							<div class="menu-area floatright hidden-xs">
								<nav>
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
                                                    
                                <li><i class="<?php if($this->params['controller']=='societe') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>contenuses" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
								    if($menu['Menu']['id']==3)
						{?>
                        
                             <li><i class="<?php if($this->params['controller']=='service') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>services" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
              
                  if($menu['Menu']['id']==4)
						{?>
									
                                 <li><i class="<?php if($this->params['controller']=='catalogue') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>catalogues" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
              
                         
                                
                            
						if($menu['Menu']['id']==5)
							{?>
              
                                                    <li><i class="<?php if($this->params['controller']=='formation') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>formations" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                
									<?php }
              
                  if($menu['Menu']['id']==6)
						{?>
                                                    
                                                    <li><i class="<?php if($this->params['controller']=='demande') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>demandes" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
									
                                    
                                     <?php }
                      
                         if($menu['Menu']['id']==7)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='reference') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>partenaires" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                <?php } 
                                    
									 
                                       if($menu['Menu']['id']==8)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='contacts') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>contacts"><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                                                      
                      <?php } ?>
                        <?php endforeach;?> 
                                
                                
                                
                                
                                 </ul>
                                
                                
                                
									<!--<ul>
										<li><a href="index.html">Accueil </a>
										
										</li>
										<li><a href="about.html">Societe </a></li>
										<li><a href="catalogue.html">Catalogue des Formations</a></li>
										<li><a href="events.html">Formation planifier </a>
											<!--<ul class="submenu">
												<li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
												<li><a href="news-right-sidebar.html">News right Sidebar</a></li>
												<li><a href="news-details.html">news details</a></li>
											</ul>
										</li>
										<li><a href="reference.html">References </a></li>
									
										<li><a href="contact.html">Contact</a></li>
									</ul>-->
								</nav>
							</div>
							<div class="mobile-menu-area visible-xs">
								<div class="container">
									<div class="mobile-menu">
										<div id="mobile-menu">
											<nav>
                                            
                                            
                                            
                                            <!--<ul>
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
                                                    
                                                    <li><i class="<?php if($this->params['controller']=='comite') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Services" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
								    if($menu['Menu']['id']==3)
						{?>
                        
                             <li><i class="<?php if($this->params['controller']=='actualite') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Presentation" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
              
                  if($menu['Menu']['id']==4)
						{?>
									
                                 <li><i class="<?php if($this->params['controller']=='galerie') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Categories" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
              
                         
                                
                            
						if($menu['Menu']['id']==5)
							{?>
              
                                                    <li><i class="<?php if($this->params['controller']=='adherent') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Formation" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                
									<?php }
              
                  if($menu['Menu']['id']==6)
						{?>
                                                    
                                                    <li><i class="<?php if($this->params['controller']=='subvention') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Demande de formation" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
									
                                    
                                     <?php }
                      
                         if($menu['Menu']['id']==7)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='partenaire') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>Reference" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                <?php } 
                                    
									 
                                       if($menu['Menu']['id']==9)
						{?>
                                                    <li><i class="<?php if($this->params['controller']=='contacts') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>contacts"><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                                    
                                                                                      
                      <?php } ?>
                        <?php endforeach;?> 
                                
                                
                                
                                
                                 </ul>-->
                                            
                                            
												<!--<ul>
													<li><a href="index.html">Accueil</a>
													
													</li>
													<li><a href="about.html">Societe</a></li>
													<li><a href="catalogue.html">Catalogue des Formations</a></li>
													<li><a href="events.html">Formation planifier</a>
														<!--<ul class="submenu"> 
															<li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
															<li><a href="news-right-sidebar.html">News right Sidebar</a></li>
															<li><a href="news-details.html">news details</a></li>
														</ul>
													</li>
													<li><a href="reference.html">References</a></li>
													
													<li><a href="contact.html">Contact</a></li>
												</ul>-->
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>