 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Categories</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a href="<?php echo $this->webroot; ?>">Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="<?php echo $this->webroot; ?>admin/categories" >Liste des Categories</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Categories</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/categories/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,text,select,select,text,null,daterange,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('fr_name'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_name'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('it_name'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('photos'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('couleurs'); ?></th>
    <th><?php echo ('parent'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('orderm'); ?></th>
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
    
	 
    
	<!--<th><?php echo ('pdf'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('famille'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('photo1'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($categories as $category):
	$cat = $this->requestAction('/categories/view/'.$category['Category']['id']);
	
 ?>
	<tr>
		<!--<td><?php echo h($category['Category']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($category['Category']['fr_name']); ?>&nbsp;</td>
		<!--<td><?php echo h($category['Category']['an_name']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['it_name']); ?>&nbsp;</td>-->
		
		<!--<td><?php echo h($category['Category']['photos']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['fr_description']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['an_description']); ?>&nbsp;</td>-->
		<td><?php echo h($category['Category']['couleurs']); ?>&nbsp;</td>
        <td><?php echo h($cat['Category']['fr_name']); ?>&nbsp;</td>
        <td><?php echo h($category['Category']['etat']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['orderm']); ?>&nbsp;</td>
        
        
        <td><?php  $phota = $this->webroot.'files/categorie/'.h($category['Category']['photo']) ;
		$photb = 'files/categorie/'.h($category['Category']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>&nbsp;</td>
		<td><?php echo h($category['Category']['created']); ?>&nbsp;</td>
		<td> 
         <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$category['Category']['usercreated']);
		echo $userab['User']['name'];  
		?>
        &nbsp;</td>
		<!--<td><?php echo h($category['Category']['modify']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['usermodify']); ?>&nbsp;</td>-->
		
		<!--<td><?php echo h($category['Category']['pdf']); ?>&nbsp;</td>
		
		<td><?php echo h($category['Category']['famille']); ?>&nbsp;</td>
		<td><?php echo h($category['Category']['photo1']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
		<!--	<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $category['Category']['id']),array('escape' => false,'class'=>'btn')); ?>-->
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $category['Category']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $category['Category']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $category['Category']['id'])); ?>
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
 