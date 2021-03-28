<?php

	$formEmailAddress = $_POST['email'];	//pull email address from the form data
	$formTopic = $_POST['topic'];			//pull topic from the form data
?>
<!DOCTYPE html>
<html>
<head>
	<title>Waves Surfing School</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Bebas+Neue|Sigmar+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/background-beach.css">
	<link rel="stylesheet" type="text/css" href="css/body.css">
	<link rel="stylesheet" type="text/css" href="css/section-arrow.css">
	<link rel="stylesheet" type="text/css" href="css/heroimage.css">
	<link rel="stylesheet" type="text/css" href="css/reviews.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<meta charset="utf-8">
	<meta name="description" content="A surfing company offering great classes to help people learn the skill of surfing">
	<meta name="keywords" content="Surfing, Ocean, Waves, School, Surfing School">
  	<meta name="author" content="Austin Brown">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- My Navbar That Sticks and has Brand Button -->
<nav class="navbar fixed-top navbar-expand-sm navbar-light bg-light">
  	<a class="navbar-brand" href="index.html"><img src="images/navbutton.png" height="30"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    	<a class="nav-item nav-link active" href="index.html">Home<span class="sr-only">(current)</span></a>
    	<a class="nav-item nav-link" href="lessons.html">Lessons</a>
    	<a class="nav-item nav-link" href="camps.html">Camps</a>
    	<a class="nav-item nav-link" href="aboutus.html">About us</a>
    	<a class="nav-item nav-link" href="contactus.html">Contact us</a>
    </div>
  </div>
</nav>

<h1 style="text-align: center; font-size: 25pt; padding: 60px 0 0 0">Thank you for contacting!</h1>

<?php
	//          CHANGE THE FOLLOWING INFORMATION TO SEND EMAIL FOR YOU //  

	$toEmail = "austinb@austinb.net";//will send the email to this email address
		
	
	$subject = "Thank you for your message. I will contact you soon.";//Send back message
	

	$fromEmail = "";//email from form  


	//   DO NOT CHANGE THE FOLLOWING LINES  //

	$emailBody = "Form Data\n\n ";//stores the content of the email
	foreach($_POST as $key => $value)//Reads through all the name-value pairs. 	$key: field name   $value: value from the form									
	{
		$emailBody.= $key."=".$value."\n";//Adds the name value pairs to the body of the email, each one on their own line
	}
	
	$headers = "From: $fromEmail" . "\r\n";	//Creates the From header with the appropriate address

 	if (mail($toEmail,$subject,$emailBody,$headers))//puts pieces together and sends the email to your hosting account's smtp (email) server
	{
   		echo("<p>Message successfully sent!</p>");
  	} 
	else 
	{
   		echo("<p>Message delivery failed...</p>");
  	}
?>


</body>
</html>
