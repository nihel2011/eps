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
	
	
		public function initialize_lang()
	{

				// echo 'gggggggggggggggg';
// debug($this->Session->read('lang'));
				 
        if($this->Session->read('langa')!=null)
		{
			$langb= $this->Session->read('langa');
			 $this->Session->write('User.language',$langb);
			 Configure::write('Config.language',$langb);
		}
		else
		{
			 $this->Session->write('User.language','fre');
			 Configure::write('Config.language','fre');
			 $this->Session->write('langa','fre');
			}
	/*echo 'bbb';
 debug($this->Session->read('lang'));*/

	}
	
	public function beforeRender() {
    parent::beforeRender();
		$this->initialize_lang();
	}
	public function beforeFilter() {
    parent::beforeFilter();
	     $this->initialize_lang();
	  
       if(isset($this->params['admin'])){ $this->layout = 'admin'; 
	   
	   $this->affiche_user($id=null);
	   $this->liste_contact();
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
		$contacts=$this->Contact->find('all',array('limit' => 4 ,'conditions' => array('Contact.etat' => 'Y'),'order' => array('Contact.id DESC')));
		
		$this->set('contactes',$contacts);
		
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
		
		

	
}
