<?php include ('include/header.php'); ?>

		<!-- Page Content Wrapper <div> -->
		<div id = "content">		
	
			<p class="antonH2">PHP DEMO</p>
			
				<table>
					<tr>
						<td style="border: none;">First Name: </td>
						<td style="border: none;"><input id="firstName" name="firstName" type="text" /></td>
					</tr>
					<tr>
						<td style="border: none;">Last Name: </td>
						<td style="border: none;"><input id="lastName" name="lastName" type="text" /></td>
					</tr>
					<tr>
						<td style="border: none;">&nbsp;</td>
						<td style="border: none;"><input name="btnSubmit" type = "submit" value = "Submit" onclick = "javascript:ajax_post();" /></td>
					</tr>
				</table>
				<br />
				<div id = "status"></div>
			
			<br /><br style="clear: both;" />
		</div> <!-- close content <div> -->

<?php include ('include/footer.php'); ?>