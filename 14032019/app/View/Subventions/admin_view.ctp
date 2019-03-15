<div class="subventions view">
<h2><?php echo __('Subvention'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datesub'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['datesub']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Montant'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['montant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donneur'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['donneur']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($subvention['Subvention']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subvention'), array('action' => 'edit', $subvention['Subvention']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subvention'), array('action' => 'delete', $subvention['Subvention']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $subvention['Subvention']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Subventions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subvention'), array('action' => 'add')); ?> </li>
	</ul>
</div>
