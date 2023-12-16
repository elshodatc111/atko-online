<!DOCTYPE php>
<?php
	include("./config/confige.php");
?>
<php lang="en">
<head>
	<title>Bog'lanish</title>
	<meta charset="UTF-8">
	<meta name="description" content="ATKO o'quv markazi">
	<meta name="keywords" content="">
	<meta name="author" content="Elshod Musurmonov">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<div id="preloder">
		<div class="loader"></div>
	</div>

	
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<nav class="main-menu">
						<ul>
							<li><a href="index.php">Bosh sahifa</a></li>
							<li><a href="courses.php">Kurslar</a></li>
							<li><a href="contact.php">Bog'lanish</a></li>
							<li><a href="login.php">Kirish</a></li>
							<li><a href="reg.php">Ro'yhatdan o'tish</a></li>
							<li><a href="kabinet.php">Kabinet</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Bog'lanish</h2>
				<a href="index.php">Bosh sahifa</a>
				<span>Bog'lanish</span>
			</div>
		</div>
	</div>
	
	
	<section class="contact-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Bizga murojat qoldiring</h2>
						</div>
						<form class="contact-form">
							<input type="text" placeholder="Ismingiz">
							<input type="text" placeholder="Telefon raqamingiz">
							<textarea placeholder="Murojatingiz mazmuni"></textarea>
							<button class="site-btn">Yuborish</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="contact-info-area">
						<div class="section-title text-left p-0">
							<h2>Bog'lanish</h2>
						</div>
						<div class="phone-number">
							<span>Telefon raqam</span>
							<h2>+998 91 950 1101</h2>
						</div>
						<ul class="contact-list">
							<li>Qarshi shahar,<br> Mustaqillik shox ko'chasi 2-uy</li>
							<li>+998 91 950 1101</li>
							<li>atkoteams@gmail.com</li>
						</ul>
						<div class="social-links">
							<a href="#"><i class="fa fa-telegram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="googlemaps my-3 p-2">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d776.9433489873635!2d65.79316163656479!3d38.83765019846608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f4ea957f326d9a5%3A0x3d028f90ab8f3695!2sATKO!5e0!3m2!1sen!2s!4v1700739700747!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</section>
	
	<footer class="footer-section spad p-0">
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Online kurslar</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Bog'lanish</a></li>
				</ul>
				<div class="copyright">
					ATKO o'quv markazi 
					&copy;<script>document.write(new Date().getFullYear());</script> 
					<i class="fa fa-heart-o" aria-hidden="true"></i>
				</div>
			</div>
		</div>
	</footer> 

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</php>