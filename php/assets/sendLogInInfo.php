<?php
	include("include/connectDB.php");

	/* variables from connectDB.php
		$dbConn - connection object to lastknow
	*/
	if(isset($_POST['frmGetLoginInfo']))
	{
		$dbObj = mysql_select_db('lastknow_games', $dbConn); // get DB from lastknow connection
		$sqlStatement = "SELECT * FROM users";
		$result = mysql_query($sqlStatement, $dbConn);
		while($userRecord = mysql_fetch_array($result)){
			if($userRecord['first_Name'] == $_POST['firstName'] && $userRecord['last_Name'] == $_POST['lastName']){
				// <> <> SEND EMAIL TO STUDENT <> <>
				$to = $_POST[email];
				$subject = "Log In Information";
				$message = "<-- Login Information --> \n
				First Name: " . $_POST[firstName] . "\n
				Last Name: " . $_POST[lastName] . "\n
				--------------------------------------------------- \n
				User Name:  " . $userRecord[user_Name] . "\n
				Password:  " . $userRecord[password] . "\n";
				$from = "lkr@lastknownresident.com";
				$headers = "From Greg's Games";
				mail($to,$subject,$message,$headers);
				echo "<script>alert('Email Sent. Please log in.');
				location.href='../gregs_games/index.php';</script>";
			} // end if found user
		} // end while to search table
	} // end if isset
	
	include("include/closeDB.php");
?>