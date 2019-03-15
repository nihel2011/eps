<?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Actualites</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  href="<?php echo $this->webroot; ?>" >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Actualites</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Actualités</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/actualites/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,select,text,text,select,daterange,text,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('fr_name'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('menu_id'); ?></th>
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
    
	<!--<th><?php echo ('position'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('datea'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('type'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('photo'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('url'); ?></th>
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
    
	<!--<th><?php echo ('usermodify'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($actualites as $actualite): ?>
	<tr>
		<!--<td><?php echo h($actualite['Actualite']['id']); ?>&nbsp;</td>-->
		<!--<td><?php echo h($actualite['Actualite']['fr_description']); ?>&nbsp;</td>
		<td><?php echo h($actualite['Actualite']['fr_resume']); ?>&nbsp;</td>-->
		<td><?php echo h($actualite['Actualite']['name'][$lang]); ?>&nbsp;</td>
	<!--	<td>
			<?php echo $this->Html->link($actualite['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $actualite['Menu']['id'])); ?>
		</td>-->
		<td><?php echo h($actualite['Actualite']['etat']); ?>&nbsp;</td>
		<td><?php echo h($actualite['Actualite']['orderm']); ?>&nbsp;</td>
		<!--<td><?php echo h($actualite['Actualite']['position']); ?>&nbsp;</td>-->
		<td><?php echo h($actualite['Actualite']['datea']); ?>&nbsp;</td>
		<!--<td><?php echo h($actualite['Actualite']['type']); ?>&nbsp;</td>-->
		<td><?php //echo h($actualite['Actualite']['photo']); ?>
          
        <?php  $phota = $this->webroot.'files/actualite/'.h($actualite['Actualite']['photo']) ;
		$photb = 'files/actualite/'.h($actualite['Actualite']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>
        
        
        &nbsp;</td>
		<!--<td><?php echo h($actualite['Actualite']['url']); ?>&nbsp;</td>-->
		<td><?php echo h($actualite['Actualite']['created']); ?>&nbsp;</td>
		<td> 
        
          <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$actualite['Actualite']['usercreated']);
		echo $userab['User']['name'];  
		?>
        
        &nbsp;</td>
		<!--<td><?php echo h($actualite['Actualite']['modify']); ?>&nbsp;</td>
		<td><?php echo h($actualite['Actualite']['usermodify']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
		 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $actualite['Actualite']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $actualite['Actualite']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $actualite['Actualite']['id'])); ?>
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
 