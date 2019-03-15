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



	



	



	    function _setErrorLayout() {



      if ($this->name == 'CakeError') {



        $this->layout = 'error';



      }



    }



    function beforeRender () {



      $this->_setErrorLayout();



    }



	



	



	public function beforeFilter() {



    parent::beforeFilter();



	    if(isset($this->params['language']) && $this->params['language']!=''){



      







            if(in_array($this->params['language'],Configure::read('Config.languages'))){



                $this->Session->write('User.language',$this->params['language']);



                 Configure::write('Config.language',$this->params['language']);



            }



        }elseif(!isset($this->params['language'])){



			//echo 'tt'.$this->Session->read('User.language');



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

 $this->liste_evenement();


$this->affiche_grade();
 $this->get_adresse();



 $this->get_partenaire();



  $this->liste_statistique();

 $this->liste_contenus();

 $this->liste_formation();

 $this->liste_catalogue();
 $this->liste_souscatalogue();

 $this->liste_galeries();

$this->affiche_menu(); 

  $this->liste_grade();



 // $this->liste_comite();

/* $this->liste_adherent();

 $this->liste_telechargement();

*/  }



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











		  public function liste_statistique()



	{



		 $this->loadModel('Statistique');



		 $this->Statistique->locale=Configure::read('Config.languages');



		



		$options = array('conditions' => array('Statistique.etat' => 'Y'));



		$statis= $this->Statistique->findAll('all', $options);



		



		$this->set('statis',$statis);



		



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



		$menus=$this->Menu->findAll('all',array('conditions' => array('Menu.etat' => 'Y', 'Menu.parent' =>0),'order' => array('Menu.orderm ASC', 'Menu.id ASC')));



		//debug($menus);



		$this->set('menus',$menus);



		



		



  }



    



	  public function liste_slider()



  {







	  $this->loadModel('Slideshow');



	  	   $this->Slideshow->locale=Configure::read('Config.languages');







		$slideshows=$this->Slideshow->findAll('all' ,array('order' => array('Slideshow.orderm ASC') ,'conditions' => array('Slideshow.etat' => 'Y'),));



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


  public function affiche_menu($id=null)



  { 



	  $this->loadModel('Menu');



	//  $options = array('conditions' => array('Menu.parent' => $id));


			 $options = array('conditions' => array('Menu.id' => $id, 'Menu.etat'=>'Y'),'order' => array('Menu.orderm ASC'),'fields'=>'name');
		$menusd=$this->Menu->find('first', $options);



		if(count($menusd)>0)



		return $menusd;



		



  }




public function affiche_grade($id=null)



  { 



	  $this->loadModel('Grade');


	  $options = array('conditions' => array('Grade.id' => $id));



		$grade_id=$this->Grade->find('first', $options);



		if(count($grade_id)>0)



		return $grade_id;



  }
  
  public function affiche_adherent($id=null)



  { 



	  $this->loadModel('Adherent');


	  $options = array('conditions' => array('Adherent.id' => $id));



		$adherentsd=$this->Adherent->find('first', $options);



		if(count($adherentsd)>0)



		return $adherentsd;



  }
  
  public function affiche_adherperiode($id=null)



  { 



	  $this->loadModel('Adherperiode');


	  $options = array('conditions' => array('Adherperiode.id' => $id));



		$adherperiodesd=$this->Adherperiode->find('first', $options);



		if(count($adherperiodesd)>0)



		return $adherperiodesd;



  }
   
     public function affiche_comiteperiode($id=null)

  { 



	  $this->loadModel('Comiteperiode');


	  $options = array('conditions' => array('Comiteperiode.id' => $id));



		$comiteperioded=$this->Comiteperiode->find('first', $options);



		if(count($comiteperioded)>0)



		return $comiteperioded;



  }
  
   public function adherentgrade($id=null)

  {   $this->loadModel('Grade');


	  $options = array('conditions' => array('grade.id' => $id));



		$grade=$this->Grade->find('first', $options);



		if(count($grade)>0)



		return $grade;



  }
  
  
  public function adherentpays($id=null)

  {   $this->loadModel('Pay');


	  $options = array('conditions' => array('Pay.id' => $id));



		$paysa=$this->Pay->find('first', $options);



		if(count($paysa)>0)



		return $paysa;



  }
  

    public function liste_contenus()



	{



						$this->loadModel('Contenus');







			$this->Contenus->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Contenus.etat' => 'Y', 'Contenus.menu_id ' => '1'));



		$contenus= $this->Contenus->findAll('all', $options);



		$this->set('contenus',$contenus);



		



	}



   public function liste_galeries()



	{



						$this->loadModel('Galery');







			$this->Galery->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Galery.etat' => 'Y'), 'order' => array('Galery.id ASC'), 'limit' => 5);



		$galeries= $this->Galery->findAll('all', $options);



		$this->set('galeries',$galeries);



		



	} 

	

	

	

  /* public function liste_partenaires()



	{



						$this->loadModel('Partenaire');







			$this->Partenaire->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Partenaire.etat' => 'Y'), 'order' => array('Partenaire.id ASC'), 'limit' => 5);



		$partenaires= $this->Partenaire->findAll('all', $options);



		$this->set('partenaires',$partenaires);



		



	} */

	 public function liste_grade()



	{



						$this->loadModel('Grade');







			$this->Grade->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Grade.etat' => 'Y'));



		$grade= $this->Grade->findAll('all', $options);



		$this->set('grades',$grade);



		



	} 



public function liste_formation()



	{



						$this->loadModel('Formation');





	$this->Formation->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Formation.etat' => 'Y'));



		$formation= $this->Formation->findAll('all', $options);

 



		$this->set('formation',$formation);



		



	}





public function liste_catalogue()



	{



						$this->loadModel('Catalogue');





	$this->Catalogue->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Catalogue.etat' => 'Y'));



		$catalogue= $this->Catalogue->findAll('all', $options);

 



		$this->set('catalogue',$catalogue);



		



	}



public function liste_souscatalogue()



	{



						$this->loadModel('Souscatalogue');





	$this->Souscatalogue->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Souscatalogue.etat' => 'Y'));



		$souscatalogue= $this->Souscatalogue->findAll('all', $options);

 



		$this->set('souscatalogue',$souscatalogue);



		



	}


    public function liste_service()



	{



						$this->loadModel('Service');







			$this->Service->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Service.etat' => 'Y', 'Service.parent ' => '0'));



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

 $this->Reference->locale=Configure::read('Config.languages');

		 



		$options = array('conditions' => array('Reference.etat' => 'Y'),'order' => array('Reference.id DESC'));



	$references= $this->Reference->findAll('all', $options);

	



		



		$this->set('references',$references);

 




	}



		



			   public function liste_actualite()



	{







		$this->loadModel('Actualite');

		 $this->Actualite->locale=Configure::read('Config.languages');







		$actualites= $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y'),'order' => array('Actualite.id DESC'), 'limit' => 4));



		



		$this->set('actualites',$actualites);



		



	}

	

	

	

			   public function liste_evenement()



	{







		$this->loadModel('Actualite');


		 $this->Actualite->locale=Configure::read('Config.languages');







		$evenements= $this->Actualite->findAll('all',array('conditions'=>array('Actualite.etat'=>'Y'), array( 'OR' => array(

                                 array('Actualite.menu_id'=>'10'),

                                  array('Actualite.menu_id'=>'11'),

								   array('Actualite.menu_id'=>'12'),

								   array( 'Actualite.menu_id'=>'13'),

								) ),'order' => array('Actualite.id DESC'), 'limit' => 2));





		$this->set('evenements',$evenements);



		



	}



	

	

		/*   public function detail_catalogue()



	{







		$this->loadModel('Catalogue');


		 $this->Catalogue->locale=Configure::read('Config.languages');







		$detail= $this->Catalogue->findAll('all',array('conditions'=>array('Catalogue.etat'=>'Y')));





		$this->set('detail',$detail);



		



	}*/

	

/*	public function liste_telechargement()



	{







		$this->loadModel('Telechargement');



		 



		 



		 $this->Telechargement->locale=Configure::read('Config.languages');







		$telechargement= $this->Telechargement->findAll('all');



		



		$this->set('telechargement',$telechargement);



		



	}*/



		 public function get_adresse()



	{



		$this->loadModel('Infosite');



		$this->Infosite->locale=Configure::read('Config.languages');



		  $infosites = $this->Infosite->findAll('first',array('conditions'=>array('Infosite.etat'=>'Y')));



		



		$this->set('infosites', $infosites);



		



	}



		

 





			 public function get_partenaire()



	{

 

		$this->loadModel('Partenaire');



		 $this->Partenaire->locale=Configure::read('Config.languages');







		$options = array('conditions' => array('Partenaire.etat' => 'Y'),'order' => array('Partenaire.id DESC'));



	$partenaires= $this->Partenaire->findAll('all', $options);

 

	$this->set('partenaires',$partenaires);







		



	}

		



		  public function get_language(){



/*echo 'e'.$this->Session->read('User.language');



echo 'b'.Configure::read('Config.language');



*/


        if($this->Session->read('User.language') != null){



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



