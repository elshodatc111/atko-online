<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(isset($_COOKIE['UserID'])){
		setcookie("UserID", "", time() -28200, '/');
	}
?>
<php lang="en">
<head>
	<title>Ro'yxatdan o'tish</title>
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
			</div>
		</div>
	</div>
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<a href="index.php"><img src="img/logo2.png" alt=""></a>
					</div>
					<div class="nav-switch pt-2">
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

	<div class="page-info-section set-bg" data-setbg="img/page-bg/3.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Ro'yhatdan o'tish</h2>
				<a href="index.php">Bosh sahifa</a>
				<span>Ro'yxatdan o'tish</span>
			</div>
		</div>
	</div>
    
	<div class="container">
		<div class="row text-center">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
				<div class="my-5 py-5 px-4" style="background-color:#EDF4F6">
					<h2 style="color:#5F615F;" class="mb-3"><span>Ro'yxatdan o'tish</span></h2>
					<h4 class="text-danger w-100 text-center" style="display:<?php if(!isset($_GET['err'])){echo 'none;';} ?>">Tasdiqlash kodi noto'g'ri.</h4>
					<form action="./config/login/reg.php" method="POST" class="text-center" style="display:<?php if(isset($_COOKIE['code'])){echo 'none;';} ?>">
						<h4 class="text-dark">Ismingiz</h3>
						<input type="text" class="form-control w-100 my-2" name="fio" placeholder="Ismingiz" required>
						<h4 class="text-dark">Telefon raqam</h3>
						<input type="text" class="form-control w-100 my-2 phone" name="phone" placeholder="XX XXX XXXX" required>
						<button class="btn btn-outline-danger px-5 w-100" style="font-weight:700;border-radius:0;" name="reg">Ro'yhatdan o'tish</button><br><br>
						<a href="login.php" class="text-primary pt-3" style="font-weight:700">Kirish</a>
					</form>
					<form action="./config/login/reg_code.php" method="POST" class="text-center" style="display:<?php if(!isset($_COOKIE['code'])){echo 'none;';} ?>">
						<h4 class="text-dark">Raqamni tasdiqlang</h3>
						<input type="text" class="form-control w-100 my-2 kodes" name="codes" placeholder="X-X-X-X-X-X" required>
						<button class="btn btn-outline-danger px-5 w-100" style="font-weight:700;border-radius:0;" name="regcode">Tasdiqlash</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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