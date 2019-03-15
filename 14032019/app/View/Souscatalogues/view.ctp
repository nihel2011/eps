<div class="souscatalogues view">
<h2><?php echo __('Souscatalogue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datec'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['datec']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($souscatalogue['Souscatalogue']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Souscatalogue'), array('action' => 'edit', $souscatalogue['Souscatalogue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Souscatalogue'), array('action' => 'delete', $souscatalogue['Souscatalogue']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $souscatalogue['Souscatalogue']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Souscatalogues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Souscatalogue'), array('action' => 'add')); ?> </li>
	</ul>
</div>
