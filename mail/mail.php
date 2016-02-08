<?php
 
if(isset($_POST['email'])) {
	// Require the Swift Mailer library
	require_once 'lib/swift_required.php';

	// Enter your SMTP settings here...
	// You can look up your mail server and also see if it supports TLS by going to:
	// http://mxtoolbox.com/diagnostic.aspx 
	// and entering smtp:yourdomain.com 
	// You'll be given a report stating the server name to use and whether your server supports TLS.
	
	
	// Change smtp.example.org to your own server address below
	// Enter your email account username and password below also...
	
	// If your server supports a security layer (Gmail enforces use of 'tls' and port 587) change port accordingly (587 or 25 usually) and use 'tls' or 'ssl' as a third argument like so:
	// FOR GMAIL: 		$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 587, 'tls')
	// GENERIC TLS: 	$transport = Swift_SmtpTransport::newInstance('mail.mediumra.re', 25, 'tls')
	
	// If you choose not to use SSL or TLS then the following could work for you:
	// $transport = Swift_SmtpTransport::newInstance('mail.mediumra.re', 25)
	
	// or if you prefer/need to fall back to use PHP's inbuilt mail() function:
	// $transport = Swift_MailTransport::newInstance();
	
<<<<<<< 19189bdba9f82b3dfb795cef9a021e9d074be51a
	$transport = Swift_SmtpTransport::newInstance('localhost', 465, 'ssl' )
	  ->setUsername('hello@activateeducation.com.au')     
	  ->setPassword('CaptainMater14l!')
=======
	$transport = Swift_SmtpTransport::newInstance('mail.yourdomain.com', 25, 'tls' )
	  ->setUsername('email@domain.com')     
	  ->setPassword('p@55w0rd')
>>>>>>> Index Page First Draft
	  ;

	
	$mailer = Swift_Mailer::newInstance($transport);
	
	
	// Creating the message text using fields sent through POST
	
	foreach ($_POST as $key => $value)
		$messageText .= ucfirst($key).": ".$value."\n\n";
	
	
	
	
	// You can change "A message from Pivot Template Form" to your own subject if you want.
<<<<<<< 19189bdba9f82b3dfb795cef9a021e9d074be51a
	$message = Swift_Message::newInstance('Activate Education Website Inquiry')
	  ->setFrom(array($_POST['email'] => $_POST['name']))
	  ->setTo(array('hello@activateeducation.com.au' => 'Activate Education'))->setBody($messageText);
=======
	$message = Swift_Message::newInstance('A message from Pivot Template Form')
	  ->setFrom(array($_POST['email'] => $_POST['name']))
	  ->setTo(array('email@yourdomain.com' => 'John Doe'))->setBody($messageText);
>>>>>>> Index Page First Draft
//                           ^                    ^
//       Your email address_/          Your name_/

	  

	// Send the message or catch an error if it occurs.
	try{
		echo($mailer->send($message));
	}
	catch(Exception $e){
		echo($e->getMessage());
<<<<<<< 19189bdba9f82b3dfb795cef9a021e9d074be51a
		//echo("Uh oh! Looks like our website host is having some problems. Please call Isaac on 0407 008 422 instead, or email us on <a href='mailto:hello@activateeducation.com.au> hello@activateeducation.com.au</a> and we'll get back to you as soon as possible.")
=======
>>>>>>> Index Page First Draft
	}
	exit;
}
 
?>