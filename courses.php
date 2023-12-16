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

	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container">
			<div class="site-breadcrumb">
				<h2 class="text-white">Online kurslar</h2>
				<a href="index.php">Bosh sahifa</a>
				<span>Online kurslar</span>
			</div>
		</div>
	</div>
	
	<section class="course-section spad pb-0">
		<div class="course-warp">
			<div class="section-title">
				<h2>Online kurslar</h2>
				<p>Eng yangi qo'shilgan video kurslar.</p>
			</div>                         
			<div class="row course-items-area">
				<?php
					$sql1 = "SELECT * FROM `cours`";
					$res1 = $conn->query($sql1);
					while ($row1 = $res1->fetch()) {
				?>
				<div class="mix col-lg-3 col-md-4 col-sm-6 finance">
					<div class="course-item">
						<a href="./course.php?CoursID=<?php echo $row1['CoursID']; ?>">
							<div class="course-thumb set-bg" data-setbg="img/kurs/<?php echo $row1['CoursImage']; ?>">
								<div class="price">Narxi: <?php echo $row1['CoursPrice']; ?></div>
							</div>
							<div class="course-info">
								<div class="course-text">
									<h5><?php echo $row1['CoursName']; ?></h5>
									<p><?php echo $row1['CoursText']; ?></p>
								</div>
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