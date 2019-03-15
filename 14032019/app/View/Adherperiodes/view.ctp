<div class="adherperiodes view">
<h2><?php echo __('Adherperiode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($adherperiode['Adherperiode']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adherperiode'), array('action' => 'edit', $adherperiode['Adherperiode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adherperiode'), array('action' => 'delete', $adherperiode['Adherperiode']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adherperiode['Adherperiode']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Adherperiodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adherperiode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
