<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="theme-color" content="#8750F7">

    <title>KoPay</title>
    <link rel="apple-touch-icon" href="../assets/img/favicon7.png" />
    <link rel="shortcut icon" type="image/png" href="../assets/img/logo/kopay-logo.png" />
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-pro.min.css">
    <link rel="stylesheet" href="../assets/css/flaticon_gerold.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/backToTop.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/odometer-theme-default.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/berita.css">

    <style>
    .custom-height-item {
        height: 465px;
        /* Adjust the height as needed */
        overflow-y: auto;
        /* Optional: adds a scrollbar if content overflows */
    }
    </style>

</head>

<body>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, email, phone, address, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $phone, $address, $message);
}
?>

    <?php include 'navbar.php'; ?>

    <main class="site-content">
        <section class="hero-section d-flex align-items-center" id="intro">
            <div class="container">
                <div class="section-header justify-content-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Kontak Kami!</h2>
                    <p class=" wow fadeInUp" data-wow-delay=".4s">Ada pertanyaan atau saran? silahkan menghubungi kami
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-5 wow fadeInLeft" data-wow-delay=".4s">
                        <div class="resume-widget">
                            <div class="resume-item custom-height-item">
                                <h3 class="resume-title">Informasi Kontak</h3>
                                <div class="institute">
                                    <p>Apabila Anda mempunyai pertanyaan atau masalah, Anda dapat menghubungi kami
                                        dengan mengisi formulir kontak, menelepon kami, datang ke kantor kami, menemukan
                                        kami di media sosial lain, atau Anda dapat mengirim email pribadi ke:</p><br>
                                    <i data-feather="phone-call" class="mr-3"></i><strong>+62
                                        87822091974</strong><br><br>
                                    <i data-feather="mail" class="mr-3"></i><strong>email@example.com</strong><br><br>
                                    <i data-feather="map-pin" class="mr-3"></i><strong>Alamat Kantor</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="resume-widget">
                            <form action="kontak.php" method="POST">
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukkan Nama Anda" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="nama@example.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">No. Telepon</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Masukkan Nomor Anda" required>
                                </div>
                                <div class="form-group">
                                    <label for="address">Alamat Rumah</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Masukkan Alamat Rumah Anda" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Pesan</label>
                                    <textarea class="form-control" id="message" name="message" rows="3"
                                        required></textarea>
                                </div>
                                <button class="btn tj-btn-primary" style="float: right;">Kirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>



    <!-- CSS here -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/backToTop.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="assets/js/appear.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/one-page-nav.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script>
    feather.replace();
    </script>
    <script src="assets/js/main.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>