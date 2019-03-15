<?php
App::uses('AppModel', 'Model');
/**
 * Tarif Model
 *
 * @property Service $Service
 */
class Tarif extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_tarifs';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Service' => array(
			'className' => 'Service',
			'foreignKey' => 'service_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
		
	);
	  var $actsAs = array(
       
			'Translate'=>array(
		'description'=>'_description',
		'name'=>'_name',
		'resume'=>'_resume'
		
		
		)
            
        );
}
