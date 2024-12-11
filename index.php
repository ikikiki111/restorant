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
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }
        .menu-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 15px;
        }
        .menu-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .menu-card h3 {
            color: #c0392b;
            margin: 15px 0 5px;
        }
        .menu-card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .menu-card .price {
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .menu-card .buy-btn {
            background: #c0392b;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
        }
        .menu-card .buy-btn:hover {
            background: #e74c3c;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: black;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .menu-section {
            padding: 20px;
            text-align: center;
        }
        .menu-section h1 {
            margin-bottom: 10px;
        }
        .menu-section .tabs {
            margin: 20px 0;
        }
        .tabs button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
        .tabs button.active {
            background-color: darkred;
        }
        .menu-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .menu-item {
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 200px;
            padding: 10px;
            text-align: center;
        }
        .menu-item img {
            width: 100%;
            border-radius: 10px;
        }
        .menu-item h3 {
            margin: 10px 0;
        }
        .menu-item p {
            font-size: 14px;
            color: gray;
        }
        .menu-item .price {
            font-weight: bold;
            margin: 10px 0;
        }
        .menu-item button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
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

    <section id="makanan">
        <h1>Daftar Menu</h1>
        <div class="tabs">
            <button class="active">Makanan</button>
            <button class="active">Minuman</button>
        </div>
        <div class="menu-grid">
            <!-- Card 1 -->
            <div class="menu-card">
                <img src="background.jpeg" alt="Seblak Seafood">
                <h3>Seblak Seafood</h3>
                <p>Seblak dengan topping udang, cumi, dan kepiting, menawarkan sensasi rasa laut yang unik.</p>
                <p class="price">Rp 25.000</p>
                <button class="buy-btn">Buy</button>
            </div>
            <!-- Card 2 -->
            <div class="menu-card">
                <img src="background.jpeg" alt="Seblak Ceker">
                <h3>Seblak Ceker</h3>
                <p>Seblak dengan tambahan ceker ayam empuk yang cocok untuk penggemar ceker.</p>
                <p class="price">Rp 15.000</p>
                <button class="buy-btn">Buy</button>
            </div>
            <!-- Card 3 -->
            <div class="menu-card">
                <img src="background.jpeg" alt="Seblak Tulang">
                <h3>Seblak Tulang</h3>
                <p>Dilengkapi tulang ayam atau sapi untuk rasa kuah yang lebih kaya dan gurih.</p>
                <p class="price">Rp 17.000</p>
                <button class="buy-btn">Buy</button>
            </div>
            <!-- Card 4 -->
            <div class="menu-card">
                <img src="background.jpeg" alt="Seblak Kering">
                <h3>Seblak Kering</h3>
                <p>Versi tanpa kuah, lebih garing dan renyah, dengan bumbu khas yang tetap kuat.</p>
                <p class="price">Rp 12.000</p>
                <button class="buy-btn">Buy</button>
            </div>
        </div>
    </div>

    <section id="minuman">
 
        <div class="menu-container">
            <div class="menu-item">
                <img src="minuman.jpg" alt="Lychee Ice">
                <h3>Lychee Ice</h3>
                <p>Segarnya es leci dengan perpaduan rasa manis alami dari buah leci dan sirup khas.</p>
                <div class="price">Rp. 12.000</div>
                <button>Buy</button>
            </div>
            <div class="menu-item">
                <img src="minuman.jpg" alt="Teh">
                <h3>Teh</h3>
                <p>Minuman yang selalu cocok di segala suasana! Teh manis dengan daun teh berkualitas.</p>
                <div class="price">Rp. 8.000</div>
                <button>Buy</button>
            </div>
            <div class="menu-item">
                <img src="minuman.jpg" alt="Teh Tarik">
                <h3>Teh Tarik</h3>
                <p>Nikmati kelezatan teh tarik khas dengan campuran teh dan susu yang creamy.</p>
                <div class="price">Rp. 15.000</div>
                <button>Buy</button>
            </div>
            <div class="menu-item">
                <img src="minuman.jpg" alt="Matcha Ice">
                <h3>Matcha Ice</h3>
                <p>Minuman dari bubuk teh hijau Jepang premium, memberikan rasa manis dan pahit.</p>
                <div class="price">Rp. 18.000</div>
                <button>Buy</button>
            </div>
        </div>
    </div>

    
</body>
</html>