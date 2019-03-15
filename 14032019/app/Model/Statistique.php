<?php
App::uses('AppModel', 'Model');
/**
 * Statistique Model
 *
 */
class Statistique extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_statistique';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	  var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/statistique{DS}',
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
