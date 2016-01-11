<?php
	include("assets/sendLogInInfo.php");
?>

<!--	!*!*!*!*!*!*! ADD FORM VALIDATION !*!*!*!*!*!*! -->
<html>
	<head>
		<title>Greg's Gambits</title>
		<link href="css/greg.css" rel="stylesheet" type="text/css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		
		<script language="JavaScript" type="text/javascript">

			function setFocus()
			{
				document.getElementById("idFirstName").focus();
			}
			
		</script>
			
	</head>
	<body>
		<div id="container">

			<img src="images/superhero.jpg" width="120" height="120" class="floatleft" />
			<h1 id="logo"><em>Greg's Gambits </em></h1>
  
			<h2 align="center"><em> Games for Everyone!</em></h2>

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
				<p>Request Log In Information</p>
				<hr />
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<table>
						<tr>
							<td style="border: none;">First Name: </td>
							<td style="border: none;"><input id="idFirstName" type="text" name="firstName" /></td>
						</tr>
						<tr>
							<td colspan="2" style="border: none;"></td>
						</tr>
						<tr>
							<td style="border: none;">Last Name: </td>
							<td style="border: none;"><input type="text" name="lastName" /></td>
						</tr>
						<tr>
							<td colspan="2" style="border: none;"></td>
						</tr>
						<tr>
							<td style="border: none;">Email address: </td>
							<td style="border: none;"><input type="text" name="email" /> <span style="font-size: 12px;">(<em>log in information will be sent here</em>)</span></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:center; border: none;">
								<input style="margin: 5px 5px 5px 0px; float:right;" type="submit" name="frmGetLoginInfo" value="Send Login Data" />
							</td>
						</tr>
					</table>
				</form><!-- close insert form -->
			</div>

			<div id="footer">Copyright &copy; 2013 Greg's Gambits<br />
				<a href="mailto:gregory@gambits.net">gregory@gambits.net</a></div>
			</div>

		</div>

	</body>

</html>