<?php
	use controller\UserController;
	require_once '../src/controller/UserController.php';
	
	$controller = UserController::getInstance();
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$controller->registration(htmlspecialchars($_POST['login']), htmlspecialchars($_POST['password']));
	}
?>
<?php include 'htmlcodes/registrationForm.php';