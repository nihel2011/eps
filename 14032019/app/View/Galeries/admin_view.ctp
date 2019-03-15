<div class="galeries view">
<h2><?php echo __('Galery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Catpho Name'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['catpho_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Galery'), array('action' => 'edit', $galery['Galery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Galery'), array('action' => 'delete', $galery['Galery']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $galery['Galery']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Galeries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galery'), array('action' => 'add')); ?> </li>
	</ul>
</div>
