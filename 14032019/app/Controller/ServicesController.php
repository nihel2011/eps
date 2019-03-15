<?php

App::uses('AppController', 'Controller');

/**

 * Services Controller

 *

 * @property Service $Service

 * @property PaginatorComponent $Paginator

 * @property SessionComponent $Session

 * @property FlashComponent $Flash

 */

class ServicesController extends AppController {



/**

 * Helpers

 *

 * @var array

 */

	///public $helpers = array('N');



/**

 * Components

 *

 * @var array

 */

	public $components = array('Paginator', 'Session', 'Flash');



/**

 * index method

 *

 * @return void

 */

	public function index($idp=null) {

		if($idp==null)
		{
			$idp=0; 
		}
		 

		

			 			$this->Service->locale=Configure::read('Config.languages');



$options = array('conditions' => array('Service.etat' => 'Y','Service.parent' =>$idp),'order' => array('Service.orderm Asc'));

	$services= $this->Service->findAll('all', $options);

			$this->set('services', $services);

			

			

		



$this->loadModel('Menu');

			$this->Menu->locale=Configure::read('Config.languages');



			 $options1 = array('conditions' => array('Menu.id' => '3'));

	$menu= $this->Menu->findAll('first', $options1);

 

		$this->set('menu',$menu);

	}

	

	public function list_services($id=null) {

	$this->Service->locale=Configure::read('Config.languages');



$options = array('conditions' => array('Service.etat' => 'Y','Service.parent' =>$id),'order' => array('Service.orderm Asc'));

	$liste_services= $this->Service->findAll('all', $options);

			$this->set('liste_services', $liste_services);

			

		return $liste_services;



	}

	public function listser($id=null)
{
	
	$options = array('conditions' => array('Service.parent' => $id));
		$sserv= $this->Service->find('all', $options);
		
		return $sserv;
}
	public function retparent($id=null)
{
	 
	$options = array('conditions' => array('Service.id' => $id));
		$sserpar= $this->Service->find('first', $options);
		
		$part = $sserpar['Service']['parent'];
 
			//$this->set('part', $part);
				return $part;
		 
}


	public function detail_service($service_id) {

			 			$this->Service->locale=Configure::read('Config.languages');



$options = array('conditions' => array('Service.id' => $service_id));

	$service= $this->Service->findAll('first', $options);

	

	$serv_p=  $service['Service']['parent'];

			$this->set('service', $service);



$options2 = array('conditions' => array('Service.id' => $service_id));

	$service2= $this->Service->findAll('first', $options2);

			$this->set('service2', $service2);





$this->loadModel('Menu');

			$this->Menu->locale=Configure::read('Config.languages');



			 $options1 = array('conditions' => array('Menu.id' => '3'));

	$menu= $this->Menu->findAll('first', $options1);

 

		$this->set('menu',$menu);

	}

	



/**

 * view method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function view($id = null) {

		if (!$this->Service->exists($id)) {

			throw new NotFoundException(__('Invalid service'));

		}

		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));

		$this->set('service', $this->Service->find('first', $options));

	}



/**

 * add method

 *

 * @return void

 */

	public function add() {

     $this->layout = 'admin';

		if ($this->request->is('post')) {

			$this->Service->create();

			if ($this->Service->save($this->request->data)) {

				$this->Flash->success(__('The service has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Flash->error(__('The service could not be saved. Please, try again.'));

			}

		}

	}



/**

 * edit method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function edit($id = null) {

		if (!$this->Service->exists($id)) {

			throw new NotFoundException(__('Invalid service'));

		}

		if ($this->request->is(array('post', 'put'))) {

			if ($this->Service->save($this->request->data)) {

				$this->Flash->success(__('The service has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Flash->error(__('The service could not be saved. Please, try again.'));

			}

		} else {

			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));

			$this->request->data = $this->Service->find('first', $options);

		}

	}



/**

 * delete method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function delete($id = null) {

		$this->Service->id = $id;

		if (!$this->Service->exists()) {

			throw new NotFoundException(__('Invalid service'));

		}

		$this->request->allowMethod('post', 'delete');

		if ($this->Service->delete()) {

			$this->Flash->success(__('The service has been deleted.'));

		} else {

			$this->Flash->error(__('The service could not be deleted. Please, try again.'));

		}

		return $this->redirect(array('action' => 'index'));

	}



/**

 * admin_index method

 *

 * @return void

 */

	public function admin_index() {

	$this->Service->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Service.etat' => 'Y'),'order' => array('Service.id DESC'));

	$services= $this->Service->findAll('all', $options);



		$this->set('services', $services);

	}



/**

 * admin_view method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function admin_view($id = null) {

		if (!$this->Service->exists($id)) {

			throw new NotFoundException(__('Invalid service'));

		}

		$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));

		$this->set('service', $this->Service->find('first', $options));

	}



/**

 * admin_add method

 *

 * @return void

 */

	public function admin_add() {

     $this->layout = 'admin';

	 			$this->Service->locale=Configure::read('Config.languages');



		if ($this->request->is('post')) {



			$this->Service->create();

				$this->request->data['Service']['usercreated']=$this->Session->read('user_id');

			$this->request->data['Service']['created']=date("Y-m-j H:i:s");

			if ($this->Service->saveMany($this->request->data)) {

				$this->Flash->success(__('The service has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Flash->error(__('The service could not be saved. Please, try again.'));

			}

		}

		$service_id = $this->Service->findAll('list',array('fields'=>array('id','Service.name')));

			

			$this->set(compact('service_id'));

	}



/**

 * admin_edit method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function admin_edit($id = null) {

					$this->Service->locale=Configure::read('Config.languages');



		if (!$this->Service->exists($id)) {

			throw new NotFoundException(__('Invalid service'));

		}

		if ($this->request->is(array('post', 'put'))) {

				$this->request->data['Service']['usermodify']=$this->Session->read('user_id');

			$this->request->data['Service']['modify']=date("Y-m-j H:i:s");

			$this->Service->locale=Configure::read('Config.languages');

			if ($this->Service->saveMany($this->request->data)) {

				$this->Flash->success(__('The service has been saved.'));

				return $this->redirect(array('action' => 'index'));

			} else {

				$this->Flash->error(__('The service could not be saved. Please, try again.'));

			}

		} else {

			$options = array('conditions' => array('Service.' . $this->Service->primaryKey => $id));

			$this->request->data = $this->Service->findAll('first', $options);

			

				$service_id = $this->Service->findAll('list',array('fields'=>array('id','Service.name')));

			

			$this->set(compact('service_id'));

		}

	}



/**

 * admin_delete method

 *

 * @throws NotFoundException

 * @param string $id

 * @return void

 */

	public function admin_delete($id = null) {

		$this->Service->id = $id;

		if (!$this->Service->exists()) {

			throw new NotFoundException(__('Invalid service'));

		}

		$this->request->allowMethod('post', 'delete');

		if ($this->Service->delete()) {

			$this->Flash->success(__('The service has been deleted.'));

		} else {

			$this->Flash->error(__('The service could not be deleted. Please, try again.'));

		}

		return $this->redirect(array('action' => 'index'));

	}

}

