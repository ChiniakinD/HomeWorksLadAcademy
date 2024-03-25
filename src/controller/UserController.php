<?php
	
	namespace controller;
	
	use service\UserService;
	use sessionManager\SessionManager;

//	require_once "../php/SessionManager.php";
//	require_once '../php/service/UserService.php';
	require_once "C:\Users\Чиня\PhpstormProjects\HomeWorksLadAcademy\src\php\service\UserService.php";
	
	
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
		
		public function isAuthorizationSuccessful($login, $password): bool
		{
			$userService = new UserService();
			return $userService->checkAuthorization($login, $password);
		}
		
		function checkLogout(): void
		{
			if (isset($_POST["logout"])) {
				$session = SessionManager::getInstance();
//				$session = new SessionManager();
//				$session->getSession();
				session_unset();
				session_destroy();
				header("Location: auth.php");
				exit;
			}
		}
		
		public function isLogInSystem(): void
		{
			$session = SessionManager::getInstance();
//			$session = new SessionManager();
//			$session->getSession();
			if (!$session->isKeyExist('login')) {
				header("Location: auth.php");
				exit;
			}
//
//			if (!isset($_SESSION['login'])) {
//				header("Location: auth.php");
//				exit;
		//	}
		}
		
		private function confirmPassword(): bool
		{
			try {
				if ($_POST['password'] != $_POST['check_password']) {
					throw new \Exception("Некорректное подтверждение пароля");
				}
			} catch (\Exception $e) {
				echo $e->getMessage();
				return false;
			}
			return true;
		}
		
		public function registration($login, $password): void
		{
			if ($this->confirmPassword()) {
				$service = UserService::getInstance();
				$service->registration($login, $password);
			}
		}
	}