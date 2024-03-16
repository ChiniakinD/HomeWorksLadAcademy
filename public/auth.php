<?php
	
	use service\UserService;
	
	
	require_once '../src/php/service/UserService.php';
	
	session_start();
//	global $error;
	$service = UserService::getInstance();
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login']) && isset($_POST['password'])) {
		$service->checkAuthorization($_POST['login'], $_POST['password']);
	}

?>

<?php include 'htmlcodes/authForm.php'; ?>