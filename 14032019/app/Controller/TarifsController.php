<?php
App::uses('AppController', 'Controller');
/**
 * Tarifs Controller
 *
 * @property Tarif $Tarif
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class TarifsController extends AppController {

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
	public function index($service_id) {
	 
		
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
		
		
		
	 	$this->Tarif->locale=Configure::read('Config.languages');

$options3 = array('conditions' => array('Tarif.etat' => 'Y','Tarif.service_id' => $service_id),'order' => array('Tarif.orderm Asc'));
 
	$tarifs= $this->Tarif->findAll('all', $options3);
	
 
			$this->set('tarifs', $tarifs);
		
		
		
		
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tarif->exists($id)) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		$options = array('conditions' => array('Tarif.' . $this->Tarif->primaryKey => $id));
		$this->set('tarif', $this->Tarif->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Tarif->create();
			if ($this->Tarif->save($this->request->data)) {
				$this->Flash->success(__('The tarif has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarif could not be saved. Please, try again.'));
			}
		}
		$services = $this->Tarif->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tarif->exists($id)) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarif->save($this->request->data)) {
				$this->Flash->success(__('The tarif has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarif could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarif.' . $this->Tarif->primaryKey => $id));
			$this->request->data = $this->Tarif->find('first', $options);
		}
		$services = $this->Tarif->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tarif->id = $id;
		if (!$this->Tarif->exists()) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarif->delete()) {
			$this->Flash->success(__('The tarif has been deleted.'));
		} else {
			$this->Flash->error(__('The tarif could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($service_id=null) {
 
		
		
		$this->Tarif->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Tarif.service_id' => $service_id, 'Tarif.etat' => 'Y'),'order' => array('Tarif.id DESC'));
	$tarifs= $this->Tarif->findAll('all', $options);
$this->set('service_id', $service_id);
		$this->set('tarifs', $tarifs);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tarif->exists($id)) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		$options = array('conditions' => array('Tarif.' . $this->Tarif->primaryKey => $id));
		$this->set('tarif', $this->Tarif->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($service_id=null) {
     $this->layout = 'admin';
	 $this->Tarif->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
				$this->request->data['Tarif']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Tarif']['created']=date("Y-m-j H:i:s");
			$this->Tarif->create();
			if ($this->Tarif->saveMany($this->request->data)) {
				$this->Flash->success(__('The tarif has been saved.'));
		 
				return $this->redirect('../tarifs/index/'.$service_id);
			} else {
				$this->Flash->error(__('The tarif could not be saved. Please, try again.'));
			}
		}
		 /*$services = $this->Tarif->Service->findAll('list');
		$this->set(compact('services')); */
		$this->set('service_id',$service_id);
		
		 
		
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Tarif->locale=Configure::read('Config.languages');
		if (!$this->Tarif->exists($id)) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Tarif']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Tarif']['modify']=date("Y-m-j H:i:s");
			$this->Tarif->locale=Configure::read('Config.languages');
			if ($this->Tarif->saveMany($this->request->data)) {
				
				$this->Flash->success(__('The tarif has been saved.'));
					$service_id=$this->request->data['Tarif']['service_id'];
				return $this->redirect('../tarifs/index/'.$service_id);
			} else {
				$this->Flash->error(__('The tarif could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarif.' . $this->Tarif->primaryKey => $id));
			$this->request->data = $this->Tarif->findAll('first', $options);
		}
		$services = $this->Tarif->Service->findAll('list');
		$this->set(compact('services'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tarif->id = $id;
		if (!$this->Tarif->exists()) {
			throw new NotFoundException(__('Invalid tarif'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarif->delete()) {
			$this->Flash->success(__('The tarif has been deleted.'));
		} else {
			$this->Flash->error(__('The tarif could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
