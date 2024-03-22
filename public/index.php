<?php
	
	use controller\UserController;
	require_once "../src/controller/UserController.php";
	use php\SessionManager;
	require_once "../src/php/SessionManager.php";
	
	$controller = UserController::getInstance();
//	$sessionManager = new SessionManager();
//	$sessionManager->getSession();
	$session = new SessionManager();
	$controller->checkEnterInSystem();
	$controller->checkLogout();
?>

<?php include 'htmlcodes/mainForm.php'; ?>






