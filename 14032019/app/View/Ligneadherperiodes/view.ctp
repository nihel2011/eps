<div class="ligneadherperiodes view">
<h2><?php echo __('Ligneadherperiode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adherents Id'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['adherents_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adherperiodes Id'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['adherperiodes_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($ligneadherperiode['Ligneadherperiode']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ligneadherperiode'), array('action' => 'edit', $ligneadherperiode['Ligneadherperiode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ligneadherperiode'), array('action' => 'delete', $ligneadherperiode['Ligneadherperiode']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ligneadherperiode['Ligneadherperiode']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ligneadherperiodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ligneadherperiode'), array('action' => 'add')); ?> </li>
	</ul>
</div>
