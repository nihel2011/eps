<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>contenuses</h1>
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
							<a  >contenuses</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a >Modifier</a>
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
									<i class="fa fa-list"></i>contenuses</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Contenus',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-6">
                            	<?php
		echo "<div class='form-group'>"; 
		echo $this->Form->input('id',array('id'=>'id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_description' class='control-label col-sm-2'>fr_description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_description',array('id'=>'fr_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ar_description' class='control-label col-sm-2'>ar_description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('ar_description',array('id'=>'ar_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_description' class='control-label col-sm-2'>an_description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_description',array('id'=>'an_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
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
		echo "<label for='position' class='control-label col-sm-2'>position:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('position',array('id'=>'position','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_title' class='control-label col-sm-2'>fr_title:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_title',array('id'=>'fr_title','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ar_title' class='control-label col-sm-2'>ar_title:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('ar_title',array('id'=>'ar_title','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_title' class='control-label col-sm-2'>an_title:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_title',array('id'=>'an_title','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='menu_id' class='control-label col-sm-2'>menu_id:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('menu_id',array('id'=>'menu_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='image' class='control-label col-sm-2'>image:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('image',array('id'=>'image','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='url' class='control-label col-sm-2'>url:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('url',array('id'=>'url','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='an_resume' class='control-label col-sm-2'>an_resume:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_resume',array('id'=>'an_resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='ar_resume' class='control-label col-sm-2'>ar_resume:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('ar_resume',array('id'=>'ar_resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_resume' class='control-label col-sm-2'>fr_resume:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_resume',array('id'=>'fr_resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photo',array('id'=>'photo','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='mot_cle' class='control-label col-sm-2'>mot_cle:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('mot_cle',array('id'=>'mot_cle','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
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