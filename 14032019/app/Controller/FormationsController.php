<?php
App::uses('AppController', 'Controller');
/**
 * Formations Controller
 *
 * @property Formation $Formation
 * @property PaginatorComponent $Paginator
 */
class FormationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Flash','BotDetect.Captcha' => array(
      'captchaConfig' => 'ExampleCaptcha'));

/**
 * index method
 *
 * @return void
 */
	
		
		public function index() {
		
		
		$this->Formation->locale=Configure::read('Config.languages');
$options = array('conditions' => array('Formation.etat' => 'Y'));

	$formations= $this->Formation->findAll('all', $options);

			$this->set('formations', $formations);

$this->loadModel('Menu');


	$this->Menu->locale=Configure::read('Config.languages');



			 $options1 = array('conditions' => array('Menu.id' => '5'));

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
 
 public function detail($ida=null) {
	/*echo $ida;*/
	$this->Formation->locale=Configure::read('Config.languages');
		 $options1 = array('conditions' => array('Menu.id' => '5'));
	$menus= $this->Menu->find('first', $options1);
 
		$this->set('menu',$menus);
		
		$formations = $this->Formation->findAll('first',array('conditions'=>array('Formation.etat'=>'Y', 'Formation.id'=>$ida)));
		
		$this->set('formations', $formations);
		/*echo count ($catalogue7);*/
		
		$this->loadModel('Formation');
		 
		 $this->Formation->locale=Configure::read('Config.languages');

		$id_formation = $this->Formation->find('list',array('fields'=>array('id','titre')));
		//print_r($categorie_id);
		
		$this->set(compact('id_formation'));
		

	
	}
	public function view($id = null) {
		if ($this->request->is('post')) {
			$isHuman = captcha_validate($this->request->data['Demande']['CaptchaCode']);

  // clear previous user input, since each Captcha code can only be validated once
  unset($this->request->data['Demande']['CaptchaCode']);
 
 
  if (!empty($isHuman)) {
      // TODO: Captcha validation passed, perform protected action
  		$this->loadModel('Infosite');
							 $this->Infosite->locale=Configure::read('Config.languages');

			 $infosites = $this->Infosite->findAll('first',array('conditions'=>array('Infosite.etat'=>'Y'),'order' => array('Infosite.id DESC')));

                $menu_id = 8;
                $message="";
                $site=$infosites['Infosite']['siteweb'];
				$this->loadModel('Demande');

                $email =  $this->request->data['Demande']['email'];
                $sujet = "[MESSAGE DU SITE WEB]";
                
                if(!empty($this->request->data['Demande']['sujet'])) 
                    $sujet = h($this->request->data['Demande']['sujet']);
                
                $demande = $this->request->data['Demande']['message'];
                
                if(!empty($this->request->data['Demande']['nom'])) 
                    $message .= "<b>Nom : </b>".h($this->request->data['Demande']['nom'])."<br>";
                
                
                               
                if(!empty($this->request->data['Demande']['tel'])) 
                    $message .= "<b>Telephone : </b>".h($this->request->data['Demande']['tel'])."<br>";
                
            
                
              
                
                
                $message .= "<b>Adresse E-mail : </b>".$email."<br>";
                $message .= "<b>Demande : <b><br>".$demande."<br>";
                $to = $infosites['Infosite']['email'];
                //echo $site.'**'.$email.'**'.$to.'*'.__($sujet).'**'.__($message);
                //exit();
				$this->Demande->save($this->request->data);
               // $this->send_mail($site,$email,$to,$sujet,$message);
                $this->Session->setFlash(__('Votre demande est envoyée avec succès! Vous serez contacter dans les plus bref d&eacute;lais.'),'success');
                return $this->redirect(array('controller'=>'demandes','action' => 'index'));
                
		} else {
			
 $this->Session->setFlash(__('Captcha Incorrecte'),'error'); 
 		return $this->redirect(array('controller'=>'demandes','action' => 'index'));

  
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
			$this->Formation->create();
			if ($this->Formation->save($this->request->data)) {
				$this->Flash->success(__('The formation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The formation could not be saved. Please, try again.'));
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
		if (!$this->Formation->exists($id)) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formation->save($this->request->data)) {
				$this->Flash->success(__('The formation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The formation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formation.' . $this->Formation->primaryKey => $id));
			$this->request->data = $this->Formation->find('first', $options);
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
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Formation->delete()) {
			$this->Flash->success(__('The formation has been deleted.'));
		} else {
			$this->Flash->error(__('The formation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		
		
		$this->Formation->locale=Configure::read('Config.languages');
					$formations = $this->Formation->findAll('all');

		$this->set('formations', $formations);
		
		
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Formation->exists($id)) {
			throw new NotFoundException(__('Invalid formation'));
		}
		$options = array('conditions' => array('Formation.' . $this->Formation->primaryKey => $id));
		$this->set('formation', $this->Formation->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
     $this->layout = 'admin';
		$this->Formation->locale=Configure::read('Config.languages');
	 
		if ($this->request->is('post')) {
			$this->Formation->create();
			$this->request->data['Formation']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Formation']['created']=date("Y-m-j H:i:s");
			if ($this->Formation->saveMany($this->request->data)) {
				$this->Flash->success(__('The formation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The formation could not be saved. Please, try again.'));
			}
		}
		 $this->loadModel('Formation');
		 
		 $this->Formation->locale=Configure::read('Config.languages');

		$id_formation = $this->Formation->find('list',array('fields'=>array('id','titre')));
		//print_r($categorie_id);
		
		$this->set(compact('id_formation'));
		
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Formation->locale=Configure::read('Config.languages');
		if (!$this->Formation->exists($id)) {
			throw new NotFoundException(__('Invalid formation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formation->saveMany($this->request->data)) {
			$this->request->data['Formation']['usercreated']=$this->Session->read('user_id');
			$this->request->data['Formation']['created']=date("Y-m-j H:i:s");
				$this->Flash->success(__('The formation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The formation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Formation.' . $this->Formation->primaryKey => $id));
			$this->request->data = $this->Formation->findAll('first', $options);
		}
		 $this->loadModel('Formation');
		 
		 $this->Formation->locale=Configure::read('Config.languages');

		$id_formation = $this->Formation->find('list',array('fields'=>array('id','titre')));
		//print_r($categorie_id);
		
		$this->set(compact('id_formation'));
		
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Formation->id = $id;
		if (!$this->Formation->exists()) {
			throw new NotFoundException(__('Invalid formation'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Formation->delete()) {
			$this->Flash->success(__('The formation has been deleted.'));
		} else {
			$this->Flash->error(__('The formation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
