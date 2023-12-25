<!DOCTYPE html>
<?php
  session_start();
  include("../config/confige.php");
  if(!isset($_SESSION['UserID'])){
    header("location: ./login.php");
  }
  $sql = "SELECT * FROM `coues_mavzu` WHERE `MavzuID`='".$_GET['MavzuID']."'";
  $res = $conn->query($sql);
  $row = $res->fetch();
?>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 5, SASS and PUG.js. It's fully customizable and modular.">
    <title>Kurslar</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Header -->
    <header class="app-header"><a class="app-header__logo" href="index.php">ATKO</a>
        <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
        <ul class="app-nav">
          <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown" aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
              <li><a class="dropdown-item" href="./kabinet.php"><i class="bi bi-person me-2 fs-5"></i> Kabinet</a></li>
              <li><a class="dropdown-item" href="./login.php"><i class="bi bi-box-arrow-right me-2 fs-5"></i> Chiqish</a></li>
            </ul>
          </li>
        </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    
    <aside class="app-sidebar">
        <ul class="app-menu">
          <li>
            <a class="app-menu__item" href="index.php">
              <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Bosh sahifa</span>
            </a>
          </li>
          <li>
            <a class="app-menu__item active" href="cours.php">
              <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Kurslar</span>
            </a>
          </li>
          <li>
            <a class="app-menu__item" href="users.php">
              <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Ro'yhatdan o'tgan</span>
            </a>
          </li>
        </ul>
    </aside>

    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="bi bi-table"></i> Kursni haqida</h1>
                <p>Kurs mavzusi haqida</p>
            </div>
                <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                <li class="breadcrumb-item">Kurs mavzu haqida</li>
                <li class="breadcrumb-item "><a href="cours_eye.php?CoursID=<?php echo $_GET['CoursID']; ?>">Kurs haqida</a></li>
                <li class="breadcrumb-item "><a href="cours.php">Kurslar</a></li>
                <li class="breadcrumb-item active"><a href="index.php">Bosh sahifa</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <section class="invoice">
                        <div class="row mb-4">
                            <div class="col-6">
                                <h2 class="page-header"><i class="bi bi-globe"></i> <?php echo $row['MavzuName']; ?></h2>
                            </div>
                            <div class="col-6">
                                <h5 class="text-end">Kurs yaratildi: <?php echo $row['Data']; ?></h5>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-lg-4 text-center">
                                <video id='myvideo' controls style="width:100%;border:3px solid red;" controlsList="nodownload">
                                    <source src="https://atko.tech/my_crm/video/<?php echo $row['Video']; ?>" type="video/mp4">
                                </video>
                            </div>
                            <div class="col-lg-8">
                                <address>
                                    <strong>Mavzu nomi: </strong> <b><?php echo $row['MavzuName']; ?></b><br>
                                    <strong>Mavzu video link: </strong> <b><?php echo $row['Video']; ?></b><br>
                                    <strong>Video uzunligi: </strong> <b><?php echo $row['VideoLine']; ?></b><br>
                                    <strong>Mavzu tartib raqami: </strong> <b><?php echo $row['MavzuNumber']; ?> </b><br>
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 my-3">
                                <strong>Mavzu haqida: </strong><br> 
                                <p><?php echo $row['MavzuAbout'] ?></p>
                            </div>
                            <div class="col-6 my-3">
                                <strong>Mavzu lug'ati: </strong><br> 
                                <p><?php echo $row['MavzuLugat'] ?></p>
                            </div>
                            <div class="col-12 table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Test savoli</th>
                                            <th>Test turi</th>
                                            <th>Test javoblari</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sqlt = "SELECT * FROM `cours_test` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
                                            $rest = $conn->query($sqlt);
                                            $t = 1;
                                            while ($rowt = $rest->fetch()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $t; ?></td>
                                            <td><?php echo $rowt['TestSavol']; ?></td>
                                            <td><?php echo $rowt['TestType']; ?></td>
                                            <td>
                                                <table class="table">
                                                    <?php
                                                        $sqlj = "SELECT * FROM `cours_test_javob` WHERE `TestID`='".$rowt['TestID']."'";
                                                        $resj = $conn->query($sqlj);
                                                        while ($rowj = $resj->fetch()) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $rowj['Javob']; ?></td>
                                                        <td><?php echo $rowj['Status']; ?></td>
                                                        <td><a class="btn btn-primary" href="./connect/cours/test_javob_del.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&TestID=<?php echo $rowt['TestID']; ?>&JavobID=<?php echo $rowj['JavobID']; ?>"><i class="bi bi-trash"></i></a></td>
                                                    </tr>
                                                    <?php } ?>
                                                </table>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" href="./connect/cours/test_savol_del.php?CoursID=<?php echo $_GET['CoursID']; ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>&TestID=<?php echo $rowt['TestID']; ?>"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php $t++;} ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="./connect/cours/test_savol_plus.php?CoursID=<?php echo $_GET['CoursID'] ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" method="post">
                                        <h4>Yangi test qo'shish</h4>
                                        <label class="mt-2">Test turini tanlang</label>
                                        <select type="text" name="Type" class="form-control" required>
                                            <option value="choose">choose (Faqat bitta to'g'ri)</option>
                                            <option value="chechbox">chechbox (Javoblar bir nechra)</option>
                                            <option value="insert">insert (To'g'ri javobni kiritish)</option>
                                        </select>
                                        <label class="mt-2">Test Savoli</label>
                                        <input type="text" name="TestSavol" class="form-control" required>
                                        <button class="btn btn-success mt-3" name="TestPlus">Yangi  test qo'shish</button>
                                    </form>
                                </div>
                                <div class="col-lg-6">
                                    <form action="./connect/cours/cours_test_javob_plus.php?CoursID=<?php echo $_GET['CoursID'] ?>&MavzuID=<?php echo $_GET['MavzuID']; ?>" method="post">
                                        <h4>Yangi test javobi qo'shish</h4>
                                        <label class="mt-2">Test savolini tanlang</label>
                                        <select type="text" name="TestID" class="form-control" required>
                                            <?php
                                                $sqltest = "SELECT * FROM `cours_test` WHERE `CoursID`='".$_GET['CoursID']."' AND `MavzuID`='".$_GET['MavzuID']."'";
                                                $restest = $conn->query($sqltest);
                                                while ($rowtest = $restest->fetch()) {
                                                    echo "<option value=".$rowtest['TestID'].">".$rowtest['TestSavol']."</option>";
                                                }
                                            ?>
                                        </select>
                                        <label class="mt-2">Javob xolati</label>
                                        <select type="text" name="Status" class="form-control" required>
                                            <option value="true">true</option>
                                            <option value="false">false</option>
                                        </select>
                                        <label class="mt-2">Test javobi</label>
                                        <input type="text" name="Javob" class="form-control" required>
                                        <button class="btn btn-success mt-3" name="testjavobplus">Test javobini saqlash</button>
                                    </form>
                                </div>
                            </div>
                            
                        </form>
                    </section>
                </div>
            </div>
        </div>

    </main>
    
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    <script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>