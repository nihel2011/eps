<div class="actualites view">
<h2><?php echo __('Actualite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Description'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['fr_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Resume'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['fr_resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Name'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['fr_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($actualite['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $actualite['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datea'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['datea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($actualite['Actualite']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Actualite'), array('action' => 'edit', $actualite['Actualite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Actualite'), array('action' => 'delete', $actualite['Actualite']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $actualite['Actualite']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Actualites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Actualite'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
