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

        .room-reserved, .reserved {
            background-color: rgb(208, 208, 208);
            padding: 10px;
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .room-reserved h2, .reserved h2 {
            font-size: 16px;
            color: #7FC142;
        }

        .room-reserved h3, .reserved h3 {
            margin: 0;
            font-size: 64px;
            text-align: center;
        }

        .transactions {
            padding: 10px;
            width: 200px;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            margin-top: 20px;
        }

        .transactions h2 {
            font-size: 16px;
            color: #7FC142;
        }

        .transactions h3 {
            margin: 0;
            font-size: 64px;
            text-align: center;
        }

        .transactions table {
            padding: 10px;
            border-collapse: collapse;
        }

        .transactions table th, .transactions table td {
            padding: 5px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .transactions table th {
            background-color: #f2f2f2;
        }

        .transactions .btn {
            border: 4px solid #7FC142;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 10px;
            border-radius: 10px;
            background: none;
            cursor: pointer;
        }

        .transactions .btn:hover {
            background-color: #7FC142;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <nav class="horizontal-navbar">
        <h1>KoPay</h1>
        <ul>
            <?php
            $menuItems = [
                'Dashboard' => '#dashboard',
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
        <h1>Welcome,</h1>
        <div class="content">
            <div class="room-reserved">
                <h2>Room Available</h2>
                <h3>15+</h3>
            </div>
            <div class="reserved">
                <h2>Reserved</h2>
                <h3>10</h3>
            </div>
        </div>
        <div class="transactions">
            <h2>Transactions</h2>
            <table>
                <tr>
                    <th>Payment ID</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>0001</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>0002</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>0003</td>
                    <td>Pending</td>
                </tr>
            </table>
            <button class="btn">Lihat Selengkapnya</button>
        </div>
    </div>
</body>
</html>
