 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Image Contenus</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Images Contenus</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
		<div class="col-sm-6">	<h3>Images Contenus</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/ImageContenuses/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,null,select,select,daterange,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('namep'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('photo'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
    	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('defau'); ?></th>
    
	<!--<th><?php echo ('contenu_id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('created'); ?></th>
	<!--	<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('usercreated'); ?></th>
	<!--	<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('modify'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('usermodify'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    

			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($imageContenuses as $imageContenus): ?>
	<tr>
		<!--<td><?php echo h($imageContenus['ImageContenus']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($imageContenus['ImageContenus']['namep']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['photo']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['contenu_id']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['created']); ?>&nbsp;</td>
        <td><?php echo h($imageContenus['ImageContenus']['etat']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['defau']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['usercreated']); ?>&nbsp;</td>
		<!--<td><?php echo h($imageContenus['ImageContenus']['modify']); ?>&nbsp;</td>
		<td><?php echo h($imageContenus['ImageContenus']['usermodify']); ?>&nbsp;</td>-->
		
		<td class='hidden-480'>
			<!--<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $imageContenus['ImageContenus']['id']),array('escape' => false,'class'=>'btn')); ?>-->
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $imageContenus['ImageContenus']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $imageContenus['ImageContenus']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $imageContenus['ImageContenus']['id'])); ?>
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
 