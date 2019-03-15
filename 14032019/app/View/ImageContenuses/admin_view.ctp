<div class="imageContenuses view">
<h2><?php echo __('Image Contenus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Namep'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['namep']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenu Id'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['contenu_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Defau'); ?></dt>
		<dd>
			<?php echo h($imageContenus['ImageContenus']['defau']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Image Contenus'), array('action' => 'edit', $imageContenus['ImageContenus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Image Contenus'), array('action' => 'delete', $imageContenus['ImageContenus']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $imageContenus['ImageContenus']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Image Contenuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image Contenus'), array('action' => 'add')); ?> </li>
	</ul>
</div>
