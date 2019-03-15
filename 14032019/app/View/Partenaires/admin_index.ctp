  <?php $lang = $this->Session->read('User.language');

// debug($menus);
 ?>
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Partenaires</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Partenaires</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Partenaires</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/partenaires/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,select,null,daterange,select,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    
	<!--<th><?php echo ('id_secteur'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('etat'); ?></th>
    <th><?php echo ('photo'); ?></th>
	<th><?php echo ('created'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('usercreated'); ?></th>
		<!--<th class='with-checkbox'>
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
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('defau'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($partenaires as $partenaire): ?>
	<tr>
		<td><?php echo h($partenaire['Partenaire']['id']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['name'][$lang]); ?>&nbsp;</td>
		 <td><?php echo h($partenaire['Partenaire']['etat']); ?>&nbsp;</td>
		 
		 <td>
         <?php  $phota = $this->webroot.'files/partenaires/'.h($partenaire['Partenaire']['photo']) ;
		$photb = 'files/partenaires/'.h($partenaire['Partenaire']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>
        
        
        
        &nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['created']); ?>&nbsp;</td>
		<td><?php echo h($partenaire['Partenaire']['usercreated']); ?>&nbsp;</td>
	 
		
		 
		<td class='hidden-480'>
			 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $partenaire['Partenaire']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $partenaire['Partenaire']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $partenaire['Partenaire']['id'])); ?>
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
 