<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(!isset($_GET['CoursID'])){
		header("location: ./courses.php");
	}else{
		$sql1 = "SELECT * FROM `cours` WHERE `CoursID`='".$_GET['CoursID']."'";
		$res1 = $conn->query($sql1);
		$row1 = $res1->fetch();
	}
?>
<php lang="en">
<head>
	<title>Kurs</title>
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
						<h3><?php echo $row1['CoursName']; ?></h3>
						<div class="course-metas">
							<div class="course-meta">
								<div class="course-author">
									<div class="ca-pic set-bg" data-setbg="img/techer/<?php echo $row1['CoursImage']; ?>"></div>
									<h6>O'qituvchi</h6>
									<p><?php echo $row1['CoursTecher']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Mavzular</h6>
									<p><?php echo $row1['CoursMavzu']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Tili</h6>
									<p><?php echo $row1['CoursTil']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Video Darslar</h6>
									<p><?php echo $row1['CoursDavomiy']; ?></p>
								</div>
							</div>
							<div class="course-meta">
								<div class="cm-info">
									<h6>Davomiyligi</h6>
									<p><?php echo $row1['Muddat']; ?> kun</p>
								</div>
							</div>
						</div>
						<p class="btn btn-success p-3 m-0">Narxi: <?php echo $row1['CoursPrice']; ?> so'm</p>
						<?php
							if(!isset($_COOKIE['UserID'])){echo "<a href='login.php' class='btn btn-danger p-3 m-0'>Sotib olish</a>";}else{
						?>
						
						
						<button class="btn btn-danger p-3 m-0 input-btn">Sotib olish</button>
						<div id="tulovpay"></div>
						<div>
							<form method="post" action="http://atko.uz/kabinet.php">
								<script src="https://my.click.uz/pay/checkout.js"
											class="uzcard_payment_button"
											data-service-id="30782"
											data-merchant-id="23110"
											data-transaction-param="MERCHANT_TRANS_ID"
											data-merchant-user-id="36901"
											data-amount="1000"
											data-card-type="uzcard"
											data-label="Uzkard"
								></script>
							</form>
							
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
			<img src="img/kurs/<?php echo $row1['CoursImage']; ?>" style='border:1px solid red;' class="course-preview">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						<h4>Kurs haqida</h4>
						<p><?php echo $row1['CoursAbout']; ?></p>
					</div>
					<div class="cl-item">
						<h4>Kurs mavzulari</h4>
						<ul>
							<?php
								$sql3 = "SELECT * FROM `coues_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' ORDER BY `MavzuNumber` ASC";
								$res3 = $conn->query($sql3);
								while ($row3=$res3->fetch()) {
							?>
							<li><p><?php echo $row3['MavzuName']; ?></p></li>
							<?php } ?>
						</ul>
					</div>
				</div>
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
</body>
</php>