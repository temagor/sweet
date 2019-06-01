<?php 

 	/**
 	 * 
 	 */
 	class Model
 	{
 		
 		public function get_data()
 		{
 			
 		}
 		
 		public function verify_user()
 		{
 			$user_login = $_REQUEST['user_login'];
 			$user_password = $_REQUEST['user_password'];
 			$q = $this->connect->prepare('SELECT $user_login FROM users');
 			$q->execute();
 			var_dump($q);
 		}

 		public function insert_to_content()
 		{
 			$vars_arr_temp  = explode('&', $_SERVER['QUERY_STRING']);
 			$vars_arr;
 			$columns;
 			$values;

 			for ($i=0; $i < count($vars_arr_temp); $i++) { 
 			 	$temp = explode('=', $vars_arr_temp[$i]);
 			 	$var_name = $temp['0'];
 			 	$var_value = $temp['1'];
 			 	$vars_arr["$var_name"] = $var_value;
 			 }

 			 echo "<hr> Работа модели события: <br> Массив " . '$vars_arr' . "<br>";

 			 var_dump($vars_arr);

 			 echo "<hr>";

 			foreach ($vars_arr as $key => $value) {
 				$columns .= $key;
 				$columns .= ' ';
 				$values .= $value;
 				$values .= ' ';
 			}

 			echo "$columns => $values";

 			 $query_str = 'INSERT INTO content SET (' . $columns . ') VALUES '  ;


 		}

 	}

  

  