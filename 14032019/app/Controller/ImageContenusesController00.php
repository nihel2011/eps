<?php
App::uses('AppController', 'Controller');
/**
 * ImageContenuses Controller
 *
 * @property ImageContenus $ImageContenus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ImageContenusesController extends AppController {

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
		$this->ImageContenus->recursive = 0;
		$this->set('imageContenuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ImageContenus->exists($id)) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		$options = array('conditions' => array('ImageContenus.' . $this->ImageContenus->primaryKey => $id));
		$this->set('imageContenus', $this->ImageContenus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->ImageContenus->create();
			if ($this->ImageContenus->save($this->request->data)) {
				$this->Flash->success(__('The image contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The image contenus could not be saved. Please, try again.'));
			}
		}
		$contenus = $this->ImageContenus->Contenu->find('list');
		$this->set(compact('contenus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ImageContenus->exists($id)) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ImageContenus->save($this->request->data)) {
				$this->Flash->success(__('The image contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The image contenus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImageContenus.' . $this->ImageContenus->primaryKey => $id));
			$this->request->data = $this->ImageContenus->find('first', $options);
		}
		$contenus = $this->ImageContenus->Contenu->find('list');
		$this->set(compact('contenus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ImageContenus->id = $id;
		if (!$this->ImageContenus->exists()) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ImageContenus->delete()) {
			$this->Flash->success(__('The image contenus has been deleted.'));
		} else {
			$this->Flash->error(__('The image contenus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->ImageContenus->recursive = 0;
		$this->set('imageContenuses', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->ImageContenus->exists($id)) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		$options = array('conditions' => array('ImageContenus.' . $this->ImageContenus->primaryKey => $id));
		$this->set('imageContenus', $this->ImageContenus->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->ImageContenus->create();
			if ($this->ImageContenus->save($this->request->data)) {
				$this->Flash->success(__('The image contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The image contenus could not be saved. Please, try again.'));
			}
		}
		$contenus = $this->ImageContenus->Contenu->find('list');
		$this->set(compact('contenus'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->ImageContenus->exists($id)) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ImageContenus->save($this->request->data)) {
				$this->Flash->success(__('The image contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The image contenus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ImageContenus.' . $this->ImageContenus->primaryKey => $id));
			$this->request->data = $this->ImageContenus->find('first', $options);
		}
		$contenus = $this->ImageContenus->Contenu->find('list');
		$this->set(compact('contenus'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->ImageContenus->id = $id;
		if (!$this->ImageContenus->exists()) {
			throw new NotFoundException(__('Invalid image contenus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ImageContenus->delete()) {
			$this->Flash->success(__('The image contenus has been deleted.'));
		} else {
			$this->Flash->error(__('The image contenus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
