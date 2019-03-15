<div class="categories view">
<h2><?php echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['fr_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['an_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('It Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['it_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($category['Category']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photos'); ?></dt>
		<dd>
			<?php echo h($category['Category']['photos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['fr_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Description'); ?></dt>
		<dd>
			<?php echo h($category['Category']['an_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Couleurs'); ?></dt>
		<dd>
			<?php echo h($category['Category']['couleurs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($category['Category']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($category['Category']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($category['Category']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($category['Category']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($category['Category']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($category['Category']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pdf'); ?></dt>
		<dd>
			<?php echo h($category['Category']['pdf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent'); ?></dt>
		<dd>
			<?php echo h($category['Category']['parent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Famille'); ?></dt>
		<dd>
			<?php echo h($category['Category']['famille']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo1'); ?></dt>
		<dd>
			<?php echo h($category['Category']['photo1']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $category['Category']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
