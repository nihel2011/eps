 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>
     
<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>categories</h1>
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
							<a href="<?php echo $this->webroot; ?>"> Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="<?php echo $this->webroot; ?>admin/categories">categories</a>
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
									<i class="fa fa-list"></i>categories</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Category',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo "<label for='fr_name' class='control-label col-sm-2'>fr_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_name',array('id'=>'fr_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='an_name' class='control-label col-sm-2'>an_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_name',array('id'=>'an_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='it_name' class='control-label col-sm-2'>it_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('it_name',array('id'=>'it_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 
*/

		/*echo "<div class='form-group'>"; 
		echo "<label for='photos' class='control-label col-sm-2'>photos:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photos',array('id'=>'photos','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; */


 	echo "<div class='form-group'>"; 
		echo "<label for='fr_resume' class='control-label col-sm-2'>Résumé:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_resume',array('id'=>'fr_resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>";  
		echo "<div class='form-group'>"; 
		echo "<label for='fr_description' class='control-label col-sm-2'>Description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_description',array('id'=>'fr_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		
		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label><div class='col-sm-10'>"; 
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

	

		echo "<div class='form-group'>"; 
		echo "<label for='couleurs' class='control-label col-sm-2'>couleurs:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('couleurs',array('id'=>'couleurs','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','readonly'=>'readonly' ) );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='usercreated' class='control-label col-sm-2'>usercreated:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usercreated',array('id'=>'usercreated','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='modify' class='control-label col-sm-2'>modify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('modify',array('id'=>'modify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='usermodify' class='control-label col-sm-2'>usermodify:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('usermodify',array('id'=>'usermodify','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; */
$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats ,'id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='pdf' class='control-label col-sm-2'>pdf:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('pdf',array('id'=>'pdf','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; */

		echo "<div class='form-group'>"; 
		echo "<label for='parent' class='control-label col-sm-2'>parent:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('parent',array('id'=>'parent','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','empty'=>'-- Choisir parent --', 'options'=>$categorie_id) );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='famille' class='control-label col-sm-2'>famille:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('famille',array('id'=>'famille','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='photo1' class='control-label col-sm-2'>photo1:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('photo1',array('id'=>'photo1','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
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
                  
                  
                  
 <script>

    var picker = new CP(document.querySelector('#couleurs'));

    picker.on("change", function(color) { 
        this.target.value = '#' + color;
       // document.body.style.backgroundColor = '#' + color;
    });

   
  
    </script>