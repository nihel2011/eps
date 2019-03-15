<?php
App::uses('AppController', 'Controller');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 */
class ContactsController extends AppController {

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
	public function index($service_id=null, $devis=null) {
		 
		$this->loadModel('Infosite');
		 $contacts = $this->Contact->find('first',array('conditions'=>array('Contact.etat'=>'Y'),'order' => array('Contact.id DESC')));
		 	$this->loadModel('Menu');
			$this->Menu->locale=Configure::read('Config.languages');

			 $options1 = array('conditions' => array('Menu.id' => '6'));
	$menu= $this->Menu->findAll('first', $options1);
 
		$this->set('menu',$menu);
		$this->set('contacts', $contacts);
		
		/* $this->Contact->Service->locale = Configure::read('Config.language');

			$services = $this->Contact->Service->find('list',array('fields'=>array('id','name')));
		$this->set('service_id',$service_id);
		
		$this->set(compact('services'));*/
		$this->set('devis',$devis);
		 
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view() {
				if ($this->request->is('post')) {
			$isHuman = captcha_validate($this->request->data['Contact']['CaptchaCode']);

  // clear previous user input, since each Captcha code can only be validated once
  unset($this->request->data['Contact']['CaptchaCode']);
 
 
  if (!empty($isHuman)) {
      // TODO: Captcha validation passed, perform protected action
  		$this->loadModel('Infosite');
							 $this->Infosite->locale=Configure::read('Config.languages');

			 $infosites = $this->Infosite->findAll('first',array('conditions'=>array('Infosite.etat'=>'Y'),'order' => array('Infosite.id DESC')));

                $menu_id = 8;
                $message="";
                $site=$infosites['Infosite']['siteweb'];

                $email =  $this->request->data['Contact']['email'];
                $sujet = "[MESSAGE DU SITE WEB]";
                
                if(!empty($this->request->data['Contact']['sujet'])) 
                    $sujet = h($this->request->data['Contact']['sujet']);
                
                $demande = $this->request->data['Contact']['message'];
                
                if(!empty($this->request->data['Contact']['nom'])) 
                    $message .= "<b>Nom : </b>".h($this->request->data['Contact']['nom'])."<br>";
                
                
                               
                if(!empty($this->request->data['Contact']['tel'])) 
                    $message .= "<b>Telephone : </b>".h($this->request->data['Contact']['tel'])."<br>";
                
            
                
              
                
                
                $message .= "<b>Adresse E-mail : </b>".$email."<br>";
                $message .= "<b>Demande : <b><br>".$demande."<br>";
                $to = $infosites['Infosite']['email'];
                //echo $site.'**'.$email.'**'.$to.'*'.__($sujet).'**'.__($message);
                //exit();
				$this->Contact->save($this->request->data);
               // $this->send_mail($site,$email,$to,$sujet,$message);
                $this->Session->setFlash(__('Votre demande est envoyée avec succès! Vous serez contacter dans les plus bref d&eacute;lais.'),'success');
                return $this->redirect(array('controller'=>'contacts','action' => 'index'));
                
		} else {
			
 $this->Session->setFlash(__('Captcha Incorrecte'),'error'); 
 		return $this->redirect(array('controller'=>'contacts','action' => 'index'));

  
  }
	
            }
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Flash->success(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact could not be saved. Please, try again.'));
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
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contact->save($this->request->data)) {
				$this->Flash->success(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
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
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contact->delete()) {
			$this->Flash->success(__('The contact has been deleted.'));
		} else {
			$this->Flash->error(__('The contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Contact->recursive = 0;
		$this->set('contacts', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid contact'));
		}
		$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
		$this->set('contact', $this->Contact->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Contact->create();
			$this->request->data['Contact']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Contact']['created']=date("Y-m-j H:i:s");
			if ($this->Contact->save($this->request->data)) {
				$this->Flash->success(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact could not be saved. Please, try again.'));
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
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Contact']['usermodify']=$this->Session->read('user_id');
			$this->request->data['Contact']['modify']=date("Y-m-j H:i:s");
			if ($this->Contact->save($this->request->data)) {
				$this->Flash->success(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
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
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contact->delete()) {
			$this->Flash->success(__('The contact has been deleted.'));
		} else {
			$this->Flash->error(__('The contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
