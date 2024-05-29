<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="contact.css">
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
</body>

</html>