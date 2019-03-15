<?php
App::uses('AppController', 'Controller');
/**
 * Produits Controller
 *
 * @property Produit $Produit
 * @property PaginatorComponent $Paginator
 */
class ProduitsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Produit->recursive = 0;
		$this->set('produits', $this->Paginator->paginate());
	}
	        public function recherche() {
            
            $options = array();
            $conditions = array();

            if ($this->request->is('post')) {

                
                if(!empty($this->data['Produit']['recherche']))
                {
                    $recherche = $this->data['Produit']['recherche'];
                  
                  $options = array('conditions' => array('Produit.fr_name' => $recherche));
            
            $produit = $this->Produit->find('all',$options);
            
            //$produit = $this->Produit->find('all', $options);
            $this->set('produit', $produit);
            return $produit;
                }
               
            }
           
        }


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('produit', $this->Produit->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Produit->create();
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
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
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
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
		$this->Produit->id = $id;
		if (!$this->Produit->exists()) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->delete()) {
			$this->Flash->success(__('The produit has been deleted.'));
		} else {
			$this->Flash->error(__('The produit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function listproduits ($id=null)
{
	$options = array('conditions' => array('Produit.categorie_id' => $id));
	$produit= $this->Produit->find('all', $options);
		
			$options1 = array('conditions' => array('Category.id' => $id));
	$cat= $this->Category->find('first', $options1); 
	$parent_id=$cat['Category']['parent'];
	 
	$options2 = array('conditions' => array('Category.parent' => $parent_id,'Category.id != ' => $id ));
	$catb= $this->Category->find('all', $options2); 

		$this->set('produit',$produit);
		 $this->set('cat',$cat); 
		  $this->set('catb',$catb); 
		 
		//return $categorys;
}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		//$this->Produit->recursive = 0;
		$this->set('produits', $this->Produit->find('all'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
		$this->set('produit', $this->Produit->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Produit->create();
				$this->request->data['Produit']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Produit']['created']=date("Y-m-j H:i:s");
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		}
		
		 $this->loadModel('Category');
		$categorie_id = $this->Category->find('list',array('fields'=>'fr_name'));
		//print_r($categorie_id);
		
		$this->set(compact('categorie_id'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		
		if (!$this->Produit->exists($id)) {
			throw new NotFoundException(__('Invalid produit'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Produit']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Produit']['modify']=date("Y-m-j H:i:s");
			if ($this->Produit->save($this->request->data)) {
				$this->Flash->success(__('The produit has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The produit could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Produit.' . $this->Produit->primaryKey => $id));
			$this->request->data = $this->Produit->find('first', $options);
		}
		
		 $this->loadModel('Category');
		$categorie_id = $this->Category->find('list',array('fields'=>'fr_name'));
		//print_r($categorie_id);
		
		$this->set(compact('categorie_id'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Produit->id = $id;
		if (!$this->Produit->exists()) {
			throw new NotFoundException(__('Invalid produit'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Produit->delete()) {
			$this->Flash->success(__('The produit has been deleted.'));
		} else {
			$this->Flash->error(__('The produit could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
