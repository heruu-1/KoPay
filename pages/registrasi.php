<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="../assets/css/registrasi.css">
</head>
<body>
    <div class="register-container">
        <form class="register-form">
            <img src="../assets/img/logo/kopay-logo.png" alt="logo" class="logo">
            <h2>Daftar</h2>
            <div class="input-group">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="register-button">Daftar</button>
            <p class="login-link">Sudah punya akun? <a href="login.php">Masuk sini</a></p>
        </form>
    </div>
</body>
</html>
