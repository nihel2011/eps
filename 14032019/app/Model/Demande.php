<?php
App::uses('AppModel', 'Model');
/**
 * Demande Model
 *
 */
class Demande extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = '_demandes';
	
	
 var $actsAs = array(

        

			'Translate'=>array(

		

		
		'objet'=>'_objet',

		'message'=>'_message',
		
		'societe'=>'_societe',

		'autre'=>'_autre'
		

		

		)

            

        );	
	

}
