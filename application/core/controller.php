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
 			$this->model = new Model();

 			$this->user = new User(); 			
 			
 			$this->view = new View();

 			$this->model->view_navigation_section();
 		}

 		public function index()
 		{
 			$this->view->generate('main.php');
 		}

 		

 		

 		

 		
 	}

  

  