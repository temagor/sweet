<?php 
	
	/**
	 * Подключение к БД по статусу пользователя,
	 */
	class mySQL
	{
		
		private $user_status;
		private $user_login;

		private $host = 'localhost';
		private $db = 'sweet';
		private $user = 'root';
		private $pass = NULL;
		private $charset = 'utf8';
		private $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
							 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
							 PDO::ATTR_EMULATE_PREPARES => false
							);
		private $pdo;
	

		function __construct()
		{
			
			$dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
			$this->pdo = new PDO($dsn, $this->user, $this->pass, $this->opt);

		}



		public function columns_names()
		{
			/*$q = $this->pdo->prepare("SHOW FULL COLUMNS FROM users");
			$q->execute();
			$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
			return $table_fields;
			$res = $this->pdo->query('SHOW TABLES');
				while ($row = $res->fetchall()) {
					var_dump($row);
					echo "<br>";
				}*/
		}

		public function columns_description()
		{
			$q = $this->pdo->prepare("SELECT * FROM users WHERE id=0");
			$q->execute();
			$table_fields = $q->fetchAll();
			return $table_fields;
		}

		public function get_navigation_section()
		{
			$sections = $this->pdo->query('SELECT * from sections');
			return $sections;
		}

		public function get_data_for_template_view()
		{
			$data['title'] = 'title';
			$data['header'] = 'header';
			$t = 'SELECT * from sections';
			$sections = $this->pdo->query($t);
			return $data;
		}
		
	}

 ?>