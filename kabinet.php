<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(!isset($_COOKIE['UserID'])){
		header("location: ./index.php");
	}else{
		$sql0 = "SELECT * FROM `user` WHERE `UserID`='".$_COOKIE['UserID']."'";
		$res0 = $conn->query($sql0);
		$row0 = $res0->fetch();
	}
?>
<php lang="en">
<head>
	<title>Kabinet</title>
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
					<div class="site-logo pt-2">
						<a href="index.php"><img src="img/logo2.png" alt=""></a>
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

	<div class="page-info-section set-bg" data-setbg="img/page-bg/2.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Kabinet</h2>
				<a href="index.php">Bosh sahida</a>
				<span>Kabinet</span>
			</div>
		</div>
	</div>
    
	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp" style="background-color: antiquewhite;">
				<div class="section-title text-white">
					<h2><span>Shaxsiy kabinet</span></h2>
				</div>
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author text-dark">
									<h6>Ismingiz:</h6>
									<p><?php echo $row0['FIO']; ?></p>
								</div>
							</div>
							<div class="course-meta text-dark">
								<div class="cm-info">
									<h6>Telefon:</h6>
									<p><?php echo $row0['Phone']; ?></p>
								</div>
							</div>
							<div class="course-meta text-dark">
								<div class="cm-info">
									<h6>Kurslaringiz</h6>
									<p>12</p>
								</div>
							</div>
							<div class="course-meta text-dark">
								<div class="cm-info">
									<h6>Oxirgi tashrif</h6>
									<p><?php echo $row0['HoverData']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="container my-3">
		<div class="row">
			<?php
				$thisDate = date("Y-m-d");
				$sql1 = "SELECT * FROM `user_cours` WHERE `UserID`='".$_COOKIE['UserID']."' AND `Start`<='".$thisDate."' AND `End`>='".$thisDate."'";
				$res1 = $conn->query($sql1);
				while ($row1 = $res1->fetch()) {
					$sql2 = "SELECT * FROM `cours` WHERE `CoursID`='".$row1['CoursID']."'";
					$res2 = $conn->query($sql2);
					$row2 = $res2->fetch();
					$sql3 = "SELECT MIN(MavzuNumber), MavzuID FROM `coues_mavzu` WHERE `CoursID`='".$row1['CoursID']."'";
					$res3 = $conn->query($sql3);
					$row3 = $res3->fetch();
			?>
			<div class="mix col-lg-4 finance">
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="img/kurs/<?php echo $row2['CoursImage']; ?>">
						<div class="price">Tugash muddati: <?php echo $row2['CoursPrice']; ?></div>
					</div>
					<div class="course-info">
						<div class="course-text py-2 text-center">
							<h5><?php echo $row2['CoursName']; ?></h5>
							<a class="btn btn-danger py-1" style="border-radius:0;" href="./lessin_video.php?CoursID=<?php echo $row1['CoursID']; ?>&MavzuID=<?php echo $row3['MavzuID']; ?>">Darslarni boshlash</a>
						</div>
					</div>
				</div>
			</div>
            <?php } ?>
		</div>
	</div>

	<section class="banner-section spad">
		<div class="container">
			<div class="section-title mb-0 pb-2">
				<h2>Sizni qiziqtirgan kurslarni toping</h2>
				<p>Berilgan barcha kurslarni ko'rib chiqing. Atko.uz keng qamrovli bo'lib, sizni qiziqtirgan va kerakli kursni albatta topa olasiz.</p>
			</div>
			<div class="text-center pt-5">
				<a href="courses.php" class="site-btn">Barcha kurslar</a>
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