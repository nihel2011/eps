<?php
App::uses('AppController', 'Controller');
/**
 * Actualites Controller
 *
 * @property Actualite $Actualite
 * @property PaginatorComponent $Paginator
 */
class ActualitesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
			$this->Actualite->locale=Configure::read('Config.languages');
		
		  $actualites = $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y', 'Actualite.type'=>'A'),'order' => array('Actualite.orderm DESC')));


		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('actualites', $actualites);
	}
	
	
	public function evenements() {
			$this->Actualite->locale=Configure::read('Config.languages');
		
		  $actualites = $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y', 'Actualite.type'=>'E'),'order' => array('Actualite.orderm DESC')));


			 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('actualites', $actualites);
	}

public function detail($id=null) {
	
	 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
			$this->Actualite->locale=Configure::read('Config.languages');
		
		$actualites = $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y', 'Actualite.id'=>$id)));
		$this->set('actualites', $actualites);
		
					$this->Actualite->locale=Configure::read('Config.languages');
		
		  $act = $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y'),'order' => array('Actualite.orderm DESC')));
 $options2 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options2);
 
		$this->set('menu',$menus);

$this->set('actualites', $act);

	
}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
		$this->set('actualite', $this->Actualite->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
	 	 $this->Actualite->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Actualite->create();
			if ($this->Actualite->saveMany($this->request->data)) {
				$this->Flash->success(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actualite could not be saved. Please, try again.'));
			}
		}
		$this->Actualite->Menu->locale = Configure::read('Config.language');

		$menus = $this->Actualite->Menu->find('list');
		$this->set(compact('menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
	$this->Actualite->locale=Configure::read('Config.languages');

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Actualite->saveMany($this->request->data)) {
				$this->Flash->success(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actualite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
			$this->request->data = $this->Actualite->findAll('first', $options);
		}
 $this->Actualite->Menu->locale = Configure::read('Config.language');

			$menus = $this->Actualite->Menu->find('list',array('fields'=>array('id','name')));
					$this->set(compact('menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Actualite->id = $id;
		if (!$this->Actualite->exists()) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actualite->delete()) {
			$this->Flash->success(__('The actualite has been deleted.'));
		} else {
			$this->Flash->error(__('The actualite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
			$this->Actualite->locale=Configure::read('Config.languages');

		$actualites = $this->Actualite->findAll('all');
		$this->set('actualites', $actualites);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
		$this->set('actualite', $this->Actualite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Actualite->create();
				$this->request->data['Actualite']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Actualite']['created']=date("Y-m-j H:i:s");
			if ($this->Actualite->saveMany($this->request->data)) {
				$this->Flash->success(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actualite could not be saved. Please, try again.'));
			}
		}
		/*$menus = $this->Actualite->Menu->findAll('list');
		$this->set(compact('menus'));*/
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
	$this->Actualite->locale=Configure::read('Config.languages');

		if (!$this->Actualite->exists($id)) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		if ($this->request->is(array('post', 'put'))) {
				$this->request->data['Actualite']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Actualite']['modify']=date("Y-m-j H:i:s");
			if ($this->Actualite->saveMany($this->request->data)) {
				$this->Flash->success(__('The actualite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The actualite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Actualite.' . $this->Actualite->primaryKey => $id));
			$this->request->data = $this->Actualite->findAll('first', $options);
		}
		/*$menus = $this->Actualite->Menu->find('list');
		$this->set(compact('menus'));*/
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Actualite->id = $id;
		if (!$this->Actualite->exists()) {
			throw new NotFoundException(__('Invalid actualite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Actualite->delete()) {
			$this->Flash->success(__('The actualite has been deleted.'));
		} else {
			$this->Flash->error(__('The actualite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
