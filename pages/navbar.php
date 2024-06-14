<?php
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
                        <a href="belanja/index.php" class="btn tj-btn-primary">Belanja</a>
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
                        <a href="belanja/index.php" class="btn tj-btn-primary">Belanja</a>
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