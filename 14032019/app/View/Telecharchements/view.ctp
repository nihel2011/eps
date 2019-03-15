<div class="telecharchements view">
<h2><?php echo __('Telecharchement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fichier'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['fichier']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($telecharchement['Telecharchement']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Telecharchement'), array('action' => 'edit', $telecharchement['Telecharchement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Telecharchement'), array('action' => 'delete', $telecharchement['Telecharchement']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $telecharchement['Telecharchement']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Telecharchements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Telecharchement'), array('action' => 'add')); ?> </li>
	</ul>
</div>
