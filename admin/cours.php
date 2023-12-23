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
          <h1><i class="bi bi-table"></i> Kurslar</h1>
          <p>Barcha online kurslar</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item">Kurslar</li>
          <li class="breadcrumb-item active"><a href="index.php">Bosh sahifa</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <p><a class="btn btn-primary icon-btn" href="./cours_new.php"><i class="bi bi-plus-square me-2"></i>Yangi kurs	</a></p>
                <table class="table table-hover table-bordered" text-center id="sampleTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Kurs nomi</th>
                      <th>Kurs narxi</th>
                      <th>Mavzular soni</th>
                      <th>Kurs tili</th>
                      <th>Davomiyligi</th>
                      <th>Kurs muddati</th>
                      <th>O'qituvchi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $sql = "SELECT * FROM `cours`";
                      $res = $conn->query($sql);
                      $i=1;
                      while ($row = $res->fetch()) {
                    ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['CoursName']; ?></td>
                      <td><?php echo $row['CoursPrice']; ?></td>
                      <td><?php echo $row['CoursMavzu']; ?></td>
                      <td><?php echo $row['CoursTil']; ?></td>
                      <td><?php echo $row['CoursDavomiy']; ?></td>
                      <td><?php echo $row['Muddat']; ?></td>
                      <td><?php echo $row['CoursTecher']; ?></td>
                      <td class="text-center">
                          <a class="btn btn-primary" href="cours_eye.php?CoursID=<?php echo $row['CoursID']; ?>"><i class="bi bi-eye"></i></a>
                          <a class="btn btn-primary" href="cours_edit.php?CoursID=<?php echo $row['CoursID']; ?>"><i class="bi bi-pencil-square"></i></a>
                          <a class="btn btn-primary" href="#"><i class="bi bi-trash"></i></a>
                      </td>
                    </tr>
                    <?php $i++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
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