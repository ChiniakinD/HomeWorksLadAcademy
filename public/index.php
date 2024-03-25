<?php
	use controller\UserController;
	use sessionManager\SessionManager;
	require_once '../src/php/SessionManager.php';
	require_once '../src/controller/UserController.php';
	
	//$sessionManager = new SessionManager();
	//$session = SessionManager::getInstance();
//	$sessionManager->getSession();
	$controller = UserController::getInstance();
	$controller->isLogInSystem();
	$controller->checkLogout();
?>

<?php include 'htmlcodes/mainForm.php'; ?>






