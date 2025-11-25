<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - GameHub</title>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
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

            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            width: 100%;
            background: rgba(0,0,0,0.7);
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            backdrop-filter: blur(3px);
            box-sizing: border-box;
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

        .content-wrapper {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .container {
            background: rgba(0,0,0,0.8);
            padding: 35px;
            width: 380px;
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 0 15px rgba(255,255,255,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #00eaff;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }

        input {
            width: 94.5%;
            padding: 10px;
            margin: 6px auto;
            display: block;
            border-radius: 5px;
            border: none;
            background: #222;
            color: #fff;
        }

        input:focus {
            outline: 2px solid #00eaff;
        }

        .social-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding: 8px 14px;
            margin: 15px 0 10px;
            border-radius: 8px;
            background: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s;
            color: #000;
        }

        .social-btn img {
            width: 20px;
            height: 20px;
            margin-left: 80px;
        }

        .social-btn:hover {
            background: #f5f5f5;
        }

        .google-btn {
            border: 1px solid #dcdcdc;
        }

        .facebook-btn {
            border: none;
            margin-bottom: 80px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #00eaff;
            border: none;
            color: #000;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background: #00bcd4;
        }

        .login {
            text-align: center;
            margin-top: 15px;
        }

        .login a {
            color: #00eaff;
            text-decoration: none;
        }

        .login a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

    <header>
        <h1>GameHub</h1>
        <nav>
            <a href="landingpage.php">Home</a>
            <a href="products.php">Products</a>
            <a href="categories.php">Categories</a>
            <a href="cart.php">Cart</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </nav>
    </header>

    <div class="content-wrapper">
        <div class="container">
            <h2>Create Account</h2>

            <form action="clientlandingpage.php" method="POST">

                <label>Contact Number</label>
                <input type="text" name="contact_number" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <label>Username</label>
                <input type="text" name="username" required>

                <label>Address</label>
                <input type="text" name="address" required>

                <button type="button" class="social-btn google-btn">
                    <img src="googleicon.png" alt="Google Icon">
                    Continue with Google
                </button>

                <button type="button" class="social-btn facebook-btn">
                    <img src="facebooklogo.avif" alt="Facebook Icon">
                    Continue with Facebook
                </button>

                <button type="submit" >Sign Up</button>
            </form>

            <div class="login">
                Already have an account? <a href="login.html">Login</a>
            </div>
        </div>
    </div>

</body>
</html>