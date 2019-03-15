<?php
App::uses('AppModel', 'Model');
/**
 * Actualite Model
 *
 * @property Menu $Menu
 */
class Actualite extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_actualites';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	/*public $belongsTo = array(
		'Menu' => array(
			'className' => 'Menu',
			'foreignKey' => 'menu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
	
	   var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/actualite{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) 
            ),
			'Translate'=>array(
		
		
		'name'=>'_name',
		'resume'=>'_resume',
		'description'=>'_description'
		
		)
            
        );
}
