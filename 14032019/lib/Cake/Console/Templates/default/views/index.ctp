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
		<h1><?php echo ucfirst($pluralVar); ?></h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des <?php echo ucfirst($pluralVar); ?></a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3><?php echo ucfirst($pluralVar); ?></h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot.'admin/'.$singularHumanName.'/add' ?>">
 			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
	 
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
<?php foreach ($fields as $field): ?>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo "<?php echo ('{$field}'); ?>"; ?></th>
	<?php endforeach; ?>
		<th class="actions"><?php echo "<?php echo __('Actions'); ?>"; ?></th>
</tr>
</thead>
<tbody>
	<?php
	echo "<?php foreach (\${$pluralVar} as \${$singularVar}): ?>\n";
	echo "\t<tr>\n";
		foreach ($fields as $field) {
			$isKey = false;
			if (!empty($associations['belongsTo'])) {
				foreach ($associations['belongsTo'] as $alias => $details) {
					if ($field === $details['foreignKey']) {
						$isKey = true;
						echo "\t\t<td>\n\t\t\t<?php echo \$this->Html->link(\${$singularVar}['{$alias}']['{$details['displayField']}'], array('controller' => '{$details['controller']}', 'action' => 'view', \${$singularVar}['{$alias}']['{$details['primaryKey']}'])); ?>\n\t\t</td>\n";
						break;
					}
				}
			}
			if ($isKey !== true) {
				echo "\t\t<td><?php echo h(\${$singularVar}['{$modelClass}']['{$field}']); ?>&nbsp;</td>\n";
			}
		}
echo "\t\t<td class='hidden-480'>\n";
			 
                      echo "\t\t\t<?php echo \"&nbsp;\".\$this->Html->link(__(\"<i class='fa fa-search'></i>\"), array('action' => 'view', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape' => false,'class'=>'btn')); ?>\n";
                      echo "\t\t\t<?php echo \"&nbsp;\".\$this->Html->link(__(\"<i class='fa fa-edit'></i>\"), array('action' => 'edit', \${$singularVar}['{$modelClass}']['{$primaryKey}']),array('escape' => false,'class'=>'btn')); ?>\n";
                      echo "\t\t\t<?php echo \"&nbsp;\".\$this->Form->postLink(__(\"<i class='fa fa-times'></i>\"), array('action' => 'delete', \${$singularVar}['{$modelClass}']['{$primaryKey}']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', \${$singularVar}['{$modelClass}']['{$primaryKey}'])); ?>\n";
		 
		echo "\t\t</td>\n";
	echo "\t</tr>\n";

	echo "<?php endforeach; ?>\n";
	?>
  
	 
 
 
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
 