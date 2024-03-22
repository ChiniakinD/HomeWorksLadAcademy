<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['theme'])) {
		$theme = $_POST['theme'];
		setcookie('theme', $theme, time() + 3600, "/");
	}
	header("Location: ../index.php");
	exit;



