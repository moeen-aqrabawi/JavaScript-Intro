
<?php
	include("include/connectDB.php");
	// variable from connectDB.php: $dbConn - connection object
	if(isset($_POST['frmAddUser']))
	{
		$returnToLogin = false;
		$dbObj = mysql_select_db('gregs_gambits', $dbConn);

		$sqlStatement="SELECT * FROM users";

		$users = mysql_query($sqlStatement, $dbConn);
		
		while($row = mysql_fetch_array($users)){
		
			if($row['user_Name'] == $_POST['userName'] && $returnToLogin == false){

			echo "<script>alert('Username already exists. Try a new one.');
			location.href='../greg/newUser.php';</script>";
			$returnToLogin = true;

			} // end if to check if userName already exits
			
			elseif($returnToLogin == false && $row['first_Name'] == $_POST['firstName'] && $row['last_Name'] == $_POST['lastName']){
				echo "<script>alert('You are already a member. Please log in.');
				location.href='../greg/index.php';</script>";
				$returnToLogin = true;
				
			} // end if to check if First and Last name already exits
		} // end while to sift through all records

		if($returnToLogin == false){
			$sqlStatement="INSERT INTO users (first_Name, last_Name, user_Name, password) VALUES ('$_POST[firstName]','$_POST[lastName]','$_POST[userName]', '$_POST[passWord]')";
			if (!mysql_query($sqlStatement,$dbConn))
			{
				die('Error could not add: ' . mysql_error());
			}

			echo "<script>alert('User has been added. Please log in.');
			location.href='../greg/index.php';</script>";
		} // end if returnToLogin == false

	} // end if isset
	
	include("include/closeDB.php");

?>