<?php
App::uses('AppController', 'Controller');
/**
 * Activites Controller
 *
 * @property Activite $Activite
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ActivitesController extends AppController {

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
	public function index() {
		$this->Activite->recursive = 0;
		$this->set('activites', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Activite->exists($id)) {
			throw new NotFoundException(__('Invalid activite'));
		}
		$options = array('conditions' => array('Activite.' . $this->Activite->primaryKey => $id));
		$this->set('activite', $this->Activite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Activite->create();
			if ($this->Activite->save($this->request->data)) {
				$this->Flash->success(__('The activite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activite could not be saved. Please, try again.'));
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
		if (!$this->Activite->exists($id)) {
			throw new NotFoundException(__('Invalid activite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activite->save($this->request->data)) {
				$this->Flash->success(__('The activite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Activite.' . $this->Activite->primaryKey => $id));
			$this->request->data = $this->Activite->find('first', $options);
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
		$this->Activite->id = $id;
		if (!$this->Activite->exists()) {
			throw new NotFoundException(__('Invalid activite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activite->delete()) {
			$this->Flash->success(__('The activite has been deleted.'));
		} else {
			$this->Flash->error(__('The activite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//$this->Activite->recursive = 0;
		//$this->set('activites', $this->Paginator->paginate());
			$this->Activite->locale=Configure::read('Config.languages');

		$activites = $this->Activite->findAll('all');

		$this->set('activites', $activites);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Activite->exists($id)) {
			throw new NotFoundException(__('Invalid activite'));
		}
		$options = array('conditions' => array('Activite.' . $this->Activite->primaryKey => $id));
		$this->set('activite', $this->Activite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	  $this->Activite->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Activite->create();
			$this->request->data['Activite']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Activite']['created']=date("Y-m-j H:i:s");
			if ($this->Activite->saveMany($this->request->data)) {
				$this->Flash->success(__('The activite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activite could not be saved. Please, try again.'));
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
		$this->Activite->locale=Configure::read('Config.languages');
		if (!$this->Activite->exists($id)) {
			throw new NotFoundException(__('Invalid activite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Activite->saveMany($this->request->data)) {
				$this->request->data['Activite']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Activite']['modify']=date("Y-m-j H:i:s");
				$this->Flash->success(__('The activite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The activite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Activite.' . $this->Activite->primaryKey => $id));
			$this->request->data = $this->Activite->findAll('first', $options);
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
		$this->Activite->id = $id;
		if (!$this->Activite->exists()) {
			throw new NotFoundException(__('Invalid activite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Activite->delete()) {
			$this->Flash->success(__('The activite has been deleted.'));
		} else {
			$this->Flash->error(__('The activite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
