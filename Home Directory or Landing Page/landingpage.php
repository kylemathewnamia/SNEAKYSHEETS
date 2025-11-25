<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub - Gaming Shop</title>
    <style>

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body { 
            font-family: Arial, sans-serif;

            
            background-image: url("background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            
            background-color: rgba(0,0,0,0.75);
            background-blend-mode: darken;

            color: white;
            min-height: 100vh;
        }

       
        header {
            background: rgba(0,0,0,0.7);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(3px); 
        }

        header h1 {
            margin: 0;
            font-size: 28px;
            letter-spacing: 2px;
        }

        nav a {
            color: white;
            margin: 0 12px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #00eaff; 
        }

        .hero {
            text-align: center;
            padding: 100px 20px 60px;
        }

        .hero h2 {
            font-size: 50px;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(0, 238, 255, 0.5);
        }

        .hero p {
            font-size: 18px;
            opacity: 0.9;
        }

        .categories {
            font: bold;
            font-size: 18px;
            padding: 40px 20px;
            text-align: center;
        }

        .categories h2 {
            font-size: 30px;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(255,255,255,0.2);
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            padding: 20px;
            max-width: 900px;
            margin: auto;
        }

        .category {
            background: rgba(255, 255, 255, 0.07);
            padding: 25px;
            border-radius: 12px;
            transition: 0.3s;
            cursor: pointer;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .category:hover {
            background: rgba(0, 153, 255, 0.2);
            transform: translateY(-8px);
            border-color: #00c8ff;
        }

    </style>
</head>
<body>

    <header>
        <h1>GameHub</h1>
        <nav>
            <a href="landingpage.php">Home</a>
            <a href="products.php">Products</a>
            <a href="#categories.php">Categories</a>
            <a href="cart.php">Cart</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </nav>
    </header>

    <section class="hero">
        <h2>Welcome to GameHub</h2>
        <p>Your one-stop shop for all gaming needs.</p>
    </section>

    <section class="categories">
        <h2>Shop by Category</h2>

        <div class="category-grid">
            <div class="category">PC Games</div>
            <div class="category">Console Games</div>
            <div class="category">Peripherals</div>
            <div class="category">PC Accessories</div>
        </div>
    </section>

</body>
</html>