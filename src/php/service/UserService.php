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
			$dataBase = new UserDao();
			$dataBase->getInstance();
			$user = $dataBase->getUserByLogin($login);
			return ($user->getLogin() === $login && $user->getPassword() === $password);
		}
		
		public function registration($login, $password): void
		{
			$dataBase = new UserDao();
			$dataBase->getInstance();
			$dataBase->addNewUserToDataBase($login, $password);
		}
	}
	