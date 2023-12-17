<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(isset($_COOKIE['UserID'])){
		setcookie("UserID", "", time() -28200, '/');
	}
?>
<php lang="en">
<head>
	<title>Kirish</title>
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
							<li style="display:<?php if(isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="reg.php">Ro'yhatdan o'tish</a></li>
							<li style="display:<?php if(!isset($_COOKIE['UserID'])){echo 'none;';} ?>"><a href="kabinet.php">Kabinet</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
    
	<div class="page-info-section set-bg" data-setbg="img/page-bg/3.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Kirish</h2>
				<a href="index.php">Bosh sahifa</a>
				<span>Kirish</span>
			</div>
		</div>
	</div>
    
	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp" style="background-color:cornsilk">
				<div class="section-title text-white">
					<h2><span>Kirish</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
                        <h4 class="text-danger w-100 text-center" style="<?php if(!isset($_GET['reg'])){echo "display:none";} ?>">Telefon raqam ro'yhatdan o'tmagan.</h4>
						<form action="./config/login/login.php" method="POST" class="course-search-form text-center" style="display:<?php if(isset($_COOKIE['code'])){echo 'none;';} ?>">
                            <h4 class="text-dark">Telefon raqam</h3>
							<input type="text" class="form-control w-100 my-2 phone" name="phone" placeholder="XX XXX XXXX" required>
							<button class="site-btn btn-dark" name="login">Kirish</button><br><br>
                            <a href="reg.php" class="text-primary pt-3" style="font-weight:700">Ro'yhatdan o'tish</a>
						</form>
                        <form action="./config/login/login_code.php" method="POST" class="course-search-form text-center" style="display:<?php if(!isset($_COOKIE['code'])){echo 'none;';} ?>">
                            <h4 class="text-dark">Raqamni tasdiqlang</h3>
							<input type="text" class="form-control w-100 my-2" name='code' placeholder="X-X-X-X-X-X" required>
							<button class="site-btn btn-dark" type='submit' name='checkcode'>Tasdiqlash</button>
						</form>
					</div>
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
    <script src="./js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.pasport').inputmask('AA 9999999');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</body>
</php>