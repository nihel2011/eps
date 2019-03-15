<div class="demandes view">
<h2><?php echo __('Demande'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mail'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['mail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($demande['Demande']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Demande'), array('action' => 'edit', $demande['Demande']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Demande'), array('action' => 'delete', $demande['Demande']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $demande['Demande']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Demandes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Demande'), array('action' => 'add')); ?> </li>
	</ul>
</div>
