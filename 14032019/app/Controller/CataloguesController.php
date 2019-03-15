<?php
App::uses('AppController', 'Controller');
/**
 * Catalogues Controller
 *
 * @property Catalogue $Catalogue
 * @property PaginatorComponent $Paginator
 */
class CataloguesController extends AppController {

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
		
		
	$this->Catalogue->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Catalogue.etat' => 'Y'));

	$catalogue= $this->Catalogue->findAll('all', $options);

			$this->set('catalogue', $catalogue);

$this->loadModel('Menu');


	$this->Menu->locale=Configure::read('Config.languages');



			 $options1 = array('conditions' => array('Menu.id' => '4'));

	$menu= $this->Menu->findAll('first', $options1);

 

		$this->set('menu',$menu);
		
		}
		 
	
	
	
	
/*	public function detail($id=null) {
	
	
	 $options1 = array('conditions' => array('Menu.id' => '4'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		
		$catalogues = $this->Catalogue->find('first',array('conditions'=>array('Catalogue.etat'=>'Y', 'Catalogue.id'=>$id)));
		$idm= $catalogues['Catalogue']['menu_id'];
		
			 $options2 = array('conditions' => array('Menu.id' => $idm));
	$menus2= $this->Menu->find('first', $options2);
	$idmp= $menus2['Menu']['parent'];
	
		 $options3 = array('conditions' => array('Menu.id' => $idmp));
	$menus3= $this->Menu->find('first', $options3);
	 
	
		$this->set('catalogues', $catalogues);
$this->set('menu2',$menus2);
$this->set('menu3',$menus3);
	
}
*/
public function detail($ida=null) {
	/*echo $ida;*/
	$this->Catalogue->locale=Configure::read('Config.languages');
		 $options1 = array('conditions' => array('Menu.id' => '4'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		
		$catalogue = $this->Catalogue->findAll('first',array('conditions'=>array('Catalogue.etat'=>'Y', 'Catalogue.id'=>$ida)));
		
		$this->set('catalogue', $catalogue);
		/*echo count ($catalogue7);*/
		
		$this->Souscatalogue->locale=Configure::read('Config.languages');
		$souscatalogue = $this->Souscatalogue->findAll('all',array('conditions'=>array('Souscatalogue.etat'=>'Y', 'Souscatalogue.id'=>$ida)));
		
		$this->set('souscatalogue', $souscatalogue);

	
	}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Catalogue->exists($id)) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		$options = array('conditions' => array('Catalogue.' . $this->Catalogue->primaryKey => $id));
		$this->set('catalogue', $this->Catalogue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Catalogue->create();
			if ($this->Catalogue->save($this->request->data)) {
				$this->Flash->success(__('The catalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
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
		if (!$this->Catalogue->exists($id)) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Catalogue->save($this->request->data)) {
				$this->Flash->success(__('The catalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Catalogue.' . $this->Catalogue->primaryKey => $id));
			$this->request->data = $this->Catalogue->find('first', $options);
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
		$this->Catalogue->id = $id;
		if (!$this->Catalogue->exists()) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Catalogue->delete()) {
			$this->Flash->success(__('The catalogue has been deleted.'));
		} else {
			$this->Flash->error(__('The catalogue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		
					$this->Catalogue->locale=Configure::read('Config.languages');
					$catalogue = $this->Catalogue->findAll('all');

		$this->set('catalogue', $catalogue);
					

		
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Catalogue->exists($id)) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		$options = array('conditions' => array('Catalogue.' . $this->Catalogue->primaryKey => $id));
		$this->set('catalogue', $this->Catalogue->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	 	  $this->Catalogue->locale=Configure::read('Config.languages');

		if ($this->request->is('post')) {
			$this->Catalogue->create();
			$this->request->data['Catalogue']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Catalogue']['created']=date("Y-m-j H:i:s");
			if ($this->Catalogue->saveMany($this->request->data)) {
				$this->Flash->success(__('The catalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
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
			 	  $this->Catalogue->locale=Configure::read('Config.languages');
		if (!$this->Catalogue->exists($id)) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Catalogue->saveMany($this->request->data)) {
			$this->request->data['Catalogue']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Catalogue']['created']=date("Y-m-j H:i:s");
				$this->Flash->success(__('The catalogue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Catalogue.' . $this->Catalogue->primaryKey => $id));
			$this->request->data = $this->Catalogue->findAll('first', $options);
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
		$this->Catalogue->id = $id;
		if (!$this->Catalogue->exists()) {
			throw new NotFoundException(__('Invalid catalogue'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Catalogue->delete()) {
			$this->Flash->success(__('The catalogue has been deleted.'));
		} else {
			$this->Flash->error(__('The catalogue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
