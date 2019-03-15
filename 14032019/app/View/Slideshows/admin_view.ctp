<div class="slideshows view">
<h2><?php echo __('Slideshow'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo1'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['photo1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Prod'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['id_prod']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Text1'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['fr_text1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Text2'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['fr_text2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Text3'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['fr_text3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Text4'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['fr_text4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Text1'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['an_text1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Text2'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['an_text2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Text3'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['an_text3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Text4'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['an_text4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lien'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['lien']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($slideshow['Slideshow']['position']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Slideshow'), array('action' => 'edit', $slideshow['Slideshow']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Slideshow'), array('action' => 'delete', $slideshow['Slideshow']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $slideshow['Slideshow']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Slideshows'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slideshow'), array('action' => 'add')); ?> </li>
	</ul>
</div>
