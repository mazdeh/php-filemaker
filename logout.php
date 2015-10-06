<?php
	session_start();
	session_unset();
	session_destroy();

	session_start();
	$_SESSION['timeout'] = true;
	header('Location: home.php');
	// header('Location: http://www.colorado.edu/sasc/tutoring');
?>