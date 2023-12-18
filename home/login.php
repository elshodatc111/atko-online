<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <main class="d-lg-flex justify-content-center mt-5 p-5 text-center">
        <form action="./conn/login.php" method="POST">
            <h1 class="h3 mb-3 mt-5 fw-normal">KIRISH</h1>
            <div class="form-floating my-3">
                <input type="text" class="form-control" placeholder="Username" name='username' required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" name="login" type="submit">KIRISH</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>