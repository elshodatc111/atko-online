<!DOCTYPE php>
<?php
	include("./config/confige.php");
?>
<php lang="en">
<head>
	<title>Online kurslar</title>
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

	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Online kurslar</h2>
				<a href="index.php">Bosh sahifa</a>
				<span>Online kurslar</span>
			</div>
		</div>
	</div>
	
	<section class="course-section spad py-3">
		<div class="course-warp">
			<div class="section-title my-2">
				<h2 class="p-0 m-0">Online kurslar</h2>
				<p class="p-0 m-0">Eng yangi qo'shilgan video kurslar.</p>
			</div>                         
			<div class="row course-items-area">
				<?php
					$sql1 = "SELECT * FROM `cours`";
					$res1 = $conn->query($sql1);
					while ($row1 = $res1->fetch()) {
				?>
				<div class="col-lg-3 col-md-6">
					<div class="categorie-item">
						<a href="./course.php?CoursID=<?php echo $row1['CoursID']; ?>">
							<div class="ci-thumb set-bg" data-setbg="img/kurs/<?php echo $row1['CoursImage']; ?>"></div>
							<div class="ci-text p-3">
								<h5 class="my-1 w-100 text-center"><?php echo $row1['CoursName']; ?></h5>
								<p class="text-center m-0"><?php echo $row1['CoursText']; ?></p>
								<span class="row my-1">
									<div class="col-6">Narxi: </div>
									<div class="col-6" style="text-align:right;"><?php echo $row1['CoursPrice']; ?> so'm</div>
								</span>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
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