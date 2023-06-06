<!DOCTYPE>
<html>
	<head>
		<title>
			BRO-TELHUB
		</title>
		<link rel="icon" type="image/x-icon" href="favicon.ico">

		<link rel="stylesheet" href="vendors/css/swiper-bundle.min.css">
	</head>
	<style>
		body {
			margin: 0px;
		}
		}
		.border {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 5px;
			padding: 4px;
		}
		ul
		{
  			list-style-type: none;
			background-color: rgba(09,41,98,0.9);
			margin-bottom: 10px;
			color: white;
			margin-top: -38px;
			padding: 0px;
			overflow: hidden;
			margin-left: -10px;
			margin-right: -10px;
			z-index: 1;
			position: sticky;
			top: 0px;
		}
		li
		{
			display: inline;
			float: left;
		}
		h1
		{
			background-color: rgba(09,41,98,0.9);
			color: white;
			border: 10px;
			margin-left: -10px;
			margin-right: -10px;
			margin-top: -10px;
			padding: 15px;
			font-size: 60px;
			text-align: center;
			font-family: "Times New Roman";
		}
		h2
		{
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
		}
		a:link, a:visited
		{
			color: white;
			padding: 14px 25px;
			text-align: center;
			text-decoration: none;
			display: block;
		}

		a:hover, a:active
		{
			background-color: white;
			color: #094198;
		}
		.reserve_room
		{
			color: #000;
			border: 10px;
			padding: 5px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}

		.headings
		{
			color: black;
			font-family: "Times New Roman";
			text-decoration: none;
		}

		.welcome1
		{
			color: black;
			font-family: "Courier New, monospace";
			font-size: 28px;
		}
		.welcome2
		{
			color: black;
			font-family: Snell Roundhand, cursive;
			font-size: 24px;
			color: teal;
		}
		.basic_box {
			border: 1px solid #ccc;
			border-radius: 5px;
			margin: 10px 220px;
			padding: 50px;
			box-shadow: 0 10px 20px rgba(0,0,0,0.19);
		}
		.r_room
		{
			color: #FFF;
			border: 10px;
			padding: 10px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: rgba(09,41,98,0.99);
			width: 500px;
			margin: auto;
			border-radius: 40px;
		}
		.row {
  			display: flex;
		}

		.column {
  			flex: 33.33%;
  			padding: 5px;
		}
		.footer {
			background-color: rgba(09,41,98,0.99);
			bottom: 0px;
			margin: 0px;
			margin-bottom: 0px;
			padding: 10px,0;
		}
		.foot-text {
			color: #D6FEFF;
			text-align: left;
		}

		* {box-sizing: border-box;}
		body {font-family: Verdana, sans-serif;}
		.mySlides {display: none;}
		img {
			vertical-align: middle;
			background-size: cover;
		}
		.reserve_room:hover
		{
			color: #000;
			border: 10px;
			padding: 14px;
			font-size: 35px;
			text-align: center;
			text-shadow: 2px 2px black;
			background-color: #4AB8F9;
			width: 500px;
			margin: auto;
			border-radius: 50px;
		}
		/* Slideshow container */
		.slideshow-container {
		  max-width: 10000px;
		  position: relative;
		  margin: auto;
		  padding: 0px;
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 30px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-shadow: 4px 4px black;
		  text-align: center;
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active {
		  background-color: #717171;
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4}
		  to {opacity: 1}
		}
	</style>

	<style>
		.swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
	</style>

	<body style="background: #f2f2f2;">

		<h1>BRO-TELHUB</h1>

		<ul>
			<li><a href="index.php">HOME</a>
			<li><a href="admin_login.php">ADMIN LOGIN</a></li>
			<li><a href="user_login.php">USER LOGIN</a></li>
			<li><a href="#rooms_and_rates">PROSTANDARS</a></li>
			<li><a href="image_gallery.php">KING ROOMS</a>
			<li><a href="image_gg.php">Notre Massage Professionel</a>

			<li style="float: right;"><a href="#contact">Contact Details</a></li>
		</ul>

		<div class="swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="assets/images/slide_1.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="assets/images/slide_2.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="assets/images/slide_3.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="assets/images/slide_4.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="assets/images/slide_5.png" alt="">
				</div>
				<div class="swiper-slide">
					<img src="assets/images/slide_6.png" alt="">
				</div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
		<br>

		
		<br><br>
		<a class="reserve_room" href="user_login.php">RESERVE A ROOM</a><br>
		<a class="reserve_room" href="user_login.php">RESERVE A PROMASSAGE</a><br>


		<h2 class="welcome1">Experience a good stay</h2><br>
		<h2 class="welcome2">Warm welcome to our hotel</h2><br>

		<h2 class="r_room">PROSTANDARS</h2><br>		
		<div id="rooms_and_rates" class="basic_box">
			<div class="row">
  				<div class="column">
    				<img src="rooms/1.jpg" alt="Snow" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="rooms/2.png" alt="Forest" style="width:100%">
  				</div>
  				<div class="column">
    				<img src="rooms/3.png" alt="Mountains" style="width:100%">
  				</div>
			</div>
			<div class="row">
  				<div class="column">
    				<h3>Deluxe Room</h3>
  				</div>
  				<div class="column">
					  <h3>Executive Room</h3>
					</div>
  				<div class="column">
					  <h3>Standard Room</h3>
					</div>
			</div>
		</div><br>
		<div id="contact" class="footer">
			<hr>
			<h2 class="foot-text">Contact Us!</h2>
			<h3 class="foot-text">Email us at xxxxx@gmail.com</h3><br>
			<h3 class="foot-text">or xxxxxx@gmail.com</h3><br>
		</div>
		<script src="vendors/js/swiper-bundle.min.js"></script>
		<script>
		var swiper = new Swiper(".swiper", {
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
			pagination: {
				el: ".swiper-pagination",
				dynamicBullets: true,
			},
		});
		</script>
</body>
</html>
