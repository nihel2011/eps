<div class="formations view">
<h2><?php echo __('Formation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resume'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datef'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['datef']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($formation['Formation']['usermodify']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formation'), array('action' => 'edit', $formation['Formation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formation'), array('action' => 'delete', $formation['Formation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $formation['Formation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Formations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
