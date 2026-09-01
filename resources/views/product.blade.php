<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->name }} | STEPX</title>

    <link rel="stylesheet" href="{{ asset('product.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
</head>

<body>

<!-- ================= TOP NAVIGATION ================= -->

<header class="navbar">

    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="STEPX Logo">
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
                 src="{{ $product->image_url }}"
                 alt="{{ $product->name }}"
                 onerror="this.src='{{ asset('images/logo.png') }}'">

            <button class="image-arrow right-arrow">
                <i class="fa-solid fa-chevron-right"></i>
            </button>

        </div>


        <!-- THUMBNAILS -->

        <div class="thumbnail-container">

            <div class="thumbnail active">
                <img src="{{ $product->image_url }}"
                     onclick="changeImage(this)"
                     onerror="this.src='{{ asset('images/logo.png') }}'">
            </div>

        </div>

    </section>


    <!-- RIGHT SIDE -->

    <section class="product-info">

        <span class="product-category">{{ $product->category }}</span>

        <h1>{{ strtoupper($product->name) }}</h1>

        <div class="product-price">
            Rs. {{ number_format($product->price, 2) }}
        </div>


        <!-- Rating -->

        <div class="rating">

            @for ($i = 1; $i <= 5; $i++)
                <i class="fa-{{ $i <= $product->rating ? 'solid' : 'regular' }} fa-star"></i>
            @endfor

            <span>({{ $product->reviews }})</span>

        </div>


        <!-- Description -->

        <div class="description">

            <p>
                {{ $product->description ?? 'No description available for this product yet.' }}
            </p>

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

    const productName = @json($product->name);

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

        alert(productName + " added to cart! Quantity: " + quantity);
    }


    // Buy now
    function buyNow() {

        let quantity = document.getElementById("quantity").value;

        alert("Proceeding to checkout with " + productName + ". Quantity: " + quantity);
    }

</script>

</body>
</html>
