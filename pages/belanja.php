<?php
  session_start();
  include("config.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/berita.css">
    <script type="text/javascript">
      Detail = (item) =>{
        document.getElementById("kode_biji").value = item.kode_buku;
        document.getElementById("judul").innerHTML = item.judul;
        document.getElementById("harga").innerHTML = item.harga;
        document.getElementById("stok").innerHTML = item.stok;
        document.getElementById("jumlah_beli").value = "1";
        document.getElementById("jumlah_beli").max = item.stok;
        document.getElementById("image").src = "image/" + item.image;
      }
    </script>

</head>
<body>
<?php include 'navbarbelanja.php'; ?>

<?php
      if (isset($_GET["find"])) {
        $find = $_GET["find"];
        $sql = "select * from biji_kopi
                where kode_biji like '%$find%'
                or judul like '%$find%'
                or harga like '%$find%'
                or stok like '%$find%'";
      } else {
        $sql = "select * from biji_kopi";
      }
      $query = mysqli_query($connect, $sql);
     ?>
    
    <main class="site-content">
    <section class="hero-section d-flex align-items-center" id="intro">
    <div class="container">
                <div class="section-header justify-content-center">
                    <h2 class="section-title wow fadeInUp" data-wow-delay=".3s">Toko</h2>
                    <p class=" wow fadeInUp" data-wow-delay=".4s">Berikut adalah beberapa biji kopi pilihan kami</p>
                    
                </div>
                

            <div class="row">
                <div class="col-md-6">
                    <div class="resume-widget">
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                            <div class="time">
                                04/06/2024
                            </div>
                            <h3 class="resume-title">KoPay Mendapat Penghargaan</h3>
                            <div class="isi-berita">
                                <div class="berita-img">
                                    <img src="../assets/img/berita/berita1.jpg" alt="" style="height: 180px;width: 280px;border-radius: 10px;">
                                </div>
                                <p>KoPay mendapat Penghargaan di Indonesia Coffee Awards dengan voting "Best Seller"</p>
                                <a href="#">>>> Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="resume-widget">
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                            <div class="time">
                                04/06/2024
                            </div>
                            <h3 class="resume-title">KoPay Mendapat Penghargaan</h3>
                            <div class="isi-berita">
                                <div class="berita-img">
                                    <img src="../assets/img/berita/berita1.jpg" alt="" style="height: 180px;width: 280px;border-radius: 10px;">
                                </div>
                                <p>KoPay mendapat Penghargaan di Indonesia Coffee Awards dengan voting "Best Seller"</p>
                                <a href="#">>>> Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="resume-widget">
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                            <div class="time">
                                04/06/2024
                            </div>
                            <h3 class="resume-title">KoPay Mendapat Penghargaan</h3>
                            <div class="isi-berita">
                                <div class="berita-img">
                                    <img src="../assets/img/berita/berita1.jpg" alt="" style="height: 180px;width: 280px;border-radius: 10px;">
                                </div>
                                <p>KoPay mendapat Penghargaan di Indonesia Coffee Awards dengan voting "Best Seller"</p>
                                <a href="#">>>> Baca Lebih Lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="resume-widget">
                        <div class="resume-item wow fadeInLeft" data-wow-delay=".4s">
                            <div class="time">
                                04/06/2024
                            </div>
                            <h3 class="resume-title">KoPay Mendapat Penghargaan</h3>
                            <div class="isi-berita">
                                <div class="berita-img">
                                    <img src="../assets/img/berita/berita1.jpg" alt="" style="height: 180px;width: 280px;border-radius: 10px;">
                                </div>
                                <p>KoPay mendapat Penghargaan di Indonesia Coffee Awards dengan voting "Best Seller"</p>
                                <a href="#">>>> Baca Lebih Lanjut</a>
                            </div>
                        </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>