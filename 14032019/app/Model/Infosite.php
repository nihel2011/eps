<?php
App::uses('AppModel', 'Model');
/**
 * Infosite Model
 *
 */
class Infosite extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_infosites';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
	
	  var $actsAs = array(
        
		'Translate'=>array(
		'adresse'=>'_adresse'
		
		
		)
		
		
		);

}
