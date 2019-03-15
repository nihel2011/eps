<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>users</h1>
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
							<a  >users</a>
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
									<i class="fa fa-list"></i>users</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('User',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-6">
                            	<?php
		echo "<div class='form-group'>"; 
		echo "<label for='username' class='control-label col-sm-2'>username:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('username',array('id'=>'username','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='password' class='control-label col-sm-2'>password:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('password',array('id'=>'password','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='multimedia' class='control-label col-sm-2'>multimedia:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('multimedia',array('id'=>'multimedia','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='prenom' class='control-label col-sm-2'>prenom:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('prenom',array('id'=>'prenom','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='partenaire' class='control-label col-sm-2'>partenaire:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('partenaire',array('id'=>'partenaire','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='actualite' class='control-label col-sm-2'>actualite:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('actualite',array('id'=>'actualite','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='dictionnaire' class='control-label col-sm-2'>dictionnaire:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('dictionnaire',array('id'=>'dictionnaire','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='menu' class='control-label col-sm-2'>menu:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('menu',array('id'=>'menu','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='sous_menu' class='control-label col-sm-2'>sous_menu:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('sous_menu',array('id'=>'sous_menu','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ss_menu' class='control-label col-sm-2'>ss_menu:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('ss_menu',array('id'=>'ss_menu','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='contenu' class='control-label col-sm-2'>contenu:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('contenu',array('id'=>'contenu','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='produit' class='control-label col-sm-2'>produit:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('produit',array('id'=>'produit','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='admin' class='control-label col-sm-2'>admin:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('admin',array('id'=>'admin','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='langue' class='control-label col-sm-2'>langue:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('langue',array('id'=>'langue','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='newslettre' class='control-label col-sm-2'>newslettre:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('newslettre',array('id'=>'newslettre','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='rh' class='control-label col-sm-2'>rh:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('rh',array('id'=>'rh','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
?>

	
 </div></div>
										 
								 
									<div class="row">
										<div class="col-sm-12">
											<div class="form-actions">
                                            
                  <?php                          
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