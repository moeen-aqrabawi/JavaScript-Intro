
// -----------------------------------------------------------------
//	<> <> <> <> <> Global Varibales: to be used in any function		
// -----------------------------------------------------------------

var gatherInvalids = new Array();	// holds alert messages about invalid entries


// -------------------------------------------------------------------------
//					<> <> <> <> <> FUNCTIONS <> <> <> <> <>					
// -------------------------------------------------------------------------

// Function kills session and clears all session variables
function logOff()
{
	var objHttpRequest;

	// Browser Check
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		objHttpRequest = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5: IE - ICK!
		objHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
 
	objHttpRequest.open("GET", "assets/userLogoff.php", true);
	
	objHttpRequest.onreadystatechange = function()
	{
		if (objHttpRequest.readyState == 4 && objHttpRequest.status == 200)
		{
			alert("User session ended");
			window.location = "index.php";
		}
	}

	objHttpRequest.send(null);
}

// ------------------------------------------------------------------------------
// Function to set focus when page is loaded
function setFocus()
{
	document.getElementById("firstName").focus();
}
// ------------------------------------------------------------------------------
// Function to open communication channel for client to server communication
function ajax_post()
{
	
	// create HttpRequest object to allow communication with server. This object is an Application Programming Interface (api) that is used to transfer and manipulate XML data to and from a web server using HTTP. This object establishes an independent connection channel between our client-side web page and the server-Side php script.
	
	var objHttpRequest;
	
	// Browser Check
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		objHttpRequest = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5: IE - ICK!
		objHttpRequest = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	// location of our server-side Common Gateway Interface (cgi) script (our php script)
	var url = "assets/ajaxDataPipe.php";
	
	// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
	var fName = document.getElementById("firstName").value;

	// variable to hold data from user (the value associated with the element that is referenced with the id attribute)
	var lName = document.getElementById("lastName").value;

	// variable to hold field-value pairs that will be sent to server side script for processing. Note & is used to indicate a new field-value pair.
	var vars = "postFirstName=" + fName + "&postLastName=" + lName;

	// open(method,url,async) : method = POST: this is the method or way the request is being sent (this means that our field-value pairs, currently held in our client-side javascript variable vars, will be stored in the server-side accessible Super Global Variable $_POST), url is the location of the server-side cgi script where processing will take place, asynch set to TRUE means that server-side script processing continues after the send() method, without waiting for a response.
	objHttpRequest.open("POST", url, true);

	// Set content type header information for sending url encoded variables in the request. By defining the content-type as "application/x-www-form-urlencoded" we are stating that the kind of data contained in the body of the request will be form data.
	objHttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	// Access the onreadystatechange event for the XMLHttpRequest object. The onreadystatechange event is triggered every time the readyState changes.
	objHttpRequest.onreadystatechange = function()
		{
			//checks if readyState is 4 (means request is finished and response is ready) and status is 200 (page is found). If TRUE then response is ready.
			if(objHttpRequest.readyState == 4 && objHttpRequest.status == 200)
			{
				// since request is finished and response is ready we can access the server's response to the request. The responseText property is used to retrieve the server's response as a string (as opposed to XML)
				var return_data = objHttpRequest.responseText;
			
				// Set the html element's, whose id = status, value to the server's string response
				document.getElementById("status").innerHTML = return_data;
			} // end if
		} // close function()

	// Send the data to PHP now .-. wait for response to update the status div
	objHttpRequest.send(vars); // Executes the request
	document.getElementById("status").innerHTML = "doing work ..."; // displays while server side php is processing vars

} // end function ajax_post()

// ------------------------------------------------------------------------------
function validate_userName(field)
{
	with(field){
		if(value.length > 29)
		{
			gatherInvalids.push("username length cannot exceed 30 characters");
		}
		if(value.length < 1)
		{
			gatherInvalids.push("Please enter a userName.");
		}
	}	
} // end Function: check username entered and length <> <> <>

function validate_passWord(field)
{
	with(field){
		if(value.length > 8)
		{
			gatherInvalids.push("Password length cannot exceed 8 characters");
		}
		if(value.length < 1)
		{
			gatherInvalids.push("Please enter a password.");
		}
	}
} // end Function: check password entered and length 
// ------------------------------------------------------------------------------

function validate_loginForm(thisform)
{
	with (thisform)
	{
		validate_userName(userName);
		validate_passWord(passWord);
	}
	if (gatherInvalids.length)
	{
		var displayInvalids = '';
		var count;
		for (count = 0; count < gatherInvalids.length; count++)
		{
			displayInvalids += gatherInvalids[count] + "\n";
		}
		alert(displayInvalids);
		document.getElementById("idUserName").innerHTML="";
		document.getElementById("idPassword").innerHTML="";
		displayInvalids = '';
		gatherInvalids = [];
		return false;
	}
} // close validate form
// end Function: validate form entries 
// -------------------------------------------------------------
//			GAME: Boggle 		
// -------------------------------------------------------------
// Boggle Global Variables
var boggleScore;
// --------------------------------------------
// Boggle Main Function 
function boggle()
{
	// Function Variables
	var timer = 0;
	var entry = "";
	var play = ""; 
	var flag = 0;
	var timer = 0;
	var num = Math.floor(Math.random()*5) + 1; 
	boggleScore = 0;
	compWords = new Array(); 
	notAword = new Array();
	playWords = new Array();
	compWords = boggle_words(num);
	yourWord = compWords[0];
	document.getElementById("letters").innerHTML = yourWord; 
	//get player entries
	while (play != "Q")
	{
		play = prompt("enter a word or enter Q when done");
		playWords.push(play);
		if(play != "Q")
		{
			document.getElementById("entries").innerHTML = playWords.toString();
		} // end if no quit
	} // end while
	//check winning score and list bad words
	var complgth = compWords.length;
	var playlgth = (playWords.length - 1);
	for (var i = 0; i < playlgth; i++)
	{
		flag = 0;
		for (var k = 0; k < complgth; k++)
		{
			if(playWords[i] == compWords[k])
			{
				boggleScore++;
				flag = 1;
			}
		}
		if (flag == 0)
		{
			notAword.push(playWords[i]); 
		}
	} // end for loop
	document.getElementById("result").innerHTML = ("Your score is " + boggleScore + ". The following entries are not valid words: <br />" + notAword.toString());
	document.getElementById("holdScore").innerHTML = (boggleScore);
	document.getElementById("submitResult").innerHTML=("<p><input style='float: left; margin-right: 10px;' name='scoreSubmit' type = 'submit' value = 'Submit Boggle Score' onclick = 'submitBoggleScore();' /></p>");
} // end main Boggle function

// -------------------------------------------------
//  Boggle Assistant Function 
function boggle_words(x)
{
	switch (x)
	{
	case 1:
		var word = new Array("balte", "table", "hat", "tab", "belt", "lab", "eat", "tea", "ate", "tale", "bale", "let", "bet", "teal", "late", "beat", "at", "bat", "able");
		break;		
	case 2:
		var word = new Array("atwre", "water", "wet", "wear", "tear", "war", "ret", "rate", "eat", "ate", "tea", "awe", "raw", "rat" , "wart", "art", "tar", "are", "ear");
		break;
	case 3:
		var word = new Array("dclaen", "can", "cane", "and", "clan", "lane", "lean", "lend", "land", "den", "dean", "dance", "lance", "clean", "deal", "ale", "dale", "candle", "clad", "ace", "aced", "lace", "laced", "lad", "deal", "acne");
		break;
	case 4:
		var word = new Array("aepinlar", "air", "airplane", "plane", "plan", "lane", "lean", "pane", "ear", "near", "nap", "nape","lair", "pen", "pan", "ape", "leap", "ale", "peal", "nap", "rap", "par", "pare", "pale", "are", "rail", "ail", "pail", "nail", "air", "pair", "ran", "pin", "pine", "line", "nip", "rip", "ripe", "lip", "earn", "learn", "ire", "pie", "pile", "pear", "lap", "in", "rape", "lard");
		break;
	case 5:
		var word = new Array("redykboa", "keyboard", "key", "board", "bored", "bore", "bark", "dark", "dork", "oar", "boar", "ark", "dare", "bare", "are", "red", "rod", "road", "bode", "rode", "ode", "bread", "read", "bead", "bred", "break", "drey", "day", "boy", "broke", "rake", "bake", "ear", "dear", "bear", "dye", "dyer", "doer", "oak", "boa", "doe", "okay","dab", "bade", "ade", "drake", "bard", "yard", "year", "beak", "beard", "bad", "bed", "bay", "yoke");
		break;
	}
	return word;
}
// ---------------------------------------------
//    Boggle: Submit Score  
// ---------------------------------------------
function submitBoggleScore()
{
	var submitScore = document.getElementById("holdScore").innerHTML;
	var objHttpRequest = new XMLHttpRequest();
	var url = "assets/game_Scores/insertBoggleScore.php";
	var vars = "postBoggleScore=" + submitScore;
	objHttpRequest.open("POST", url, true);
	objHttpRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	objHttpRequest.onreadystatechange = function()
		{
			if(objHttpRequest.readyState == 4 && objHttpRequest.status == 200)
			{
				var return_data = objHttpRequest.responseText;
			} // end if
		} // close function()

	// Send the data to PHP now .-. wait for response to update the status div
	objHttpRequest.send(vars); // Executes the request
} // end function submitBoggleScore()
