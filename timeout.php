<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<style type='text/css'>#logo{display:block;}</style>";
	$message = 'Your session has expired, or you have successfully logged off!';
	echo '<script type="text/JavaScript">alert("goooz");</script>';
	header('Location: home.php');
?>