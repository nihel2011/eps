<?php
App::uses('AppModel', 'Model');
/**
 * Souscatalogue Model
 *
 */
class Souscatalogue extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_souscatalogues';

/**
 * Display field
 *
 * @var string
 */
/*	public $displayField = 'name';

}*/

	   var $actsAs = array(

        'MeioUpload.MeioUpload' => array(

            'photo' => array(

                'dir' => 'files/souscatalogue{DS}',

                'create_directory' => true,

                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),

                'allowed_ext' => array('.jpg', '.jpeg', '.png'),

                ) 

            ),

			'Translate'=>array(

		

		
		'titre'=>'_titre',

		'name'=>'_name',

		'resume'=>'_resume',

		'description'=>'_description'

		

		)

            

        );

}
