<!DOCTYPE php>
<?php
	include("./config/confige.php");
?>
<php lang="en">
<head>
	<title>Kurs</title>
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
							<li style="display:<?php if(isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="login.php">Kirish</a></li>
							<li style="display:<?php if(isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="reg.php">Ro'yhatdan o'tish</a></li>
							<li style="display:<?php if(!isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="kabinet.php">Kabinet</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<div class="page-info-section set-bg" data-setbg="img/page-bg/2.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="./index.php">Bosh  sahifa</a>
				<span>Kurs haqida</span>
			</div>
		</div>
	</div>
	
	<section class="single-course spad pb-0">
		<div class="container">
			<div class="course-meta-area">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<h3>Kursning nomi</h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="img/authors/2.jpg"></div>
									<h6>O'qituvchi</h6>
									<p>Elshod Musurmonov</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Mavzular</h6>
									<p>15</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Tili</h6>
									<p>O'zbek</p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Davomiyligi</h6>
									<p>15:00:45</p>
								</div>
							</div>
						</div>
						<p class="btn btn-success p-3 m-0">Narxi: 150 000 so'm</p>
						<button class="btn btn-danger p-3 m-0">Sotib olish</button>
					</div>
				</div>
			</div>
			<img src="img/courses/single.jpg" alt="" class="course-preview">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						<h4>Kurs haqida</h4>
						<p>Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna. Lorem ipsum dolor sit amet, consectetur. Phasellus sollicitudin et nunc eu efficitur. Sed ligula nulla, molestie quis ligula in, eleifend rhoncus ipsum. </p>
					</div>
					<div class="cl-item">
						<h4>Kurs mavzulari</h4>
						<ul>
							<li><p>Birinchi mavzu</p></li>
							<li><p>Birinchi mavzu</p></li>
							<li><p>Birinchi mavzu</p></li>
							<li><p>Birinchi mavzu</p></li>
							<li><p>Birinchi mavzu</p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->


	<!-- Page -->
	<section class="realated-courses spad">
		<div class="course-warp">
			<h2 class="rc-title">Sizga yoqishi mumkin bo'lgan aloqador kurslar</h2>
			<div class="rc-slider owl-carousel">
				<!-- course -->
				<div class="course-item">
					<a href="./course.php">
						<div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
							<div class="price">Narxi: 150 000 so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</a>
				</div>
				<div class="course-item">
					<a href="./course.php">
						<div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
							<div class="price">Narxi: 150 000 so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</a>
				</div>
				<div class="course-item">
					<a href="./course.php">
						<div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
							<div class="price">Narxi: 150 000 so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</a>
				</div>
				<div class="course-item">
					<a href="./course.php">
						<div class="course-thumb set-bg" data-setbg="img/courses/1.jpg">
							<div class="price">Narxi: 150 000 so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5>Art & Crafts</h5>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	
    <footer class="footer-section spad p-0 mt-5">
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="courses.php">Online kurslar</a></li>
					<li><a href="contact.php">Bog'lanish</a></li>
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