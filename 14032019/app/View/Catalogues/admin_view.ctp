<div class="catalogues view">
<h2><?php echo __('Catalogue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['photo']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datec'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['datec']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($catalogue['Catalogue']['titre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Catalogue'), array('action' => 'edit', $catalogue['Catalogue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Catalogue'), array('action' => 'delete', $catalogue['Catalogue']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $catalogue['Catalogue']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Catalogues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Catalogue'), array('action' => 'add')); ?> </li>
	</ul>
</div>
