<?php $lang = $this->Session->read('User.language');

 ?> 

<footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="<?php echo $this->webroot;?>"><img src="<?php echo $this->webroot;?>img/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>
                                       <?php  echo $infosites['Infosite']['adresse'][$lang];?>
                                    </p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list">
                                        
                                        
                                       <?php 
                                        
                                        
                                        foreach($menus as $menu):
						$active='';
						
						if($menu['Menu']['type']==1)
						{
							?>
              
                                
   <li><i class="<?php if($this->params['controller']=='pages' && $this->params['action']=='accueil') echo 'active';?>"></i><a href="<?php echo $this->webroot;?>accueil"><?php echo $menu['Menu']['name'][$lang];?></a></li>
   
   
   									  <?php }
                            if($menu['Menu']['id']==2)
						{?>
                                                    
                                                    <li><i class="<?php if($this->params['controller']=='Presentation') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>contenuses" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
								    if($menu['Menu']['id']==3)
						{?>
                        
                             <li><i class="<?php if($this->params['controller']=='service') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>services" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                <?php }
              
              
                 ?>
                                <?php endforeach;?>  
                                       
                                    </ul>
                                    <ul class="footer-list hidden-sm">
                                    
                                    
                                    <?php  foreach($menus as $menu):
						$active='';
						
						if($menu['Menu']['id']==4)
							{?>
              
                                                    <li><i class="<?php if($this->params['controller']=='reference') echo 'active';?>"></i>
							<a href="<?php echo $this->webroot;?>references" ><?php echo $menu['Menu']['name'][$lang];?></a></li>
                                
									<?php }
              
                  if($menu['Menu']['id']==5)
						{?>
                                                    
                                                    <li><i class="<?php if($this->params['controller']=='actualite') echo 'active';?>"></i>
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
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Subscribe</h4>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2019 
                                    <a href="#">SMDI</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>