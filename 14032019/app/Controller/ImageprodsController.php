<?php
App::uses('AppController', 'Controller');
/**
 * Imageprods Controller
 *
 * @property Imageprod $Imageprod
 * @property PaginatorComponent $Paginator
 */
class ImageprodsController extends AppController {

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
		$this->Imageprod->recursive = 0;
		$this->set('imageprods', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imageprod->exists($id)) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		$options = array('conditions' => array('Imageprod.' . $this->Imageprod->primaryKey => $id));
		$this->set('imageprod', $this->Imageprod->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Imageprod->create();
			if ($this->Imageprod->save($this->request->data)) {
				$this->Flash->success(__('The imageprod has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The imageprod could not be saved. Please, try again.'));
			}
		}
		$produits = $this->Imageprod->Produit->find('list');
		$this->set(compact('produits'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Imageprod->exists($id)) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imageprod->save($this->request->data)) {
				$this->Flash->success(__('The imageprod has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The imageprod could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imageprod.' . $this->Imageprod->primaryKey => $id));
			$this->request->data = $this->Imageprod->find('first', $options);
		}
		$produits = $this->Imageprod->Produit->find('list');
		$this->set(compact('produits'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Imageprod->id = $id;
		if (!$this->Imageprod->exists()) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Imageprod->delete()) {
			$this->Flash->success(__('The imageprod has been deleted.'));
		} else {
			$this->Flash->error(__('The imageprod could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index($produit_id=null) {
		/*$this->Imageprod->recursive = 0;
		$this->set('imageprods', $this->Paginator->paginate());*/
		
			$options = array('conditions' => array('Imageprod.produit_id' => $produit_id));
		$this->set('imageprod', $this->Imageprod->find('all', $options));
		$this->set('produit_id',$produit_id);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
	 	if (!$this->Imageprod->exists($id)) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		$options = array('conditions' => array('Imageprod.' . $this->Imageprod->primaryKey => $id));
		$this->set('imageprod', $this->Imageprod->find('first', $options));
		 
	
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add($produit_id=null) {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Imageprod->create();
			if ($this->Imageprod->save($this->request->data)) {
				$this->Flash->success(__('The imageprod has been saved.'));
				return $this->redirect('../Imageprods/index/'.$produit_id);
			} else {
				$this->Flash->error(__('The imageprod could not be saved. Please, try again.'));
			}
		}
	/*	$produits = $this->Imageprod->Produit->find('list');
		$this->set(compact('produits'));*/
		
		$this->set('produit_id',$produit_id);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Imageprod->exists($id)) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Imageprod->save($this->request->data)) {
				$this->Flash->success(__('The imageprod has been saved.'));
				$produit_id=$this->request->data['Imageprod']['produit_id'];
				
				
				return $this->redirect('../Imageprods/index/'.$produit_id);
			} else {
				$this->Flash->error(__('The imageprod could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imageprod.' . $this->Imageprod->primaryKey => $id));
			$this->request->data = $this->Imageprod->find('first', $options);
		}
		$produits = $this->Imageprod->Produit->find('list');
		$this->set(compact('produits'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null, $produit_id) {
		$this->Imageprod->id = $id;
		if (!$this->Imageprod->exists()) {
			throw new NotFoundException(__('Invalid imageprod'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Imageprod->delete()) {
			$this->Flash->success(__('The imageprod has been deleted.'));
		} else {
			$this->Flash->error(__('The imageprod could not be deleted. Please, try again.'));
		}
		return $this->redirect('../Imageprods/index/'.$produit_id);
	}
}
