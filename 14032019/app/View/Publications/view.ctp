<div class="publications view">
<h2><?php echo __('Publication'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($publication['Publication']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Publication'), array('action' => 'edit', $publication['Publication']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Publication'), array('action' => 'delete', $publication['Publication']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $publication['Publication']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('action' => 'add')); ?> </li>
	</ul>
</div>
