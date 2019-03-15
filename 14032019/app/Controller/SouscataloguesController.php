<?php
App::uses('AppController', 'Controller');
/**
 * Souscatalogues Controller
 *
 * @property Souscatalogue $Souscatalogue
 * @property PaginatorComponent $Paginator
 */
class SouscataloguesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Session','Paginator','Flash','BotDetect.Captcha' => array(
      'captchaConfig' => 'ExampleCaptcha'
    ));

/**
 * index method
 *
 * @return void
 */
	public function index() {
			$this->Souscatalogue->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Souscatalogue.etat' => 'Y'));

	$souscatalogue= $this->Souscatalogue->findAll('all', $options);

			$this->set('souscatalogues', $souscatalogue);

	$this->loadModel('Menu');


	$this->Menu->locale=Configure::read('Config.languages');



			 $options1 = array('conditions' => array('Menu.id' => '17'));

	$menu= $this->Menu->findAll('first', $options1);

 

		$this->set('menu',$menu);
		
		}
		public function detail($ida=null) {
	/*echo $ida;*/
	$this->Souscatalogue->locale=Configure::read('Config.languages');
		 $options1 = array('conditions' => array('Menu.id' => '17'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		
		$souscatalogue = $this->Souscatalogue->findAll('first',array('conditions'=>array('Souscatalogue.etat'=>'Y', 'Souscatalogue.id'=>$ida)));
		//print_r ($souscatalogue);
		$this->set('souscatalogue', $souscatalogue);
		/*echo count ($Souscatalogue7);*/
		
			 $this->loadModel('Formation');
		 
		 $this->Formation->locale=Configure::read('Config.languages');

		$id_formation = $this->Formation->find('list',array('fields'=>array('id','titre')));
		//print_r($categorie_id);
		
		$this->set(compact('id_formation'));

	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Souscatalogue->exists($id)) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		$options = array('conditions' => array('Souscatalogue.' . $this->Souscatalogue->primaryKey => $id));
		$this->set('souscatalogue', $this->Souscatalogue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Souscatalogue->create();
			if ($this->Souscatalogue->save($this->request->data)) {
				$this->Flash->success(__('The souscatalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The souscatalogue could not be saved. Please, try again.'));
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
		if (!$this->Souscatalogue->exists($id)) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Souscatalogue->save($this->request->data)) {
				$this->Flash->success(__('The souscatalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The souscatalogue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Souscatalogue.' . $this->Souscatalogue->primaryKey => $id));
			$this->request->data = $this->Souscatalogue->find('first', $options);
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
		$this->Souscatalogue->id = $id;
		if (!$this->Souscatalogue->exists()) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Souscatalogue->delete()) {
			$this->Flash->success(__('The souscatalogue has been deleted.'));
		} else {
			$this->Flash->error(__('The souscatalogue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
					$this->Souscatalogue->locale=Configure::read('Config.languages');
					$souscatalogue = $this->Souscatalogue->findAll('all');

		$this->set('souscatalogues', $souscatalogue);

	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Souscatalogue->exists($id)) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		$options = array('conditions' => array('Souscatalogue.' . $this->Souscatalogue->primaryKey => $id));
		$this->set('souscatalogue', $this->Souscatalogue->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
					$this->Souscatalogue->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Souscatalogue->create();
						$this->request->data['Souscatalogue']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Souscatalogue']['created']=date("Y-m-j H:i:s");

			if ($this->Souscatalogue->saveMany($this->request->data)) {
				$this->Flash->success(__('The souscatalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The souscatalogue could not be saved. Please, try again.'));
			}
		}
		
			 $this->loadModel('Catalogue');

		  $this->Catalogue->locale=Configure::read('Config.languages');
		$id_catalogue = $this->Catalogue->find('list',array('fields'=>array('id','name')));

		//print_r($categorie_id);

		

		$this->set(compact('id_catalogue'));
	}
	

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
							$this->Souscatalogue->locale=Configure::read('Config.languages');

		if (!$this->Souscatalogue->exists($id)) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Souscatalogue->saveMany($this->request->data)) {
			$this->request->data['Souscatalogue']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Souscatalogue']['created']=date("Y-m-j H:i:s");

				$this->Flash->success(__('The souscatalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The souscatalogue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Souscatalogue.' . $this->Souscatalogue->primaryKey => $id));
			$this->request->data = $this->Souscatalogue->findAll('first', $options);
		}
		
		
		 $this->loadModel('Catalogue');

		  $this->Catalogue->locale=Configure::read('Config.languages');
		$id_catalogue = $this->Catalogue->find('list',array('fields'=>array('id','name')));

		//print_r($categorie_id);

		

		$this->set(compact('id_catalogue'));
			 
	}
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Souscatalogue->id = $id;
		if (!$this->Souscatalogue->exists()) {
			throw new NotFoundException(__('Invalid souscatalogue'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Souscatalogue->delete()) {
			$this->Flash->success(__('The souscatalogue has been deleted.'));
		} else {
			$this->Flash->error(__('The souscatalogue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
