<?php
	$dbConn = mysql_connect('localhost', 'lastknow_555', 'ant^5^on');

	if (!$dbConn){
		die('Could not connect: ' . mysql_error());
	}
?>