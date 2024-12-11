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
  </style>
  </head>
<body>
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="about.php">About</a>
        <a href="menu.php">Menu</a>
        <a href="best.php">Best Seller</a>
    </div>
</body>
</html>