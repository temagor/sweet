<?php 

 	/**
 	 * 
 	 */
 	class Model
 	{

 		function __construct()
 		{
 			$this->pdo = new mySQL();
 		}
 		
 		public function verify_user()
 		{
 			
 			$user_login = $_REQUEST['user_login'];
 			$user_password = $_REQUEST['user_password'];
 			$q = $this->connect->prepare('SELECT $user_login FROM users');
 			$q->execute();
 			var_dump($q);
 		}

 		public function view_navigation_section()
 		{
 			$section_arr_assoc = $this->pdo->get_navigation_section();	
 			foreach ($section_arr_assoc as $key => $value) {
 				echo "$key => $value";
 				echo "<hr>";
 				foreach ($value as $k => $v) {
 					echo "$k => $v<br>";
 				}
 				echo "<hr>";
 			}
 		}

 	}

  

  