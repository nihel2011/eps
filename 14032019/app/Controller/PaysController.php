<?php
App::uses('AppController', 'Controller');
/**
 * Pays Controller
 *
 * @property Pay $Pay
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaysController extends AppController {

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
		$this->Pay->recursive = 0;
		$this->set('pays', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
		$this->set('pay', $this->Pay->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Pay->create();
			if ($this->Pay->save($this->request->data)) {
				$this->Flash->success(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pay could not be saved. Please, try again.'));
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
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pay->save($this->request->data)) {
				$this->Flash->success(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
			$this->request->data = $this->Pay->find('first', $options);
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
		$this->Pay->id = $id;
		if (!$this->Pay->exists()) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pay->delete()) {
			$this->Flash->success(__('The pay has been deleted.'));
		} else {
			$this->Flash->error(__('The pay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Pay->recursive = 0;
		$this->set('pays', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
		$this->set('pay', $this->Pay->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Pay->create();
			if ($this->Pay->save($this->request->data)) {
				$this->Flash->success(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pay could not be saved. Please, try again.'));
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
		if (!$this->Pay->exists($id)) {
			throw new NotFoundException(__('Invalid pay'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pay->save($this->request->data)) {
				$this->Flash->success(__('The pay has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The pay could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pay.' . $this->Pay->primaryKey => $id));
			$this->request->data = $this->Pay->find('first', $options);
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
		$this->Pay->id = $id;
		if (!$this->Pay->exists()) {
			throw new NotFoundException(__('Invalid pay'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Pay->delete()) {
			$this->Flash->success(__('The pay has been deleted.'));
		} else {
			$this->Flash->error(__('The pay could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
