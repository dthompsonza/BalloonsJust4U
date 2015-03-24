<?php
    // display form if user has not clicked submit
    if (isset($_POST["submit"])) {
      
    	$from = $_POST["name"]; // sender
    	$email = $_POST["email"];
    	$phone = $_POST["phone"];
    	$city = $_POST["city"];
	    $subject = "[Online Query] Contact - " . $from . " " . $phone;
	    $message = $_POST["message"];
	    // message lines should not exceed 70 characters (PHP rule), so wrap it
	    $message = $message . "\n" . $from . "\n" . $phone . "\n" . $email . "\n" .$city;
	    $message = wordwrap($message, 70);

	    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        	$headers = 'From: ' . $email . "\r\n" .
			    'Reply-To: '. $email . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
	    }
	    else {
	        $headers = 'From: noreply@balloonsjust4u.co.za' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
	    }
	    
	    // send mail
	    mail("balloonsj4u@icon.co.za",$subject,$message,$headers);
	    mail("thompsdc@gmail.com",$subject,$message,$headers);
	    ?>
	    	<div style="font-face: Arial;">
		    	<p>
		    		Your message has been submitted, please wait while we redirect you... 
		    	</p>
		    	<p>
		    		or click <a href="/">here</a> to carry on browsing.
		    	</p>
		    </div>
		    <script type="text/JavaScript">
			<!--
			setTimeout("location.href = 'http://www.balloonsjust4u.co.za/';",3000);
			-->
			</script>
	    <?php
	    
    } else {
    	
    }

    
      ?>


