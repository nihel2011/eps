<?php
App::uses('AppModel', 'Model');
/**
 * Adherent Model
 *
 */
class Adherent extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_adherents';
	
	
	
	
	
		//public $displayField = 'titre';
	 var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/adherents{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
				)
				
				
                ),
				
	'Translate'=>array(

	 

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
