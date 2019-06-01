<?php 

 	/**
 	 * 
 	 */
 	class Controller
 	{	
 		public $user;
 		public $model;
 		public $view;
 		public $data;
 		

 		function __construct()
 		{
 			$this->data = $this->model = new Model();

 			/*$this->user = new User(); */			
 			
 			$this->view = new View();

 			
 		}

 		public function index()
 		{
 			$this->view->generate('main.php','template.php',$this->data);
 		}


 		

 		

 		

 		
 	}

  

  