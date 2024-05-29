<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <nav class="horizontal-navbar">
        <h1>KoPay</h1>
        <ul>
            <?php
            $menuItems = [
                'Home' => 'home.php',
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

    <h2 class="judul">About KoPay</h2>
    <div class="row">
        <div class="about-img">
            <img class="img"
                src="https://images.unsplash.com/photo-1607681034540-2c46cc71896d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="About KoPay">
        </div>

        <div class="content">
            <h3 class="h3">Kenapa pilih kopi kami?</h3>
            <p class="p">KoPay is a website that provides various types of products that you can buy. We provide a
                variety of
                products ranging from electronics, fashion, household needs, and many more. We provide the best quality
                products at affordable prices. We also provide a variety of payment methods that you can choose
                according
                to your needs. We are committed to providing the best service for you. Happy shopping!</p>
            <p class="p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam repellat nisi commodi,
                deserunt ex
                dolor accusantium doloribus. Eaque doloribus excepturi ullam deleniti qui sequi dicta error dignissimos
                culpa dolor. Sunt.</p>
        </div>
</body>

</html>