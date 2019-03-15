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
            <!-- Start contact Area -->
        <div class="map-area">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-main">
                            <div id="googleMap" style="width:100%;height:450px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3><?php echo __('Request a Contact us');?></h3>
                            <p><?php echo __('Water The universal acceptance of website has given a tremendous opportunity for merchants to do crossborder transactions instantly and at reduced cost.');?></p>
                            <div class="contact-icon">
								<div class="contact-inner">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span><?php echo $infosites['Infosite']['adresse'][$lang]; ?></span></a>
									<a href="#"><i class="fa fa-phone"></i><span><?php echo $infosites['Infosite']['fixe']; ?></span></a>
									<a href="#"><i class="fa fa-envelope"></i><span><?php echo $infosites['Infosite']['email']; ?></span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                               
                                
                                
                                 <?php echo $this->Flash->render(); ?>
            <?php echo $this->Form->create('Contact',array('url'   => array(
               'controller' => 'contacts','action' => 'view'),'type'=>'POST','id'=>'contactForm', 'class'=>'contact-form' , 'data-form-output'=>'form-output-global', 'data-form-type'=>'contact' )); ?>  					
                                
                                
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <label>Name <small>*</small></label>
                                    <?php echo $this->Form->input('nom',array('autocomplete'=>'off','required'=>true,'placeholder'=>__('Name'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input'  ,'id'=>'contact-nom') ); ?>
                                    
<!--                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
-->                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    
                                      <label>Email <small>*</small></label>
 <?php echo $this->Form->input('email',array('type'=>'email','required'=>true,'placeholder'=>__('Email'),'label'=>false,'div'=>false,  'class'=>'form-control form-input', 'data-constraints'=>'@Email @Required' ,'id'=>'email') ); ?>   
<!--                                        <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
-->                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    
                                    <label>Subject <small>*</small></label>
 <?php
								 if(!empty($devis)) $val= "demande démo"; else $val="";
								  echo $this->Form->input('sujet',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>'sujet','label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'msg_subject', 'value'=>$val) ); ?>                 
<!--                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
-->                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                      <label>Message</label>
<?php echo $this->Form->textarea('message',array('required'=>true,'rows'=>7,'cols'=>30,'placeholder'=>__('Votre message'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'message') ); ?>  
                                    
<!--                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
-->                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                     <?php  echo $this->Html->css(captcha_layout_stylesheet_url(), array('inline' => false));
  
// display Captcha markup, wrapped in an extra div for layout purposes
echo $this->Html->div('captcha', captcha_image_html(), false);

// Captcha code user input textbox
echo $this->Form->input('CaptchaCode');?>
</div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    
                                        <button type="submit" id="submit" class="contact-btn"><?php echo __('Submit');?></button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                <?php echo $this->Form->end(); ?>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start Footer bottom Area -->