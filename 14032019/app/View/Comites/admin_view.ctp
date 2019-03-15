<div class="comites view">
<h2><?php echo __('Comite'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fonction'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['fonction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupe L'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['groupe_l']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade Id'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['grade_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departement'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['departement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculte'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['faculte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['university']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pays Id'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['pays_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mpar'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['mpar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['cv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ran'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['ran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo h($comite['Comite']['interest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comite'), array('action' => 'edit', $comite['Comite']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comite'), array('action' => 'delete', $comite['Comite']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comite['Comite']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Comites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comite'), array('action' => 'add')); ?> </li>
	</ul>
</div>
