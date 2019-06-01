<?php 

	/**
	 * Пользователь и т.п.
	 */
	class User
	{
		protected $user_status;
		protected $user_login;
		protected $user_logo;
		
		function __construct()
		{
			$this->set_user_info_cookie($this->check_user_cookie());
		}

		public function check_user_cookie()
		{
			if (!$_COOKIE['user_login']) {
				return false;
			}
		}

		public function set_user_info_cookie($check_result)
		{
			if ($check_result == false) {
				setcookie('user_login', 'guest');
				setcookie('user_logo', 'link_logo_guest');
			}
		}
	}

 