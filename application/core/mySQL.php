<?php 
	
	/**
	 * Подключение к БД по статусу пользователя,
	 */
	class mySQL
	{
		
		private $user_status;
		private $user_login;

		private $host = 'localhost';
		private $db = 'zandra';
		private $user = 'root';
		private $pass = NULL;
		private $charset = 'utf8';
		private $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
							 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
							 PDO::ATTR_EMULATE_PREPARES => false
							);
		public $pdo;
	

		function __construct()
		{
			// Данные о статусе пользователя формируют права подключения к БД
			$this->user_status = false;
			$dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
			$this->pdo = new PDO($dsn, $this->user, $this->pass, $this->opt);

		}

		protected function create_mySql_connect()
		{
			if ($_SESSION['user_status'] == false) {
				echo "<h1>Начало подключения к БД</h1>";
				$this->connect = new PDO('mysql:host=localhost;dbname=zandra;charset=utf8', 'root', '');
		}
		}

		public function columns_names()
		{
			$q = $this->connect->prepare("SHOW FULL COLUMNS FROM users");
			$q->execute();
			$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
			return $table_fields;
			/*$res = $this->connect->query('SHOW TABLES');
				while ($row = $res->fetchall()) {
					var_dump($row);
					echo "<br>";
				}*/
		}

		public function columns_description()
		{
			$q = $this->connect->prepare("SELECT * FROM users WHERE id=0");
			$q->execute();
			$table_fields = $q->fetchAll(PDO::FETCH_COLUMN);
			return $table_fields;
		}

		
		
	}

 ?>