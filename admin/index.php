<!DOCTYPE html>
<?php
  session_start();
  include("../config/confige.php");
  if(!isset($_SESSION['UserID'])){
    header("location: ./login.php");
  }
?>
<html lang="en">
  <head>
    <title>Bosh sahifa</title>
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
            <a class="app-menu__item active" href="index.php">
              <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Bosh sahifa</span>
            </a>
          </li>
          <li>
            <a class="app-menu__item " href="cours.php">
              <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Kurslar</span>
            </a>
          </li>
          <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Talabalar</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="users.php"><i class="icon bi bi-circle-fill"></i> Ro'yhatdan o'tganlar</a></li>
              <li><a class="treeview-item" href="users_cours.php"><i class="icon bi bi-circle-fill"></i> Sotilgan kurslar</a></li>
            </ul>
          </li>
        </ul>
    </aside>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="bi bi-speedometer"></i> Bosh sahifa</h1>
          <p>ATKO o'quv markazi online kurslar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="index.php">Bosh sahifa</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-4">
          <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
            <div class="info">
              <h4>Ro'yhatdan o'tganlar</h4>
              <?php
                $sql1 = "SELECT * FROM `user` WHERE 1";
                $res1 = $conn->query($sql1);
                $count1 = 0;
                while ($row1 = $res1->fetch()) {
                  $count1 = $count1 + 1;
                }
              ?>
              <p><b><?php echo $count1; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
            <div class="info">
              <h4>Sotilgan kurslar</h4>
              <?php
                $sql2 = "SELECT * FROM `user_cours` WHERE 1";
                $res2 = $conn->query($sql2);
                $count2 = 0;
                while ($row2 = $res2->fetch()) {
                  $count2 = $count2 + 1;
                }
              ?>
              <p><b><?php echo $count2; ?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <div class="widget-small warning coloured-icon"><i class="icon bi bi-folder2 fs-1"></i>
            <div class="info">
              <h4>Kurslar</h4>
              <?php
                $sql3 = "SELECT * FROM `cours` WHERE 1";
                $res3 = $conn->query($sql3);
                $count3 = 0;
                while ($row3 = $res3->fetch()) {
                  $count3 = $count3 + 1;
                }
              ?>
              <p><b><?php echo $count3; ?></b></p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.7.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
  </body>
</html>