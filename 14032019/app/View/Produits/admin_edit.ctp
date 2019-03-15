 <?php echo "\n".$this->Html->script('plugins/plupload/plupload.full.min.js'); ?>
  <?php echo "\n".$this->Html->script('plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js'); ?>
   <?php echo "\n".$this->Html->script('plugins/fileupload/bootstrap-fileupload.min.js'); ?>
   <div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>produits</h1>
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
							<a href="<?php echo $this->webroot; ?>admin/produits" >produits</a>
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
									<i class="fa fa-list"></i>produits</h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo $this->Form->create('Produit',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>
                            		<div class="row">
										<div class="col-sm-12">
                            	<?php
		echo "<div class='form-group'>"; 
		echo $this->Form->input('id',array('id'=>'id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );  
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='fr_name' class='control-label col-sm-2'>fr_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_name',array('id'=>'fr_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		/*echo "<div class='form-group'>"; 
		echo "<label for='an_name' class='control-label col-sm-2'>an_name:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_name',array('id'=>'an_name','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='reference' class='control-label col-sm-2'>reference:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('reference',array('id'=>'reference','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='contrat' class='control-label col-sm-2'>contrat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('contrat',array('id'=>'contrat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 
*/
		echo "<div class='form-group'>"; 
		echo "<label for='categorie_id' class='control-label col-sm-2'>categorie_id:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('categorie_id',array('id'=>'categorie_id','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off','empty'=>'-- Choisir Catégorie --', 'options'=>$categorie_id) );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='fr_resume' class='control-label col-sm-2'>fr_resume:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_resume',array('id'=>'fr_resume','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		
		echo "<div class='form-group'>"; 
		echo "<label for='fr_description' class='control-label col-sm-2'>fr_description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('fr_description',array('id'=>'fr_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 
		
		echo "<div class='form-group'>"; 
		echo "<label for='couleurs' class='control-label col-sm-2'>couleurs:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('couleurs',array('id'=>'couleurs','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		$accueils = array("Y"=>"Yes","N"=>"No");
		echo "<div class='form-group'>"; 
		echo "<label for='accueil' class='control-label col-sm-2'>accueil:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('accueil',array('options'=>$accueils,'empty'=>'-- Choisir etat --','id'=>'accueil','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		$etats = array("Y"=>"Actif","N"=>"Inactif");
		echo "<div class='form-group'>"; 
		echo "<label for='etat' class='control-label col-sm-2'>etat:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('etat',array('options'=>$etats,'empty'=>'-- Choisir etat --','id'=>'etat','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='orderm' class='control-label col-sm-2'>orderm:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('orderm',array('id'=>'orderm','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='mot_cle' class='control-label col-sm-2'>mot_cle:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('mot_cle',array('type'=>'texte','id'=>'mot_cle','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );
		echo "</div></div>"; 

		
		
		/*echo "<div class='form-group'>"; 
		echo "<label for='id_ville' class='control-label col-sm-2'>id_ville:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('id_ville',array('id'=>'id_ville','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='id_region' class='control-label col-sm-2'>id_region:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('id_region',array('id'=>'id_region','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='id_zone' class='control-label col-sm-2'>id_zone:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('id_zone',array('id'=>'id_zone','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='surface' class='control-label col-sm-2'>surface:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('surface',array('id'=>'surface','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='nb_piece' class='control-label col-sm-2'>nb_piece:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('nb_piece',array('id'=>'nb_piece','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='prix' class='control-label col-sm-2'>prix:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('prix',array('id'=>'prix','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 

		echo "<div class='form-group'>"; 
		echo "<label for='visible' class='control-label col-sm-2'>visible:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('visible',array('id'=>'visible','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; 
*/	

		echo "<div class='form-group'>"; 
		echo "<label for='photo' class='control-label col-sm-2'>photo:</label><div class='col-sm-10'>"; 
		?>
        
        <div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                                                
                                                <?php echo "<img src=".$this->webroot.'files/produits/'.$this->request->data['Produit']['photo']." style='width:90%'>"; ?>
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

		echo "<div class='form-group'>"; 
		echo "<label for='fichier_pdf' class='control-label col-sm-2'>fichier_pdf:</label><div class='col-sm-10'>"; 
		?>
		
			<div class="fileinput fileinput-new" data-provides="fileinput">
												<div class="input-group">
													<div class="form-control" data-trigger="fileinput">
														<i class="glyphicon glyphicon-file fileinput-exists"></i>
														<span class="fileinput-filename"></span>
													</div>
													<span class="input-group-addon btn btn-default btn-file">
														<span class="fileinput-new">Select file</span>
													<span class="fileinput-exists">Change</span>
													<?php	echo $this->Form->input('fichier_pdf',array('type'=>'file','id'=>'fichier_pdf','label'=>false,'div'=>false,'autocomplete'=>'off') );
													?>
													</span>
													<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
												</div>
											</div>
		<?php
		echo "</div></div>"; 

		

		/*echo "<div class='form-group'>"; 
		echo "<label for='an_description' class='control-label col-sm-2'>an_description:</label><div class='col-sm-10'>"; 
		echo $this->Form->input('an_description',array('id'=>'an_description','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );</div>
		echo "</div>"; */

		

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