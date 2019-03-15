<?php
App::uses('AppController', 'Controller');
/**
 * Telecharchements Controller
 *
 * @property Telecharchement $Telecharchement
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TelecharchementsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	//	$this->Telecharchement->recursive = 0;
		//$this->set('telecharchements', $this->Paginator->paginate());
		
		
	
		 			$this->Telecharchement->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Telecharchement.etat' => 'Y'));
	$telecharchements= $this->Telecharchement->findAll('all', $options);
			$this->set('telecharchements', $telecharchements);
			
			

$this->loadModel('Menu');
			$this->Menu->locale=Configure::read('Config.languages');

			 $options1 = array('conditions' => array('Menu.id' => '8'));
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
		if (!$this->Telecharchement->exists($id)) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		$options = array('conditions' => array('Telecharchement.' . $this->Telecharchement->primaryKey => $id));
		$this->set('telecharchement', $this->Telecharchement->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Telecharchement->create();
			if ($this->Telecharchement->save($this->request->data)) {
				$this->Flash->success(__('The telecharchement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The telecharchement could not be saved. Please, try again.'));
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
		if (!$this->Telecharchement->exists($id)) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Telecharchement->save($this->request->data)) {
				$this->Flash->success(__('The telecharchement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The telecharchement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Telecharchement.' . $this->Telecharchement->primaryKey => $id));
			$this->request->data = $this->Telecharchement->find('first', $options);
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
		$this->Telecharchement->id = $id;
		if (!$this->Telecharchement->exists()) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Telecharchement->delete()) {
			$this->Flash->success(__('The telecharchement has been deleted.'));
		} else {
			$this->Flash->error(__('The telecharchement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
	
$this->Telecharchement->locale=Configure::read('Config.languages');

		$telecharchement = $this->Telecharchement->findAll('all');
		$this->set('telecharchements', $telecharchement);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Telecharchement->exists($id)) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		$options = array('conditions' => array('Telecharchement.' . $this->Telecharchement->primaryKey => $id));
		$this->set('telecharchement', $this->Telecharchement->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
     $this->layout = 'admin';
		$this->Telecharchement->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			
			$this->Telecharchement->create();
			$this->request->data['Telecharchement']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Telecharchement']['created']=date("Y-m-j H:i:s");

			if ($this->Telecharchement->saveMany($this->request->data)) {
				$this->Flash->success(__('The telecharchement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The telecharchement could not be saved. Please, try again.'));
			}
		}
	}
	
	
	
	   
		
	

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Telecharchement->locale=Configure::read('Config.languages');

		if (!$this->Telecharchement->exists($id)) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Telecharchement']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Telecharchement']['modify']=date("Y-m-j H:i:s");

			if ($this->Telecharchement->saveMany($this->request->data)) {
				$this->Flash->success(__('The telecharchement has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The telecharchement could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Telecharchement.' . $this->Telecharchement->primaryKey => $id));
			$this->request->data = $this->Telecharchement->findAll('first', $options);
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
		$this->Telecharchement->id = $id;
		if (!$this->Telecharchement->exists()) {
			throw new NotFoundException(__('Invalid telecharchement'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Telecharchement->delete()) {
			$this->Flash->success(__('The telecharchement has been deleted.'));
		} else {
			$this->Flash->error(__('The telecharchement could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
