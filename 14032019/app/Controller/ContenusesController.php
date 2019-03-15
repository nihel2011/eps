<?php
App::uses('AppController', 'Controller');
/**
 * Contenuses Controller
 *
 * @property Contenus $Contenus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class ContenusesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session','Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
 
  public function change_long($lang = null)
 {
	 $this->Session->write('lang',$lang);
	 $this->initialize_lang();
	 return $this->redirect('/');
	 
	 
	 }
	 
	 
	 
	 	
		
		
	 
	 
	public function index() {
	$this->Contenus->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Contenus.etat' => 'Y'));
	$contenuses= $this->Contenus->findAll('first', $options);

			$this->set('contenuses', $contenuses);
$this->loadModel('Menu');
	$this->Menu->locale=Configure::read('Config.languages');
			 $options1 = array('conditions' => array('Menu.id' => '2'));
	$menu= $this->Menu->findAll('first', $options1);
		$this->set('menu',$menu);
	}



	public function detail_contenuses($contenus_id) {
						$this->Contenus->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Contenus.id' => $contenus_id));
	$contenus2= $this->Contenus->findAll('first', $options);
	 $this->set('contenus2', $contenus2);
$this->loadModel('Menu');
			$this->Menu->locale=Configure::read('Config.languages');
			 $options1 = array('conditions' => array('Menu.id' => '2'));
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
		if (!$this->Contenus->exists($id)) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		$options = array('conditions' => array('Contenus.' . $this->Contenus->primaryKey => $id));
		$this->set('contenus', $this->Contenus->find('first', $options));
	}
	
	public function liste_contenu($id = null) {
				$this->loadModel('Menu');

	$this->Menu->locale=Configure::read('Config.languages');
		$options2 = array('conditions' => array('Menu.id'=> $id));
		$this->set('menu', $this->Menu->findAll('first', $options2));

		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid contenus'));
		}
			$this->Contenus->locale=Configure::read('Config.languages');

		$options = array('conditions' => array('Contenus.menu_id'=>$id));
		$cont= $this->Contenus->findAll('all', $options);
		
		$this->set('contenus', $cont);
			$this->set('id', $id);	
	}	
	
	

	
 
/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Contenus->create();
			if ($this->Contenus->save($this->request->data)) {
				$this->Flash->success(__('The contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contenus could not be saved. Please, try again.'));
			}
		}
		$menus = $this->Contenus->Menu->find('list');
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
		if (!$this->Contenus->exists($id)) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contenus->save($this->request->data)) {
				$this->Flash->success(__('The contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contenus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contenus.' . $this->Contenus->primaryKey => $id));
			$this->request->data = $this->Contenus->find('first', $options);
		}
		$menus = $this->Contenus->Menu->find('list');
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
		$this->Contenus->id = $id;
		if (!$this->Contenus->exists()) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contenus->delete()) {
			$this->Flash->success(__('The contenus has been deleted.'));
		} else {
			$this->Flash->error(__('The contenus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
			$this->Contenus->locale=Configure::read('Config.languages');

		$contenuses = $this->Contenus->findAll('all');

		$this->set('contenuses', $contenuses);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contenus->exists($id)) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		$options = array('conditions' => array('Contenus.' . $this->Contenus->primaryKey => $id));
		$this->set('contenus', $this->Contenus->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 $this->Contenus->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Contenus->create();
			 
			$this->request->data['Contenus']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Contenus']['created']=date("Y-m-j H:i:s");
			if ($this->Contenus->saveMany($this->request->data)) {
				$this->Flash->success(__('The contenus has been saved.'));
			 	return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contenus could not be saved. Please, try again.'));
			}
		}
		 $this->Contenus->Menu->locale = Configure::read('Config.language');

			$menus = $this->Contenus->Menu->find('list',array('fields'=>array('id','name')));
		
		$this->set(compact('menus'));
		
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
			 $this->Contenus->locale=Configure::read('Config.languages');

		if (!$this->Contenus->exists($id)) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Contenus']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Contenus']['modify']=date("Y-m-j H:i:s");
			if ($this->Contenus->saveMany($this->request->data)) {
				$this->Flash->success(__('The contenus has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contenus could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contenus.' . $this->Contenus->primaryKey => $id));
			$this->request->data = $this->Contenus->findAll('first', $options);
		}
		 
			 $this->Contenus->Menu->locale = Configure::read('Config.language');

			$menus = $this->Contenus->Menu->find('list',array('fields'=>array('id','name')));	
					$this->set(compact('menus'));

			}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Contenus->id = $id;
		if (!$this->Contenus->exists()) {
			throw new NotFoundException(__('Invalid contenus'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contenus->delete()) {
			$this->Flash->success(__('The contenus has been deleted.'));
		} else {
			$this->Flash->error(__('The contenus could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
