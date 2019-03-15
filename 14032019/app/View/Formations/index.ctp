 <?php $lang = $this->Session->read('User.language');?> 


	<div class="breadcrumb-banner-area bg-img-2 bg-opacity-2 ptb-100"style="background:url(<?php echo $this->webroot;?>files/menus/<?php echo $menu['Menu']['photo'];?>)">
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
        
        
        <!--<div class="events-area pt-80 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="single-events mb-30">
							<div class="events-img">
								<a href="events-details.html"><img src="img/events/1.jpg" alt="" /></a>
							</div>
							<div class="events-date">
								<span>22</span>
								Mar
							</div>
							<div class="event-content">
								<h3>National Level Management Fest</h3>
								<p>But I must explain to you how all this mistaken idea of denouncing plesure and praising pain was born and I will give you a complete account of th stem,... </p>
							</div>
							<div class="event-footer">
								<span class="event-time"><i class="fa fa-clock-o"></i>10:20 AM</span>
								<span class="e-comment-view"><i class="fa fa-map-marker"></i>Mirpur,Dhaka</span>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>-->
        
        <div class="events-area pt-40 pb-20">
			<div class="container">

				<div class="row">
               
                                    <?php foreach ($formation as $formation):?>
					<div class="col-md-4 col-sm-6">
						<div class="single-events mb-30">
							<div class="events-img">
								<img src="<?php echo $this->webroot; ?>files/formation/<?php echo $formation['Formation']['photo'];?>" alt="" />
							</div>
							<div class="events-date">
								<span> <?php echo $formation['Formation']['datef'];?></span>

								
							</div>
							<div class="event-content">
									<h3><?php echo $formation['Formation']['name'][$lang];?></h3>
								<p><?php echo $formation['Formation']['resume'][$lang];?></p>
                <span class="arrow">	
                    <a  href="<?php echo $this->webroot; ?>formations/detail/<?php echo $formation['Formation']['id'];?>">
						<?php echo __('VOIR PLUS');?>
                    </a>
                </span>
							</div>
							
						</div>
					</div>
                    
                    <?php 
							   endforeach;?>
					
				</div>
                
                
			</div>
		</div>
        