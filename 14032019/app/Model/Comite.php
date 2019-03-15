<?php
App::uses('AppModel', 'Model');
/**
 * Comite Model
 *
 */
class Comite extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_comites';
	
	
	
	
		//public $displayField = 'titre';
	 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/comites{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
				)
				
				
                ),
				
	'Translate'=>array(

		'titre'=>'_titre',

		'fonction'=>'_fonction',

		'departement'=>'_departement',
		'faculte'=>'_faculte',

		'university'=>'_university',

		'adresse'=>'_adresse',
		'ville'=>'_ville',

		'cv'=>'_cv'
		

		)
          
            
        );

}
