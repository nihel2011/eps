<?php
App::uses('AppController', 'Controller');
/**
 * Adherperiodes Controller
 *
 * @property Adherperiode $Adherperiode
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AdherperiodesController extends AppController {

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
/*		$this->Adherperiode->recursive = 0;
		$this->set('adherperiodes', $this->Paginator->paginate());
*/		
		
					$this->Adherperiode->locale=Configure::read('Config.languages');
		
		  $adherperiodes = $this->Adherperiode->findAll('all',array('conditions'=>array('Adherperiode.etat'=>'Y')));


		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('adherperiodes', $adherperiodes);
	}
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Adherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		$options = array('conditions' => array('Adherperiode.' . $this->Adherperiode->primaryKey => $id));
		$this->set('adherperiode', $this->Adherperiode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Adherperiode->create();
			if ($this->Adherperiode->save($this->request->data)) {
				$this->Flash->success(__('The adherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherperiode could not be saved. Please, try again.'));
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
		if (!$this->Adherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adherperiode->save($this->request->data)) {
				$this->Flash->success(__('The adherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherperiode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adherperiode.' . $this->Adherperiode->primaryKey => $id));
			$this->request->data = $this->Adherperiode->find('first', $options);
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
		$this->Adherperiode->id = $id;
		if (!$this->Adherperiode->exists()) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adherperiode->delete()) {
			$this->Flash->success(__('The adherperiode has been deleted.'));
		} else {
			$this->Flash->error(__('The adherperiode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Adherperiode->recursive = 0;
		$this->set('adherperiodes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Adherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		$options = array('conditions' => array('Adherperiode.' . $this->Adherperiode->primaryKey => $id));
		$this->set('adherperiode', $this->Adherperiode->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Adherperiode->create();
			if ($this->Adherperiode->save($this->request->data)) {
				$this->Flash->success(__('The adherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherperiode could not be saved. Please, try again.'));
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
		if (!$this->Adherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adherperiode->save($this->request->data)) {
				$this->Flash->success(__('The adherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherperiode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adherperiode.' . $this->Adherperiode->primaryKey => $id));
			$this->request->data = $this->Adherperiode->find('first', $options);
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
		$this->Adherperiode->id = $id;
		if (!$this->Adherperiode->exists()) {
			throw new NotFoundException(__('Invalid adherperiode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adherperiode->delete()) {
			$this->Flash->success(__('The adherperiode has been deleted.'));
		} else {
			$this->Flash->error(__('The adherperiode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
