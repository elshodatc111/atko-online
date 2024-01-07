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
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="container">
			<div class="hero-text">
				<h2 style="color:red;font-weight:800">ATKO koreys tili markazi</h2>
				<h5 style="color:#fff;">
					Yurtimizning eng yetakchi o‘qituvchilari tomonidan tayyorlangan <br/>
					videodarslarni tomosha qilib, siz nafaqat ishonchli o‘qituvchi <br/> 
					qidirishdan holi bo‘lasiz, balki noyob metodika orqali darslarni qiziq va <br/>
					oson yo‘llar bilan o‘zlashtirishingiz mumkin.
				</h5>
				<?php
					if(!isset($_COOKIE['UserID'])){
				?>
				<a href="./reg.php" style="font-weight:700;color:red;border-radius:0;" class="mt-3 btn btn-outline-primary">RO'YXATDAN O'TISH</a>
				<?php } ?>
			</div>
		</div>
	</section>
	<section class="categories-section spad mb-0 pb-0">
		<div class="container pt-0 pb-0 mb-0">
			<div class="section-title m-0">
				<h3 class="m-0">Yangi kurslar</h3>
				<p class="mb-3">Eng yangi qo'shilgan video kurslar.</p>
			</div>
			<div class="row">
				<?php
					$sql1 = "SELECT * FROM `cours` ORDER BY RAND() LIMIT 3";
					$res1 = $conn->query($sql1);
					while ($row1 = $res1->fetch()) {
				?>
				<div class="col-lg-4 col-md-6">
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
	
	<div class="container">
		<div class="featured-courses mt-0 p-0">
			<div class="featured-course course-item">
				<div class="course-thumb set-bg" data-setbg="img/kurs/01.jpg">
					<div class="price">Narxi: 150 000 so'm</div>
				</div>
				<div class="row">
					<div class="col-lg-6 offset-lg-6 pl-0">
						<div class="course-info">
							<div class="course-text">
								<h5>Hangi uchun joy</h5>
								<p><b>Hangi haqida 144 belgi</b>Lorem ipsum dolor sit amet, quis ligula in, eleifend rhoncus ipsum. Donec ultrices, sem vel efficitur molestie, massa nisl posuere ipsum, ut vulputate mauris ligula a metus. Aenean vel congue diam, sed bibendum ipsum. Nunc vulputate aliquet tristique. Integer et pellentesque urna</p>
								<a href="./course.php?CoursID=1703532382" style="font-weight:700;color:red;border-radius:0;" class="mt-3 btn btn-outline-primary w-50">Batafsil...</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<section class="categories-section spad py-2 my-2 mb-3">
		<div class="container pt-0">
			<div class="section-title m-0">
				<h3 class="m-0">EPS-TOPIK 50</h3>
				<p class="mb-3">Koreya ish imtixoni uchun standart darslik!</p>
			</div>
			<div class="row">
				<?php
					$sql1 = "SELECT * FROM `cours` ORDER BY `id` ASC LIMIT 4";
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

	<section class="categories-section spad pt-0 mt-0">
		<div class="container pt-0">
			<div class="section-title m-0">
				<h3 class="m-0">EPS-TOPIK 60</h3>
				<p class="mb-3">Ish imtixoni uchun standart darslik(2-nashr)</p>
			</div>
			<div class="row">
				<?php
					$sql11 = "SELECT * FROM `cours` ORDER BY `id` ASC LIMIT 4, 4";
					$res11 = $conn->query($sql11);
					while ($row11 = $res11->fetch()) {
				?>
				<div class="col-lg-3 col-md-6">
					<div class="categorie-item">
						<a href="./course.php?CoursID=<?php echo $row11['CoursID']; ?>">
							<div class="ci-thumb set-bg" data-setbg="img/kurs/<?php echo $row11['CoursImage']; ?>"></div>
							<div class="ci-text p-3">
								<h5 class="my-1 w-100 text-center"><?php echo $row11['CoursName']; ?></h5>
								<p class="text-center m-0"><?php echo $row11['CoursText']; ?></p>
								<span class="row my-1">
									<div class="col-6">Narxi: </div>
									<div class="col-6" style="text-align:right;"><?php echo $row11['CoursPrice']; ?> so'm</div>
								</span>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</section>

	
	<section class="realated-courses spad pt-3 pb-0">
		<div class="course-warp m-0 p-0">
			<h2 class="rc-title p-0 my-3 text-center">Sizga yoqishi mumkin bo'lgan aloqador kurslar</h2>
			<div class="rc-slider owl-carousel">
				<?php
					$sql44 = "SELECT * FROM `cours` ORDER BY RAND() LIMIT 5";
					$res44 = $conn->query($sql44);
					while ($row44 = $res44->fetch()) {
				?>
				<div class="course-item">
					<a href="./course.php?CoursID=<?php echo $row44['CoursID']; ?>">
						<div class="course-thumb set-bg" data-setbg="img/kurs/<?php echo $row44['CoursImage']; ?>" class="w-100">
							<div class="price">Narxi: <?php echo $row44['CoursPrice']; ?> so'm</div>
						</div>
						<div class="course-info">
							<div class="course-text p-3">
								<h5 class="p-0 m-0"><?php echo $row44['CoursName']; ?></h5>
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
					ATKO koreys tili markazi 
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