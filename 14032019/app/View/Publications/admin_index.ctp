 
   <?php $lang = $this->Session->read('User.language');?> 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Publications</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Publications</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3>Publications</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/publications/add">
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
    
	<th><?php echo ('name'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('title'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('resume'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
    
    <th><?php echo ('date'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('description'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('autheur'); ?></th>
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
    
    
<!--	<th><?php echo ('created'); ?></th>
-->		<!--<th class='with-checkbox'>
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
	<?php foreach ($publications as $publication): ?>
	<tr>
		<td><?php echo h($publication['Publication']['id']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['name'][$lang]); ?>&nbsp;</td>
  
		<td><?php echo h($publication['Publication']['title'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['resume'][$lang]); ?>&nbsp;</td>
        
        <td><?php echo h($publication['Publication']['date']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['description'][$lang]); ?>&nbsp;</td>
  
		<td><?php echo h($publication['Publication']['autheur'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['etat']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['orderm']); ?>&nbsp;</td>
<!--		<td><?php echo h($publication['Publication']['created']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['usercreated']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['modify']); ?>&nbsp;</td>
		<td><?php echo h($publication['Publication']['usermodify']); ?>&nbsp;</td>
-->		<td class='hidden-480'>
        
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $publication['Publication']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $publication['Publication']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $publication['Publication']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $publication['Publication']['id'])); ?>
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
 