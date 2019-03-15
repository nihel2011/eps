 <?php $lang = $this->Session->read('User.language');?> 

<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Références</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  href="<?php echo $this->webroot; ?>">Accueil</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  href="<?php echo $this->webroot; ?>admin/references">Liste des Références</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Références</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/references/add">
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
    
	<th><?php echo ('fr_name'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_name'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id_secteur'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('etat'); ?></th>
    <th><?php echo ('photo'); ?></th>
<!--	<th><?php echo ('created'); ?></th>
-->		<!--<th class='with-checkbox'>
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
    
	
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($references as $reference): ?>
	<tr>
		<td><?php echo h($reference['Reference']['id']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['name'][$lang]); ?>&nbsp;</td>
		<!--<td><?php echo h($reference['Reference']['an_name']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['id_secteur']); ?>&nbsp;</td>-->
        <td><?php echo h($reference['Reference']['etat']); ?>&nbsp;</td>
		<!--<td><?php echo h($reference['Reference']['defau']); ?>&nbsp;</td>-->
		<td><?php //echo h($reference['Reference']['photo']); ?>
        
             <?php  $phota = $this->webroot.'files/references/'.h($reference['Reference']['photo']) ;
		$photb = 'files/references/'.h($reference['Reference']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>
        
        
        &nbsp;</td>
		<td><?php echo h($reference['Reference']['created']); ?>
          
        &nbsp;</td>
		<td>&nbsp;
         <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$reference['Reference']['usercreated']);
		echo $userab['User']['name'];  
		?></td>
		<!--<td><?php echo h($reference['Reference']['modify']); ?>&nbsp;</td>
		<td><?php echo h($reference['Reference']['usermodify']); ?>&nbsp;</td>-->
		
		<td class='hidden-480'>
			
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $reference['Reference']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $reference['Reference']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $reference['Reference']['id'])); ?>
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
 