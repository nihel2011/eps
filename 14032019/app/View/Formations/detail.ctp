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
    
 
		<div class="event-details-area pt-80 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm12">
						<div class="single-details mb-30">
							<div class="details-img">
								<img src="<?php echo $this->webroot; ?>files/formation/<?php echo $formations['Formation']['photo'];?>" alt="" />
							</div>
							<div class="event-info">
								<h3><?php echo $formations['Formation']['titre'][$lang];?></h3><br>
							</div>
							<div class="event-details">
								<h4 class="nav-title">Event Details</h4>
								<div class="row">
									<div class="col-md-6">
										
										<div class="organizer">
											
											<!--<h4>Description</h4>-->
											<p><?php echo $formations['Formation']['description'][$lang];?></p>
											<h4>Date:  </h4>
											<p><?php echo $formations['Formation']['datef'];?></p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="organizer">
											<h4>Location </h4>
											<p> <?php echo $infosites['Infosite']['adresse'][$lang]; ?></p>
											<h4>Phone</h4>
											<p><?php echo $infosites['Infosite']['fixe']; ?></p>
											<h4>Email</h4>
											<p><?php echo $infosites['Infosite']['email']; ?></p>

										</div>
									</div>
								</div>
							</div>
							<!-- map -->
							<div id="map"></div>
						</div>
					</div>
					<div class="col-md-3 mb-30 col-sm-12">
						<div class="sidebar-widget">
						<h5 class="sidebar-title">Demande de Participation</h5>
 <?php echo $this->Flash->render(); ?>
            <?php echo $this->Form->create('Demande',array('url'   => array(
               'controller' => 'demandes','action' => 'view'),'type'=>'POST','id'=>'contact_form', 'class'=>'' , 'data-form-output'=>'form-output-global', 'data-form-type'=>'demande' )); ?>  					

        

									<label>name</label>
                            <?php echo $this->Form->input('nom',array('autocomplete'=>'off','required'=>true,'placeholder'=>__('Nom & prénom'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input'  ,'id'=>'contact-nom') ); ?>      
									<label>Email</label>
                                    
                                    
 <?php echo $this->Form->input('email',array('type'=>'email','required'=>true,'placeholder'=>__('Email'),'label'=>false,'div'=>false,  'class'=>'form-control form-input', 'data-constraints'=>'@Email @Required' ,'id'=>'contact-email') ); ?>                 
									<label>Phone</label>
<?php echo $this->Form->input('tel',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Téléphone'),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-tel ') ); ?>

									<label>Societe</label>
<!--									<textarea id="comment" rows="8" cols="45" name="comment"></textarea> -->
<?php echo $this->Form->input('societe',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Societe'),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-societe ') ); ?>


									<label>Nombre</label>
<?php echo $this->Form->input('nombre',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Nombre de personnes '),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-nombre ') ); ?>
 									<label>Formation</label>
 <?php echo $this->Form->input('id_formation',array('class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off' ,'empty'=>'-- Choisir Formation --', 'options'=>$id_formation) ); ?>
 
									<label>Autre formation </label>
<?php echo $this->Form->input('autre',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Autre Formation'),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-autre ') ); ?>
							
									<label>Objet</label>
<!--									<textarea id="comment" rows="8" cols="45" name="comment"></textarea> -->
<?php echo $this->Form->input('objet',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Objet'),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-tel ') ); ?>


									<label>Comment</label>
<!--									<textarea id="comment" rows="8" cols="45" name="comment"></textarea>
-->                                    <?php echo $this->Form->textarea('message',array('required'=>true,'placeholder'=>__('Votre message'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'contact-message') ); ?>  



 <div class="col-sm-12" id="demandef">
                                <?php  echo $this->Html->css(captcha_layout_stylesheet_url(), array('inline' => false));
  
// display Captcha markup, wrapped in an extra div for layout purposes
echo $this->Html->div('captcha', captcha_image_html(), false);

// Captcha code user input textbox
echo $this->Form->input('CaptchaCode');?>
</div>


              		<div class="message-button text-center pt-50">

                   
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait..."><?php echo __('Envoyez votre message');?></button></div>
             <?php echo $this->Form->end(); ?>
             
						</div>
						<!--<div class="sidebar-widget">
							<h5 class="sidebar-title">Categories</h5>
							<ul class="sidebar-link">
								<li><a href="#">Class Room</a></li>
								<li><a href="#">Convocation</a></li>
								<li><a href="#">Facility</a></li>
								<li><a href="#">library</a></li>
								<li><a href="#">library</a></li>
							</ul>
						</div>-->
						<!--<div class="sidebar-widget">
							<h5 class="sidebar-title">Recent Posts</h5>
							<ul class="widget">
								<li class="widget-bottom">
									<div class="widget-img">
										<a href="news-details.html"><img src="img/blog/7.jpg" alt="" /></a>
									</div>
									<div class="widget-title">
										<h4><a href="#">Publishing and graphic desi</a></h4>
										<span>11 Comment </span>
										<span class="commentsm"><i class="fa fa-calendar"></i>March 6, 2017</span>
									</div>
								</li>
								<li class="widget-bottom">
									<div class="widget-img">
										<a href="news-details.html"><img src="img/blog/8.jpg" alt="" /></a>
									</div>
									<div class="widget-title">
										<h4><a href="news-details.html">variation of the ordinary lor</a></h4>
										<span>9 Comment </span>
										<span class="commentsm"><i class="fa fa-calendar"></i>March 6, 2017</span>
									</div>
								</li>
							</ul>
						</div>-->						
					</div>
				</div>
			</div>
		</div>
		
		