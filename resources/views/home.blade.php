<?php

// NOBELA Shoe Store - Home Page

$brandName = "STEPX";
$cartCount = 0;

$products = [
    [
        "name" => "STEPX Air Flex",
        "price" => 18300,
        "category" => "Running",
        "image" => "images/air-flex.avif"
    ],

    [
        "name" => "STEPX Urban Runner",
        "price" => 13500,
        "category" => "Lifestyle",
        "image" => "images/urban-runner.avif"
    ],
    [
        "name" => "STEPX Street Pro",
        "price" => 15900,
        "category" => "Sports",
        "image" => "images/street-pro.avif"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $brandName; ?> | Premium Footwear</title>

    <link rel="stylesheet" href="{{asset('style.css')}}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
<div class="marquee">
    <marquee behavior="scroll" direction="left" scrollamount="6">
       STEPX &nbsp;•&nbsp; DESIGNED FOR EVERY STEP &nbsp;•&nbsp; BUILT FOR YOUR STYLE &nbsp;•&nbsp; DISCOVER MORE
    </marquee>
</div>

<!-- ================= HEADER ================= -->

<header class="header">

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}">
    </div>

    <nav class="navbar" id="navbar">

        <a href="#" class="nav-link active">Home</a>
        <a href="{{ url('/shop') }}" class="nav-link">Shop</a>
        <a href="{{ url('/about') }}" class="nav-link">About</a>
        <a href="#contact" class="nav-link">Contact</a>

    </nav>

    <div class="header-right">
<button class="cart-btn" arial-label="Search"><i class="fa-solid fa-magnifying-glass"></i></button>
<button class="cart-btn"arial-label="user"><i class="fa-regular fa-circle-user"></i></button>
<button class="cart-btn" arial-label="cart"><i class="fa-regular fa-heart"></i></button>

<button class="cart-btn" onclick="openCart()">

            <i class="fa-solid fa-regular fa-cart-shopping"></i>
            <span class="cart-count" id="cartCount">
            <?php echo $cartCount; ?>
            </span>

</button>

        <button class="menu-btn" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>

    </div>

</header>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-background"></div>

    <div class="hero-content">

        <div class="hero-badge">
            <i class="fa-solid fa-bolt"></i>
            For Feet that Never Miss a Beat
        </div>

        <h1>
            Every Step, Your
            <span>Signature Style</span>
        </h1>

        <p>
            Constructed with premium materials, including
            supple leather and durable soles.
        </p>

        
            <a href="{{ url('/shop') }}" >
            <button class="shop-btn" onclick="scrollToProducts()">
                SHOP NOW
                <i class="fa-solid fa-arrow-right"></i>
            </button>
            </a>
            
       

    </div>


    <!-- Shoe Area -->

    <div class="hero-shoe-area">

        <div class="blue-circle"></div>

        <img
            src="{{ asset('images/air-flex.avif') }}"
            alt="Premium STEPX Shoe"
            class="hero-shoe"
        >

        <div class="shoe-shadow"></div>

    </div>


    

</section>


<!-- ================= TRUST BRANDS ================= -->



<!-- ================= PRODUCTS ================= -->

<section class="products-section">

    <div class="section-header">

        <div>
            <p class="small-title">OUR COLLECTION</p>

            <h2>
                Featured
                <span>Footwear</span>
            </h2>
        </div>

        <p class="section-description">
            Discover premium shoes designed for comfort,
            performance and everyday style.
        </p>

    </div>

    <div class="product-grid">

        <?php foreach ($products as $product): ?>

            <div class="product-card">

                <div class="product-image">

                    <img
                        src="<?php echo $product['image']; ?>"
                        alt="<?php echo $product['name']; ?>"
                    >

                    <button class="wishlist">
                        <i class="fa-regular fa-heart"></i>
                    </button>

                    <span class="category">
                        <?php echo $product['category']; ?>
                    </span>

                </div>

                <div class="product-info">

                    <h3>
                        <?php echo $product['name']; ?>
                    </h3>

                    <div class="rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>(5.0)</span>

                    </div>

                    <div class="product-bottom">

                        <strong>
                            Rs. <?php echo number_format($product['price']); ?>
                        </strong>

                        <button
                            class="add-cart"
                            onclick="addToCart('<?php echo $product['name']; ?>')"
                        >
                            <i class="fa-solid fa-plus"></i>
                        </button>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </div>

</section>


<!-- ================= ABOUT ================= -->

<section class="about-section" id="about">

    <div class="about-content">

        <p class="small-title">
            ABOUT STEPX
        </p>

        <h2>
            Designed for Movement.
            <span>Made for You.</span>
        </h2>

        <p>
            At STEPX, we believe every step should feel
            effortless. Our footwear combines modern
            design, premium materials and everyday comfort
            to create shoes that move with you.
        </p>

        <a href="{{ url('/about') }}" class="nav-link"> <button class="outline-btn">
            Discover Our Story
            <i class="fa-solid fa-arrow-right"></i>
        </button></a>
       

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer>

    <div class="footer-content">

        <div class="footer-brand">

            <div class="logo">
        <img src="{{ asset('images/logo.png') }}">
            </div>

            <p>
                Premium footwear for every journey.
            </p>

            <div class="socials">

                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-tiktok"></i>
                </a>

            </div>

        </div>


        <div class="footer-column">

            <h4>Shop</h4>

            <a href="#">Running</a>
            <a href="#">Casual</a>
            <a href="#">Sports</a>
            <a href="#">New Arrivals</a>

        </div>


        <div class="footer-column">

            <h4>Support</h4>

            <a href="#">Shipping</a>
            <a href="#">Returns</a>
            <a href="#">FAQ</a>
            <a href="#">Contact Us</a>

        </div>


        <div class="footer-column">

            <h4>Company</h4>

            <a href="#about">About Us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms</a>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 STEPX. All rights reserved.
        </p>

        <p>
            Premium footwear made for every step.
        </p>

    </div>

</footer>


<!-- Cart Notification -->

<div class="cart-notification" id="cartNotification">

    <i class="fa-solid fa-circle-check"></i>

    <span id="notificationText">
        Product added to cart
    </span>

</div>


<script src="main.js"></script>

</body>
</html>
?>