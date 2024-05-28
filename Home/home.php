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
            color : rgb(202, 160, 123)
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
        }

        .horizontal-navbar ul li a.dashboard {
            color: #ffffff;
        }

        .horizontal-navbar ul li a.services,
        .horizontal-navbar ul li a.about,
        .horizontal-navbar ul li a.contact {
            color: rgba(255, 255, 255, 0.5);
        }

        .horizontal-navbar ul li a:hover {
            background-color: #575757;
            color: #ffffff;
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
            gap: 30%;
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
                'Services' => '#services',
                'About' => '#about',
                'Contact' => '#contact'
            ];
            $classes = ['dashboard', 'services', 'about', 'contact'];
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
                <p></p>
            </div>
            <div class="reserved">
                <h2>Reserved</h2>
                <h3>10</h3>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
