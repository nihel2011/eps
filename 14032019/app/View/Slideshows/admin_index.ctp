<?php $lang = $this->Session->read('User.language');?> 
<div class="container-fluid">
<div class="page-header">
	<div class="pull-left">
		<h1>Slideshows</h1>
	</div>
	 
</div>
<div class="breadcrumbs">
	<ul>
		<li>
			<a  >Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a  >Liste des Slideshows</a>
			<i class="fa fa-angle-right"></i>
		</li>
		 
	</ul>
	 
</div>
 
 
<div class="row">
<div class="col-sm-12">
<div class="box box-color box-bordered">
<div class="box-title">
	<div class="col-sm-6">	<h3>Slideshow</h3></div>	<div class=" col-sm-6 addplus"  >
		<a href="<?php echo $this->webroot;?>admin/Slideshows/add">
			<i class="fa fa-plus-circle" style="font-size:30px; color:#fff"></i>
		</a>
	</div>
</div>
<div class="box-content nopadding">
<table class="table table-hover table-nomargin table-bordered dataTable dataTable-column_filter" data-column_filter_types="text,select,text,null,daterange,select,null,null" data-column_filter_dateformat="dd-mm-yy"  data-nosort="0" data-checkall="all">
<thead>
<tr>
	<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<th><?php echo ('name'); ?></th>
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
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('photo1'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('id_prod'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	
		<!--<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_text1'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_text2'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_text3'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('fr_text4'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_text1'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_text2'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_text3'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('an_text4'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('lien'); ?></th>
		<th class='with-checkbox'>
		<input type="checkbox" name="check_all" class="dataTable-checkall">
	</th>-->
    
	<!--<th><?php echo ('position'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
</tr>
</thead>
<tbody>
	<?php foreach ($slideshows as $slideshow): ?>
	<tr>
		<!--<td><?php echo h($slideshow['Slideshow']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($slideshow['Slideshow']['name'][$lang]); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['etat']); ?>&nbsp;</td> 
        <td><?php echo h($slideshow['Slideshow']['orderm']); ?>&nbsp;</td>
        <td> &nbsp;
        
        <?php  $phota = $this->webroot.'files/slideshow/'.h($slideshow['Slideshow']['photo']) ;
		$photb = 'files/slideshow/'.h($slideshow['Slideshow']['photo']) ;
	 
		 if(is_file($photb)) {  ?> <img src="<?php echo $phota; ?>" style='width:50px'>  <?php } ?>
        
        
        </td>
       
		<td><?php echo h($slideshow['Slideshow']['created']); ?>&nbsp;</td>
		<td> &nbsp;
        <?php 
		
		  //echo h($infosite['Infosite']['usercreated']);
		$userab = $this->requestAction('/users/affiche_user/'.$slideshow['Slideshow']['usercreated']);
		echo $userab['User']['name'];  
		?></td>
		<!--<td><?php echo h($slideshow['Slideshow']['modify']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['usermodify']); ?>&nbsp;</td>
		
		<td><?php echo h($slideshow['Slideshow']['photo1']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['id_prod']); ?>&nbsp;</td>
		
		<td><?php echo h($slideshow['Slideshow']['fr_text1']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['fr_text2']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['fr_text3']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['fr_text4']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['an_text1']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['an_text2']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['an_text3']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['an_text4']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['lien']); ?>&nbsp;</td>
		<td><?php echo h($slideshow['Slideshow']['position']); ?>&nbsp;</td>-->
		<td class='hidden-480'>
		 
			<?php echo "&nbsp;".$this->Html->link(__("<i class='fa fa-edit'></i>"), array('action' => 'edit', $slideshow['Slideshow']['id']),array('escape' => false,'class'=>'btn')); ?>
			<?php echo "&nbsp;".$this->Form->postLink(__("<i class='fa fa-times'></i>"), array('action' => 'delete', $slideshow['Slideshow']['id']), array('class'=>'btn','escape' => false,null), __('Etes-vous sûr que vous voulez supprimer # %s?', $slideshow['Slideshow']['id'])); ?>
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
 