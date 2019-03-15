 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>
  <?php   ?>
    <div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>activites</h1>
					</div>
					<!--<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#">
									<i class="fa fa-cogs"></i>
								</a>
							</li>
							<li class='lightgrey'>
								<a href="#">
									<i class="fa fa-globe"></i>
								</a>
							</li>
						</ul>
						<!--<ul class="stats">
							<li class='satgreen'>
								<i class="fa fa-money"></i>
								<div class="details">
									<span class="big">$324,12</span>
									<span>Balance</span>
								</div>
							</li>
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
								</div>
							</li>
						</ul> 
					</div>-->
				</div>
				<div class="breadcrumbs">
					<ul>
						<li>
							<a href="<?php echo $this->webroot;?>admin/"> Accueil</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo $this->webroot;?>admin/activites/" >Activités</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a ></a>
						</li>
					</ul>
					<!--<div class="close-bread">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>-->
				</div>
				 
                 
                 <div class="row">
					<div class="col-sm-12">
						<div class="box">
							<div class="box-title">
								<h3>
									<i class="fa fa-list"></i>Activites</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Activite',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php 	foreach(Configure::read('Config.languages') as $lang)
		 {
		
		echo "<div class='form-group'>"; 
		echo "<label for='titre' class='control-label col-sm-2'>titre(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Activite.titre.'.$lang,array('id'=>'titre','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		  
		
		echo "<div class='form-group'>"; 
		echo "<label for='Activites.description' class='control-label col-sm-2'>description(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Activite.description.'.$lang,array('id'=>'description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		  
		echo "<div class='form-group'>"; 
		echo "<label for='Activites.resume' class='control-label col-sm-2'>resume(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Activite.resume.'.$lang,array('id'=>'resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }
		echo "<div class='form-group'>"; 
		echo "<label for='image' class='control-label col-sm-2'>image:</label>"; 
		echo " <div class='col-sm-10'>"; 
		?> 
		<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
												<div>
													<span class="btn btn-default btn-file">
														<span class="fileinput-new">Select image</span>
													<span class="fileinput-exists">Change</span>
												<?php 	echo $this->Form->input('image',array('type'=>'file','id'=>'image','label'=>false,'div'=>false,'autocomplete'=>'off') );?>
													</span>
													<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
												</div>
											</div>
											
											<?php 
		echo "</div></div>"; 

$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>";
		echo $this->Form->input('etat',array('options'=>$etats ,'id'=>'Etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') ); 
		 echo "</div></div>"; 

		 

		 

	
		echo "</div></div>"; 

		echo "<div class='row'>"; 

		echo "<div class='col-sm-12'>"; 

		echo "<div class='form-actions'>"; 

		echo "<div class='row'>"; 
		echo "<div class='col-sm-12'>"; 
		echo "<div class='form-actions'>"; 
		echo "<button type='submit' class='btn btn-primary'>Save changes</button>"; 
		echo "&nbsp;<button type='button' class='btn'>Cancel</button>"; 
		echo "</div>"; 
		echo "</div>"; 
		echo "</div>"; 
	?>
<?php echo $this->Form->end(); ?>
							</div>
						</div>
					</div>
				</div>
				  </div></div></div></div>