<?php include ('assets/logIn.php'); ?>
<?php include ('include/header.php'); ?>
		<!-- Page Content Wrapper <div> -->
		<div id="content">

			<p>Log In </p>
			<hr />
	
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return validate_loginForm(this);">

				<table>
					<tr>
						<td style="border: none;">User Name: </td>
						<td style="border: none;"><input id="idUserName" type="text" name="userName" /></td>
					</tr>
					<tr>
						<td style="border: none;">Password:</td>
						<td style="border: none;"><input id="idPassWord" type="password" name="passWord" /></td>
					</tr>
					<tr>
						<td style="border: none;">&nbsp;</td>
						<td style="border: none;">
							<input type="submit" name="frmLogin" />
						</td>
					</tr>
					<tr>
						<td colspan="2" style="border: none;">
							<br /> <hr />
							<a class="contentAnchor" style="margin-top: 15px;" href="addUser.php">Not a member? Create an account now.</a><br />
						</td>
					</tr>
				</table>
			</form><!-- close insert form -->
			<br /><hr />
		</div> <!-- close content <div> -->


<?php include ('include/footer.php'); ?>