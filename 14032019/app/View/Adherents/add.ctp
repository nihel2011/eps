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
									<i class="fa fa-list"></i>adherents</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Adherent',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo "<label for='titre' class='control-label col-sm-2'>titre:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('titre',array('id'=>'titre','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
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
		echo "<label for='fonction' class='control-label col-sm-2'>fonction:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('fonction',array('id'=>'fonction','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='groupe_l' class='control-label col-sm-2'>groupe_l:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('groupe_l',array('id'=>'groupe_l','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='grade' class='control-label col-sm-2'>grade:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('grade',array('id'=>'grade','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='departement' class='control-label col-sm-2'>departement:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('departement',array('id'=>'departement','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='faculte' class='control-label col-sm-2'>faculte:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('faculte',array('id'=>'faculte','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='university' class='control-label col-sm-2'>university:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('university',array('id'=>'university','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='adresse' class='control-label col-sm-2'>adresse:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('adresse',array('id'=>'adresse','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

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

		echo "<div class='form-group'>"; 
		echo "<label for='ville' class='control-label col-sm-2'>ville:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('ville',array('id'=>'ville','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

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

		echo "<div class='form-group'>"; 
		echo "<label for='cv' class='control-label col-sm-2'>cv:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('cv',array('id'=>'cv','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ran' class='control-label col-sm-2'>ran:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('ran',array('id'=>'ran','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usercreated' class='control-label col-sm-2'>usercreated:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('usercreated',array('id'=>'usercreated','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='modify' class='control-label col-sm-2'>modify:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('modify',array('id'=>'modify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usermodify' class='control-label col-sm-2'>usermodify:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('usermodify',array('id'=>'usermodify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='interest' class='control-label col-sm-2'>interest:</label>"; 
		echo " <div class='col-sm-10'>"; 
		echo $this->Form->input('interest',array('id'=>'interest','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
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