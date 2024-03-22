<?php
	
	use controller\UserController;
	require_once "../src/controller/UserController.php";
	
	$controller = UserController::getInstance();
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$controller->registration();
	}
?>
<?php include 'htmlcodes/registrationForm.php';