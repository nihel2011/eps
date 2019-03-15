<?php
App::uses('AppController', 'Controller');
/**
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class MenusController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
//	public $helpers = array('Y');

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
		
		$this->Menu->recursive = 0;
		$this->set('menus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
	 
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$menu = $this->Menu->find('first', $options);
		$this->set('menu',$menu );
		return $menu;
		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Flash->success(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
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
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menu->save($this->request->data)) {
				$this->Flash->success(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			
			$this->request->data = $this->Menu->find('first', $options);
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
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Flash->success(__('The menu has been deleted.'));
		} else {
			$this->Flash->error(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
	$this->Menu->locale=Configure::read('Config.languages');

		$menus = $this->Menu->findAll('all');
		$this->set('menus', $menus);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->findAll('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 		$this->Menu->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {

			$this->Menu->create();
			$this->request->data['Menu']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Menu']['created']=date("Y-m-j H:i:s");
			//debug($this->request->data);
			if ($this->Menu->saveMany($this->request->data)) {
				$this->Flash->success(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
			}
		}
		$parent_id = $this->Menu->find('list',array('fields'=>array('id','Menu.name')));
			
			$this->set(compact('parent_id'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
				$this->Menu->locale=Configure::read('Config.languages');

		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Menu']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Menu']['modify']=date("Y-m-j H:i:s");
			if ($this->Menu->saveMany($this->request->data)) {
				$this->Flash->success(__('The menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			
			$this->request->data = $this->Menu->findAll('first', $options);
			//debug($this->request->data);
			$parent_id = $this->Menu->find('list',array('fields'=>array('id','Menu.name')));
			
			$this->set(compact('parent_id'));
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
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Flash->success(__('The menu has been deleted.'));
		} else {
			$this->Flash->error(__('The menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



public function menuformation($id=null) {
	 
			$this->Menu->locale=Configure::read('Config.languages');
			 $options1 = array('conditions' => array('Menu.parent' => $id, 'Menu.etat'=>'Y'),'order' => array('Menu.orderm ASC'));
			 $menud= $this->Menu->findAll('all', $options1);
 
			 
	/*	
		  $menua = $this->Menu->findAll('all',array('conditions'=>array('Menu.etat'=>'Y', 'parent.id'=>$id),'order' => array('Menu.orderm DESC')));
print_r($menua);
 
 break;*/
		return $menud;
		 
	}
}