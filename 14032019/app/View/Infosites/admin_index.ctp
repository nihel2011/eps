 <?php $lang = $this->Session->read('User.language');

// debug($menus);
 ?>

<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Infosites</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  href="<?php echo $this->webroot; ?>" >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a >Liste des Infosites</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Info site</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/infosites/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,text,text,text,text,select,daterange,text,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('email'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('fixe'); ?></th>
    	<th><?php echo ('fax'); ?></th>
    	<th><?php echo ('gsm'); ?></th>
	
	<th><?php echo ('siteweb'); ?></th>
    <th><?php echo ('etat'); ?></th>
    	<!--<th><?php echo ('fr_adresse'); ?></th><th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_adresse'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    

		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('name'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_responsable'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('ar_responsable'); ?></th>
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
    
	<!--<th><?php echo ('photo'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    

		<!--<th class='with-checkbox'><th><?php echo ('maps'); ?></th>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($infosites as $infosite): ?>
	<tr>
		<td><?php echo h($infosite['Infosite']['id']); ?>&nbsp;</td>
		<td><?php echo h($infosite['Infosite']['email']); ?>&nbsp;</td>
		<!--<td><?php echo h($infosite['Infosite']['fr_adresse']); ?>&nbsp;</td>
		<td><?php echo h($infosite['Infosite']['an_adresse']); ?>&nbsp;</td>-->
		<td><?php echo h($infosite['Infosite']['fixe']); ?>&nbsp;</td>
        	<td><?php echo h($infosite['Infosite']['fax']); ?>&nbsp;</td>
		<td><?php echo h($infosite['Infosite']['gsm']); ?>&nbsp;</td>
		<!--<td><?php echo h($infosite['Infosite']['name']); ?>&nbsp;</td>-->
		<td><?php echo h($infosite['Infosite']['siteweb']); ?>&nbsp;</td>
        <td><?php echo h($infosite['Infosite']['etat']); ?>&nbsp;</td>
		<!--<td><?php echo h($infosite['Infosite']['fr_responsable']); ?>&nbsp;</td>
		<td><?php echo h($infosite['Infosite']['ar_responsable']); ?>&nbsp;</td>-->
		<td><?php echo h($infosite['Infosite']['created']); 
		
		?>&nbsp;</td>
		<td><?php //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$infosite['Infosite']['usercreated']);
		echo $userab['User']['name']; ?>
		
		  &nbsp;</td>
		<!--<td><?php echo h($infosite['Infosite']['modify']); ?>&nbsp;</td>
		<td><?php echo h($infosite['Infosite']['usermodify']); ?>&nbsp;</td>
		
		<td><?php echo h($infosite['Infosite']['photo']); ?>&nbsp;</td>
	
		<td><?php echo h($infosite['Infosite']['maps']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
		 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $infosite['Infosite']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $infosite['Infosite']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $infosite['Infosite']['id'])); ?>
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
 