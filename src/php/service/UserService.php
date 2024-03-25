<?php
	
	namespace service;
	
	use userDao\UserDao;
	
	require_once "C:\Users\Чиня\PhpstormProjects\HomeWorksLadAcademy\src\php\UserDao.php";
	
	class UserService
	{
		
		private static ?UserService $instance = null;
		
		public function __construct()
		{
		}
		
		public static function getInstance(): UserService
		{
			if (self::$instance === null) {
				self::$instance = new UserService();
			}
			return self::$instance;
		}
		
		public function checkAuthorization($login, $password): bool
		{
			try {
				$dataBase = new UserDao();
				$dataBase->getInstance();
				$user = $dataBase->getUserByLogin($login);
				if ($user->getLogin() != '' && $user->getPassword() != '') {
					if ($user->getLogin() === $login && $user->getPassword() === $password) {
						return true;
					} else {
						throw new \Exception('Неверный пароль');
					}
				}
				return false;
				
			} catch (\Exception $e) {
				echo $e->getMessage();
				return false;
			}
		}
		
		public function registration($login, $password): void
		{
			$dataBase = new UserDao();
			$dataBase->getInstance();
			$dataBase->addNewUserToDataBase($login, $password);
		}
	}
	