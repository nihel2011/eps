<?php
App::uses('AppModel', 'Model');
/**
 * Subvention Model
 *
 */
class Subvention extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_subventions';
	
	 var $actsAs = array(
	 
	'Translate'=>array(

	 

		'titre'=>'_titre',

		'donneur'=>'_donneur'
		

		)
		);

}
