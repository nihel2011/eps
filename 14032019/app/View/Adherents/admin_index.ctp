 <?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Adherents</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Adherents</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3>Adherents</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/adherents/add">
 			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
	 
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,text,text,text " data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    
	<th><?php echo ('prenom'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('fonction'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
 
    
	<th><?php echo ('grade'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('departement'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('faculte'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('university'); ?></th>
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
    
 
    
 
    
	<th><?php echo ('etat'); ?></th>
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
    
	<!--<th><?php echo ('interest'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($adherents as $adherent): ?>
	<tr>
		<td><?php echo h($adherent['Adherent']['id']); ?>&nbsp;</td>
 
		<td><?php echo h($adherent['Adherent']['nom']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['fonction'][$lang]); ?>&nbsp;</td>
<!--		<td><?php echo h($adherent['Adherent']['groupe_l']); ?>&nbsp;</td>
-->		<td><?php echo h($adherent['Adherent']['grade']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['departement'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['faculte'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['university'][$lang]); ?>&nbsp;</td>
		 
	 
	 
	 
		<td><?php echo h($adherent['Adherent']['tel']); ?>&nbsp;</td>
	 
		<td><?php echo h($adherent['Adherent']['email']); ?>&nbsp;</td>
		 
		<td><?php echo h($adherent['Adherent']['etat']); ?>&nbsp;</td>
		 
		<!--<td><?php echo h($adherent['Adherent']['photo']); ?>&nbsp;</td>-->
        
         <td> 
        <?php  $phota = $this->webroot.'files/adherents/'.h($adherent['Adherent']['photo']) ;
		$photb = 'files/adherents/'.h($adherent['Adherent']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>&nbsp;</td>
<!--		<td><?php echo h($adherent['Adherent']['created']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['usercreated']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['modify']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['usermodify']); ?>&nbsp;</td>
		<td><?php echo h($adherent['Adherent']['interest']); ?>&nbsp;</td>
-->		<td class='hidden-480'>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-search'></i>"), array('action' => 'view', $adherent['Adherent']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $adherent['Adherent']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $adherent['Adherent']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $adherent['Adherent']['id'])); ?>
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
 