<!DOCTYPE php>
<?php
	include("./config/confige.php");
?>
<php lang="en">
<head>
	<title>Bosh sahifa</title>
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
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text text-white">
				<h2>ATKO o'quv markazi</h2>
				<p>Yurtimizning eng yetakchi o‘qituvchilari tomonidan tayyorlangan videodarslarni tomosha qilib, siz nafaqat ishonchli <br>o‘qituvchi qidirishdan holi bo‘lasiz, balki noyob metodika orqali darslarni qiziq va oson<br> yo‘llar bilan o‘zlashtirishingiz mumkin.</p>
			</div>
		</div>
	</section>
	<section class="categories-section spad">
		<div class="container pt-0">
			<div class="section-title m-0">
				<h2 class="m-0">Yangi kurslar</h2>
				<p class="m-0">Eng yangi qo'shilgan video kurslar.</p>
			</div>
			<div class="row">
				<?php
					$sql1 = "SELECT * FROM `cours` ORDER BY RAND() LIMIT 6";
					$res1 = $conn->query($sql1);
					while ($row1 = $res1->fetch()) {
				?>
				<div class="col-lg-4 col-md-6">
					<div class="categorie-item">
						<a href="./course.php?CoursID=<?php echo $row1['CoursID']; ?>">
							<div class="ci-thumb set-bg" data-setbg="img/kurs/<?php echo $row1['CoursImage']; ?>"></div>
							<div class="ci-text">
								<h5><?php echo $row1['CoursName']; ?></h5>
								<p><?php echo $row1['CoursText']; ?></p>
								<span>Narxi: <?php echo $row1['CoursPrice']; ?> so'm</span>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>
	
	<section class="realated-courses spad">
		<div class="course-warp">
			<h2 class="rc-title">Sizga yoqishi mumkin bo'lgan aloqador kurslar</h2>
			<div class="rc-slider owl-carousel">
				<?php
					$sql44 = "SELECT * FROM `cours` ORDER BY RAND() LIMIT 4";
					$res44 = $conn->query($sql44);
					while ($row44 = $res44->fetch()) {
				?>
				<div class="course-item">
					<a href="./course.php?CoursID=<?php echo $row44['CoursID']; ?>">
						<div class="course-thumb set-bg" data-setbg="img/kurs/<?php echo $row44['CoursImage']; ?>" >
							<div class="price">Narxi: <?php echo $row44['CoursText']; ?> so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text">
								<h5><?php echo $row44['CoursName']; ?></h5>
								<p><?php echo $row44['CoursPrice']; ?></p>
							</div>
						</div>
					</a>
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
    <script src="./js/jquery.inputmask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.phone').inputmask('99 999 9999');
            $('.pasport').inputmask('AA 9999999');
            $('.pnfl').inputmask('99999999999999');
            $('.kodes').inputmask('9 9 9 9 9 9');
        });
    </script>
</php>