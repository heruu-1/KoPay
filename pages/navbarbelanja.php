<?php

  include("config.php");
function isActive($page) {
    $current_page = basename($_SERVER['SCRIPT_NAME']);
    return $current_page == $page ? 'class="active"' : '';
}
?>

<style>
    .header-menu nav ul li a.active {
        color: ;
}
</style>
 <!-- Navbar KOPAY -->
 <header class="tj-header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="logo-box d-flex align-items-center">
                                <a href="index.html" class="d-flex align-items-center text-decoration-none">
                                    <img src="../assets/img/logo/kopay-logo.png" alt="" class="logo-image">
                                    <strong class="kopay-text ml-1" style="text-decoration: none; color: aliceblue;">KoPay</strong>
                                </a>
                            </div>
                        </div>
                    </div>        

                    <div class="header-menu">
                        <nav>
                            <ul>
                            <li><a href="../index.php" <?php echo isActive('index.php'); ?>>Beranda</a></li>
                            <li><a href="tentang.php" <?php echo isActive('tentang.php'); ?>>Tentang</a></li>
                            <li><a href="berita.php" <?php echo isActive('berita.php'); ?>>Berita</a></li>
                            <li><a href="kolaborasi.php" <?php echo isActive('kolaborasi.php'); ?>>Kolaborasi</a></li>
                            <li><a href="kontak.php" <?php echo isActive('kontak.php'); ?>>Kontak</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="header-button">
                        <a href="belanja.php" class="btn tj-btn-primary">Belanja</a>
                    </div>
                    <li class="nav-item dropdown active">
                    <span class="badge badge-pill" style="float:right;margin-top:20px;background-color:rgb(255, 63, 63);">
                        <?php echo isset($_SESSION["cart"]) && is_array($_SESSION["cart"]) ? count($_SESSION["cart"]) : 0; ?>
                    </span>
                <a class="nav-link fa fa-shopping-cart" href="#" id="navbarDropdown" data-toggle="dropdown" style="margin-bottom:25px;"></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <div class="container">
                  <div class="card">
                    <div class="card-body">
                      <table class="table text-center">
                        <thead>
                          <tr>
                            <th>Judul</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 0; ?>
                          <?php foreach ($_SESSION["cart"] as $cart): ?>
                            <tr>
                              <td><?php echo (str_word_count($cart["judul"]) > 2 ? substr($cart["judul"],0,15)."..." : $cart["judul"])  ?></td>
                              <td class="text-danger"><b><?php echo number_format($cart["harga"],0,',','.') ?></b></td>
                              <td><?php echo $cart["jumlah_beli"] ?></td>
                            </tr>
                          <?php if (++$i == 3) {
                            break;
                          } ?>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                      <div class="text-center">
                        <a href="cart.php">Load More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="tj-header-area header-2 header-sticky sticky-out">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap align-items-center">

                    <div class="logo-box">
                        <a href="index.html">
                            <img src="assets/img/logo/kopay-logo.png" alt="">
                        </a>
                    </div>

                    <div class="header-info-list d-none d-md-inline-block">
                        <ul class="ul-reset">
                            <li><a href="">KoPay</a></li>
                        </ul>
                    </div>

                    <div class="header-menu">
                        <nav>
                            <ul>
                                <li><a href="index.php" <?php echo isActive('index.php'); ?>>Beranda</a></li>
                                <li><a href="tentang.php" <?php echo isActive('tentang.php'); ?>>Tentang</a></li>
                                <li><a href="berita.php" <?php echo isActive('berita.php'); ?>>Berita</a></li>
                                <li><a href="kolaborasi.php" <?php echo isActive('kolaborasi.php'); ?>>Kolaborasi</a></li>
                                <li><a href="kontak.php" <?php echo isActive('kontak.php'); ?>>Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-button">
                        <a href="belanja.php" class="btn tj-btn-primary">Belanja</a>
                    </div>

                    <div class="menu-bar d-lg-none">
                        <button>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->