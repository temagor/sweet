<?php 

 	/**
 	 * 
 	 */
 	class Controller
 	{	
 		public $user;
 		public $model;
 		public $view;
 		

 		function __construct()
 		{
 			$this->user = new User();
 			$this->model = new Model();
 			$this->mySQL = new mySQL();
 			$this->view = new View();
 			
 		}

 		public function index()
 		{
 			$this->view->generate('main.php');
 		}

 		

 		

 		

 		
 	}

  

  