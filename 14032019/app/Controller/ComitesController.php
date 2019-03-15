<?php
App::uses('AppController', 'Controller');
/**
 * Comites Controller
 *
 * @property Comite $Comite
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class ComitesController extends AppController {

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
/*		$this->Comite->recursive = 0;
		$this->set('comites', $this->Paginator->paginate());
*/

	$this->Comite->locale=Configure::read('Config.languages');
		
		  $comite = $this->Comite->findAll('all',array('conditions'=>array('Comite.etat'=>'C')));


		 $options1 = array('conditions' => array('Menu.id' => '2'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('comite', $comite);
			}
			



			
			
			
			
			
	

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($idc = null) {
	/*	if (!$this->Comite->exists($id)) {
			throw new NotFoundException(__('Invalid comite'));
		}
		$options = array('conditions' => array('Comite.' . $this->Comite->primaryKey => $id));
		$this->set('comite', $this->Comite->find('first', $options));
	}*/

	$this->Comite->locale=Configure::read('Config.languages');
		
		  $comite = $this->Comite->findAll('first',array('conditions'=>array('Comite.etat'=>'C', 'Comite.id' => $idf)));
//print_r($comite);

		 $options1 = array('conditions' => array('Menu.id' => '2'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('comite', $comite);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Comite->create();
			if ($this->Comite->save($this->request->data)) {
				$this->Flash->success(__('The comite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comite could not be saved. Please, try again.'));
			}
		}
			$this->Comite->Menu->locale = Configure::read('Config.language');

		$menus = $this->Comite->Menu->find('list');
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
		if (!$this->Comite->exists($id)) {
			throw new NotFoundException(__('Invalid comite'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comite->save($this->request->data)) {
				$this->Flash->success(__('The comite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comite.' . $this->Comite->primaryKey => $id));
			$this->request->data = $this->Comite->find('first', $options);
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
		$this->Comite->id = $id;
		if (!$this->Comite->exists()) {
			throw new NotFoundException(__('Invalid comite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comite->delete()) {
			$this->Flash->success(__('The comite has been deleted.'));
		} else {
			$this->Flash->error(__('The comite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
/*		$this->Comite->recursive = 0;
		$this->set('comites', $this->Paginator->paginate());
*/
$this->Comite->locale=Configure::read('Config.languages');

		$comite = $this->Comite->findAll('all');
		$this->set('comites', $comite);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Comite->exists($id)) {
			throw new NotFoundException(__('Invalid comite'));
		}
		$options = array('conditions' => array('Comite.' . $this->Comite->primaryKey => $id));
		$this->set('comite', $this->Comite->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
      $this->layout = 'admin';
 $this->Comite->locale=Configure::read('Config.languages');
 	if ($this->request->is('post')) {
			$this->Comite->create();
				$this->request->data['Comite']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Comite']['created']=date("Y-m-j H:i:s");
			if ($this->Comite->saveMany($this->request->data)) {
				
				$this->Flash->success(__('The comite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comite could not be saved. Please, try again.'));
			}
		}
		
		 $this->loadModel('Grade');
		$grade_id = $this->Grade->find('list',array('fields'=>'grade'));
		//print_r($categorie_id);
		
		$this->set(compact('grade_id'));
	}
	
		public function affiche_comite($idc=null)
  {  
  $this->Comite->locale=Configure::read('Config.languages');
	 
	  $options = array('conditions' => array('Comite.id' => $idc));
		$comite=$this->Comite->findall('first', $options);
		
		if(count($comite)>0)
		return $comite;
		
  }

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
  $this->Comite->locale=Configure::read('Config.languages');
		if (!$this->Comite->exists($id)) {
			throw new NotFoundException(__('Invalid comite'));
		}
		if ($this->request->is(array('post', 'put'))) {
		    $this->request->data['Comite']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Comite']['modify']=date("Y-m-j H:i:s");

			if ($this->Comite->save($this->request->data)) {
				$this->Flash->success(__('The comite has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The comite could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Comite.' . $this->Comite->primaryKey => $id));
			$this->request->data = $this->Comite->find('first', $options);
		}
		$this->loadModel('Grade');
		$grade_id = $this->Grade->find('list',array('fields'=>'grade'));
		//print_r($categorie_id);
		
		$this->set(compact('grade_id'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Comite->id = $id;
		if (!$this->Comite->exists()) {
			throw new NotFoundException(__('Invalid comite'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Comite->delete()) {
			$this->Flash->success(__('The comite has been deleted.'));
		} else {
			$this->Flash->error(__('The comite could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
