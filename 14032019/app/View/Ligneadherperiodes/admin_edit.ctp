<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>ligneadherperiodes</h1>
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
							<a  >ligneadherperiodes</a>
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
									<i class="fa fa-list"></i>ligneadherperiodes</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Ligneadherperiode',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('id',array('id'=>'id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='adherents_id' class='control-label col-sm-2'>adherents_id:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('adherents_id',array('id'=>'adherents_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','empty'=>'-- Choisir Adherperiodes --', 'options'=>$adherent) );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='adherperiodes_id' class='control-label col-sm-2'>adherperiodes_id:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('adherperiodes_id',array('id'=>'adherperiodes_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','empty'=>'-- Choisir Adherperiodes --', 'options'=>$adherperiode) );
		echo "</div></div>"; 


$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats ,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

$type = array("A"=>"Adherent","C"=>"Comite");
		echo "<div class='form-group'>"; 
		echo "<label for='type' class='control-label col-sm-2'>type:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('type',array('options'=>$type ,'id'=>'type','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

	echo "<div class='form-group'>"; 
		echo "<label for='fonction' class='control-label col-sm-2'>fonction:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('fonction',array('id'=>'fonction','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
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