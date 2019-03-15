<?php
App::uses('AppModel', 'Model');
/**
 * Service Model
 *
 */
class Service extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_services';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	
	 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/services{DS}',
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
