<!-- This include() statement places the contents of the header.php file, located in the include folder, into this page --> 
<?php include ('include/header.php'); ?>
		<div id = "content">	
			<p class="phpH2">PHP DEMO</p>
				<table>
					<!-- <><><> Input Elements *note: the id attributes* These identify user inputs which will be submitted to a javascript function (in this case ajax_post()) via the onclick() event of the input element. Follow the data (via the id names) in the javascript function, ajax_post() -> this function is located in the header.php file  <><><> -->
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
			</div>
			
			<br /><br style="clear: both;" />
<?php include ('include/footer.php'); ?>

