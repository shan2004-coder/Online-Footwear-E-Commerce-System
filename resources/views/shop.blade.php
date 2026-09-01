<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>STEPX | Shop</title>

    <link rel="stylesheet" href="{{ asset('shop.css') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>

<!-- =====================================================
     HEADER
===================================================== -->

<header class="shop-header">

    <!-- Logo -->
    <div class="shop-logo">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="STEPX Logo">
        </a>
    </div>


    <!-- Navigation -->
    <nav class="shop-navbar">

        <a href="/">
            Home
        </a>

        <a href="{{ url('/shop') }}" class="active">
            Shop
        </a>

        <a href="{{ url('/about') }}" class="nav-link">About</a>

        <a href="#contact">
            Contact
        </a>

    </nav>


    <!-- Header Icons -->
    <div class="shop-actions">

        <button aria-label="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </button>

        <button aria-label="Account">
            <i class="fa-regular fa-circle-user"></i>
        </button>

        <button aria-label="Wishlist">
            <i class="fa-regular fa-heart"></i>
        </button>

        <button
            class="cart-button"
            onclick="openCart()"
            aria-label="Cart"
        >

            <i class="fa-solid fa-cart-shopping"></i>

            <span id="cartCount">
                0
            </span>

        </button>


        <button
            class="mobile-menu"
            onclick="toggleShopMenu()"
            aria-label="Menu"
        >

            <i class="fa-solid fa-bars"></i>

        </button>

    </div>

</header>


<!-- =====================================================
     SHOP HERO
===================================================== -->

<section class="shop-hero">

    <div class="hero-text">

        <h1>
            STEP INTO STYLE
        </h1>

        <p>
            Discover premium footwear made for every step.
        </p>

    </div>


    <div class="hero-image">

        <img
            src="{{ asset('images/air-flex.avif') }}"
            alt="STEPX Shoes"
        >

    </div>

</section>


<!-- =====================================================
     SHOP MAIN
===================================================== -->

<section class="shop-container">


    <!-- =================================================
         SIDEBAR
    ================================================== -->

    <aside class="shop-sidebar">


        <!-- ================= CATEGORIES ================= -->

        <div class="filter-box">

            <h3>
                Categories
            </h3>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Running"
                    class="category-filter"
                >

                <span>
                    Running
                </span>

                <small>
                    (21)
                </small>

            </label>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Lifestyle"
                    class="category-filter"
                >

                <span>
                    Lifestyle
                </span>

                <small>
                    (25)
                </small>

            </label>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Sports"
                    class="category-filter"
                >

                <span>
                    Sports
                </span>

                <small>
                    (25)
                </small>

            </label>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Casual"
                    class="category-filter"
                >

                <span>
                    Casual
                </span>

                <small>
                    (25)
                </small>

            </label>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Sneakers"
                    class="category-filter"
                >

                <span>
                    Sneakers
                </span>

                <small>
                    (25)
                </small>

            </label>


            <label class="category-option">

                <input
                    type="checkbox"
                    value="Formal"
                    class="category-filter"
                >

                <span>
                    Formal
                </span>

                <small>
                    (25)
                </small>

            </label>
              

        </div>

        <!-- ================= AGE GROUP CATEGORY ================= -->

<div class="filter-age">

    <h5>
        Age Group
    </h5>

    <label class="category-group-option">

        <input
            type="radio"
            value="Male"
            class="age-filter"
            name="ageGroup"
        >

        <span>
            Male
        </span>

    </label>


    <label class="category-group-option">

        <input
            type="radio"
            value="Female"
            class="age-filter"
            name="ageGroup"
        >

        <span>
            Female
        </span>

    </label>


    <label class="category-group-option">

        <input
            type="radio"
            value="Kids"
            class="age-filter"
            name="ageGroup"
        >

        <span>
            Kids
        </span>

    </label>


    <!-- Clear Age Filter -->

    <label class="category-group-option">

        <input
            type="radio"
            name="ageGroup"
            value=""
            class="age-filter"
            checked
        >

        <span>
            All
        </span>

    </label>

</div>
        <!-- ================= PRICE FILTER ================= -->

        <div class="price-filter">

            <h3>
                Filter By Price
            </h3>


            <input
                type="range"
                id="priceRange"
                min="5000"
                max="50000"
                value="50000"
                step="500"
            >


            <div class="price-values">

                <span>
                    Rs. 5,000
                </span>

                <span id="maxPrice">
                    Rs. 50,000
                </span>

            </div>

        </div>

    </aside>


    <!-- =================================================
         PRODUCTS AREA
    ================================================== -->

    <main class="products-area">


        <!-- ================= PRODUCTS HEADER ================= -->

        <div class="products-heading">

            <div>

                <p class=line-for-line>
                    STEPX COLLECTION
                </p>

                

            </div>


            <!-- Sort -->

            <div class="sort-area">

                <label for="sortProducts">
                    Sort By
                </label>

                <select id="sortProducts">

                    <option value="default">
                        Featured
                    </option>

                    <option value="low">
                        Price Low - High
                    </option>

                    <option value="high">
                        Price High - Low
                    </option>

                    <option value="name">
                        Name A - Z
                    </option>

                </select>

            </div>

        </div>


        <!-- =================================================
             PRODUCT GRID
        ================================================== -->

        <div
            class="shop-product-grid"
            id="productGrid"
        >



            @forelse ($products as $product)

                <div
                    class="shop-product-card"
                    data-category="{{ $product->category }}"
                    data-price="{{ $product->price }}"
                    data-name="{{ $product->name }}"
                    data-age-group="{{ $product->age_group }}"
                >

                    <div class="shop-product-image">

                        @if ($product->tag)
                            <span class="product-tag">
                                {{ strtoupper($product->tag) }}
                            </span>
                        @endif

                        <button class="wishlist-btn">
                            <i class="fa-regular fa-heart"></i>
                        </button>

                        <a href="{{ route('product', $product) }}">
                            <img
                                src="{{ $product->image_url }}"
                                alt="{{ $product->name }}"
                                onerror="this.src='{{ asset('images/logo.png') }}'"
                            >
                        </a>

                    </div>

                    <div class="shop-product-info">

                        <h3>
                            <a href="{{ route('product', $product) }}" style="color: inherit; text-decoration: none;">
                                {{ $product->name }}
                            </a>
                        </h3>

                        <strong>
                            Rs. {{ number_format($product->price, 0) }}
                        </strong>

                        <div class="product-rating">

                            @for ($i = 1; $i <= 5; $i++)
                                <i class="fa-{{ $i <= $product->rating ? 'solid' : 'regular' }} fa-star"></i>
                            @endfor

                            <span>
                                ({{ $product->reviews }})
                            </span>

                        </div>

                        <div class="product-actions">

                            <button
                                class="add-cart-btn"
                                onclick="addShopCart('{{ $product->name }}')"
                            >
                                Add to Cart
                            </button>

                            <button class="small-wishlist">
                                <i class="fa-regular fa-heart"></i>
                            </button>

                        </div>

                    </div>

                </div>

            @empty

                <p style="padding: 60px 0; text-align: center; width: 100%;">
                    No products available yet.
                </p>

            @endforelse

        </div>

</main> 
</section>


<!-- =====================================================
     SERVICE FEATURES
===================================================== -->

<section class="service-section">


    <div class="service-item">

        <div class="service-icon">
            <i class="fa-solid fa-truck-fast"></i>
        </div>

        <div>

            <h4>
                Fast Delivery
            </h4>

            <p>
                Worldwide delivery within 3-5 days
            </p>

        </div>

    </div>


    <div class="service-item">

        <div class="service-icon">
            <i class="fa-solid fa-credit-card"></i>
        </div>

        <div>

            <h4>
                Secure Payment
            </h4>

            <p>
                100% secure payment
            </p>

        </div>

    </div>


    <div class="service-item">

        <div class="service-icon">
            <i class="fa-solid fa-headset"></i>
        </div>

        <div>

            <h4>
                Customer Support
            </h4>

            <p>
                Dedicated support 7 days a week
            </p>

        </div>

    </div>


    <div class="service-item">

        <div class="service-icon">
            <i class="fa-solid fa-lock"></i>
        </div>

        <div>

            <h4>
                100% Authentic
            </h4>

            <p>
                Original products guaranteed
            </p>

        </div>

    </div>

</section>


<!-- =====================================================
     CART NOTIFICATION
===================================================== -->

<div
    class="shop-notification"
    id="shopNotification"
>

    <i class="fa-solid fa-circle-check"></i>

    <span>
        Product added to cart
    </span>

</div>


<script src="{{ asset('shop.js') }}"></script>

</body>
