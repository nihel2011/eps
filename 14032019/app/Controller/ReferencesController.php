<?php
App::uses('AppController', 'Controller');
/**
 * References Controller
 *
 * @property Reference $Reference
 * @property PaginatorComponent $Paginator
 */
class ReferencesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Reference->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Reference.etat' => 'Y'),'order' => array('Reference.id DESC'));
	$references= $this->Reference->findAll('all', $options);
	$this->loadModel('Menu');
				$this->Menu->locale=Configure::read('Config.languages');

			 $options1 = array('conditions' => array('Menu.id' => '4'));
	$menu= $this->Menu->findAll('first', $options1);

		$this->set('references',$references);
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
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
		$this->set('reference', $this->Reference->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {

		if ($this->request->is('post')) {

			$this->Reference->create();
			if ($this->Reference->save($this->request->data,false)) {
				$this->Flash->success(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reference could not be saved. Please, try again.'));
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
	 $this->Reference->locale=Configure::read('Config.languages');

		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reference->saveMany($this->request->data)) {
				$this->Flash->success(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reference could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
			$this->request->data = $this->Reference->findAll('first', $options);
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
		$this->Reference->id = $id;
		if (!$this->Reference->exists()) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reference->delete()) {
			$this->Flash->success(__('The reference has been deleted.'));
		} else {
			$this->Flash->error(__('The reference could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


public function reference ()
{
	$options = array('conditions' => array('Reference.etat' => $Y),'order' => array('Reference.orderm DESC', 'Menu.orderm DESC'));
	$references= $this->Reference->find('all', $options);
		
			 

		$this->set('references',$references);
		 
		//return $categorys;
}



/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
			 $this->Reference->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Reference.etat' => 'Y'),'order' => array('Reference.id DESC'));
	$references= $this->Reference->findAll('all', $options);
			$this->set('references', $references);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
		$this->set('reference', $this->Reference->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 
		if ($this->request->is('post')) {
			$this->Reference->create();
				$this->request->data['Reference']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Reference']['created']=date("Y-m-j H:i:s");
			if ($this->Reference->saveMany($this->request->data)) {
				$this->Flash->success(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reference could not be saved. Please, try again.'));
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
					 $this->Reference->locale=Configure::read('Config.languages');

		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid reference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Reference']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Reference']['modify']=date("Y-m-j H:i:s");
			if ($this->Reference->saveMany($this->request->data)) {
				$this->Flash->success(__('The reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The reference could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
			$this->request->data = $this->Reference->findAll('first', $options);
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
		$this->Reference->id = $id;
		if (!$this->Reference->exists()) {
			throw new NotFoundException(__('Invalid reference'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reference->delete()) {
			$this->Flash->success(__('The reference has been deleted.'));
		} else {
			$this->Flash->error(__('The reference could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
