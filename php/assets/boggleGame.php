<?php
	/* Resume Session -- user already has an account. They exist in user table, may not exist in Boggle Game Table. If not, they haven't yet played, create a record for them in the boggle_Game table
		Session variables:
			$_SESSION['userName']
			$_SESSION['firstName']
			$_SESSION['lastName']
	*/
    session_start();
	include("include/connectDB.php");
	$dbObj = mysql_select_db('gregs_gambits', $dbConn);

	$sqlStatement="SELECT * FROM game_Boggle WHERE user_Name =" . $_SESSION[userName];
	$players = mysql_query($sqlStatement, $dbConn);
	
	//if (!$players){	die('Error: ' . mysql_error());	}
		
	while($row = mysql_fetch_array($users))
	{
		if($row['user_Name'] == $_SESSION['userName'])
		{
			$row['points_Earned'] = $row['points_Earned'] + points;
			$sqlStatement = "Insert echo 'Score has been submitted!'";
		} // end if to find user
	} // end while to sift through all records
	
	// CREATE A RECORD: insert a new record for this user and load the score
	$sqlStatement = "INSERT INTO game_Boggle (user_Name, points_Earned, played) VALUES (". $_SESSION[userName] . ", 'lname', 'website')";
	
	echo "User is now a Boggle Player, and their Score has been submitted";
	include("include/closeDB.php");
?>