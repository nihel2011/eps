<div class="infosites view">
<h2><?php echo __('Infosite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Adresse'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['fr_adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Adresse'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['an_adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fixe'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['fixe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gsm'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['gsm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Siteweb'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['siteweb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Responsable'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['fr_responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ar Responsable'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['ar_responsable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Maps'); ?></dt>
		<dd>
			<?php echo h($infosite['Infosite']['maps']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Infosite'), array('action' => 'edit', $infosite['Infosite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Infosite'), array('action' => 'delete', $infosite['Infosite']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $infosite['Infosite']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Infosites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Infosite'), array('action' => 'add')); ?> </li>
	</ul>
</div>
