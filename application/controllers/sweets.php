<?php 

	// Контроллер главной страницы

	/**
	 * 
	 */
	class sweets extends Controller
	{
		
		public function index()
		{
			$this->view->generate('sweets.php','template.php');
		}
		
	}

 ?>