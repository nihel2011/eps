<?php
App::uses('AppModel', 'Model');
/**
 * Partenaire Model
 *
 */
class Partenaire extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_partenaires';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

  var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/partenaires{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) 
            ),
			'Translate'=>array(
		'description'=>'_description',
		'name'=>'_name'
		 
		
		)
            
        );
}
