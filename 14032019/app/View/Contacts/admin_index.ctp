 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Contacts</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
				<a href="<?php echo $this->webroot; ?>" >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Contacts</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
		<div class="col-sm-6">	<h3>Contact</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/contacts/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null, text,text,text,text,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('nom'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('tel'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('email'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('sujet'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('statut'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('nbr_salarie'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('type_msg'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('etat'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('created'); ?></th>
	<!--	<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('usercreated'); ?></th>
		<th class='with-checkbox'>
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
    
	<!--<th><?php echo ('message'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('client'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>
    
	<th><?php echo ('nom_socite'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo h($contact['Contact']['id']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['nom']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['tel']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['email']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['sujet']); ?>&nbsp;</td>
        <td><?php echo h($contact['Contact']['created']); ?>&nbsp;</td>
		<!--<td><?php echo h($contact['Contact']['statut']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['nbr_salarie']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['type_msg']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['etat']); ?>&nbsp;</td>
		
		<td><?php echo h($contact['Contact']['usercreated']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['modify']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['usermodify']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['message']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['client']); ?>&nbsp;</td>
		<td><?php echo h($contact['Contact']['nom_socite']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
			 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $contact['Contact']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $contact['Contact']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $contact['Contact']['id'])); ?>
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
 