<?php
App::uses('AppController', 'Controller');
/**
 * Publications Controller
 *
 * @property Publication $Publication
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PublicationsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	//public $helpers = array('N');

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
	$this->Publication->locale=Configure::read('Config.languages');

		$slideshows = $this->Publication->findAll('all');
		$this->set('publications', $publications);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Publication->exists($id)) {
			throw new NotFoundException(__('Invalid publication'));
		}
		$options = array('conditions' => array('Publication.' . $this->Publication->primaryKey => $id));
		$this->set('publication', $this->Publication->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Publication->create();
			if ($this->Publication->save($this->request->data)) {
				$this->Flash->success(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publication could not be saved. Please, try again.'));
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
		if (!$this->Publication->exists($id)) {
			throw new NotFoundException(__('Invalid publication'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Publication->save($this->request->data)) {
				$this->Flash->success(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publication.' . $this->Publication->primaryKey => $id));
			$this->request->data = $this->Publication->find('first', $options);
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
		$this->Publication->id = $id;
		if (!$this->Publication->exists()) {
			throw new NotFoundException(__('Invalid publication'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publication->delete()) {
			$this->Flash->success(__('The publication has been deleted.'));
		} else {
			$this->Flash->error(__('The publication could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
			$this->Publication->locale=Configure::read('Config.languages');

		$slideshows = $this->Publication->findAll('all');

		$this->set('publications', $publications);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Publication->exists($id)) {
			throw new NotFoundException(__('Invalid publication'));
		}
		$options = array('conditions' => array('Publication.' . $this->Publication->primaryKey => $id));
		$this->set('publication', $this->Publication->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 	$this->Publication->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Publication->create();
			$this->request->data['Publication']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Publication']['created']=date("Y-m-j H:i:s");

			if ($this->Publication->saveMany($this->request->data)) {
				$this->Flash->success(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publication could not be saved. Please, try again.'));
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
		$this->Publication->locale=Configure::read('Config.languages');

		if (!$this->Publication->exists($id)) {
			throw new NotFoundException(__('Invalid publication'));
		}
		if ($this->request->is(array('post', 'put'))) {
		     $this->request->data['Publication']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Publication']['created']=date("Y-m-j H:i:s");

			if ($this->Publication->saveMany($this->request->data)) {
				$this->Flash->success(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publication.' . $this->Publication->primaryKey => $id));
			$this->request->data = $this->Publication->findAll('first', $options);
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
		$this->Publication->id = $id;
		if (!$this->Publication->exists()) {
			throw new NotFoundException(__('Invalid publication'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publication->delete()) {
			$this->Flash->success(__('The publication has been deleted.'));
		} else {
			$this->Flash->error(__('The publication could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
