<?php
App::uses('AppController', 'Controller');
/**
 * Statistiques Controller
 *
 * @property Statistique $Statistique
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class StatistiquesController extends AppController {

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
		$this->Statistique->recursive = 0;
		$this->set('statistiques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Statistique->exists($id)) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		$options = array('conditions' => array('Statistique.' . $this->Statistique->primaryKey => $id));
		$this->set('statistique', $this->Statistique->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Statistique->create();
			if ($this->Statistique->save($this->request->data)) {
				$this->Flash->success(__('The statistique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The statistique could not be saved. Please, try again.'));
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
		if (!$this->Statistique->exists($id)) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Statistique->save($this->request->data)) {
				$this->Flash->success(__('The statistique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The statistique could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Statistique.' . $this->Statistique->primaryKey => $id));
			$this->request->data = $this->Statistique->find('first', $options);
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
		$this->Statistique->id = $id;
		if (!$this->Statistique->exists()) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Statistique->delete()) {
			$this->Flash->success(__('The statistique has been deleted.'));
		} else {
			$this->Flash->error(__('The statistique could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Statistique->locale=Configure::read('Config.languages');
		 
		
$options = array('conditions' => array('Statistique.etat' => 'Y'),'order' => array('Statistique.id DESC'));
	$statistiques= $this->Statistique->findAll('all', $options);

		$this->set('statistiques', $statistiques);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Statistique->exists($id)) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		$options = array('conditions' => array('Statistique.' . $this->Statistique->primaryKey => $id));
		$this->set('statistique', $this->Statistique->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 $this->Statistique->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Statistique->create();
				$this->request->data['Statistique']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Statistique']['created']=date("Y-m-j H:i:s");
			if ($this->Statistique->saveMany($this->request->data)) {
				$this->Flash->success(__('The statistique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The statistique could not be saved. Please, try again.'));
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
		$this->Statistique->locale=Configure::read('Config.languages');
		if (!$this->Statistique->exists($id)) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Statistique']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Statistique']['modify']=date("Y-m-j H:i:s");
			if ($this->Statistique->saveMany($this->request->data)) {
				$this->Flash->success(__('The statistique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The statistique could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Statistique.' . $this->Statistique->primaryKey => $id));
			$this->request->data = $this->Statistique->find('first', $options);
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
		$this->Statistique->id = $id;
		if (!$this->Statistique->exists()) {
			throw new NotFoundException(__('Invalid statistique'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Statistique->delete()) {
			$this->Flash->success(__('The statistique has been deleted.'));
		} else {
			$this->Flash->error(__('The statistique could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
