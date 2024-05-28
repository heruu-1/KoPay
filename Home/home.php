<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="home.css">


<body>
    <nav class="horizontal-navbar">
        <h1>KoPay</h1>
        <ul>
            <?php
            $menuItems = [
                'Home' => '#Home',
                'Shop' => '#shop',
                'About' => '#about',
                'Contact' => '#contact'
            ];
            $classes = ['home', 'shop', 'about', 'contact'];
            $index = 0;
            foreach ($menuItems as $name => $link): ?>
            <li><a href="<?php echo $link; ?>" class="<?php echo $classes[$index]; ?>">
                    <?php echo $name; ?></a></li>
            <?php $index++; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="main-content">
        <div class="content">
            <div class="deskripsi">
                <h1>KoPay</h1>
                <p>KoPay adalah sebuah situs web yang ditujukan untuk penikmat kopi yang ingin membeli biji kopi
                    berkualitas. Situs ini menyediakan berbagai jenis biji kopi dari berbagai daerah penghasil kopi
                    terkenal. Pengguna dapat menjelajahi katalog biji kopi berdasarkan asal, jenis, dan profil rasa.
                    KoPay bertujuan untuk menjadi destinasi utama bagi para pencinta kopi yang mencari biji kopi
                    premium.</p>
            </div>
            <div class="pic">
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1594099345/attached_image/ini-manfaat-konsumsi-kopi-hitam-dan-efek-sampingnya-untuk-kesehatan.jpg"
                    alt="Descriptive Alt Text">
            </div>
        </div>
    </div>
</body>

</html>