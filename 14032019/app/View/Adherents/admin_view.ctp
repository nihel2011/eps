<div class="adherents view">
<h2><?php echo __('Adherent'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titre'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['titre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nom'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['nom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prenom'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['prenom']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fonction'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['fonction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groupe L'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['groupe_l']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grade'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['grade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departement'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['departement']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Faculte'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['faculte']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['university']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adresse'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['adresse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code Postal'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['code_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pays'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['pays']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ville'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mpar'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['mpar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cv'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['cv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ran'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['ran']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interest'); ?></dt>
		<dd>
			<?php echo h($adherent['Adherent']['interest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Adherent'), array('action' => 'edit', $adherent['Adherent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Adherent'), array('action' => 'delete', $adherent['Adherent']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $adherent['Adherent']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Adherents'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Adherent'), array('action' => 'add')); ?> </li>
	</ul>
</div>
