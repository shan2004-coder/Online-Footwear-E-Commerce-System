<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Details | ShoeSmart</title>

    <link rel="stylesheet" href="{{ asset('product.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

     <link rel="stylesheet" href="{{ asset('css/product.css') }}">      
</head>

<body>

<!-- ================= TOP NAVIGATION ================= -->

<header class="navbar">

    <div class="logo">
        <a href="{{ url('/') }}">LOGO</a>
    </div>

    <nav class="main-menu">
        <a href="{{ url('/shop') }}">MEN</a>
        <a href="{{ url('/shop') }}">WOMEN</a>
        <a href="{{ url('/shop') }}">KIDS</a>
    </nav>

    <nav class="right-menu">
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>

        <button class="nav-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <a href="#" class="nav-icon">
            <i class="fa-regular fa-user"></i>
        </a>

        <a href="#" class="nav-icon">
            <i class="fa-regular fa-heart"></i>
        </a>

        <a href="#" class="nav-icon cart-icon">
            <i class="fa-solid fa-cart-shopping"></i>
            <span class="cart-count">0</span>
        </a>
    </nav>

</header>


<!-- ================= PRODUCT DETAILS ================= -->

<main class="product-container">

    <!-- LEFT SIDE -->
    <section class="product-gallery">

        <div class="main-image-box">

            <button class="image-arrow left-arrow">
                <i class="fa-solid fa-chevron-left"></i>
            </button>

            <img id="mainProductImage"
                 src="{{ asset('images/product1.jpg') }}"
                 alt="Product">

            <button class="image-arrow right-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

        </div>


        <!-- THUMBNAILS -->

        <div class="thumbnail-container">

            <div class="thumbnail active">
                <img src="{{ asset('images/product1.jpg') }}"
                     onclick="changeImage(this)">
            </div>

            <div class="thumbnail">
                <img src="{{ asset('images/product2.jpg') }}"
                     onclick="changeImage(this)">
            </div>

            <div class="thumbnail">
                <img src="{{ asset('images/product3.jpg') }}"
                     onclick="changeImage(this)">
            </div>

        </div>

    </section>


    <!-- RIGHT SIDE -->

    <section class="product-info">

        <span class="product-category">Product</span>

        <h1>STEPX AIR FLEX</h1>

        <div class="product-price">
            LKR 12999.99
        </div>


        <!-- Rating -->

        <div class="rating">

            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-regular fa-star"></i>

        </div>


        <!-- Description -->

        <div class="description">

            <p>
                About that product; your useful and very important
                product. Life simply by product you can use for every
                time. About that product yourself and very important
                Life simply by product you can use for every times.
            </p>

        </div>


        <!-- COLOR -->

        <div class="option-section">

            <label>COLOR</label>

            <div class="color-options">

                <button class="color black active-color"></button>
                <button class="color red"></button>
                <button class="color blue"></button>
                <button class="color green"></button>
                <button class="color yellow"></button>

            </div>

        </div>


        <!-- QUANTITY -->

        <div class="option-section quantity-section">

            <label>QUANTITY</label>

            <div class="quantity-control">

                <button onclick="decreaseQuantity()">
                    −
                </button>

                <input type="text"
                       id="quantity"
                       value="1"
                       readonly>

                <button onclick="increaseQuantity()">
                    +
                </button>

            </div>

        </div>


        <!-- BUTTONS -->

        <div class="product-buttons">

            <button class="add-cart-btn" onclick="addToCart()">
                ADD TO CART
            </button>

            <button class="buy-now-btn" onclick="buyNow()">
                BUY NOW
            </button>

        </div>

    </section>

</main>


<!-- ================= JAVASCRIPT ================= -->

<script>

    // Change product image
    function changeImage(image) {

        document.getElementById("mainProductImage").src = image.src;

        document.querySelectorAll(".thumbnail").forEach(function(item) {
            item.classList.remove("active");
        });

        image.parentElement.classList.add("active");
    }


    // Increase quantity
    function increaseQuantity() {

        let quantity = document.getElementById("quantity");

        let current = parseInt(quantity.value);

        quantity.value = current + 1;
    }


    // Decrease quantity
    function decreaseQuantity() {

        let quantity = document.getElementById("quantity");

        let current = parseInt(quantity.value);

        if (current > 1) {
            quantity.value = current - 1;
        }
    }


    // Add to cart
    function addToCart() {

        let quantity = document.getElementById("quantity").value;

        alert("Product added to cart! Quantity: " + quantity);
    }


    // Buy now
    function buyNow() {

        let quantity = document.getElementById("quantity").value;

        alert("Proceeding to checkout. Quantity: " + quantity);
    }

</script>

</body>
</html>