<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
</head>

<body>
    <nav class="horizontal-navbar">
        <h1>KoPay</h1>
        <ul>
            <?php
            $menuItems = [
                'Home' => 'home.php',
                'Shop' => '#shop',
                'About' => 'about.php',
                'Contact' => 'contact.php'
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

    <h2 class="judul">Contact Me</h2>
    <p class="p">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium corrupti facere error nisi repellendus
        iure laudantium est voluptatem ipsa, earum omnis cupiditate ducimus, sed sunt adipisci eligendi rerum neque.
        Nobis.
    </p>

    <div id="contact-container">
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d436.53170545244853!2d105.25054431002341!3d-5.363255809031886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1716957436238!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="map"></iframe>
        </div>
        <div class="row">
            <form action="">

                <div class="input-group">
                    <i data-feather="user" id="icon"></i>
                    <input type="text" placeholder="Nama">
                </div>


                <div class="input-group">
                    <i data-feather="mail" id="icon"></i>
                    <input type="text" placeholder="Email">
                </div>

                <div class="input-group">
                    <i data-feather="phone" id="icon"></i>
                    <input type="text" placeholder="No HP">
                </div>
                <button type="submit">Kirim Pesan</button>

            </form>
        </div>
    </div>

    <script>
    feather.replace();
    </script>
</body>

</html>