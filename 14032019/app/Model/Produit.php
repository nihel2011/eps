<?php
App::uses('AppModel', 'Model');
/**
 * Produit Model
 *
 * @property Categorie $Categorie
 * @property Imageprod $Imageprod
 */
class Produit extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_produits';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fr_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
*/
	/*public $belongsTo = array(
		'Categorie' => array(
			'className' => 'Categorie',
			'foreignKey' => 'categorie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
 
/**
 * hasMany associations
 *
 * @var array
 */
	/*public $hasMany = array(
		'Imageprod' => array(
			'className' => 'Imageprod',
			'foreignKey' => 'produit_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/produits{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) ,
				
				  'fichier_pdf' => array(
                'dir' => 'files/fichpdf{DS}',
                'create_directory' => true,
                 'allowed_mime' => array('application/pdf', 'application/msword'),
                'allowed_ext' => array('.pdf', '.doc', '.docx'),
                ) 
            )
            
        );
		
}
