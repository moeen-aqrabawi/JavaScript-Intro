<?php include ('assets/userPage.php'); ?>
<?php include ('include/header.php'); ?>


		<!-- Page Content Wrapper <div> -->
		<div id="content">

			<div style="width: 80%; border: 3px solid black; padding: 5px; background-color: #C3F9FF; margin: 0px auto 0px auto;">
				<h3 class="phpH3"><?php echo $_SESSION['user']; ?>'s Information: <small>(on file)</small></h3>
				<table style="margin: 0px auto 0px auto;">
					<tr>
						<td>Player</td>
						<td>Player Information</td>
					</tr>
					<tr>
						<td>First Name: </td>
						<td><?php echo $_SESSION['userFirstName']; ?></td>
					</tr>
					<tr>
						<td>Last Name: </td>
						<td><?php echo $_SESSION['userLastName']; ?></td>
					</tr>
					<tr>
						<td>User Name: </td>
						<td><?php echo $_SESSION['user']; ?></td>
					</tr>
					<tr>
						<td colspan="2" style="border: none;">&nbsp;</td>
					</tr>
				</table>
			</div>
			<br />
			
			<ul>
				<li><a class="contentAnchor" href="game_Concentration.php">Play CONCENTRATION</a></li>
				<li><a class="contentAnchor" href="game_Tales.php">Play GREG's TALES</a></li>
				<li><a class="contentAnchor" href="game_Hangman.php">Play HANGMAN</a></li>
				<li><a class="contentAnchor" href="game_Boggle.php">Play BOGGLE</a></li>
			</ul>

			<br /><hr /><br />
			
			<p><input style="float: right; margin-right: 60px;" name="btnSubmit" type = "submit" value = "Log Off" onclick = "logOff(); return false;" /></p>
			
		</div> <!-- Close Content Wrapper <div> -->
		
<?php include ('include/footer.php'); ?>