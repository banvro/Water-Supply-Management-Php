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
						<div class="home_title">Career</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">the best deals of water</div>
						<div class="section_title"><h1>Job Application</h1>
					
					
					
					</div>
					</div>
				</div>
			</div>
			<div class="row contact_row">

	
	                                                                                                                                                                                        

				



	
				<!-- Contact - Info -->
				<div class="col-lg-4 contact_col">
								<div class="contact_info">
								<div class="contact_image d-flex flex-column align-items-center justify-content-center ">
					<marquee direction="up" loop="infinite" onmouseover="this.stop();" onmouseout="this.start();">	<img src="images/saleman1.png" alt="">
					<img src="images/saleman2.png" alt="">
					<img src="images/saleman3.png" alt="">
</marquee>
					</div>
					</div>
				</div>
				<div class="col-lg-4 contact_col">
				<h1 style="font-size: 20px; margin-top: 24px; margin-bottom: 24px;
  text-align:center;"> Job Application Form</h1>
    <form accept-charset="UTF-8"  style="border-color: red;" action="admin/careerinsertdata.php" method="POST" enctype="multipart/form-data" target="_blank">
      <div class="form-group">
        <label for="exampleInputName">Full Name</label>
        <input type="text"  name="n2" class="form-control" id="exampleInputName" style="border-color: #00FFFF;" placeholder="" required="required">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" required="required">Email address</label>
        <input type="email"  name="n3"  class="form-control" id="exampleInputEmail1"  style="border-color: #00FFFF;" aria-describedby="emailHelp" placeholder="">
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="n4" class="form-control" id="inputAddress"  style="border-color: #00FFFF;" placeholder="">
      </div>
      <div class="form-group">
          <label for="inputCity">City</label>
          <input type="text" name="n5" class="form-control" id="inputCity"  style="border-color: #00FFFF;" placeholder="">
        </div>
        <div class="form-group">
          <label for="inputCity">Contact number</label>
          <input type="text" name="n6" class="form-control" id="inputCity"  style="border-color: #00FFFF;" placeholder="">
        </div>
		<div class="form-group">
          <label for="experiance">Choices experiance year:</label>
		  <select name="n7" id="experiance" class="form-control" style="border-color: #00FFFF;" >
		  <option value=""></option>
          <option value="0-1">0-1 year</option>
    <option value="1-2">1-2 year</option>
    <option value="2-4">2-4 year</option>
    <option value="4-6">4-6 year</option>
	<option value="6-10">4-6 year</option>
	<option value="10+">10+ years </option>
  </select>
        </div>
		<div class="form-group">
          <label for="destination">Choices Destination :</label>
		  <select name="n8" id="experiance" class="form-control" style="border-color: #00FFFF;" >
          <option value=""></option>
    <option value="senior sales manager">senior sales manager</option>
    <option value="join sale manager ">join sale manager</option>
    <option value="digital marketing">digital marketing</option>
	<option value="field boy"></option>
	
  </select>
	</div>
      
      
      <div class="form-group mt-3">
        <label class="mr-4"  >Upload your CV:</label>
        <input type="file" name="n9">
      </div>
      <button type="submit" class="btn btn-primary" alt="form successfully uploaded">Submit</button>
    </form>
</div>



	<div class="col-lg-4 contact_col">
					<div class="contact_image d-flex flex-column align-items-center justify-content-center">
						<img src="images/img1.png" alt="">
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