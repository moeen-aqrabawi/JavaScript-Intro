<?php
	// BEGIN session for User
	session_start();
	
	include("include/connectDB.php");
	/* variables from connectDB.php
		$dbConn - connection object
	*/
	
	if(isset($_POST['frmLogin']))
	{

		$sqlStatement="SELECT * FROM users";
		$users = mysql_query($sqlStatement, $dbConn);
		
		if (!$users)
		{
			die('Error: ' . mysql_error());
		}
		
		while($row = mysql_fetch_array($users))
		{
			if($row['user_Name'] == $_POST['userName'] && $row['password'] == $_POST['passWord'])
			{
				$_SESSION['userID'] = $row['user_ID'];
				$_SESSION['user'] = $row['user_Name'];
				$_SESSION['userFirstName'] = $row['first_Name'];
				$_SESSION['userLastName'] = $row['last_Name'];
				echo "<script type='text/javascript' language='javascript'>alert('Login successful!'); location.href='userPage.php';</script>";
			} // end if to check if userName and password match DB entry
		} // end while to sift through all records
		
		echo '<script>alert("Login failed.");
		location.href="index.php";</script>';
		
	} // end if isset

	include("include/closeDB.php");
?>

