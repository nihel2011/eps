 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>

<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>comites</h1>
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
							<a  >comites</a>
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
									<i class="fa fa-list"></i>comites</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Comite',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('id',array('id'=>'id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		foreach(Configure::read('Config.languages') as $lang)
		 {

		echo "<div class='form-group'>"; 
		echo "<label for='titre' class='control-label col-sm-2'>titre(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.titre.'.$lang,array('id'=>'titre','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		 }
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
		echo $this->Form->input('Comite.fonction.'.$lang,array('id'=>'fonction','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		 }
		/*echo "<div class='form-group'>"; 
		echo "<label for='groupe_l' class='control-label col-sm-2'>groupe_l:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('groupe_l',array('id'=>'groupe_l','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; */

		echo "<div class='form-group'>"; 
		echo "<label for='grade_id' class='control-label col-sm-2'>grade_id:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('grade_id',array('id'=>'grade_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off' ,'empty'=>'-- Choisir Grade --', 'options'=>$grade_id) );
		echo "</div></div>"; 


foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='departement' class='control-label col-sm-2'>departement(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.departement.'.$lang,array('id'=>'departement','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='faculte' class='control-label col-sm-2'>faculte(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.faculte.'.$lang,array('id'=>'faculte','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='university' class='control-label col-sm-2'>university(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.university.'.$lang,array('id'=>'university','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='adresse' class='control-label col-sm-2'>adresse(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.adresse.'.$lang,array('id'=>'adresse','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }

		echo "<div class='form-group'>"; 
		echo "<label for='code_postal' class='control-label col-sm-2'>code_postal:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('code_postal',array('id'=>'code_postal','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='pays_id' class='control-label col-sm-2'>pays_id:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('pays_id',array('id'=>'pays_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";*/ 

foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='ville' class='control-label col-sm-2'>ville(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.ville.'.$lang,array('id'=>'ville','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
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

		echo "<div class='form-group'>"; 
		echo "<label for='mpar' class='control-label col-sm-2'>mpar:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('mpar',array('id'=>'mpar','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='cv' class='control-label col-sm-2'>cv(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Comite.cv.'.$lang,array('id'=>'cv','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		 }
$etats = array("A"=>"Attente","V"=>"Valider","C"=>"Confirmer","D"=>"Desactiver");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ran' class='control-label col-sm-2'>ran:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('ran',array('id'=>'ran','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label>"; 
		echo " <div class='col-sm-10'>"; 
//		echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		
		?>
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                
                                                <?php echo "<img src=".$this->webroot.'files/comites/'.$this->request->data['Comites']['photo']." style='width:90%'>"; ?>
                                                </div>
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

		

	/*	echo "<div class='form-group'>"; 
		echo "<label for='interest' class='control-label col-sm-2'>interest:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('interest',array('id'=>'interest','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; */

	
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