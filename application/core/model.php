<?php 

 	/**
 	 * 
 	 */
 	class Model
 	{
 		public $data;
 		function __construct()
 		{
 			$this->pdo = new mySQL();	
 			$this->data_for_template_view();		
 		}

 		public function data_for_template_view()
 		{
 			
 			$this->data = $this->pdo->get_data_for_template_view();

 		}
 		
 		public function verify_user()
 		{
 			
 			$user_login = $_REQUEST['user_login'];
 			$user_password = $_REQUEST['user_password'];
 			$q = $this->connect->prepare('SELECT $user_login FROM users');
 			$q->execute();
 			var_dump($q);
 		}

 		
 	}

  

  