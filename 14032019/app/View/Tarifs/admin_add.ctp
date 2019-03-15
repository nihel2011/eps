 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?><div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>tarifs</h1>
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
							<a> Accueil</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a  >tarifs</a>
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
									<i class="fa fa-list"></i>tarifs</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Tarif',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
                                
									foreach(Configure::read('Config.languages') as $lang)
		 {
								echo "<div class='form-group'>"; 
	 
		
		
			echo "<div class='form-group'>"; 
		echo "<label  class='control-label col-sm-2'>name (".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Tarif.name.'.$lang, array('class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label  class='control-label col-sm-2'>resume (".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Tarif.resume.'.$lang,array('type'=>'textarea','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label class='control-label col-sm-2'>description (".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Tarif.description.'.$lang,array('type'=>'textarea','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		
		
		

	  }
	  
	  echo "<div class='form-group'>"; 
		echo "<label for='tarife' class='control-label col-sm-2'>Tarif:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('tarife',array('id'=>'tarife','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
	  
		echo $this->Form->input('service_id',array('type'=>'hidden', 'value'=>"$service_id",'id'=>'service_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		 
$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats ,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		
		echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
 
	 	$poplars = array("Y"=>"oui","N"=>"non");

		echo "<div class='form-group'>"; 
		echo "<label for='poplars' class='control-label col-sm-2'>populars:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('poplars',array('options'=>$poplars ,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','empty'=>'Select') );
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