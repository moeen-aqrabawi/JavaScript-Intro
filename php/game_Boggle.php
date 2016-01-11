<?php
	include ('assets/userPage.php');
	include ('include/header.php');
?>

		<!-- Page Content Wrapper <div> -->
		<div id = "content">
		
			<h2>BOGGLE</h2>
			<h3><?php echo $_SESSION['user']; ?>'s Session</h3>
			<hr />
			<p>The object of the game is to create as many words as you can, in a given time limit, from the letters shown below. When you are ready to begin, click the button.</p>
			<p><input type="button" value = "begin the game" onclick="boggle();" /></p>
			<h2>
				<br />
				Letters you can use:<br />
				<div id = "letters">&nbsp;</div><br />
			</h2>
			<h2>Your words so far: <br />
				<div id = "entries">&nbsp;</div><br />
			</h2>
			<h2>Results:<br />
				<div id = "result">&nbsp;</div>
			</h2>
			<div id="submitResult">&nbsp;</div>
			<div id="scoreInserted">&nbsp;</div>
			<div id="holdScore" style="visibility:hidden">&nbsp;</div>
			<hr />
			<p style="float: right; margin-right: 60px;">
				<input name="btnSubmit" type = "submit" value = "Log Off" onclick = "logOff(); return false;" />
			</p>
		</div> <!-- Close Content Wrapper <div> -->

<?php include ('include/footer.php'); ?>


