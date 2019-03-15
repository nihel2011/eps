<?php
App::uses('AppModel', 'Model');
/**
 * Imageprod Model
 *
 * @property Produit $Produit
 */
class Imageprod extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_imageprods';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Produit' => array(
			'className' => 'Produit',
			'foreignKey' => 'produit_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	
	 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/produits{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                )
				)
				);
	
	
	
}
