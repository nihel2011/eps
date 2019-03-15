 <?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Catalogues</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Catalogues</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3>Catalogues</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/catalogues/add">
 			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
	 
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,text,text,text,text,text" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    
	<th><?php echo ('photo'); ?></th>
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
-->		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('datec'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('resume'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('description'); ?></th>
-->		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('titre'); ?></th>
-->			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($catalogue as $catalogue): ?>
	<tr>
		<td><?php echo h($catalogue['Catalogue']['id']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['name'][$lang]); ?>&nbsp;</td>
<!--		<td><?php echo h($catalogue['Catalogue']['photo']); ?>&nbsp;</td>
-->       <td> <?php  $phota = $this->webroot.'files/catalogues/'.h($catalogue['Catalogue']['photo']) ;
		$photb = 'files/catalogues/'.h($catalogue['Catalogue']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>&nbsp;</td>
        
        
		<td><?php echo h($catalogue['Catalogue']['etat']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['datec']); ?>&nbsp;</td>
		<td><?php echo h($catalogue['Catalogue']['resume'][$lang]); ?>&nbsp;</td>
<!--		<td><?php echo h($catalogue['Catalogue']['description'][$lang]); ?>&nbsp;</td>
-->		<td><?php echo h($catalogue['Catalogue']['titre'][$lang]); ?>&nbsp;</td>
		<td class='hidden-480'>
			
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $catalogue['Catalogue']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $catalogue['Catalogue']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $catalogue['Catalogue']['id'])); ?>
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
 