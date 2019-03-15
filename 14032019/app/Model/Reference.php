<?php
App::uses('AppModel', 'Model');
/**
 * Reference Model
 *
 */
class Reference extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_references';

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
		'fr_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'an_name' => array(
			'n' => array(
				'rule' => array('n'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'id_secteur' => array(
			'n' => array(
				'rule' => array('n'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
	);
	
	
	var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/references{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) 
            ),
			'Translate'=>array(
		
		
		'name'=>'_name'
		
		)
        
            
        );
}
