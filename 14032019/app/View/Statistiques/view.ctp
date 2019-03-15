<div class="statistiques view">
<h2><?php echo __('Statistique'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valeurs'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['valeurs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($statistique['Statistique']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Statistique'), array('action' => 'edit', $statistique['Statistique']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Statistique'), array('action' => 'delete', $statistique['Statistique']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $statistique['Statistique']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Statistiques'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Statistique'), array('action' => 'add')); ?> </li>
	</ul>
</div>
