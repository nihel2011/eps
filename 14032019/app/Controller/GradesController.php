<?php
App::uses('AppController', 'Controller');
/**
 * Grades Controller
 *
 * @property Grade $Grade
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GradesController extends AppController {

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
		$this->Grade->recursive = 0;
		$this->set('grades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
		$this->set('grade', $this->Grade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The grade could not be saved. Please, try again.'));
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
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The grade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
			$this->request->data = $this->Grade->find('first', $options);
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
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grade->delete()) {
			$this->Flash->success(__('The grade has been deleted.'));
		} else {
			$this->Flash->error(__('The grade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Grade->recursive = 0;
		$this->set('grades', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
		$this->set('grade', $this->Grade->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Grade->create();
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The grade could not be saved. Please, try again.'));
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
		if (!$this->Grade->exists($id)) {
			throw new NotFoundException(__('Invalid grade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Grade->save($this->request->data)) {
				$this->Flash->success(__('The grade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The grade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Grade.' . $this->Grade->primaryKey => $id));
			$this->request->data = $this->Grade->find('first', $options);
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
		$this->Grade->id = $id;
		if (!$this->Grade->exists()) {
			throw new NotFoundException(__('Invalid grade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Grade->delete()) {
			$this->Flash->success(__('The grade has been deleted.'));
		} else {
			$this->Flash->error(__('The grade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
