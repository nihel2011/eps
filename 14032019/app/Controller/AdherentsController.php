<?php
App::uses('AppController', 'Controller');
/**
 * Adherents Controller
 *
 * @property Adherent $Adherent
 * @property PaginatorComponent $Paginator
 */
class AdherentsController extends AppController {

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
/*		$this->Adherent->recursive = 0;
		$this->set('adherents', $this->Paginator->paginate());
*/


	$this->Adherent->locale=Configure::read('Config.languages');
		
		  $adherent = $this->Adherent->findAll('all',array('conditions'=>array('Adherent.etat'=>'C')));


		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('adherent', $adherent);
			}
			
			
			

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($idf = null) {
	 
		/*if (!$this->Adherent->exists($id)) {
			throw new NotFoundException(__('Invalid adherent'));
		}
		$options = array('conditions' => array('Adherent.' . $this->Adherent->primaryKey => $id));
		$this->set('adherent', $this->Adherent->find('first', $options));*/
			$this->Adherent->locale=Configure::read('Config.languages');
		
		  $adherent = $this->Adherent->findAll('first',array('conditions'=>array('Adherent.etat'=>'C', 'Adherent.id' => $idf)));
//print_r($adherent);

		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		$this->set('adherent', $adherent);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
	  $this->Adherent->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Adherent->create();
			if ($this->Adherent->saveMany($this->request->data)) {
				$this->Flash->success(__('The adherent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherent could not be saved. Please, try again.'));
			}
		}
		$this->Adherent->Menu->locale = Configure::read('Config.language');

		$menus = $this->Adherent->Menu->find('list');
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
		if (!$this->Adherent->exists($id)) {
			throw new NotFoundException(__('Invalid adherent'));
		}
			$this->Adherent->locale=Configure::read('Config.languages');

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Adherent->saveMany($this->request->data)) {
				$this->Flash->success(__('The adherent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adherent.' . $this->Adherent->primaryKey => $id));
			$this->request->data = $this->Adherent->find('first', $options);
		}
		
		 $this->Adherent->Menu->locale = Configure::read('Config.language');

			$menus = $this->Adherent->Menu->find('list',array('fields'=>array('id','name')));
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
		$this->Adherent->id = $id;
		if (!$this->Adherent->exists()) {
			throw new NotFoundException(__('Invalid adherent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adherent->delete()) {
			$this->Flash->success(__('The adherent has been deleted.'));
		} else {
			$this->Flash->error(__('The adherent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
	//	$this->Adherent->recursive = 0;
		//$this->set('adherents', $this->Paginator->paginate());
		$this->Adherent->locale=Configure::read('Config.languages');

		$adherent = $this->Adherent->findAll('all');
		$this->set('adherents', $adherent);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Adherent->exists($id)) {
			throw new NotFoundException(__('Invalid adherent'));
		}
		$options = array('conditions' => array('Adherent.' . $this->Adherent->primaryKey => $id));
		$this->set('adherent', $this->Adherent->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
 $this->Adherent->locale=Configure::read('Config.languages');
 	if ($this->request->is('post')) {
			$this->Adherent->create();
				$this->request->data['Adherent']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Adherent']['created']=date("Y-m-j H:i:s");
			if ($this->Adherent->saveMany($this->request->data)) {
				
				$this->Flash->success(__('The adherent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherent could not be saved. Please, try again.'));
			}
		}
		
		 $this->loadModel('Grade');
		$grade_id = $this->Grade->find('list',array('fields'=>'grade'));
		//print_r($categorie_id);
		
		$this->set(compact('grade_id'));
	}
	
	
	
	
	
public function affiche_adherent($ida=null)
  {  
  $this->Adherent->locale=Configure::read('Config.languages');
	 
	  $options = array('conditions' => array('Adherent.id' => $ida));
		$adherentb=$this->Adherent->findall('first', $options);
		
		if(count($adherentb)>0)
		return $adherentb;
		
  }


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
			$this->Adherent->locale=Configure::read('Config.languages');

		if (!$this->Adherent->exists($id)) {
			throw new NotFoundException(__('Invalid adherent'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Adherent']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Adherent']['modify']=date("Y-m-j H:i:s");

			if ($this->Adherent->save($this->request->data)) {
				$this->Flash->success(__('The adherent has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The adherent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Adherent.' . $this->Adherent->primaryKey => $id));
			$this->request->data = $this->Adherent->find('first', $options);
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
		$this->Adherent->id = $id;
		if (!$this->Adherent->exists()) {
			throw new NotFoundException(__('Invalid adherent'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Adherent->delete()) {
			$this->Flash->success(__('The adherent has been deleted.'));
		} else {
			$this->Flash->error(__('The adherent could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
