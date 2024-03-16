<?php
	
	use service\UserService;

	
//	session_start();
	require_once "../src/php/service/UserService.php";
	$service = UserService::getInstance();
	$service->checkEnterInSystem();
	$service->checkLogout();
?>

<?php include 'htmlcodes/mainForm.php'; ?>






