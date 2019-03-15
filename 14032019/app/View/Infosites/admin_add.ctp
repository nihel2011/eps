<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>infosites</h1>
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
							<a href="<?php echo $this->webroot; ?>"> Accueil</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a   href="<?php echo $this->webroot; ?>admin/infosites">infosites</a>
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
									<i class="fa fa-list"></i>infosites</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Infosite',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo "<label for='email' class='control-label col-sm-2'>email:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('email',array('id'=>'email','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='fixe' class='control-label col-sm-2'>fixe:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fixe',array('id'=>'fixe','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='fax' class='control-label col-sm-2'>fax:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fax',array('id'=>'fax','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='gsm' class='control-label col-sm-2'>gsm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('gsm',array('id'=>'gsm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		
		echo "<div class='form-group'>"; 
		echo "<label for='siteweb' class='control-label col-sm-2'>siteweb:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('siteweb',array('id'=>'siteweb','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";
		
		$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='fr_responsable' class='control-label col-sm-2'>Responsable:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_responsable',array('type'=>'text','id'=>'fr_responsable','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		foreach(Configure::read('Config.languages') as $lang)
								{
		echo "<div class='form-group'>"; 
		echo "<label  class='control-label col-sm-2'>adresse (".$lang."):</label><div class='col-sm-10'>"; 
		echo $this->Form->input('Infosite.adresse.'.$lang,array('type'=>'text','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
								}

		echo "<div class='form-group'>"; 
		echo "<label for='maps' class='control-label col-sm-2'>maps:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('maps',array('id'=>'maps','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
	/*	echo "<div class='form-group'>"; 
		echo "<label for='an_adresse' class='control-label col-sm-2'>an_adresse:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_adresse',array('id'=>'an_adresse','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		

		 

		echo "<div class='form-group'>"; 
		echo "<label for='name' class='control-label col-sm-2'>name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('name',array('id'=>'name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 
		echo "<div class='form-group'>"; 
		echo "<label for='ar_responsable' class='control-label col-sm-2'>ar_responsable:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('ar_responsable',array('id'=>'ar_responsable','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

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
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 
*/
		
		

	
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