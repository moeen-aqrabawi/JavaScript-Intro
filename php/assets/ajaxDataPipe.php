<?php

	// creates a string (using the values stored in the Super Global Variable $_POST -> value data originated from the user in the html input elements) to be sent back to the XMLHttpRequest object
	echo 'Thank you '. $_POST['postFirstName'] . ' ' . $_POST['postLastName'] . ', says the PHP file';
?>
