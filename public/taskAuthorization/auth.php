<?php
	require_once '../../tasks/tasks.php';
	session_start();
	global $error;
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		checkAuthorization($_POST['login'], $_POST['password'], 123, 124);
	}
?>

<?php include 'forms/authForm.php'; ?>