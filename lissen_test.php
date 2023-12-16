<!DOCTYPE php>
<?php
	include("./config/confige.php");
	if(!isset($_COOKIE['UserID'])){
		header("location: ./index.php");
	}else{
		# foydalonuvchi malumotlari
		$sql0 = "SELECT * FROM `user` WHERE `UserID`='".$_COOKIE['UserID']."'";
		$res0 = $conn->query($sql0);
		$row0 = $res0->fetch();
		# Mavzu malumotlari
		$sql1 = "SELECT * FROM `coues_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
		$res1 = $conn->query($sql1);
		$row1 = $res1->fetch();
		$video = "https://atko.tech/video/".$row1['Video'];
		$MavzuName = $row1['MavzuName'];
		$MavzuAbout = $row1['MavzuAbout'];
		#Kurs malumotlari
		$sql2 = "SELECT * FROM `cours` WHERE `CoursID`='".$_GET['CoursID']."'";
		$res2 = $conn->query($sql2);
		$row2 = $res2->fetch();
		#Kurs muddati
		$sql3="SELECT * FROM `user_cours` WHERE `UserID`='".$row0['UserID']."' AND `CoursID`='".$_GET['CoursID']."'";
		$res3 = $conn->query($sql3);
		$row3 = $res3->fetch();
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
				<h2 class="text-white">Kurs test</h2>
				<a href="index.php">Bosh sahifa</a>
				<a href="kabinet.php">Kabinet</a>
				<span>Kurs</span>
			</div>
		</div>
	</div>

	<section class="search-section ss-other-page">
		<div class="container">
			<div class="search-warp p-1 py-3 pt-5" style="background-color: antiquewhite;">
				<div class="section-title text-white">
					<h2><span><?php echo $row2['CoursName']; ?></span></h2>
				</div>
				<div class="row px-3 py-0 text-center text-dark">
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">O'qitivchi:</h5><p><?php echo $row2['CoursTecher']; ?></p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Mavzular soni:</h5><p><?php echo $row2['CoursMavzu']; ?></p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Mavzu:</h5><p><?php echo $MavzuName; ?> </p>
                    </div>
                    <div class="col-lg-3">
                        <h5 style="font-weight: 700;">Muddat:</h5><p><?php echo $row3['End']; ?> </p>
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
							<a href="lessin_video.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" class="w-100 btn btn-danger py-3">Mavzu videosi</a>
						</div>
						<div class="col-6">
							<a href="lessin_lugat.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" class="w-100 btn btn-danger py-3">Mavzuga oid lug'atlar</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 sidebar">
					<div class="sb-widget-item mt-lg-0 mt-5">
						<h4 class="mb-3 w-100 text-center">Mavzular</h4>
						<ul>
							<?php
								$sql10 = "SELECT * FROM `coues_mavzu` WHERE `CoursID`='".$_GET['CoursID']."' ORDER BY `MavzuNumber` ASC";
								$res10 = $conn->query($sql10);
								while ($row10 = $res10->fetch()) {
							?>
							<li><a href="lessin_video.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $row10['MavzuID']; ?>"><?php echo $row10['MavzuName']; ?></a></li>
							<?php } ?>
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