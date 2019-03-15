<?php $lang = $this->Session->read('User.language');?> 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Telecharchements</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Telecharchements</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
<div class="col-sm-6">	<h3>Telecharchements</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/telecharchements/add">
 			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
	 
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="null,select,text,select,daterange,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
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
    
	<th><?php echo ('fichier'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
<!--	<th><?php echo ('created'); ?></th>
		<!--<th class='with-checkbox'>
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
    
<!--	<th><?php echo ('usermodify'); ?></th>-->
		<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($telecharchements as $telecharchement): ?>
	<tr>
		<td><?php echo h($telecharchement['Telecharchement']['id']); ?>&nbsp;</td>
		<td><?php echo h($telecharchement['Telecharchement']['name'][$lang]); ?>&nbsp;</td>
<!--		<td><?php echo h($telecharchement['Telecharchement']['fichier']); ?>&nbsp;</td>
-->        
       <td> <?php  $fich = $this->webroot.'files/fichier/'.h($telecharchement['Telecharchement']['fichier']) ;
		$fich = 'files/fichiers/'.h($telecharchement['Telecharchement']['fichier']) ;
	 
		 if(is_file($fich)) {  ?> <img src="<?php echo $fich; ?> "width="800" height="600">  <?php } ?></td>
        <td><?php echo h($telecharchement['Telecharchement']['etat']); ?>&nbsp;</td>

		<!--<td><?php echo h($telecharchement['Telecharchement']['created']); ?>&nbsp;</td>
		<td><?php echo h($telecharchement['Telecharchement']['usercreated']); ?>&nbsp;</td>
		<td><?php echo h($telecharchement['Telecharchement']['modify']); ?>&nbsp;</td>
		<td><?php echo h($telecharchement['Telecharchement']['usermodify']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
		
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $telecharchement['Telecharchement']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $telecharchement['Telecharchement']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $telecharchement['Telecharchement']['id'])); ?>
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
 