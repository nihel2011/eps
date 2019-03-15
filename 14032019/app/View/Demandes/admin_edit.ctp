 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>

<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>demandes</h1>
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
							<a href="<?php echo $this->webroot;?>admin/demandes/" >Demandes</a>
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
									<i class="fa fa-list"></i>demandes</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Demande',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('id',array('id'=>'id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

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

		echo "<div class='form-group'>"; 
		echo "<label for='mail' class='control-label col-sm-2'>mail:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('mail',array('id'=>'mail','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='tel' class='control-label col-sm-2'>tel:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('tel',array('id'=>'tel','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		
		
							foreach(Configure::read('Config.languages') as $lang)
		 {
echo "<div class='form-group'>"; 
		echo "<label for='objet' class='control-label col-sm-2'>objet(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Demande.objet.'.$lang,array('id'=>'objet','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='message' class='control-label col-sm-2'>message(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Demande.message.'.$lang,array('type'=>'textarea','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		 
		
	
		  echo "<div class='form-group'>"; 
		echo "<label for='societe' class='control-label col-sm-2'>societe(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Demande.societe.'.$lang,array('class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		}
		echo "<div class='form-group'>"; 
		echo "<label for='nombre' class='control-label col-sm-2'>nombre:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('nombre',array('class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		
							foreach(Configure::read('Config.languages') as $lang)
		 {
		echo "<div class='form-group'>"; 
		echo "<label for='autre' class='control-label col-sm-2'>autre(".$lang."):</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('Demande.autre.'.$lang,array('class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		
	
		 }
		echo "<div class='form-group'>"; 
		echo "<label for='id_formation' class='control-label col-sm-2'>id_formation:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('id_formation',array('id'=>'id_formation','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off' ,'empty'=>'-- Choisir Formation --', 'options'=>$id_formation) );
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