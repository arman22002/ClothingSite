<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirt & Pant Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ===== HEADER ===== */
        header {
            background: #1e3c72;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        header .logo {
            font-size: 22px;
            font-weight: bold;
        }

        header .logo a {
            color: white;
            text-decoration: none;
        }
        

        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            padding: 6px 12px;
            border-radius: 4px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            background: #2a5298;
        }
        
        /* ===== LET'S TALK SECTION ===== */
.lets-talk {
    background: #2a5298;
    color: white;
    padding: 10px 10px;
    text-align: center;
    margin-bottom: 1px;
}

.lets-talk h1 {
    font-size: 24px;
    margin-bottom: 15px;
}

.lets-talk p {
    font-size: 18px;
    margin-bottom: 25px;
    opacity: 0.9;
}

.contact-btn {
    display: inline-block;
    background: white;
    color: #2a5298;
    padding: 12px 30px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.3s;
}

.contact-btn:hover {
    background: #f4f4f4;
    transform: translateY(-2px);
}

/* ===== NEWSLETTER SECTION ===== */
.newsletter {
    background: #1e3c72;
    color: white;
    padding: 40px;
    text-align: center;
    margin: 40px 0;
    border-radius: 8px;
}

.newsletter h2 {
    margin-bottom: 10px;
}

.newsletter p {
    margin-bottom: 20px;
    opacity: 0.9;
}

.newsletter form {
    display: flex;
    justify-content: center;
    max-width: 500px;
    margin: 0 auto;
}

.newsletter input {
    flex: 1;
    padding: 12px 15px;
    border: none;
    border-radius: 4px 0 0 4px;
    font-size: 16px;
}

.newsletter button {
    background: #ff6b6b;
    color: white;
    border: none;
    padding: 12px 25px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

.newsletter button:hover {
    background: #ff5252;
}

        /* ===== MAIN CONTENT ===== */
        .content {
            flex: 1;
            padding: 40px;
            text-align: center;
        }

        .content h1 {
            margin-bottom: 10px;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .product {
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .product img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 6px;
        }

        .product h3 {
            margin: 10px 0 5px;
        }

        .product button {
            margin-top: 10px;
            padding: 8px;
            width: 100%;
            background: #1e3c72;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .product button:hover {
            background: #2a5298;
        }

        /* ===== FOOTER ===== */
        footer {
            background: #222;
            color: white;
            padding: 20px;
            text-align: center;
        }

        footer p {
            margin-bottom: 5px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header>
    <div class="logo">
        <a href="index.php">👕 Shirt & Pant Store</a>
    </div>
    

    <nav>
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="shop.php">shop</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">contact</a></li>
            <li><a href="#">cart</a></li>
            <li><a href="logout.php">logout</a></li>

        </ul>
    </nav>
</header>

    <section class="lets-talk">
    <h1>LET'S TALK</h1>
    <p>LEAVE A MESSAGE, we love to hear from you!</p>
    <a href="contact.php" class="contact-btn">Contact Us</a>
    </section>
    
    
    <!-- ===== NEWSLETTER SECTION ===== -->
    <section class="newsletter">
    <h2>Sign Up For Newsletters</h2>
    <p>Get E-mail updates about our latest shop and special offers</p>
    <form>
        <input type="email" placeholder="Your email address">
        <button type="submit">Subscribe</button>
    </form>
    </section>
    
    
    <!-- ===== MAIN CONTENT ===== -->
    <div class="content">
    <h1>Our Products</h1>
    <p>Choose your favorite style</p>

    <div class="products">
    <div class="product">
        <img src="shirt1.jpg" alt="Shirt">
        <h3>Men Shirt</h3>
        <p>Price: 850 Taka</p>
        <button>Add to Cart</button>
    </div>

    <div class="product">
        <img src="pant1.png" alt="Pant">
        <h3>Men Pant</h3>
        <p>Price: 920 Taka</p>
        <button>Add to Cart</button>
    </div>

    <div class="product">
        <img src="shirt2.png" alt="Shirt">
        <h3>Casual Shirt</h3>
        <p>Price: 920 Taka</p>
        <button>Add to Cart</button>
    </div>
    
    <!-- Add more products as needed -->
</div>


<!-- ===== FOOTER ===== -->
<footer>
    <p>© 2026 Shirt & Pant Store</p>
    <p>Contact: support@shirtpantstore.com</p>
</footer>

</body>
</html>
