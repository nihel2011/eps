 <?php $lang = $this->Session->read('User.language');

// debug($menus);
 ?> 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Tarifs</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a href="<?php echo $this->webroot;?>admin"   >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
        	<li>
			<a href="<?php echo $this->webroot;?>admin/services/"  >Services</a>
			<i class="fa fa-angle-right"></i>
		</li>
        
		<li>
			<a  >Liste des Tarifs</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Tarif</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/tarifs/add/<?php echo $service_id;?>">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,select,text,null,daterange,select,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    	<th><?php echo ('tarife'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('service_id'); ?></th>
		<th class='with-checkbox'>
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
    
	<th><?php echo ('photo'); ?></th>
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
    
	 
</tr>
</thead>
<tbody>
	<?php foreach ($tarifs as $tarif): ?>
	<tr>
		<td><?php echo h($tarif['Tarif']['id']); ?>&nbsp;</td>
	 
		<td><?php echo h($tarif['Tarif']['name'][$lang]); ?>&nbsp;</td>
        <td><?php echo h($tarif['Tarif']['tarife']); ?>&nbsp;</td>
	<!--	<td>
			<?php echo $this->Html->link($tarif['Service']['name'], array('controller' => 'services', 'action' => 'view', $tarif['Service']['id'])); ?>
		</td>-->
		<td><?php echo h($tarif['Tarif']['etat']); ?>&nbsp;</td>
		<td><?php echo h($tarif['Tarif']['orderm']); ?>&nbsp;</td>
		<td><?php echo h($tarif['Tarif']['photo']); ?>&nbsp;</td>
		<td><?php echo h($tarif['Tarif']['created']); ?>&nbsp;</td>
		<td><?php echo h($tarif['Tarif']['usercreated']); ?>&nbsp;</td>
		 
		<td class='hidden-480'>
			
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $tarif['Tarif']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $tarif['Tarif']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $tarif['Tarif']['id'])); ?>
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
 