<div class="partenaires view">
<h2><?php echo __('Partenaire'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Secteur'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['id_secteur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defau'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['defau']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($partenaire['Partenaire']['url']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partenaire'), array('action' => 'edit', $partenaire['Partenaire']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partenaire'), array('action' => 'delete', $partenaire['Partenaire']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $partenaire['Partenaire']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Partenaires'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partenaire'), array('action' => 'add')); ?> </li>
	</ul>
</div>
