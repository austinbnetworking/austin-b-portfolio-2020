<?php

	$formEmailAddress = $_POST['email'];	//pull email address from the form data
	$formTopic = $_POST['topic'];			//pull topic from the form data
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doogies Events</title>
    <meta name="description" content="Doogies Music Event Venue unnoficial website. This is a website portfolio developed by Austin Brown.">
    <meta name="keywords" content="Music Venue, Event Venue, Website Portfolio, Venue">
    <meta name="author" content="Austin Brown">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/all.css">
    <!-- Custom JS -->
    <script src="js/dropdown-toggler.js"></script>

</head>

<body>

<!-- Navbar With Brand -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

    <div class="brand">
        <a class="brandlogo" href="welcome.html">
            <img src="images/doogies-logo.png" alt="Logo for Doogies Event Venue">
        </a>
        <a href="welcome.html" class="brandname">DOOGIES EVENTS</a>
        <a class="desktop-links" href="welcome.html">Home</a>
        <a class="desktop-links" href="host.html">Host</a>
        <a class="desktop-links" href="faqs.html">FAQ's</a>
        <a class="desktop-links active" href="contact.html">Contact</a>
    </div>

    <button class="navbar-toggler navbar-dropdown-button">
        <span class="navbar-toggler-icon"></span>
    </button>

</nav>
<!-- End of Navbar -->

<!-- Navbar Dropdown Mark-up For Mobile -->
<div class="navbar-dropdown">

    <div class="links">
        <a href="welcome.html">Home</a>
        <a href="host.html">Host</a>
        <a href="faqs.html">FAQ's</a>
        <a href="contact.html">Contact</a>
    </div>

    <div class="info">
        <h2>DOOGIES VENUE</h2>
        <div class="social-media-icons">
            <a href="#"><img src="images/Facebook.png" alt="Small Facebook Icon"></a>
            <a href="#"><img src="images/Google plus.png" alt="Small Google Plus Icon"></a>
            <a href="#"><img src="images/Instagram.png" alt="Small Instagram Icon"></a>
            <a href="#"><img src="images/Twitter.png" alt="Small Twitter Icon"></a>
        </div>
        <p>@Copyright Doogies</p>
    </div>

</div>
<!-- End of Navbar Dropdown Markup -->

<!-- Contact Form -->
<div class="container contact-form">

    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
    </div>

    <form action="webcontact.php" method="post">

        <h3>Drop Us a Message</h3>

        <p>Give us your Name, Email, and a Number to get back to you at. Tell us the day you would like your event to happen on and we will respond within 24hrs all the available options.</p>

        <div class="row">

            <div class="col-md-6">

                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>

                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>

                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                </div>

                <div class="form-group">
                    <label for="select-package">Select Your Package</label>
                    <select class="form-control" id="select-package">
                        <option>Simple Package</option>
                        <option>Advanced Package</option>
                        <option>All-In Package</option>
                    </select>
                </div>

            </div>

            <div class="col-md-6">

                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>

                <div class="form-group">
                    <label for="event-day">Day of the Event</label>
                    <select class="form-control" id="event-day">
                        <option>Friday</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                    </select>
                </div>
<!-- HTML before messege sent  --> 

<!-- PHP to send data to server -->

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

<!-- HTML after messege sent  --> 
<div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send" />
                </div>

            </div>

        </div>

    </form>
    
</div>
<!-- End of Contact Form -->

<!-- Newsletter Pop-up & Gallery -->
<div class="container newsletter-gallery">

    <div class="container newsletter">

        <h2>Sign Up for a Newsletter</h2>

        <form>

            <div class="form-group">
            
                <label for="input-name">Your Name</label>
                <input type="name" class="form-control" id="input-name" placeholder="John Doe">
            
            </div>
                    
            <div class="form-group">

                <label for="input-email">Email address</label>
                <input type="email" class="form-control" id="input-email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            
            </div>

            <div class="form-group">
            
                <label for="input-comments">Any comments</label>
                <textarea class="form-control" id="input-comments" rows="3"></textarea>
            
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>

    </div>

    <!-- Bootstrap Slideshow -->
    <div id="footerslideshow" class="carousel footer-slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#footerslideshow" data-slide-to="0" class="active"></li>
            <li data-target="#footerslideshow" data-slide-to="1"></li>
            <li data-target="#footerslideshow" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="images/home-slideshow-image.jpg" alt="Doogies Event venue image">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="images/gallery-images/gallery1.jpg" alt="Doogies Event venue image">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="images/gallery-images/gallery2.jpg" alt="Doogies Event venue image">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>

        </div>

        <a class="carousel-control-prev" href="#footerslideshow" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#footerslideshow" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <!-- End of Bootstrap Slideshow -->

</div>    
<!-- End of Newsletter & Gallery -->

<!-- Footer -->
<div class="container footer">
    
    <h2>DOOGIES VENUE</h2>

    <div class="address">
        <p>123 Your St.</p>
        <p>Your Town, XX</p>
        <p>(999) - 111 - 2222</p>
    </div>

    <div class="social-media-icons">
        <a href="#"><img src="images/Facebook.png" alt="Small Facebook Icon"></a>
        <a href="#"><img src="images/Google plus.png" alt="Small Google Plus Icon"></a>
        <a href="#"><img src="images/Instagram.png" alt="Small Instagram Icon"></a>
        <a href="#"><img src="images/Twitter.png" alt="Small Twitter Icon"></a>
    </div>

    <p style="opacity: .7;">@Copyright Doogies</p>

</div>
<!-- End of Footer -->




<!-- Bootstrap Script-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
