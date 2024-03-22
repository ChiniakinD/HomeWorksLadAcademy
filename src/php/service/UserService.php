<?php
	
	namespace service;
	
	
	class UserService
	{
		
		
		/*
		 * public function checkAuthorization($login, $password) : bool {
		 *      $db = new DataBase();
		 *      достаю юзера с логином и паролем и сравниваю
		 *      return $db->
		 */
		/*
		private static ?UserService $instance = null;
		
		private function __construct()
		{
		}
		
		public static function getInstance(): UserService
		{
			if (self::$instance === null) {
				self::$instance = new UserService();
			}
			return self::$instance;
		}
		
		public function checkAuthorization($login, $password): void
		{
			$dataBase = \DataBase::getInstance();
			if ($dataBase->isUserExistInDataBase($login)) {
				$jsonData = file_get_contents(self::PATH_TO_DATABASE);
				$users = json_decode($jsonData, true);
				foreach ($users as $user) {
					if ($user['login'] === $login) {
						if ($user['password'] === $password) {
							$_SESSION['login'] = $login;
							$_SESSION['password'] = $password;
							header("Location: index.php");
						} else {
							global $error;
							$error = "Неправильный пароль";
						}
					}
				}
			}
		}
		
		function checkLogout(): void
		{
			if (isset($_POST["logout"])) {
				session_unset();
				session_destroy();
				header("Location: auth.php");
				exit;
			}
		}
		
		function checkEnterInSystem(): void
		{
			if (!isset($_SESSION["login"])) {
				header("Location: auth.php");
				exit;
			}
		}
		
		public static function checkPasswordDuringRegistration(): bool
		{
			global $error;
			$error = 'Неправильное повторение пароля';
			return $_POST['password'] === $_POST['check_password'];
		}
		
		public function registration(): void
		{
			if (!self::isUserExistInDataBase($_POST['login']) && self::checkPasswordDuringRegistration()) {
				$newUser = [
					'login' => $_POST['login'],
					'password' => $_POST['password']
				];
				$dataArray = self::getJsonByArray();
				$dataArray[] = $newUser;
				$dataJson = json_encode($dataArray, JSON_PRETTY_PRINT);
				file_put_contents(self::PATH_TO_DATABASE, $dataJson);
			} else {
			
			}
		}
		*/
		
	}
	