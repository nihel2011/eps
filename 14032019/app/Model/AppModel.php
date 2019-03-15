<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	
	function findAll($type, $query = array()){

		$data =$this->find($type, $query);
		
		if(isset($type) && $type=='first'){
			return $this->findTrad($data);
		}elseif($type=='all'){
			return $this->findAllTrad($data);
		}else{
			return $this->find($type,$query);
		}
		

	}
	
	function findTrad($data){

		foreach($data as $field =>$trad){
			if(strpos($field,'_') === 0){
				$name = str_replace('_','',$field);
				$data[$this->name][$name] = array();

				foreach($trad as $v){
					$locale = $v['locale'];
					$data[$this->name][$name][$locale] = $v['content'];
				}

			}	
		}

		return $data;
	}
	
	function findAllTrad($data){
		

		foreach($data as $k =>$value){

			foreach($value as $field =>$trad){

				if(strpos($field,'_') === 0){
					$name = str_replace('_','',$field);
					$value[$this->name][$name] = array();
				
					foreach($trad as $v){
						
						$locale = $v['locale'];
						$value[$this->name][$name][$locale] = $v['content'];
					}
					
				}	
			}
			$data[$k] = $value;
		}
		return $data;
		
	}
}
