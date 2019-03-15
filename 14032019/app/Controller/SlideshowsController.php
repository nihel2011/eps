<?php
App::uses('AppController', 'Controller');
/**
 * Slideshows Controller
 *
 * @property Slideshow $Slideshow
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class SlideshowsController extends AppController {

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
	$this->Slideshow->locale=Configure::read('Config.languages');

		$slideshows = $this->Slideshow->findAll('all');
		$this->set('slideshows', $slideshows);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
		$this->set('slideshow', $this->Slideshow->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Slideshow->create();
			if ($this->Slideshow->save($this->request->data)) {
				$this->Flash->success(__('The slideshow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
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
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Slideshow->save($this->request->data)) {
				$this->Flash->success(__('The slideshow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
			$this->request->data = $this->Slideshow->find('first', $options);
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
		$this->Slideshow->id = $id;
		if (!$this->Slideshow->exists()) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Slideshow->delete()) {
			$this->Flash->success(__('The slideshow has been deleted.'));
		} else {
			$this->Flash->error(__('The slideshow could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
			$this->Slideshow->locale=Configure::read('Config.languages');

		$slideshows = $this->Slideshow->findAll('all');

		$this->set('slideshows', $slideshows);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
		$this->set('slideshow', $this->Slideshow->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 		$this->Slideshow->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {

			$this->Slideshow->create();
			$this->request->data['Slideshow']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Slideshow']['created']=date("Y-m-j H:i:s");
			
			if ($this->Slideshow->saveMany($this->request->data)) {
				$this->Flash->success(__('The slideshow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
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
			 		$this->Slideshow->locale=Configure::read('Config.languages');

		if (!$this->Slideshow->exists($id)) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Slideshow']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Slideshow']['modify']=date("Y-m-j H:i:s");
			if ($this->Slideshow->saveMany($this->request->data)) {
				$this->Flash->success(__('The slideshow has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Slideshow.' . $this->Slideshow->primaryKey => $id));
			$this->request->data = $this->Slideshow->findAll('first', $options);
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
		$this->Slideshow->id = $id;
		if (!$this->Slideshow->exists()) {
			throw new NotFoundException(__('Invalid slideshow'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Slideshow->delete()) {
			$this->Flash->success(__('The slideshow has been deleted.'));
		} else {
			$this->Flash->error(__('The slideshow could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
