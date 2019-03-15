<?php
App::uses('AppController', 'Controller');
/**
 * Infosites Controller
 *
 * @property Infosite $Infosite
 * @property PaginatorComponent $Paginator
 */
class InfositesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash','Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Infosite->recursive = 0;
		$this->set('infosites', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Infosite->exists($id)) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		$options = array('conditions' => array('Infosite.' . $this->Infosite->primaryKey => $id));
		$this->set('infosite', $this->Infosite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Infosite->create();
			if ($this->Infosite->save($this->request->data)) {
				$this->Flash->success(__('The infosite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The infosite could not be saved. Please, try again.'));
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
		if (!$this->Infosite->exists($id)) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Infosite->save($this->request->data)) {
				$this->Flash->success(__('The infosite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The infosite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Infosite.' . $this->Infosite->primaryKey => $id));
			$this->request->data = $this->Infosite->find('first', $options);
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
		$this->Infosite->id = $id;
		if (!$this->Infosite->exists()) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infosite->delete()) {
			$this->Flash->success(__('The infosite has been deleted.'));
		} else {
			$this->Flash->error(__('The infosite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Infosite->locale=Configure::read('Config.languages');

		$infosites = $this->Infosite->findAll('all');
		$this->set('infosites', $infosites);
		 
		
	}



/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Infosite->exists($id)) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		$options = array('conditions' => array('Infosite.' . $this->Infosite->primaryKey => $id));
		$this->set('infosite', $this->Infosite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 	 $this->Infosite->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Infosite->create();
				$this->request->data['Infosite']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Infosite']['created']=date("Y-m-j H:i:s");
			
			if ($this->Infosite->saveMany($this->request->data)) {
				$this->Flash->success(__('The infosite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The infosite could not be saved. Please, try again.'));
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
					 $this->Infosite->locale=Configure::read('Config.languages');

		if (!$this->Infosite->exists($id)) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['Infosite']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Infosite']['modify']=date("Y-m-j H:i:s");
			
			if ($this->Infosite->saveMany($this->request->data)) {
				$this->Flash->success(__('The infosite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The infosite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Infosite.' . $this->Infosite->primaryKey => $id));
			$this->request->data = $this->Infosite->findAll('first', $options);
			
			
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
		$this->Infosite->id = $id;
		if (!$this->Infosite->exists()) {
			throw new NotFoundException(__('Invalid infosite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Infosite->delete()) {
			$this->Flash->success(__('The infosite has been deleted.'));
		} else {
			$this->Flash->error(__('The infosite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
