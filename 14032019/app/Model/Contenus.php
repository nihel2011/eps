<?php
App::uses('AppModel', 'Model');
/**
 * Contenus Model
 *
 * @property Menu $Menu
 */
class Contenus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_contenus';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Menu' => array(
			'className' => 'Menu',
			'foreignKey' => 'menu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
		   var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/contenus{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) 
            ),
			'Translate'=>array(
		'description'=>'_description',
		'title'=>'_title',
		'resume'=>'_resume'
		
		
		)
            
        );
}
