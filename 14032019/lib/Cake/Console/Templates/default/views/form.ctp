<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1><?php echo $pluralVar; ?></h1>
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
							<a  ><?php echo $pluralVar; ?></a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a ><?php if($action=='add') echo "Ajouter"; elseif($action=='edit') echo "Modifier"; ?></a>
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
									<i class="fa fa-list"></i><?php echo $pluralVar; ?></h3>
							</div>
							<div class="box-content nopadding">
                            <?php echo "<?php echo \$this->Form->create('{$modelClass}',array('type'=>'file','role'=>'form','class'=>'form-horizontal form-column form-bordered')); ?>\n"; ?>
                            		<div class="row">
										<div class="col-sm-12">
                            <?php
		echo "\t<?php\n";
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field === $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
							   echo "\t\techo \"<div class='form-group'>\"; \n";
                                
                               if($field != 'id') echo "\t\techo \"<label for='{$field}' class='control-label col-sm-2'>{$field}:</label>\"; \n";
							   
							  echo "\t\techo \" <div class='col-sm-10'>\"; \n";
                               echo "\t\techo \$this->Form->input('{$field}',array('id'=>'{$field}','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );\n";
                               
                               echo "\t\techo \"</div></div>\"; \n\n";
			}
		} 
		
		echo "\t\n";
		
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				
				   echo "\t\techo \"<div class='form-group'>\"; \n";
                                
                               if($field != 'id') echo "\t\techo \"<label for='{$assocName}' class='control-label col-sm-2'>{$assocName}:</label>\"; \n";
							   echo "\t\techo \"<div class='col-sm-10'>\"; \n";
                               echo "\t\techo \$this->Form->input('{$assocName}',array('id'=>'{$assocName}','class'=>'form-control','label'=>false,'div'=>false,'autocomplete'=>'off') );\n";
                               
                               echo "\t\techo \"</div>\"; \n\n";
				
				 
			}
		}
		
		  echo "\t\techo \"</div></div>\"; \n\n";
										 
								 echo "\t\techo \"<div class='row'>\"; \n\n";
									echo "\t\techo \"<div class='col-sm-12'>\"; \n\n";
									echo "\t\techo \"<div class='form-actions'>\"; \n\n";	
											
                                     echo "\t\techo \"<div class='row'>\"; \n";
                echo "\t\techo \"<div class='col-sm-12'>\"; \n";
				   echo "\t\techo \"<div class='form-actions'>\"; \n";
                    echo "\t\techo \"<button type='submit' class='btn btn-primary'>Save changes</button>\"; \n";
                    echo "\t\techo \"&nbsp;<button type='button' class='btn'>Cancel</button>\"; \n";  
                    //echo "\t\techo \$this->Form->input('',array('label'=>false,'type'=>'submit','div'=>false,'class'=>'btn btn-success') );\n";
                    //echo "\t\techo \$this->Form->input('',array('label'=>false,'type'=>'reset','div'=>false,'class'=>'btn btn-danger') );\n";
                echo "\t\techo \"</div>\"; \n";
                echo "\t\techo \"</div>\"; \n";
                echo "\t\techo \"</div>\"; \n";
                echo "\t?>\n";
                                            
							                 
	echo "<?php echo \$this->Form->end(); ?>\n";
?>
							</div>
						</div>
					</div>
				</div>
				  </div></div></div></div>