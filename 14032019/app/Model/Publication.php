<?php
App::uses('AppModel', 'Model');
/**
 * Publication Model
 *
 */
class Publication extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_publication';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	 var $actsAs = array(
	 
	'Translate'=>array(

	 
		'name'=>'_name',
		'titre'=>'_titre',

		'resume'=>'_resume',
			'description'=>'_description',

		'autheur'=>'_autheur'

		)
		);

}
