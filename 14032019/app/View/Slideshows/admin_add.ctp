 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>
   
   <div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>slideshows</h1>
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
							<a href="<?php echo $this->webroot;?>admin/Slideshows/" >slideshows</a>
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
									<i class="fa fa-list"></i>slideshows</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Slideshow',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
								foreach(Configure::read('Config.languages') as $lang)
								{
		echo "<div class='form-group'>"; 
		echo "<label for='name' class='control-label col-sm-2'>name(".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Slideshow.name.'.$lang,array('id'=>'name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
								}

$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats, 'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='usercreated' class='control-label col-sm-2'>usercreated:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usercreated',array('id'=>'usercreated','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='modify' class='control-label col-sm-2'>modify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('modify',array('id'=>'modify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usermodify' class='control-label col-sm-2'>usermodify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usermodify',array('id'=>'usermodify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; */

		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo 1920/650:</label><div class='col-sm-10'>"; 
	?> 
		<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
												<div>
													<span class="btn btn-default btn-file">
														<span class="fileinput-new">Select image</span>
													<span class="fileinput-exists">Change</span>
												<?php 	echo $this->Form->input('photo',array('type'=>'file','id'=>'photo','label'=>false,'div'=>false,'autocomplete'=>'off') );?>
													</span>
													<a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
												</div>
											</div>
											
											<?php
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='photo1' class='control-label col-sm-2'>photo1:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photo1',array('id'=>'photo1','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='id_prod' class='control-label col-sm-2'>id_prod:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('id_prod',array('id'=>'id_prod','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') ); 
		echo "</div></div>"; 
*/
		
foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='' class='control-label col-sm-2'>Text(".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Slideshow.text.'.$lang,array('type' => 'textarea','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		 }
		 echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='fr_text2' class='control-label col-sm-2'>fr_text2:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_text2',array('id'=>'fr_text2','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_text3' class='control-label col-sm-2'>fr_text3:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_text3',array('id'=>'fr_text3','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_text4' class='control-label col-sm-2'>fr_text4:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_text4',array('id'=>'fr_text4','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_text1' class='control-label col-sm-2'>an_text1:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_text1',array('id'=>'an_text1','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_text2' class='control-label col-sm-2'>an_text2:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_text2',array('id'=>'an_text2','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_text3' class='control-label col-sm-2'>an_text3:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_text3',array('id'=>'an_text3','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_text4' class='control-label col-sm-2'>an_text4:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_text4',array('id'=>'an_text4','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; */
		echo "<div class='form-group'>"; 
		echo "<label for='titrelien' class='control-label col-sm-2'>Titre Lien:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('titrelien',array('id'=>'titrelien','type'=>'texte','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='lien' class='control-label col-sm-2'>lien:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('lien',array('id'=>'lien','type'=>'text','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='position' class='control-label col-sm-2'>position:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('position',array('id'=>'position','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
*/
	
		echo "</div></div>"; 

		echo "<div class='row'>"; 

		echo "<div class='col-sm-12'>"; 

		echo "<div class='form-actions'>"; 

		echo "<div class='row'>"; 
		echo "<div class='col-sm-12'>"; 
		echo "<div class='form-actions'>"; 
		echo "<button type='submit' class='btn btn-primary'>Save changes</button>"; 
		echo "&nbsp;<button type='reset' class='btn'>Cancel</button>"; 
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