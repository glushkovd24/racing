<?php
	require_once('db/db.php');
	require_once('users/Users.php');
	class Application{
		function __construct(){
			$db = new DB();
			$this->users = new Users($db);
		}
		public function login($params){
			if($params['login'] && ['password']){
				return $this->users->login($params ['login'], $params['password']);
			}
		}
	}

	?>