<?php
	session_start();
	require_once "../../tasks/tasks.php";
 
	checkEnterInSystem();
	checkLogout();
?>

<?php include 'forms/mainForm.php'; ?>






