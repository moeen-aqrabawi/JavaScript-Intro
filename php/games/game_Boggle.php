<?php include ('../include/header.php'); ?>
<?php include ('../assets/userPage.php'); ?>

		<!-- Page Content Wrapper <div> -->
		<div id = "content">
			<h2>BOGGLE</h2>
			<h3 class="phpH3"><?php echo $_SESSION['user']; ?>'s Session</h3>

			<br /><hr /><br />

			<input style="float: right; margin-right: 60px;" name="btnSubmit" type = "submit" value = "Log Off" onclick = "logOff(); return false;" />
		</div> <!-- Close Content Wrapper <div> -->

<?php include ('../include/footer.php'); ?>


