<?php
	require_once '../src/php/service/UserService.php';
	
	use \service\UserService;
	
	$service = UserService:: getInstance();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$service->registration();
	}
//?>
<?php include 'htmlcodes/registrationForm.php';
