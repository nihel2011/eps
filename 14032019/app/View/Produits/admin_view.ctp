<div class="produits view">
<h2><?php echo __('Produit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Name'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['fr_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Name'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['an_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['reference']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contrat'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['contrat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorie Id'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['categorie_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Ville'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['id_ville']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Region'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['id_region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Zone'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['id_zone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surface'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['surface']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nb Piece'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['nb_piece']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['prix']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visible'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fichier Pdf'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['fichier_pdf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Description'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['fr_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('An Description'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['an_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fr Resume'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['fr_resume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accueil'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['accueil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orderm'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['orderm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mot Cle'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['mot_cle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Couleurs'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['couleurs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usercreated'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['usercreated']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modify'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['modify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usermodify'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['usermodify']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($produit['Produit']['photo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Produit'), array('action' => 'edit', $produit['Produit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Produit'), array('action' => 'delete', $produit['Produit']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $produit['Produit']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Produits'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Produit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
