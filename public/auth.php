<?php
	
	use controller\UserController;
	use php\SessionManager;
	require_once "../src/controller/UserController.php";
	require_once "../src/php/SessionManager.php";
	
	$controller = UserController::getInstance();
	if ($_SERVER["REQUEST_METHOD"] === "POST") {

		if ($controller->checkAuthorization(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']))) {
			$session = new SessionManager();
			$session->set('login',htmlspecialchars( $_POST['login']));
			header('Location: index.php');
			//exit;
		}
	}

?>

<?php include 'htmlcodes/authForm.php'; ?>