
function ajax_post()
{
	
	// create HttpRequest object to allow communication with server. This object is an Application Programming Interface (api) that is used to transfer and manipulate XML data to and from a web server using HTTP. This object establishes an independent connection channel between our client-side web page and the server-Side php script.
	
	
	// location of our server-side Common Gateway Interface (cgi) script (our php script)
	
	
	// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
	

	// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
	
	// variable to hold field-value pairs that will be sent to server side script for processing. Note & is used to indicate a new field-value pair.
	

	// open(method,url,async) : method = POST: this is the method or way the request is being sent (this means that our field-value pairs, currently held in our client-side javascript variable vars, will be stored in the server-side accessible Super Global Variable $_POST), url is the location of the server-side cgi script where processing will take place, asynch is
	

	// Set content type header information for sending url encoded variables in the request
	

	// Access the onreadystatechange event for the XMLHttpRequest object. onreadystatechange event is triggered every time the readyState changes.
	hr.onreadystatechange = function()
	{
		//checks if readyState is 4 and status is 200. If TRUE then response is ready:
		// end if
	} // close function()

	// Send the data to PHP now .-. wait for response to update the status div
	// displays while server side php is processing vars

} // end function ajax_post()