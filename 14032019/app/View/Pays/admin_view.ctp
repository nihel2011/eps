<div class="pays view">
<h2><?php echo __('Pay'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($pay['Pay']['etat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pay'), array('action' => 'edit', $pay['Pay']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pay'), array('action' => 'delete', $pay['Pay']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $pay['Pay']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Pays'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pay'), array('action' => 'add')); ?> </li>
	</ul>
</div>
