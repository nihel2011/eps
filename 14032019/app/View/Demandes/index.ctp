
  <?php $lang = $this->Session->read('User.language');?> 

		<div class="breadcrumb-banner-area bg-img-2 bg-opacity-2 ptb-100"  style="background:url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>)">
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
        

<div class="blog-story-area pt-60 pb-30">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-sm-12">
						<div class="blog-story mb-30">
							
							
							
							<div class="contact-form">
								
                                 <?php echo $this->Flash->render(); ?>
                                 
                                 <?php echo $this->Form->create('Demande',array('url'   => array(
               'controller' => 'demandes','action' => 'view'),'type'=>'POST','id'=>'demande_form', 'class'=>'' , 'data-form-output'=>'form-output-global', 'data-form-type'=>'demande' )); ?>

        

									<label>name</label>
                            <?php echo $this->Form->input('nom',array('autocomplete'=>'off','required'=>true,'placeholder'=>__('Nom & prénom'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input'  ,'id'=>'demandet-nom') ); ?>      
									<label>Email</label>
                                    
                                    
 <?php echo $this->Form->input('email',array('type'=>'email','required'=>true,'placeholder'=>__('Email'),'label'=>false,'div'=>false,  'class'=>'form-control form-input', 'data-constraints'=>'@Email @Required' ,'id'=>'contact-email') ); ?>                  </div>
									<label>Phone</label>
<?php echo $this->Form->input('tel',array('autocomplete'=>'off','required'=>true,'type'=>'text','placeholder'=>__('Téléphone'),'label'=>false,'div'=>false,'autocomplete'=>'off','data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'demande-tel ') ); ?>


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
<!--									<textarea id="comment" rows="8" cols="45" name="comment"></textarea>
-->                                    <?php echo $this->Form->textarea('message',array('required'=>true,'placeholder'=>__('Objet'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'demande-message') ); ?>  


									<label>Comment</label>
<!--									<textarea id="comment" rows="8" cols="45" name="comment"></textarea>
-->                                    <?php echo $this->Form->textarea('message',array('required'=>true,'placeholder'=>__('Votre message'),'label'=>false,'div'=>false,'autocomplete'=>'off', 'data-constraints'=>'@Required', 'class'=>'form-control form-input' ,'id'=>'demande-message') ); ?>  

                   </div>
                   
                   
 <div class="col-sm-12" id="demandef">
                                <?php  echo $this->Html->css(captcha_layout_stylesheet_url(), array('inline' => false));
  
// display Captcha markup, wrapped in an extra div for layout purposes
echo $this->Html->div('captcha', captcha_image_html(), false);

// Captcha code user input textbox
echo $this->Form->input('CaptchaCode');?>
</div>
              
              </div>	 <div class="col-sm-12">	
              		<div class="message-button text-center pt-50">
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait..."><?php echo __('Envoyez votre message');?></button>
							</div>		</div>
             <?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>