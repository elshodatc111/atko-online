<?php
    include("../config/confige.php");
    if(!isset($_COOKIE['user_id'])){
        header("location: ./login.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bosh sahifa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <header class="pt-3">
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center link-body-emphasis text-decoration-none">
                    <span class="fs-4">ATKO ADMIN</span>
                </a>
                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-decoration-none" href="pays.php">SOTILDI</a>
                    <a class="me-3 py-2 text-decoration-none" href="users.php">TALABALAR</a>
                    <a class="py-2 text-decoration-none" href="login.php">CHIQISH</a>
                </nav>
            </div>
        </header>
        <div class="row">
            <div class="col-12 text-center">
                <h3>KURSLAR</h3>
                <a href="./cours_plus.php" style="border-radius:0;" class="btn btn-success"> New Cours</a><hr>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 my-3">
                    <img src="../img/kurs/01.jpg" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h4>Kursning nomi</h4>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="./cours.php" class="btn btn-primary w-100" style="border-radius:0;">Kurs About</a>
                            </div>
                            <div class="col-6">
                                <a href="./cours_del.php" class="btn btn-danger w-100" style="border-radius:0;">O'chirish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>