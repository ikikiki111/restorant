<?php
$website = "WebsiteKu";
$deskripsi = "Website informasi sederhana untuk berbagai keperluan.";
$tahun = 2024;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Seblak Dower</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('background.jpeg') no-repeat center center fixed;
            background-size: cover;

        }
        .navbar {
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: space-around;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            font-size: 16px;
        }
        .navbar a.active, .navbar a:hover {
            background-color: #c0392b;
            border-radius: 5px;
        }
        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .tabs {
            text-align: center;
            margin-bottom: 20px;
        }
        .tabs button {
            background-color: transparent;
            border: 2px solid #c0392b;
            color: #c0392b;
            padding: 10px 20px;
            margin: 0 5px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .tabs button.active, .tabs button:hover {
            background-color: #c0392b;
            color: #fff;
        }
        h1 {
            color: #333;
        }
        .info {
            margin-top: 20px;
            background-color: #e9ecef;
            padding: 15px;
        } 
  </style>
  </head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="best.php">Best Seller</a>
    </div>
    <div class="container">
        <h1>Tentang <?php echo $website; ?></h1>
        
        <p><?php echo $deskripsi; ?></p>
        
        <div class="info">
            <p>Didirikan pada tahun <?php echo $tahun; ?></p>
            <p>Versi 1.0</p>
        </div>
        
        <footer>
            <p>© <?php echo date('Y'); ?> <?php echo $website; ?></p>
        </footer>
    </div>
</body>
</html>