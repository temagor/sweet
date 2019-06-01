<?php 

 	/**
 	 * 
 	 */
 	class View
 	{
 		protected $direct_path = 'application/views/';
 		
 		public function generate($content_view, $template_view = 'template.php', $data = null)
 		{
 			$file_path = $this->direct_path . $template_view;
 			
 			if (file_exists($file_path)) {
 				include_once $file_path;
 			}else{
 				echo "Нет такого вида $file_path";
 			}
 		}
 		
 	}

  

  