<?php
App::uses('AppController', 'Controller');
/**
 * Subventions Controller
 *
 * @property Subvention $Subvention
 * @property PaginatorComponent $Paginator
 */
class SubventionsController extends AppController {

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
/*		$this->Subvention->recursive = 0;
		$this->set('subventions', $this->Paginator->paginate());
*/	

$this->Subvention->locale=Configure::read('Config.languages');
		
		  $subvention = $this->Subvention->findAll('all',array('conditions'=>array('Subvention.etat'=>'Y')));


		 $options1 = array('conditions' => array('Menu.id' => '6'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('subvention', $subvention);


}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Subvention->exists($id)) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		$options = array('conditions' => array('Subvention.' . $this->Subvention->primaryKey => $id));
		$this->set('subvention', $this->Subvention->find('first', $options));
	
/*
	$this->Subvention->locale=Configure::read('Config.languages');
		
		 $subvention = $this->Subvention->findAll('first',array('conditions'=>array('Subvention.etat'=>'Y')));
		 $options1 = array('conditions' => array('Menu.id' => '6'));
		$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('subvention', $subvention);
*/



}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Subvention->create();
			if ($this->Subvention->save($this->request->data)) {
				$this->Flash->success(__('The subvention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subvention could not be saved. Please, try again.'));
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
		if (!$this->Subvention->exists($id)) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Subvention->save($this->request->data)) {
				$this->Flash->success(__('The subvention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subvention could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subvention.' . $this->Subvention->primaryKey => $id));
			$this->request->data = $this->Subvention->find('first', $options);
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
		$this->Subvention->id = $id;
		if (!$this->Subvention->exists()) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subvention->delete()) {
			$this->Flash->success(__('The subvention has been deleted.'));
		} else {
			$this->Flash->error(__('The subvention could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
/*		$this->Subvention->recursive = 0;
		$this->set('subventions', $this->Paginator->paginate());
*/

$this->Subvention->locale=Configure::read('Config.languages');

		$subvention = $this->Subvention->findAll('all');
		$this->set('subventions', $subvention);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Subvention->exists($id)) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		$options = array('conditions' => array('Subvention.' . $this->Subvention->primaryKey => $id));
		$this->set('subvention', $this->Subvention->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
$this->Subvention->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Subvention->create();
			$this->request->data['Subvention']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Subvention']['created']=date("Y-m-j H:i:s");

			if ($this->Subvention->saveMany($this->request->data)) {
				$this->Flash->success(__('The subvention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subvention could not be saved. Please, try again.'));
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
		$this->Subvention->locale=Configure::read('Config.languages');

		if (!$this->Subvention->exists($id)) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Subvention']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Subvention']['created']=date("Y-m-j H:i:s");
			if ($this->Subvention->saveMany($this->request->data)) {
				$this->Flash->success(__('The subvention has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The subvention could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Subvention.' . $this->Subvention->primaryKey => $id));
			$this->request->data = $this->Subvention->findAll('first', $options);
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
		$this->Subvention->id = $id;
		if (!$this->Subvention->exists()) {
			throw new NotFoundException(__('Invalid subvention'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Subvention->delete()) {
			$this->Flash->success(__('The subvention has been deleted.'));
		} else {
			$this->Flash->error(__('The subvention could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
