<?php
	# Kill User Session and Reset Session Variables
	session_start();
	$_SESSION = array();
	session_destroy();
	
?>