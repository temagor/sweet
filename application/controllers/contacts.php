<?php 

	// Контроллер главной страницы

	/**
	 * 
	 */
	class Contacts extends Controller
	{
		
		public function index()
		{
			$this->view->generate('contacts.php','template.php');
		}
		
	}

 ?>