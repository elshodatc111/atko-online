<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(!isset($_COOKIE['UserID'])){
		header("location: ./index.php");
	}
?>
<php lang="en">
<head>
	<title>Testlar</title>
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
<body id="body">
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

	<div class="page-info-section set-bg" data-setbg="img/page-bg/3.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Kurs test</h2>
				<a href="index.php">Bosh sahifa</a>
				<a href="index.php">Kabinet</a>
				<span>Kurs</span>
			</div>
		</div>
	</div>

	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp p-1 py-3 pt-5" style="background-color: antiquewhite;">
				<div class="section-title text-white">
					<h2><span>Kursning nomi</span></h2>
				</div>
				<div class="row px-3 py-0 text-center text-dark">
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">O'qitivchi:</h5><p>William Parker</p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Mavzular soni:</h5><p>Development</p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Testlar soni</h5><p>120 </p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Muddat: </h5><p>15-12-2023 </p>
                    </div>
				</div>
			</div>
		</div>
	</section>

	<section class="blog-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<h3>Mavzuga oid testlar</h3>
					<div class="container mb-5">
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 1 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javobni tanlang</p>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="javob" id="javob1" value="option1" required>
								<label class="form-check-label" for="javob1">Default radio</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="javob" id="javob2" value="option2" required>
								<label class="form-check-label" for="javob">Second default radio</label>
							</div>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 2 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javobni tanlang</p>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="javob" id="javob1" value="option1" required>
								<label class="form-check-label" for="javob1">Default radio</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="javob" id="javob2" value="option2" required>
								<label class="form-check-label" for="javob">Second default radio</label>
							</div>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 3 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javoblarni tanlang</p>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="jav01">
								<label class="form-check-label" for="jav01">Default checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="jav02">
								<label class="form-check-label" for="jav02">Checked checkbox</label>
							</div>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 4 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javoblarni tanlang</p>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="jav01">
								<label class="form-check-label" for="jav01">Default checkbox</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="jav02">
								<label class="form-check-label" for="jav02">Checked checkbox</label>
							</div>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 5 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javobni kiriting</p>
							<input class="form-control" type="text" style="border-radius: 0;" required>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
						<form action="#" method="post" class="py-3">
							<h5 class="my-2"><b> 6 </b> Savolllar savol savol</h5>
							<p class="text-danger">To'g'ri javobni kiriting</p>
							<input class="form-control" type="text" style="border-radius: 0;" required>
							<button class="btn btn-success mt-2" type="submit" style="border-radius:0;">Tekshirish</button>
						</form>
					</div>

					<div class="row">
						<div class="col-6">
							<a href="lessin_video.php" class="w-100 btn btn-danger py-3">Mavzu videosi</a>
						</div>
						<div class="col-6">
							<a href="lessin_lugat.php" class="w-100 btn btn-danger py-3">Mavzuga oid lug'atlar</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-5 col-sm-9 sidebar">
					<div class="sb-widget-item">
						<h4 class="mb-3 w-100 text-center">Mavzular</h4>
						<ul>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
							<li><a href="lessin_video.php">Developement</a></li>
						</ul>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function(){
            $('#myvideo').bind('contextmenu',function(){return false;});
        });
        $(function(){
            $('#body').bind('contextmenu',function(){return false;});
        });
    </script>
</body>
</php>