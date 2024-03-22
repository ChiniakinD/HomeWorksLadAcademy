<?php
	
	use MyUser\User;
	
	require_once "model/User.php";
	
	class DataBase
	{
		const PATH_TO_DATA_BASE = "C:\Users\Чиня\PhpstormProjects\HomeWorksLadAcademy\db\user.json";
		private static ?DataBase $instance = null;
		
		private function __construct()
		{
		
		}
		
		public static function getInstance(): DataBase
		{
			if (self::$instance === null) {
				self::$instance = new DataBase();
			}
			return self::$instance;
		}
		
		private function getDataBaseByArray(): array
		{
			$dataBase = file_get_contents(self::PATH_TO_DATA_BASE, );
			return json_decode($dataBase, true);
		}
		
		public function getUserByLogin(string $login): ?MyUser\User
		{
			if ($this->isUserExistInDataBase($login)) {
				$dataBase = $this->getDataBaseByArray();
				foreach ($dataBase as $element) {
					if ($element['login'] === $login) {
						$user = new User();
						$user->setLogin($element['login']);
						$user->setPassword($element['password']);
						return $user;
					}
				}
			}
			global $error;
			$error = "Пользователя с таким логином не существует";
			return null;
		}
		
		public function isUserExistInDataBase(string $login): bool
		{
			$dataBase = $this->getDataBaseByArray();
			foreach ($dataBase as $element) {
				if ($element['login'] === $login) {
					return true;
				}
			}
			return false;
		}
		
		public function addNewUserToDataBase(string $login, string $password): void
		{
			$controller = \controller\UserController::getInstance();
			if (!$this->isUserExistInDataBase($login)) {
				if ($controller->confirmPassword()) {
					$newUSer = [
						'login' => $_POST['login'],
						'password' => $_POST['password']
					];
					$dataBase = $this->getDataBaseByArray();
					$dataBase[] = $newUSer;
					file_put_contents("../db/user.json", json_encode($dataBase), JSON_PRETTY_PRINT);
				}
			} else
				global $error;
				$error = "Пользователь с таким логином уже есть";
		}
	}