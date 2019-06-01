<?php 

	// Контроллер главной страницы

	/**
	 * 
	 */
	class comments extends Controller
	{
		
		public function index()
		{
			$this->view->generate('comments.php','template.php');
		}
		
	}

 ?>