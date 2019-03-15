<div class="contenuses view">
<h2><?php echo __('Contenus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Description'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['fr_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ar Description'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['ar_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Description'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['an_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Title'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['fr_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ar Title'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['ar_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Title'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['an_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Menu'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contenus['Menu']['id'], array('controller' => 'menus', 'action' => 'view', $contenus['Menu']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Resume'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['an_resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ar Resume'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['ar_resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Resume'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['fr_resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mot Cle'); ?></dt>
		<dd>
			<?php echo h($contenus['Contenus']['mot_cle']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contenus'), array('action' => 'edit', $contenus['Contenus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contenus'), array('action' => 'delete', $contenus['Contenus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $contenus['Contenus']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Contenuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contenus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Menus'), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Menu'), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
