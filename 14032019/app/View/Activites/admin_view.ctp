<div class="activites view">
<h2><?php echo __('Activite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($activite['Activite']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activite'), array('action' => 'edit', $activite['Activite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activite'), array('action' => 'delete', $activite['Activite']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activite['Activite']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Activites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activite'), array('action' => 'add')); ?> </li>
	</ul>
</div>
