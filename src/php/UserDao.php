<?php
	
	namespace userDao;
	
	use MyUser\User;
	
	require_once "model/User.php";
	
	class UserDao
	{
		const PATH_TO_DATA_BASE = "C:\Users\Чиня\PhpstormProjects\HomeWorksLadAcademy\db\user.json";
		private static ?UserDao $instance = null;
		
		public function __construct()
		{
		
		}
		
		public function getInstance(): UserDao
		{
			if (self::$instance === null) {
				self::$instance = new UserDao();
			}
			return self::$instance;
		}
		
		private function getDataBaseByArray(): array
		{
			$dataBase = file_get_contents(self::PATH_TO_DATA_BASE,);
			return json_decode($dataBase, true);
		}
		
		public function getUserByLogin(string $login): ?User
		{
			try {
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
				} else {
					throw new \Exception("Пользователя с таким логином не существует");
				}
				
			} catch (\Exception $e) {
				echo $e->getMessage();
			}
			return new User();
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
			try {
				if (!$this->isUserExistInDataBase($login)) {
					$newUSer = [
						'login' => $_POST['login'],
						'password' => $_POST['password']
					];
					$dataBase = $this->getDataBaseByArray();
					$dataBase[] = $newUSer;
					file_put_contents("../db/user.json", json_encode($dataBase), JSON_PRETTY_PRINT);
				} else
					throw new \Exception("Пользователь с таким логином уже существует");
			} catch (\Exception $e) {
				echo $e->getMessage();
			}
		}
	}