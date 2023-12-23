<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
  </head>
<body>
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1>ATKO</h1>
    </div>
    <div class="login-box">
      <?php if(isset($_GET['err'])){echo "<p>Login yoki parol xato</p>";} ?>
      <form class="login-form" action="./connect/login/login.php" method="POST">
        <h3 class="login-head"><i class="bi bi-person me-2"></i>Kirish</h3>
        <div class="mb-3">
          <label class="form-label">USERNAME</label>
          <input class="form-control" name="username" type="text" placeholder="Email" autofocus>
        </div>
        <div class="mb-3">
          <label class="form-label">PASSWORD</label>
          <input class="form-control" name="password" type="password" placeholder="Password">
        </div>
        <div class="mb-3 btn-container d-grid">
          <button class="btn btn-primary btn-block" type="submit" name="login"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>Kirish</button>
        </div>
      </form>
    </div>
  </section>

  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>