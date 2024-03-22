<?php
	
	namespace controller;
	
	require_once __DIR__ . "/../php/DataBase.php";

	use DataBase;
	
	class UserController
	{
		private static ?UserController $instance = null;
		
		private function __construct()
		{
		}
		
		public static function getInstance(): UserController
		{
			if (self::$instance === null) {
				self::$instance = new UserController();
			}
			return self::$instance;
		}
		
		public function checkAuthorization($login, $password): bool
		{
			// $userService = new UserService()
			// return $userService->checkAuthorization($login,$password)
			$dataBase = DataBase::getInstance();
			if ($dataBase->isUserExistInDataBase($login)) {
				$user = $dataBase->getUserByLogin($login);
				if ($user->getLogin() === $login && $user->getPassword() === $password) {
					return true;
				} else {
					global $error;
					$error = "Неправильный пароль";
					return false;
				}
			}
			global $error;
			$error = "Пользователя с таким логином не существует";
			return false;
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
		
		public function checkEnterInSystem(): void
		{
			if (!isset($_SESSION['login'])) {
				header("Location: auth.php");
				exit;
			}
		}
		
		public function confirmPassword(): bool
		{
			if ($_POST['password'] != $_POST['check_password']) {
				global $error;
				$error = 'Пароли не совпадают';
			}
			return $_POST['password'] === $_POST['check_password'];
		}
		
		public function registration(): void
		{
			$db = DataBase::getInstance();
			$db->addNewUserToDataBase(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']));
		}
	}