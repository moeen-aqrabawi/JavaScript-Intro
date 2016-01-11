<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$dbConn = mysql_connect('localhost', 'lizard2', 'lizard');

	if (!$dbConn){
		die('Could not connect: ' . mysql_error());
	}
	$dbObj = mysql_select_db('gregs_gambits', $dbConn);
?>