<!DOCTYPE html>
<?php
  session_start();
  include("../config/confige.php");
  if(!isset($_SESSION['UserID'])){
    header("location: ./login.php");
  }
  $sql = "SELECT * FROM `cours` WHERE `CoursID`='".$_GET['CoursID']."'";
  $res = $conn->query($sql);
  $row=$res->fetch();
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
          <h1><i class="bi bi-table"></i> Kursni taxrirlash</h1>
          <p>Kursning ma'lumotlarni taxrirlash</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item">Kursni taxrirlash</li>
          <li class="breadcrumb-item "><a href="cours.php">Kurslar</a></li>
          <li class="breadcrumb-item active"><a href="index.php">Bosh sahifa</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form action="./connect/cours/cours_edit.php?CoursID=<?php echo $_GET['CoursID']; ?>" method="POST" class="row">
                <div class="col-lg-6">
                    <label class="mt-2" style="font-weight:700;">Kurs nomi</label>
                    <input type="text" name="CoursName" class="form-control" value="<?php echo $row['CoursName']; ?>" placeholder="Kurs nomi" required>
                    <label class="mt-2" style="font-weight:700;">Kurs haqida qisqacha</label>
                    <textarea cols="30" rows="10" name="CoursText" required class="form-control"><?php echo $row['CoursText']; ?></textarea>
                    <label class="mt-2" style="font-weight:700;">Kurs narxi</label>
                    <input type="number" class="form-control" name="CoursPrise" value="<?php echo $row['CoursPrice']; ?>" placeholder="Kurs narxi" required>
                </div>
                <div class="col-lg-6">
                    <label class="my-2 mt-3" style="font-weight:700;">Kurs mavzulari soni</label>
                    <input type="number" name="MavzuCount" class="form-control" value="<?php echo $row['CoursMavzu']; ?>" placeholder="Kurs mavzular soni" required>
                    <label class="my-2" style="font-weight:700;">Kurs tili</label>
                    <input type="text" name="KursTil" class="form-control" value="<?php echo $row['CoursTil']; ?>" placeholder="Kurs nomi" required>
                    <label class="my-2" style="font-weight:700;">Kurs davomiyligi</label>
                    <input type="text" name="KursDavom" class="form-control" value="<?php echo $row['CoursDavomiy']; ?>" placeholder="Kurs nomi" required>
                    <label class="my-2" style="font-weight:700;">Kurs muddati(kun)</label>
                    <input type="number" name="KursMuddat" class="form-control" value="<?php echo $row['Muddat']; ?>" placeholder="Kurs nomi" required>
                    <label class="my-2" style="font-weight:700;">Kurs o'qituvchi</label>
                    <input type="text" name="Techer" class="form-control" value="<?php echo $row['CoursTecher']; ?>" placeholder="Kurs nomi" required>
                </div>
                <div class="col-12">
                    <label class="my-2" style="font-weight:700;">Kurs haqida to'liq malumot</label>
                    <textarea cols="30" rows="10" name="KursAbout" required placeholder="Kurs haqida to'liq malumot" class="form-control"><?php echo $row['CoursAbout']; ?></textarea>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-success mt-2" name="CoursEdit">O'zgarishlarni saqlash</button>
                </div>
              </form>
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