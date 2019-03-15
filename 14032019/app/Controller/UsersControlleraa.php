<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class UsersController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');
public function beforeFilter() {
    //    parent::beforeFilter();
        // Permet aux utilisateurs de s'enregistrer et de se déconnecter
      /*  $this->Auth->deny('add','edit','index'); 
        $this->Auth->allow('view','langue','url','promotion','modal','add_to_cart','remove_cart','recherche','forget_password','reinitialiser','pageCount','devis');*/
    }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
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
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//$this->request->data['User']['modify']=date('Y-m-d');
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		     $this->layout = 'admin';

		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
		$contactes1=$this->liste_contact();
		$this->set('contactes1', $contactes1);
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}



public function admin_login() {
        $this->layout = 'login';
		
        if ($this->request->is('post')) {
			 
            if ($this->Auth->login()) { 
                $this->Session->write('user_id',  $this->Auth->user('id'));
			$this->Session->write('nom_user',  $this->Auth->user('name'));
     		$this->Session->write('photous',  $this->Auth->user('photo'));
                return $this->redirect(array('controller'=>'contacts','action'=>'index'));
            } else {
                $this->Session->setFlash(__("Nom d'utilisateur ou mot de passe invalide, réessayer"),'alert');
            }
        }
    }
	public function login() {
        $this->layout = 'login';
		
        if ($this->request->is('post')) {
			 
            if ($this->Auth->login()) { 
                $this->Session->write('user_id',  $this->Auth->user('id'));
			$this->Session->write('nom_user',  $this->Auth->user('name'));
     		$this->Session->write('photous',  $this->Auth->user('photo'));
                return $this->redirect(array('controller'=>'admin/produits','action'=>'index'));
            } else {
                $this->Session->setFlash(__("Nom d'utilisateur ou mot de passe invalide, réessayer"),'alert');
            }
        }
    }
	public function admin_logout() {
        $this->Session->destroy();
        return $this->redirect($this->Auth->logout());
    }
	
/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['usercreated']=$this->Session->read('user_id');
			$this->request->data['User']['created']=date("Y-m-j H:i:s");
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		}
		$contactes1=$this->liste_contact();
		$this->set('contactes1', $contactes1);
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		     $this->layout = 'admin';

		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['User']['usermodify']=$this->Session->read('user_id');
			$this->request->data['User']['modify']=date("Y-m-j H:i:s");
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			$contactes1=$this->liste_contact();
		$this->set('contactes1', $contactes1);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
