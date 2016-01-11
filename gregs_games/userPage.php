<?php
	include ('assets/userPage.php');
?>

<html>
	<head>
		<title>Greg's Gambits</title>
		<link href="css/greg.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script language="javascript/text">
		
			function logOff()
			{
				// simply calling the logout.php page
				Ajax.post("userLogoff.php");
			}
		</script>
	</head>
	<body>
		<div id="container">

			<img src="images/superhero.jpg" width="120" height="120" class="floatleft" />
			<h1 id="logo"><em>Greg's Gambits</em></h1>
  
			<h2 align="center"><em>Welcome <?php echo $_SESSION['user']; ?></em></h2>

			<p>&nbsp;</p>
			<div id="nav">
				<p><a href="index.html">Home</a>
				<a href="greg.html">About Greg</a>
				<a href="play_games.html">Play a Game</a>
				<a href="sign.html">Sign In</a>
				<a href="contact.html">Contact Us</a>
				<a href="aboutyou.html">Tell Greg About You</a>
				<a href="index.php">Greg's Gambits Log in</a>
				<a href="../">Last Known Home</a></p>
			</div>

			<div id="content">
				<div style="width: 80%; border: 3px solid black; padding: 5px; background-color: #C3F9FF; margin: 0px auto 0px auto;">
					<h3 class="antonH3"><?php echo $_SESSION['user']; ?>'s Information: <small>(on file)</small></h3>
					<table style="margin: 0px auto 0px auto;">
						<tr>
							<td class="antonTD">User Field</td>
							<td class="antonTD">Field Data</td>
						</tr>
						<tr>
							<td class="antonTD">First Name: </td>
							<td class="antonTD"><?php echo $_SESSION['userFirstName']; ?></td>
						</tr>
						<tr>
							<td class="antonTD">Last Name: </td>
							<td class="antonTD"><?php echo $_SESSION['userLastName']; ?></td>
						</tr>
						<tr>
							<td class="antonTD">User Name: </td>
							<td class="antonTD"><?php echo $_SESSION['user']; ?></td>
						</tr>
					</table>
					<input name="btnSubmit" type = "submit" value = "Log Off" onclick = "logOff();" />
				</div>

			</div> <!-- close div content tag -->

			<div id="footer">Copyright &copy; 2013 Greg's Gambits<br />
				<a href="mailto:gregory@gambits.net">gregory@gambits.net</a></div>
			</div>

		</div>

	</body>

</html>
