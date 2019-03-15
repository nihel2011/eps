<div class="imageprods view">
<h2><?php echo __('Imageprod'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Name'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['fr_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defau'); ?></dt>
		<dd>
			<?php echo h($imageprod['Imageprod']['defau']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Produit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($imageprod['Produit']['fr_name'], array('controller' => 'produits', 'action' => 'view', $imageprod['Produit']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Imageprod'), array('action' => 'edit', $imageprod['Imageprod']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Imageprod'), array('action' => 'delete', $imageprod['Imageprod']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imageprod['Imageprod']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Imageprods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Imageprod'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('controller' => 'produits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('controller' => 'produits', 'action' => 'add')); ?> </li>
	</ul>
</div>
