<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WSMS-Contact Us Page</title>

<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script src="javascript.js"></script>
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>
	
	<?php include_once('includes/header.php');?>
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/wsmscontact.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content text-center">
						<div class="home_title">Contact</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals of water</div>
						<div class="section_title"><h1>Get in touch</h1></div>
					</div>
				</div>
			</div>


			<div class="row contact_row">

				<!-- Contact - About -->
				

				<!-- Contact - Info -->
				<div class="col-lg-4 contact_col">
								<div class="contact_info">
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/placeholder_2.svg" alt=""></div>
								</div>
								<span>#890 CFG Apartment, Mayur Vihar, Delhi-India.
 </span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/phone-call-2.svg" alt=""></div>
								</div>
								<span>+91 8988858695</span>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div><img src="images/envelope-2.svg" alt=""></div>
								</div>
								<span>info@gmail.com</span>
							</li>
						</ul>
					</div>
				
				</div>

				<div class="col-lg-4 contact_col">
				<form align="center">
<input type="text" onfocus="def()" onblur="abc()" id="a1" pattern="[a-z]{1,15}" style="width:350px; height:40px; margin-top:40px padding-right:10px; border:1px solid #777; border-radius:14px; outline:none;" placeholder="Enter Your Name" required><br/><br/>
<input type="email" onfocus="def()" onblur="abc()" id="a2" style="width:350px; height:40px; margin-top:40px padding-right:10px; border:1px solid #777; border-radius:14px; outline:none;" placeholder="Enter Your Email" required><br/><br/>

<input type="text" onfocus="def()" onblur="abc()" id="a3" pattern="[a-z]{1,15}" style="width:350px; height:40px; margin-top:40px padding-right:10px; border:1px solid #777; border-radius:14px; outline:none;" placeholder="Enter Your Subject" required><br/><br/>
<textarea type="text" onfocus="def()" onblur="abc()" id="a4"style="width:350px; height:150px; margin-top:40px padding-right:10px; border:1px solid #777; border-radius:14px; outline:none;" placeholder="Enter Your Message" required></textarea>
<button style="border-radius:20px;  color:#fff; margin-top:18px; padding:10px; background-color:#adc867;font-size:17px; border:none; cursor:pointer">Send Message</button>
                                                                                                                                                                                             
        </form>
				
			
</div>                                                                                                                                                                                                        

				





				<!-- Contact - Image -->
				<div class="col-lg-4 contact_col">
					<div class="contact_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/contactwsms.jpg" alt="">
					</div>
				</div>

			</div>
			
		</div>
	</div>

	
	<?php include_once('includes/footer.php');?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>