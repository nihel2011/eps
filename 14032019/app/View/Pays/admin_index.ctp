 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Pays</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Pays</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	<div class="close-bread">
		<a href="#">
			<i class="fa fa-times"></i>
		</a>
	</div>
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<h3>
		Pays	</h3>
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
    
	<th><?php echo ('name'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('created'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('usercreated'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('modify'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('usermodify'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('etat'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($pays as $pay): ?>
	<tr>
		<td><?php echo h($pay['Pay']['id']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['name']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['created']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['usercreated']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['modify']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['usermodify']); ?>&nbsp;</td>
		<td><?php echo h($pay['Pay']['etat']); ?>&nbsp;</td>
		<td class='hidden-480'>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $pay['Pay']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $pay['Pay']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $pay['Pay']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $pay['Pay']['id'])); ?>
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
 