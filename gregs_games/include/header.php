<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Greg's PHP Demo</title>
		<link href="css/greg.css" rel="stylesheet" type="text/css" />
		<script language="JavaScript" type="text/javascript">
			function ajax_post()
			{
	
				// create HttpRequest object to allow communication with server. This object is an Application Programming Interface (api) that is used to transfer and manipulate XML data to and from a web server using HTTP. This object establishes an independent connection channel between our client-side web page and the server-side php script.
				var objHttpRequest = new XMLHttpRequest();

				// location of our server-side Common Gateway Interface (cgi) script (our php script)
				var url = "assets/ajaxDataPipe.php";
	
				// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
				var fName = document.getElementById("firstName").value;

				// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
				var lName = document.getElementById("lastName").value;

				// variable to hold field-value pairs that will be sent to server side script for processing. Note '&' is used to indicate a new field-value pair.
				var vars = "postFirstName=" + fName + "&postLastName=" + lName;

				// open(method,url,async) : method = POST: this is the method or way the request is being sent (this means that our field-value pair, currently held in our client-side javascript variable vars, will be stored in the server-side accessible Super Global Variable $_POST), url is the location of the server-side cgi script where processing will take place, asynch set to TRUE means that server-side script processing continues after the send() method, without waiting for a response.
				objHttpRequest.open("POST", url, true);

				// Set content type header information for sending url encoded variables in the request. By defining 'Content-type' as "application/x-www-form-urlencoded" we are stating that the kind of data contained in the body of the request will be form data.
				objHttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

				// Access the onreadystatechange event for the XMLHttpRequest object. The onreadystatechange event is triggered every time the readyState changes.
				objHttpRequest.onreadystatechange = function()
					{
						//checks if readyState is 4 (means request is finished and response is ready) and status is 200 (the page is found). If TRUE then response is ready.
						if(objHttpRequest.readyState == 4 && objHttpRequest.status == 200)
						{
							// since request is finished and response is ready we can access the server's response to the request. The 'responseText' property is used to retrieve the server's response as a string (as opposed to XML)
							var returnData = objHttpRequest.responseText;
			
							// Set the html element's (whose id = status) value to the server's string response
							document.getElementById("status").innerHTML = returnData;
						} // end if
					} // close function()

				// Send the data to PHP now .-. wait for response to update the status <div>
				objHttpRequest.send(vars); // Executes the request
				document.getElementById("status").innerHTML = "doing work ..."; // displays while server side php is processing vars

			} // end function ajax_post()

		</script>
		</head>
		<body>
		<div id = "header">

		<!-- <><><> html to be inserted into calling page <><><> -->

			<img src="images/superhero.jpg" class="floatleft" />
			<h1><em>Greg's Gambits</em></h1>
  
			<h2 align="center"><em>Games for Everyone!</em></h2>

			<p>&nbsp;</p>
			<div id="nav">
				<p><a href="index.php">Home</a>
				<a href="greg.html">About Greg</a>
				<a href="play_games.html">Play a Game</a>
				<a href="sign.html">Sign In</a>
				<a href="contact.html">Contact Us</a>
				<a href="aboutyou.html">Tell Greg About You</a></p>
			</div>
		</div> <!-- close header div -->

	
	

	