<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: rgb(23, 23, 23);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }

        .horizontal-navbar {
            width: 100%;
            display: flex;
            justify-content: space-around;
            color: #ffffff;
            align-items: center;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .horizontal-navbar h1 {
            color: rgb(202, 160, 123);
        }

        .horizontal-navbar ul {
            list-style-type: none;
            display: flex;
            padding: 0;
            margin: 0;
        }

        .horizontal-navbar ul li {
            margin: 0 15px;
        }

        .horizontal-navbar ul li a {
            text-decoration: none;
            padding: 10px 15px;
            color: rgba(255, 255, 255, 0.5);
        }

        .horizontal-navbar ul li a.dashboard,
        .horizontal-navbar ul li a.home,
        .horizontal-navbar ul li a.shop,
        .horizontal-navbar ul li a.about,
        .horizontal-navbar ul li a.contact {
            color: rgba(255, 255, 255, 0.5);
        }

        .horizontal-navbar ul li a:hover {
            background-color: #575757;
            color: #ffffff;
        }

        .horizontal-navbar ul li a:visited,
        .horizontal-navbar ul li a:active {
            color: rgba(255, 255, 255, 0.5);
        }

        .main-content {
            flex-grow: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 2%;
            gap: 5%;
        }

        .deskripsi {
            color: #ffffff;
            width: 45%;
            padding: 10px;
            margin-left: 5%;
        }

        .deskripsi h1{
            text-align: center;
        }

        .deskripsi p{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .deskripsi .buttons {
            display: flex;
            gap: 10%;
            justify-content: center;
            margin-top: 20px;
        }

        .deskripsi .buttons button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .deskripsi .buttons .get-started {
            background-color: rgb(202, 160, 123);
            color: #ffffff;
        }

        .deskripsi .buttons .about-us {
            background-color: transparent;
            color: #ffffff;
            border: 2px solid rgb(202, 160, 123);
        }

        .pic {
            width: 55%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 5%;
        }

        .pic img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
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
                <p>KoPay adalah sebuah situs web yang ditujukan untuk penikmat kopi yang ingin membeli biji kopi berkualitas. Situs ini menyediakan berbagai jenis biji kopi dari berbagai daerah penghasil kopi terkenal. Pengguna dapat menjelajahi katalog biji kopi berdasarkan asal, jenis, dan profil rasa. KoPay bertujuan untuk menjadi destinasi utama bagi para pencinta kopi yang mencari biji kopi premium.</p>
                <br>
                <div class="buttons">
                <button class="get-started">Get Started</button>
                <button class="about-us">About Us</button>
                </div>
                
            </div>
            <div class="pic">
                <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1594099345/attached_image/ini-manfaat-konsumsi-kopi-hitam-dan-efek-sampingnya-untuk-kesehatan.jpg" alt="Descriptive Alt Text">
            </div>
        </div>
    </div>
</body>
</html>
