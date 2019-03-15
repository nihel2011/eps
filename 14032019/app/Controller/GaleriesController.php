<?php
App::uses('AppController', 'Controller');
/**
 * Galeries Controller
 *
 * @property Galery $Galery
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class GaleriesController extends AppController {

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
	
		
				$this->Galery->locale=Configure::read('Config.languages');

$options = array('conditions' => array('Galery.etat' => 'Y'));
	$galeries= $this->Galery->findAll('all', $options);
			$this->set('galeries', $galeries);
			
			
			$first_names = $this->Galery->find('all', array(
    'fields'=>'DISTINCT Galery.catpho_name',
    'order'=>'Galery.catpho_name ASC',
    'conditions'=> array('Galery.etat'=>'Y'),
	'group' => 'catpho_name'
));
$this->set('first_names', $first_names);
			

$this->loadModel('Menu');
			$this->Menu->locale=Configure::read('Config.languages');

			 $options1 = array('conditions' => array('Menu.id' => '4'));
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
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
		$this->set('galery', $this->Galery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Galery->create();
			if ($this->Galery->save($this->request->data)) {
				$this->Flash->success(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The galery could not be saved. Please, try again.'));
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
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Galery->save($this->request->data)) {
				$this->Flash->success(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The galery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
			$this->request->data = $this->Galery->find('first', $options);
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
		$this->Galery->id = $id;
		if (!$this->Galery->exists()) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Galery->delete()) {
			$this->Flash->success(__('The galery has been deleted.'));
		} else {
			$this->Flash->error(__('The galery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		
		
		$this->Galery->locale=Configure::read('Config.languages');

$options = array('order' => array('Galery.id DESC'));

	$galeries= $this->Galery->findAll('all', $options);



		$this->set('galeries', $galeries);

	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
		$this->set('galery', $this->Galery->find('first', $options));
	}


/*	public function liste_galeries($id = null) {
				$this->loadModel('Menu');

	$this->Menu->locale=Configure::read('Config.languages');
		$options2 = array('conditions' => array('Menu.id'=> $id));
		$this->set('menu', $this->Menu->findAll('first', $options2));

		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
			$this->Galery->locale=Configure::read('Config.languages');

		$options = array('conditions' => array('Galery.menu_id'=>$id));
		$galeries= $this->Galery->findAll('all', $options);
		
		$this->set('Galery', $galeries);
			$this->set('id', $id);	
	}	*/
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
	  $this->Galery->locale=Configure::read('Config.languages');
		if ($this->request->is('post')) {
			$this->Galery->create();
				$this->request->data['Galery']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Galery']['created']=date("Y-m-j H:i:s");
			if ($this->Galery->saveMany($this->request->data)) {
				$this->Flash->success(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The galery could not be saved. Please, try again.'));
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
		$this->Galery->locale=Configure::read('Config.languages');

		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Galery']['usermodify']=$this->Session->read('user_id');

			$this->request->data['Galery']['modify']=date("Y-m-j H:i:s");

			$this->Galery->locale=Configure::read('Config.languages');

			if ($this->Galery->saveMany($this->request->data)) {
				$this->Flash->success(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The galery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
			$this->request->data = $this->Galery->findAll('first', $options);
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
		$this->Galery->id = $id;
		if (!$this->Galery->exists()) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Galery->delete()) {
			$this->Flash->success(__('The galery has been deleted.'));
		} else {
			$this->Flash->error(__('The galery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
