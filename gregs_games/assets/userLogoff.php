<?php
	// Resume session
    session_start();
	session_unset();
    session_destroy();
    $_SESSION = array();
	echo "<script>alert('Session has been killed');
	location.href='../gregs_games/index.php';</script>";
	
?>