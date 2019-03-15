<?php
App::uses('AppController', 'Controller');
/**
 * Ligneadherperiodes Controller
 *
 * @property Ligneadherperiode $Ligneadherperiode
 * @property PaginatorComponent $Paginator
 */
class LigneadherperiodesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
	public function index($idp = null) {
/*		$this->Ligneadherperiode->recursive = 0;
		$this->set('ligneadherperiodes', $this->Paginator->paginate());
*/		
if($idp==null)
		{
			$idp=0; 
		}
		 
		$this->Ligneadherperiode->locale=Configure::read('Config.languages');
		
		  $ligneadherperiodes = $this->Ligneadherperiode->findAll('all',array('conditions'=>array('Ligneadherperiode.etat'=>'Y','Ligneadherperiode.adherperiodes_id' =>$idp),'order' => array('Ligneadherperiode.orderm DESC')));


		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menua',$menus);
		 
		$this->set('ligneadherperiodes', $ligneadherperiodes);
	}
	
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ligneadherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		$options = array('conditions' => array('Ligneadherperiode.' . $this->Ligneadherperiode->primaryKey => $id));
		$this->set('ligneadherperiode', $this->Ligneadherperiode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Ligneadherperiode->create();
			if ($this->Ligneadherperiode->save($this->request->data)) {
				$this->Flash->success(__('The ligneadherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ligneadherperiode could not be saved. Please, try again.'));
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
		if (!$this->Ligneadherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ligneadherperiode->save($this->request->data)) {
				$this->Flash->success(__('The ligneadherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ligneadherperiode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ligneadherperiode.' . $this->Ligneadherperiode->primaryKey => $id));
			$this->request->data = $this->Ligneadherperiode->find('first', $options);
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
		$this->Ligneadherperiode->id = $id;
		if (!$this->Ligneadherperiode->exists()) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ligneadherperiode->delete()) {
			$this->Flash->success(__('The ligneadherperiode has been deleted.'));
		} else {
			$this->Flash->error(__('The ligneadherperiode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Ligneadherperiode->recursive = 0;
		$this->set('ligneadherperiodes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ligneadherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		$options = array('conditions' => array('Ligneadherperiode.' . $this->Ligneadherperiode->primaryKey => $id));
		$this->set('ligneadherperiode', $this->Ligneadherperiode->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 	 $this->Ligneadherperiode->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Ligneadherperiode->create();
			$this->request->data['Ligneadherperiode']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Ligneadherperiode']['created']=date("Y-m-j H:i:s");

			
			if ($this->Ligneadherperiode->saveMany($this->request->data)) {
				$this->Flash->success(__('The ligneadherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contenus could not be saved. Please, try again.'));
			}
		}
		 $this->Ligneadherperiode->Menu->locale = Configure::read('Config.language');

			$menus = $this->Ligneadherperiode->Menu->find('list',array('fields'=>array('id','name')));
		
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
	 $this->Ligneadherperiode->locale=Configure::read('Config.languages');

		if (!$this->Ligneadherperiode->exists($id)) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    $this->request->data['Ligneadherperiode']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Ligneadherperiode']['modify']=date("Y-m-j H:i:s");
			if ($this->Ligneadherperiode->saveMany($this->request->data)) {
				$this->Flash->success(__('The ligneadherperiode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The ligneadherperiode could not be saved. Please, try again.'));
			}
			} else {
			$options = array('conditions' => array('Ligneadherperiode.' . $this->Contenus->primaryKey => $id));
			$this->request->data = $this->Contenus->findAll('first', $options);
		}
		 
			 $this->Ligneadherperiode->Menu->locale = Configure::read('Config.language');

			$menus = $this->Ligneadherperiode->Menu->find('list',array('fields'=>array('id','name')));	
					$this->set(compact('menus'));

			}
		
		/*//adherperiodes_id
		 $this->loadModel('Adherperiode');
		$adherperiodes_id = $this->Adherperiode->find('list',array('fields'=>'adherperiodes_id'));
		//print_r($categorie_id);
		
		$this->set(compact('adherperiodes_id'));*/
	


/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Ligneadherperiode->id = $id;
		if (!$this->Ligneadherperiode->exists()) {
			throw new NotFoundException(__('Invalid ligneadherperiode'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ligneadherperiode->delete()) {
			$this->Flash->success(__('The ligneadherperiode has been deleted.'));
		} else {
			$this->Flash->error(__('The ligneadherperiode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
