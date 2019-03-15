<?php
App::uses('AppModel', 'Model');
/**
 * ImageContenus Model
 *
 */
class ImageContenus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_image_contenus';
	/*public $belongsTo = array(
		'Contenu' => array(
			'className' => 'Contenu',
			'foreignKey' => 'contenu_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);*/
   var $actsAs = array(
        'MeioUpload.MeioUpload' => array(
            'photo' => array(
                'dir' => 'files/contenus{DS}',
                'create_directory' => true,
                'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
                'allowed_ext' => array('.jpg', '.jpeg', '.png'),
                ) 
            )
            
        );
}
