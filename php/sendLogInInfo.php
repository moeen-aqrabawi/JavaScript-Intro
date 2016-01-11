<?php include ('include/header.php'); ?>
<?php include('assets/sendLogInInfo.php'); ?>

<!--	!*!*!*!*!*!*! ADD FORM VALIDATION !*!*!*!*!*!*! -->

		<!-- Page Content Wrapper <div> -->
		<div id="content">
		
			<p>Request Account Information</p>
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
						<td style="border: none;">&nbsp;</td>
						<td style="align: center; border: none;">
							<input style="margin: 5px 5px 5px 0px;" type="submit" name="frmGetLoginInfo" value="Submit Request" />
						</td>
					</tr>
				</table>
			</form> <!-- close insert form -->

		</div> <!-- Close Content Wrapper <div> -->

<?php include ('include/footer.php'); ?>