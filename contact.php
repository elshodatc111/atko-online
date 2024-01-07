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
	<meta name="google-site-verification" content="uiJQYjpXbqbGoFs_viIdOOh1FUbsdkF_B6LUUaB8i0w" />
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
	<div class="container-fluid" style="background-color:red">
		<div class="container" style="text-align:right">
			<div class="social-links py-2" style="font-size:8px;">
				<a href="https://t.me/atko_teams" style="float:left;font-size:16px;color:white"><i class="fa fa-phone" style="font-size:16px;margin-left:10px;color:white;"></i> +998 91 950 1101</a>
				<a href="https://t.me/atko_teams"><i class="fa fa-telegram" style="font-size:16px;margin-left:10px;color:white"></i></a>
				<a href="https://www.facebook.com/atkoteams/"><i class="fa fa-facebook" style="font-size:16px;margin-left:10px;color:white"></i></a>
				<a href="https://www.instagram.com/atko_teams/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" style="font-size:16px;margin-left:10px;color:white"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-youtube" style="font-size:16px;margin-left:10px;color:white"></i></a>
			</div>
		</div>
	</div>
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<a href="index.php"><img src="img/logo.png" alt=""></a>
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					<nav class="main-menu" style="text-align:right">
						<ul>
							<li><a href="courses.php">Kurslar</a></li>
							<li><a href="contact.php">Bog'lanish</a></li>
							<li style="display:<?php if(isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="login.php">Kirish</a></li>
							<li style="display:<?php if(!isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="kabinet.php">Kabinet</a></li>
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
						<form class="contact-form" action="./config/sms/bot.php" method="POST">
							<input type="text" name="name" placeholder="Ismingiz"     required>
							<input type="text" name="phone" placeholder="Telefon raqamingiz"  required>
							<textarea placeholder="Murojatingiz mazmuni" name="text" required></textarea>
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
						<div class="social-links" style="font-size:24px;">
							<a href="https://t.me/atko_teams"><i class="fa fa-telegram" style="font-size:24px;"></i></a>
							<a href="https://www.facebook.com/atkoteams/"><i class="fa fa-facebook" style="font-size:24px;"></i></a>
							<a href="https://www.instagram.com/atko_teams/?igshid=OGQ5ZDc2ODk2ZA%3D%3D" style="font-size:24px;"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-youtube" style="font-size:24px;"></i></a>
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