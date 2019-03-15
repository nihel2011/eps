 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>


<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>adherents</h1>
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
							<a> Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a  >adherents</a>
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
									<i class="fa fa-list"></i>adherents</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Adherent',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
								
								/*foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='titre' class='control-label col-sm-2'>titre(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.titre.'.$lang,array('id'=>'titre','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }*/
		echo "<div class='form-group'>"; 
		echo "<label for='nom' class='control-label col-sm-2'>nom:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('nom',array('id'=>'nom','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='prenom' class='control-label col-sm-2'>prenom:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('prenom',array('id'=>'prenom','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
	foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='fonction' class='control-label col-sm-2'>fonction(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.fonction.'.$lang,array('id'=>'fonction','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }
		
		echo "<div class='form-group'>"; 
		echo "<label for='grade' class='control-label col-sm-2'>grade:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('grade',array('id'=>'grade','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off' ,'empty'=>'-- Choisir Grade --', 'options'=>$grade_id) );
		echo "</div></div>"; 
	foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='departement' class='control-label col-sm-2'>departement(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.departement.'.$lang,array('id'=>'departement','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='faculte' class='control-label col-sm-2'>faculte(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.faculte.'.$lang,array('id'=>'faculte','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='university' class='control-label col-sm-2'>university(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.university.'.$lang,array('id'=>'university','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='adresse' class='control-label col-sm-2'>adresse(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.adresse.'.$lang,array('id'=>'adresse','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }
		echo "<div class='form-group'>"; 
		echo "<label for='code_postal' class='control-label col-sm-2'>code_postal:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('code_postal',array('id'=>'code_postal','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='pays' class='control-label col-sm-2'>pays:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('pays',array('id'=>'pays','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 


					foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='ville' class='control-label col-sm-2'>ville(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.ville.'.$lang,array('id'=>'ville','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }
		echo "<div class='form-group'>"; 
		echo "<label for='tel' class='control-label col-sm-2'>tel:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('tel',array('id'=>'tel','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fax' class='control-label col-sm-2'>fax:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('fax',array('id'=>'fax','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='email' class='control-label col-sm-2'>email:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('email',array('id'=>'email','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='password' class='control-label col-sm-2'>password:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('password',array('id'=>'password','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		 


					foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='cv' class='control-label col-sm-2'>cv(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Adherent.cv.'.$lang,array('id'=>'cv','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		 }
$etats = array("A"=>"Attente","V"=>"Valider","C"=>"Confirmer","D"=>"Desactiver");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

	 



		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label>"; 
		echo " <div class='col-sm-10'>"; 
		//echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		
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