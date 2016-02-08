<?php
	$pagename = 'Login';
	include 'includes/header.php';
?>
    <body>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    	<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
			
		
		</div>
		
		<div class="main-container">
		<section class="no-pad login-page fullscreen-element">
			
				<div class="background-image-holder">
					<img class="background-image" alt="Poster Image For Mobiles" src="img/hero6.jpg">
				</div>
			
				<div class="container align-vertical">
					<div class="row">
						<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
							<form action="/charge" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_6pRNASCoBOKtIshFeQd4XMUh"
    data-image="/img/activate-circle-only.png"
    data-name="Activate Education"
    data-description="Weekly Tutoring Session"
    data-amount="4200"
    data-currency="AUD"
    data-locale="auto">
  </script>
</form>
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div class="footer-container">
		
			
		</div>
				
		<script src="https://www.youtube.com/iframe_api"></script>
		<script src="js/jquery.min.js"></script>
        <script src="js/jquery.plugin.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/skrollr.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/scrollReveal.min.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/twitterFetcher_v10_min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				