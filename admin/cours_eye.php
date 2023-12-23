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
                <h1><i class="bi bi-table"></i> Kursni haqida</h1>
                <p>Kurs haqida to'liq malumot</p>
            </div>
                <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
                <li class="breadcrumb-item">Kursni haqida</li>
                <li class="breadcrumb-item "><a href="cours.php">Kurslar</a></li>
                <li class="breadcrumb-item active"><a href="cours_new.php">Bosh sahifa</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <section class="invoice">
                        <div class="row mb-4">
                            <div class="col-6">
                                <h2 class="page-header"><i class="bi bi-globe"></i> Kursning nomi</h2>
                            </div>
                            <div class="col-6">
                                <h5 class="text-end">Kurs yaratildi: 01/01/2016</h5>
                            </div>
                        </div>
                        <div class="row invoice-info">
                            <div class="col-lg-4 text-center">
                                <img src="https://searchthisweb.com/wallpaper/reine_4000x2662_ruwae.jpg" style="width:200px">
                                <form action="" method="post">
                                    <input type="file" class="form-control w-50 my-2" style="margin: 0 auto;" required>
                                    <button class="btn btn-success w-50">Rasmni yangilash</button>
                                </form>
                            </div>
                            <div class="col-lg-4">
                                <address>
                                    <strong>Kurs narxi: </strong> <b>150000 so'm</b><br>
                                    <strong>Mavzular soni: </strong> <b>15</b><br>
                                    <strong>Kurs tili: </strong> <b>O'zbek</b><br>
                                    <strong>Kurs davomiyligi: </strong> <b>00:00:00</b><br>
                                    <strong>Kurs muddati: </strong> <b>30 kun</b><br>
                                    <strong>Kurs haqida qisqacha: </strong> <br>
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus omnis magnam voluptas recusandae 
                                        molestiae! Animi dolorum ea doloremque reprehenderit eum, perferendis est? Debitis, corrupti 
                                        esse fugiat quisquam recusandae ipsa ullam!
                                    </p>
                                </address>
                            </div>
                            <div class="col-lg-4 text-center">
                                <b><img src="https://searchthisweb.com/wallpaper/reine_4000x2662_ruwae.jpg" style="width:100px;height:100px;border-radius: 50%;"></b><br><br>
                                <b>O'qituvchi: </b> Elshod Musurmonov<br>
                                <form action="" method="post">
                                    <input type="file" class="form-control w-50 my-2" style="margin: 0 auto;" required>
                                    <button class="btn btn-success w-50">Rasmni yangilash</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 my-3">
                                <strong>Kurs haqida to'liq: </strong><br> 
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum consequatur nihil eaque quod 
                                    delectus dolorem, laboriosam magnam labore perspiciatis placeat a nemo repudiandae quas et, 
                                    facilis velit odio rem ad. Quas saepe et praesentium repudiandae fugiat cum aliquid dicta, similique 
                                    magnam, sequi reiciendis. Necessitatibus quibusdam, nostrum cum nulla voluptatem, non autem minus 
                                    culpa fugit aliquid nisi earum architecto porro. Reprehenderit! Quas saepe et praesentium repudiandae 
                                    fugiat cum aliquid dicta, similique magnam, sequi reiciendis. Necessitatibus quibusdam, nostrum cum 
                                    nulla voluptatem, non autem minus culpa fugit aliquid nisi earum architecto porro. Reprehenderit!
                                </p>
                            </div>
                            <div class="col-12 table-responsive">
                                <table class="table table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mavzu</th>
                                            <th>Video link</th>
                                            <th>Video uzunligi</th>
                                            <th>Testlar soni</th>
                                            <th>Tartib raqami</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary p-0 px-1" href="#">15</a></td>
                                            <td>1</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" href="cours_mavzu_eye.php"><i class="bi bi-eye"></i></a>
                                                <a class="btn btn-primary" href="cours_mavzu_edit.php"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-primary" href="#"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>1</td>
                                            <td><a class="btn btn-primary p-0 px-1" href="#">15</a></td>
                                            <td>1</td>
                                            <td class="text-center">
                                                <a class="btn btn-primary" href="#"><i class="bi bi-eye"></i></a>
                                                <a class="btn btn-primary" href="cours_mavzu_edit.php"><i class="bi bi-pencil-square"></i></a>
                                                <a class="btn btn-primary" href="#"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Yangi mavzu qo'shish</h4>
                                </div>
                                <div class="col-lg-6">
                                    <label class="mt-2">Mavzu nomi</label>
                                    <input type="text" class="form-control" required>
                                    <label class="mt-2">Tartib raqami</label>
                                    <input type="text" class="form-control" required>
                                    <label class="mt-2">Mavzu haqida</label>
                                    <textarea cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-lg-6">
                                    <label class="mt-2">Mavzu video link</label>
                                    <input type="text" class="form-control" required>
                                    <label class="mt-2">Video uzunligi(00:00:00)</label>
                                    <input type="text" class="form-control" required>
                                    <label class="mt-2">Mavzuga oit testlar</label>
                                    <textarea cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-success mt-3">Yangi mavzuni saqlash</button>
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