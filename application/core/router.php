<?php 

 	
 	class Router
 	{

 		

 		static public function Start(){

 			// Дефолтные значения для главной страницы

 			$controller_name = 'main';

 			$action = 'index';

 			$uri = $_SERVER['REQUEST_URI'];

 			$uri = htmlspecialchars($uri);

 			// Разделение вводных данных URI

 			if (!empty($uri)) {
 			// Получение переменных в формах - возвращает строку 
 				if ($vars = strpos($uri, '?')) {
 					$user_form_data_str = substr($uri, ++$vars);
 					
 					$uri = substr($uri, 0 ,--$vars);
 					
 				}
 			}

 			$uri_arr = explode('/', $uri);

 			if (!empty($uri_arr[1])) {
 				$controller_name = $uri_arr[1];
 			}

 			if (!empty($uri_arr[2])) {
 				$action = $uri_arr[2];
 			}

 			$controller_file = $controller_name . '.php';
 			
 			

 			$controller_path = 'application/controllers/' . $controller_file;

 			if (file_exists($controller_path)) {
 				include_once $controller_path;
 			}else{
 				echo "Нет такого файла";
 			}

 			$controller = new $controller_name();

 			// Получение метода для контроллера
 			$vars_array;
 			if (!empty($_SERVER['QUERY_STRING'])) {
 				
 				$vars_arr_str = explode('&', $_SERVER['QUERY_STRING']);
 
 				for ($i=0; $i < count($vars_arr_str); $i++) { 
 					$temp = explode('=', $vars_arr_str["$i"]);
 					$var_name = $temp['0'];
 					$var_value = $temp['1'];
 					$vars_array[$var_name] = $var_value;
 				}
 				
 				foreach ($vars_array as $key => $value) {
 					
 					if (method_exists($controller, $key)) {
 						$controller->$key();
 					}
 					
 				}

 				
 				
 			}
 			if (empty($_SERVER['QUERY_STRING']) && method_exists($controller, $action)) {
 				$controller->$action();
 			}
 		}
 	}

  

  