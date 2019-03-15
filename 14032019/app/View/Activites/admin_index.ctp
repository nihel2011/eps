 <?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Activites</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  href="<?php echo $this->webroot; ?>" >Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Activites</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Activités</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/activites/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,null,text,select,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('titre'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('Date'); ?></th>
    
	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('image'); ?></th>
	<!--	<th class='with-checkbox'>
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
	</th>
    
	<th><?php echo ('usermodify'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($activites as $activite): ?>
	<tr>
		<!--<td><?php echo h($activite['Activite']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($activite['Activite']['titre'][$lang]); ?>&nbsp;</td>
	<!--	<td><?php echo h($activite['Activite']['description']); ?>&nbsp;</td>
		<td><?php echo h($activite['Activite']['resume']); ?>&nbsp;</td>
		<td><?php echo h($activite['Activite']['image']); ?>&nbsp;</td>-->
        <td><?php echo h($activite['Activite']['datea']); ?>&nbsp;</td>
		<td><?php echo h($activite['Activite']['etat']); ?>&nbsp;</td>
        <td> 
        <?php  $phota = $this->webroot.'files/activite/'.h($activite['Activite']['image']) ;
		$photb = 'files/activite/'.h($activite['Activite']['image']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>&nbsp;</td>
		<td><?php echo h($activite['Activite']['created']); ?>&nbsp;</td>
		<td> <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$activite['Activite']['usercreated']);
		echo $userab['User']['name'];  
		?>&nbsp;</td>
		<!--<td><?php echo h($activite['Activite']['modify']); ?>&nbsp;</td>
		<td><?php echo h($activite['Activite']['usermodify']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
			 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $activite['Activite']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $activite['Activite']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $activite['Activite']['id'])); ?>
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
 