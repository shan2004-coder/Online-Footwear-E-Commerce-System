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


            <!-- ================= PRODUCT 1 ================= -->
           
            <div
                class="shop-product-card"
                data-category="Lifestyle"
                data-price="18300"
                data-name="STEPX Air Flex"
                data-age-group="Male"
            >

                <div class="shop-product-image">

                    <span class="product-tag">
                        NEW
                    </span>


                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/air-flex.avif') }}"
                        alt="STEPX Air Flex"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Air Flex
                    </h3>

                    <strong>
                        Rs. 18,300
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Air Flex')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= PRODUCT 2 ================= -->

            <div
                class="shop-product-card"
                data-category="Running"
                data-price="13500"
                data-name="STEPX Urban Runner"
                data-age-group="Male"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/urban-runner.avif') }}"
                        alt="STEPX Urban Runner"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Urban Runner
                    </h3>

                    <strong>
                        Rs. 13,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Urban Runner')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= PRODUCT 3 ================= -->

            <div
                class="shop-product-card"
                data-category="Sports"
                data-price="15900"
                data-name="STEPX Street Pro"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/street-pro.avif') }}"
                        alt="STEPX Street Pro"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Street Pro
                    </h3>

                    <strong>
                        Rs. 15,900
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Street Pro')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= PRODUCT 4 ================= -->

            <div
                class="shop-product-card"
                data-category="Casual"
                data-price="12000"
                data-name="STEPX Daily Move"
                data-age-group="Male"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (3).jpg') }}"
                        alt="STEPX Daily Move"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Daily Move
                    </h3>

                    <strong>
                        Rs. 12,000
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Daily Move')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= PRODUCT 5 ================= -->

            <div
                class="shop-product-card"
                data-category="Sneakers"
                data-price="22000"
                data-name="STEPX Street X"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <span class="product-tag">
                        HOT
                    </span>


                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (4).jpg') }}"
                        alt="STEPX Street X"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Street X
                    </h3>

                    <strong>
                        Rs. 22,000
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Street X')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>


            <!-- ================= PRODUCT 6 ================= -->

            <div
                class="shop-product-card"
                data-category="Formal"
                data-price="19500"
                data-name="STEPX Classic"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (1).jpg') }}"
                        alt="STEPX Classic"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Classic
                    </h3>

                    <strong>
                        Rs. 19,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Classic')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>

            <!-- ================= PRODUCT 7 ================= -->
    <div
                class="shop-product-card"
                data-category="Running"
                data-price="11600"
                data-name="STEPX Infinity Run"
                data-age-group="Male"
            >

                <div class="shop-product-image">

                    


                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (9).jpg') }}"
                        alt="STEPX Infinity Run"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Infinity Run
                    </h3>

                    <strong>
                        Rs. 11600
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (23)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Street X')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
            
<!-- ================= PRODUCT 8 ================= -->
           
<div
                class="shop-product-card"
                data-category="Formal"
                data-price="22000"
                data-name="STEPX Cloud Pace"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    


                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (6).jpg') }}"
                        alt="STEPX Cloud Pace"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Cloud Pace
                    </h3>

                    <strong>
                        Rs. 17,000
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (14)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Street X')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
           
<!-- ================= PRODUCT 9 ================= -->
       <div
                class="shop-product-card"
                data-category="Lifestyle"
                data-price="16300"
                data-name="STEPX Prime Motion"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    


                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/shoes (8).jpg') }}"
                        alt="STEPX Prime Motion"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Prime Motion
                    </h3>

                    <strong>
                        Rs. 16,300
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (33)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Prime Motion')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
                    
        
       
<!-- ================= PRODUCT 10 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Formal"
                data-price="18500"
                data-name="STEPX Rose Air"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/female (1).jpg') }}"
                        alt="STEPX Rose Air"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Rose Air
                    </h3>

                    <strong>
                        Rs. 18,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Rose Air')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
        
<!-- ================= PRODUCT 11 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Sports"
                data-price="9500"
                data-name="STEPX Mini Sprint"
                data-age-group="Kids"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/kids (3).jpg') }}"
                        alt="STEPX Mini Sprint"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Mini Sprint
                    </h3>

                    <strong>
                        Rs. 9,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       

                        <span>
                            (21)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Mini Sprint')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 12 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Casual"
                data-price="10500"
                data-name="STEPX Luna Flex"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/female (3).jpg') }}"
                        alt="STEPX Luna Flex"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Luna Flex
                    </h3>

                    <strong>
                        Rs. 10,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (20)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Luna Flex')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 13 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Lifestyle"
                data-price="11800"
                data-name="STEPX Bella Run"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/female (2).jpg') }}"
                        alt="STEPX Bella Run"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Bella Run
                    </h3>

                    <strong>
                        Rs. 11,800
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (25)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Bella Run')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 14 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Formal"
                data-price="8500"
                data-name="STEPX Little Dash"
                data-age-group="Kids"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/kids (1).jpg') }}"
                        alt="STEPX Little Dash"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Little Dash
                    </h3>

                    <strong>
                        Rs. 8,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (20)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Little Dash')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 15 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Sneakers"
                data-price="9500"
                data-name="STEPX Kiddo Flex"
                data-age-group="Kids"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/kids (2).jpg') }}"
                        alt="STEPX Kiddo Flex"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Kiddo Flex
                    </h3>

                    <strong>
                        Rs. 9,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                       

                        <span>
                            (28)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Kiddo Flex')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 16 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Running"
                data-price="6500"
                data-name="STEPX Tiny Runner"
                data-age-group="Kids"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/kids (5).jpg') }}"
                        alt="STEPX Tiny Runner"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Tiny Runner
                    </h3>

                    <strong>
                        Rs. 6,500
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>

                        <span>
                            (19)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Tiny Runner')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 17 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Formal"
                data-price="11200"
                data-name="STEPX Aura Move"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/female (4).jpg') }}"
                        alt="STEPX Aura Move"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Aura Move
                    </h3>

                    <strong>
                        Rs. 11,200
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                 

                        <span>
                            (11)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Aura Move')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 18 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Sneakers"
                data-price="12900"
                data-name="STEPX Velvet Pace"
                data-age-group="Female"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/female (5).jpg') }}"
                        alt="STEPX Velvet Pace"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Velvet Pace
                    </h3>

                    <strong>
                        Rs. 12,900
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        

                        <span>
                            (18)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Velvet Pace')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            </div>
<!-- ================= PRODUCT 19 ================= -->
 
            <div
                class="shop-product-card"
                data-category="Formal"
                data-price="8900"
                data-name="STEPX Junior Boost"
                data-age-group="Kids"
            >

                <div class="shop-product-image">

                    <button class="wishlist-btn">

                        <i class="fa-regular fa-heart"></i>

                    </button>


                    <img
                        src="{{ asset('images/kids (4).jpg') }}"
                        alt="STEPX Junior Boost"
                    >

                </div>


                <div class="shop-product-info">

                    <h3>
                        STEPX Junior Boost
                    </h3>

                    <strong>
                        Rs. 8,900
                    </strong>


                    <div class="product-rating">

                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                      

                        <span>
                            (16)
                        </span>

                    </div>


                    <div class="product-actions">

                        <button
                            class="add-cart-btn"
                            onclick="addShopCart('STEPX Junior Boost')"
                        >
                            Add to Cart
                        </button>


                        <button class="small-wishlist">

                            <i class="fa-regular fa-heart"></i>

                        </button>

                    </div>

                </div>

            
  
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
</html>