<?php $lang = $this->Session->read('User.language');?> 
 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Contenus</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Contenus</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
 <div class="box-title">
	
	<div class="col-sm-6">	<h3>Contenus</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/contenuses/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,null,select,text,null,daterange,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    <th><?php echo ('fr_title'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
	<!--<th><?php echo ('fr_description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('ar_description'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_description'); ?></th>
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
    
	<!--<th><?php echo ('position'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('orderm'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('etat'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
    
	<!--<th><?php echo ('ar_title'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_title'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('menu_id'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('image'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('url'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('ar_resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_resume'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('photo'); ?></th>
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('mot_cle'); ?></th>-->
    
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
	<?php foreach ($contenuses as $contenus): ?>
	<tr><td><?php echo h($contenus['Contenus']['title'][$lang]); ?>&nbsp;</td>
		<!--<td><?php echo h($contenus['Contenus']['id']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['fr_description']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['ar_description']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['an_description']); ?>&nbsp;</td>-->
		
		<!--<td><?php echo h($contenus['Contenus']['modify']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['usermodify']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['position']); ?>&nbsp;</td>-->
		<td><?php echo h($contenus['Contenus']['orderm']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['etat']); ?>&nbsp;</td>
		
		<!--<td><?php echo h($contenus['Contenus']['ar_title']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['an_title']); ?>&nbsp;</td>-->
		<td>
			<?php echo h($contenus['Menu']['name']); ?>
		</td>
		<!--<td><?php echo h($contenus['Contenus']['image']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['url']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['an_resume']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['ar_resume']); ?>&nbsp;</td>
		<td><?php echo h($contenus['Contenus']['fr_resume']); ?>&nbsp;</td>-->
		<td> 
        <?php  $phota = $this->webroot.'files/contenus/'.h($contenus['Contenus']['photo']) ;
		$photb = 'files/contenus/'.h($contenus['Contenus']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>&nbsp;</td>
        <td><?php echo h($contenus['Contenus']['created']); ?>&nbsp;</td>
		<td> 
          <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$contenus['Contenus']['usercreated']);
		echo $userab['User']['name'];  
		?>
        &nbsp;</td>
	<!--	<td><?php echo h($contenus['Contenus']['mot_cle']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-photo'></i>"), array('controller'=>'imagecontenuses','action' => 'index', $contenus['Contenus']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $contenus['Contenus']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $contenus['Contenus']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $contenus['Contenus']['id'])); ?>
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
 