<?php
App::uses('AppModel', 'Model');
/**
 * Activite Model
 *
 */
class Activite extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_activites';

 var $actsAs = array(

        'MeioUpload.MeioUpload' => array(

            'image' => array(

                'dir' => 'files/activite{DS}',

                'create_directory' => true,

                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),

                'allowed_ext' => array('.jpg', '.jpeg', '.png'),

                ) 

            ),

			'Translate'=>array(

		

		

		'titre'=>'_titre',

		'resume'=>'_resume',

		'description'=>'_description'

		

		)

            

        );
}
