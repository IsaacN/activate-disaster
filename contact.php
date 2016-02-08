
<?php
	$pagename = 'Contact Us';
	include 'includes/header.php';
?>
    <body>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<?php 
			include 'includes/nav.php'
		?>
		
		<div class="main-container">
		<section class="contact-center">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
							<h1>Enquire Now!<br>
							We'd love to hear from you.</h1>
							<p class="lead">
								Once this form gets sent hurtling through cyberspace, one of our friendly team members will call you to have a chat. If you'd prefer email or SMS contact, please let us know in the message and we'll happily oblige!&nbsp;</p>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
							<div class="form-wrapper clearfix">
								<form class="form-contact email-form">
									<div class="inputs-wrapper">
										<input class="form-name validate-required" type="text" placeholder="Your Name" name="name">
										<input class="form-email validate-required validate-email" type="text" name="email" placeholder="Your Email Address">
										<input class="form-phone" type="text" name="phone" placeholder="Your Phone Number">
										<input type="text" name="year" placeholder="Student(s) Year Level(s)">
										<textarea class="form-message validate-required" name="message" placeholder="Your Message. Please be sure to mention which subjects you are interested in tutoring for."></textarea>
									</div>
									<input type="submit" class="send-form" value="Submit!">
									<div class="form-success">
										<span class="text-white">Message sent - Thanks for your enquiry</span>
									</div>
									<div class="form-error">
										<span class="text-white">Please complete all fields correctly</span>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include 'includes/footer.php'; ?>