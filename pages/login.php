<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <form class="login-form">
            <img src="../assets/img/logo/kopay-logo.png" alt="logo" class="logo">
            <h2>Masuk</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Masuk</button>
            <p class="signup-link">Belum punya akun kah? <a href="../pages/registrasi.php">Daftar sini</a></p>
        </form>
    </div>
</body>
</html>
