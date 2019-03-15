<?php
App::uses('AppModel', 'Model');
/**
 * Telecharchement Model
 *
 */
class Telecharchement extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_telecharchements';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	
	 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
           
			   'fichier' => array(
                'dir' => 'files/fichpdf{DS}',
                'create_directory' => true,
                 'allowed_mime' => array('application/pdf', 'application/msword'),
                'allowed_ext' => array('.pdf'),
                ) 
            ),
			
			'Translate'=>array(
		'name'=>'_name'
		
		
		)
            
        );

}
