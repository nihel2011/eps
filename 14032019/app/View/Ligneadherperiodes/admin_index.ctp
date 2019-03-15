<?php $lang = $this->Session->read('User.language');?>  
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Ligneadherperiodes</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Ligneadherperiodes</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3>Ligneadherperiodes</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/ligneadherperiodes/add">
 			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
	 
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('adherents_id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('adherperiodes_id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('orderm'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    	
    
	<th><?php echo ('type'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('fonction'); ?></th>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('usercreated'); ?></th>
-->		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('modify'); ?></th>
-->		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('usermodify'); ?></th>
-->			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($ligneadherperiodes as $ligneadherperiode): ?>
	<tr>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['id']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['adherents_id']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['adherperiodes_id']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['etat']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['orderm']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['type']); ?>&nbsp;</td>
		<td><?php echo h($ligneadherperiode['Ligneadherperiode']['fonction']); ?>&nbsp;</td>
		<td class='hidden-480'>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $ligneadherperiode['Ligneadherperiode']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $ligneadherperiode['Ligneadherperiode']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $ligneadherperiode['Ligneadherperiode']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $ligneadherperiode['Ligneadherperiode']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
  
	 
 
 
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
 