<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/berita.css">
    <style>
    .custom-height-item {
        height: 465px;
        overflow-y: auto;
    }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root"; // ganti dengan username MySQL Anda
    $password = ""; // ganti dengan password MySQL Anda
    $dbname = "kopay_db"; // ganti dengan nama database Anda

    // Buat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
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
                            <form action="post_kontak.php" method="POST">
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

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    feather.replace();
    </script>
</body>

</html>