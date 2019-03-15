<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>imageprods</h1>
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
							<a  >imageprods</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a >Ajouter</a>
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
									<i class="fa fa-list"></i>imageprods</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Imageprod',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-6">
                            	<?php
		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_name' class='control-label col-sm-2'>fr_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_name',array('id'=>'fr_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usercreated' class='control-label col-sm-2'>usercreated:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usercreated',array('id'=>'usercreated','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='modify' class='control-label col-sm-2'>modify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('modify',array('id'=>'modify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usermodify' class='control-label col-sm-2'>usermodify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usermodify',array('id'=>'usermodify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='defau' class='control-label col-sm-2'>defau:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('defau',array('id'=>'defau','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='produit_id' class='control-label col-sm-2'>produit_id:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('produit_id',array('id'=>'produit_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

	
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