<?php
App::uses('AppController', 'Controller');
/**
 * Partenaires Controller
 *
 * @property Partenaire $Partenaire
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class PartenairesController extends AppController {

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
		
			 			$this->Partenaire->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Partenaire.etat' => 'Y'));
	$partenaires= $this->Partenaire->findAll('all', $options);
			$this->set('partenaires', $partenaires);
			
			

$this->loadModel('Menu');
			$this->Menu->locale=Configure::read('Config.languages');

			 $options1 = array('conditions' => array('Menu.id' => '16'));
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
		if (!$this->Partenaire->exists($id)) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		$options = array('conditions' => array('Partenaire.' . $this->Partenaire->primaryKey => $id));
		$this->set('partenaire', $this->Partenaire->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Partenaire->create();
			if ($this->Partenaire->save($this->request->data)) {
				$this->Flash->success(__('The partenaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
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
		if (!$this->Partenaire->exists($id)) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Partenaire->save($this->request->data)) {
				$this->Flash->success(__('The partenaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partenaire.' . $this->Partenaire->primaryKey => $id));
			$this->request->data = $this->Partenaire->find('first', $options);
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
		$this->Partenaire->id = $id;
		if (!$this->Partenaire->exists()) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Partenaire->delete()) {
			$this->Flash->success(__('The partenaire has been deleted.'));
		} else {
			$this->Flash->error(__('The partenaire could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		
		$this->Partenaire->locale=Configure::read('Config.languages');

		$partenaires = $this->Partenaire->findAll('all');

		$this->set('partenaires', $partenaires);
		 
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Partenaire->exists($id)) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		$options = array('conditions' => array('Partenaire.' . $this->Partenaire->primaryKey => $id));
		$this->set('partenaire', $this->Partenaire->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 $this->Partenaire->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->request->data['Partenaire']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Partenaire']['created']=date("Y-m-j H:i:s");
			$this->Partenaire->create();
			if ($this->Partenaire->saveMany($this->request->data)) {
				$this->Flash->success(__('The partenaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
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
		 $this->Partenaire->locale=Configure::read('Config.languages');
		if (!$this->Partenaire->exists($id)) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Partenaire']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Partenaire']['modify']=date("Y-m-j H:i:s");
			if ($this->Partenaire->saveMany($this->request->data)) {
				$this->Flash->success(__('The partenaire has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The partenaire could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partenaire.' . $this->Partenaire->primaryKey => $id));
			$this->request->data = $this->Partenaire->findAll('first', $options);
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
		$this->Partenaire->id = $id;
		if (!$this->Partenaire->exists()) {
			throw new NotFoundException(__('Invalid partenaire'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Partenaire->delete()) {
			$this->Flash->success(__('The partenaire has been deleted.'));
		} else {
			$this->Flash->error(__('The partenaire could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
