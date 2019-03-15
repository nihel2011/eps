<div class="references view">
<h2><?php echo __('Reference'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Name'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['fr_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Name'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['an_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Secteur'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['id_secteur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defau'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['defau']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($reference['Reference']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reference'), array('action' => 'edit', $reference['Reference']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reference'), array('action' => 'delete', $reference['Reference']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $reference['Reference']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List References'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reference'), array('action' => 'add')); ?> </li>
	</ul>
</div>
