 <?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Services</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  href="<?php echo $this->webroot;?>admin/contenuses/" >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  href="<?php echo $this->webroot;?>admin/services/" >Liste des Services</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Services</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/services/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,select,select,null,text,daterange,text,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    
	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('parent'); ?></th>
	
    
	<!--<th><?php echo ('modify'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('usermodify'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('photo'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id_contenu'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('orderm'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('description'); ?></th>
		<th class='with-checkbox'>
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
	
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($services as $service): ?>
	<tr>
		<td><?php echo h($service['Service']['id']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['name'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['etat']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['parent']); ?>&nbsp;</td>
	<!--	<td><?php echo h($service['Service']['modify']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['usermodify']); ?>&nbsp;</td>-->
		<td><?php /*echo h($service['Service']['photo']); */?>&nbsp;
        
          <?php  $phota = $this->webroot.'files/services/'.h($service['Service']['photo']) ;
		$photb = 'files/services/'.h($service['Service']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>
        
        </td>
	<!--	<td><?php echo h($service['Service']['id_contenu']); ?>&nbsp;</td>-->
		<td><?php echo h($service['Service']['orderm']); ?>&nbsp;</td>
	<!--	<td><?php echo h($service['Service']['resume']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['description']); ?>&nbsp;</td>-->
		
        <td><?php echo h($service['Service']['created']); ?>&nbsp;</td>
		<td><?php echo h($service['Service']['usercreated']); ?>&nbsp;</td>
		<td class='hidden-480'>
		 <?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-photo'></i>"), array('controller'=>'tarifs','action' => 'index', $service['Service']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $service['Service']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $service['Service']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $service['Service']['id'])); ?>
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
 