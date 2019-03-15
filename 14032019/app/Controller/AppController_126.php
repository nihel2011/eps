<?php 
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	 public $components = array(
        'Session',
        'RequestHandler',
        'Auth' => array(
		'authenticate' => array('Form' => array( 'fields' => array('username' => 'email', 'password' => 'mot_passe'))) ,
            'loginRedirect' => array('controller' => 'users', 'action' => 'admin_index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login')
        )
    );
	
	
	
	
	
	public function beforeFilter() {
    parent::beforeFilter();
	    if(isset($this->params['language']) && $this->params['language']!=''){
      

            if(in_array($this->params['language'],Configure::read('Config.languages'))){
                $this->Session->write('User.language',$this->params['language']);
                 Configure::write('Config.language',$this->params['language']);
            }
          
            
        }elseif(!isset($this->params['language'])){
            $current_language = $this->Session->read('User.language');
             if($current_language){
                  Configure::write('Config.language',$current_language);
             }else{
                $this->Session->write('User.language',Configure::read('Config.language'));
             }
             
        }
        $this->get_language();
  
	  
       if(isset($this->params['admin'])){ $this->layout = 'admin'; //echo 'hhh';
	   
	   $this->affiche_user($id=null);
	   $this->liste_contact();
	        $this->Session->write('User.language','fre');
                 Configure::write('Config.language','fre');
	   }
else 
{
	 
	 $this->layout = 'default'; 
 $this->Auth->allow();
$this->liste_menu();
 $this->liste_slider();
 $this->liste_service();
  $this->get_service_footer();
 $this->parent_service();
 $this->liste_reference();
 $this->liste_actualite();
 $this->get_adresse();
 $this->get_partenaire();
 
  }
	 }
	 
	 
	 public function send_mail($site=null,$from=null,$to=null,$subject=null,$message=null)
    {
        $Email = new CakeEmail();
        $Email->from(array($from => $site));
        $Email->emailFormat('html');
        $Email->to($to);
        $Email->subject($subject);
        $Email->send($message);
    }


	
	
	 
	   public function liste_contact()
  {
	  $this->loadModel('Contact');
		$contactes1=$this->Contact->find('all',array('limit' => 4 ,'conditions' => array('Contact.etat' => 'Y'),'order' => array('Contact.id DESC')));
				//debug($contactes);

		$this->set('contactes1',$contactes1);
		return $contactes1;
		
  }
  
  
  public function liste_menu()
  {
	  $this->loadModel('Menu');
	   $this->Menu->locale=Configure::read('Config.languages');
		$menus=$this->Menu->findAll('all',array('conditions' => array('Menu.etat' => 'Y'),'order' => array('Menu.orderm ASC', 'Menu.id ASC')));
		//debug($menus);
		$this->set('menus',$menus);
		
		
  }
    
	  public function liste_slider()
  {

	  $this->loadModel('Slideshow');
	  	   $this->Slideshow->locale=Configure::read('Config.languages');

		$slideshows=$this->Slideshow->findAll('all');
		$this->set('slideshows',$slideshows);
		
  }
  
    public function affiche_user($id=null)
  { 
	  $this->loadModel('User');
	  $options = array('conditions' => array('User.id' => $id));
		$usere=$this->User->find('first', $options);
		if(count($usere)>0)
		return $usere;
		
  }
  
    public function liste_service()
	{
						$this->loadModel('Service');

			$this->Service->locale=Configure::read('Config.languages');

		$options = array('conditions' => array('Service.parent >' => 0));
		$services= $this->Service->findAll('all', $options);
		
		$this->set('services',$services);
		
	}
	 public function get_service_footer()
	{
						$this->loadModel('Service');

			$this->Service->locale=Configure::read('Config.languages');

		$options = array('conditions' => array('Service.parent >' => 0),'order' => array('Service.id DESC'), 'limit' => 3);
		$services_foot= $this->Service->findAll('all', $options);
		
		$this->set('services_foot',$services_foot);
		
	}
	public function parent_service() {
		$this->Service->locale=Configure::read('Config.languages');

	$this->loadModel('Service');
$options = array('conditions' => array('Service.etat' => 'Y','Service.parent' => '0'),'order' => array('Service.id DESC'));
	$menu_services= $this->Service->findAll('all', $options);
		$this->set('menu_services', $menu_services);
	}
	
	   public function liste_reference()
	{
		$this->loadModel('Reference');
		 
		$references= $this->Reference->find('all');
		
		$this->set('references',$references);
		
	}
		
			   public function liste_actualite()
	{
		$this->loadModel('Actualite');
		 
		$actualites= $this->Actualite->find('all',array('limit' => 4 ,'order' => array('Actualite.orderm DESC', 'Actualite.id DESC')));
		
		$this->set('actualites',$actualites);
		
	}
		 public function get_adresse()
	{
		$this->loadModel('Infosite');
		$this->Infosite->locale=Configure::read('Config.languages');
		  $infosites = $this->Infosite->findAll('first',array('conditions'=>array('Infosite.etat'=>'Y')));
		
		$this->set('infosites', $infosites);
		
	}
		
		 public function get_partenaire()
	{
		$this->loadModel('Reference');
		 $this->Reference->locale=Configure::read('Config.languages');

		$options = array('conditions' => array('Reference.etat' => 'Y'),'order' => array('Reference.id DESC'));
	$references= $this->Reference->findAll('all', $options);
	$this->set('references',$references);

		
	}
		
		  public function get_language(){

        if( $this->Session->read('User.language') != null){
            $language =  $this->Session->read('User.language');
        }else{
            $language =  Configure::read('Config.language');
        }
         $languages = Configure::read('Config.languages');
         foreach($languages as $k=>$v){
                if($v == 'ara'){
                    $languages[$v] = __('العربية');
                }
                if($v == 'fre'){
                    $languages[$v] = __('Fr');
                }
                 if($v == 'eng'){
                    $languages[$v] = __('En');
                }

                unset($languages[$k]);
            }


        $this->set('language',$language);
        $this->set('languages',$languages);
        return $language;
    }

	
}
