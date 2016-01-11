<?php include ('include/header.php'); ?>
<?php include("assets/addUser.php"); ?>

		<!-- Page Content Wrapper <div> -->
		<div id = "content">

			<p>Create User </p>
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
						<td style="border: none;">User Name: </td>
						<td style="border: none;"><input type="text" name="userName" /></td>
					</tr>
					<tr>
						<td colspan="2" style="border: none;"></td>
					</tr>
					<tr>
						<td style="border: none;">Password:</td>
						<td style="border: none;"><input type="password" name="passWord" /></td>
					</tr>
					<tr>
						<td colspan="2" style="border: none;"></td>
					</tr>
					<tr>
						<td style="border: none;">&nbsp;</td>
						<td style="border: none;">
							<input style="margin: 5px 0px 5px 0px;" type="submit" name="frmAddUser" value="Create User Account" />
						</td>
					</tr>
				</table>
			</form> <!-- close insert form -->

		</div> <!-- Close Content Wrapper <div> -->

<?php include ('include/footer.php'); ?>


