<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About Us | STEPX</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- About CSS -->
    <link rel="stylesheet" href="{{ asset('about.css') }}">
</head>

<body>

    <!-- ================= HEADER ================= -->

    <header class="about-header">

        <div class="header-container">

            <!-- Logo -->
           <div class="logo">
           <img src="{{ asset('images/logo.png') }}">
           </div>

            <!-- Navigation -->
            <nav class="navbar">

                <a href="{{ url('/') }}">Home</a>

                <a href="{{ url('/shop') }}">Shop</a>

                <a href="{{ url('/about') }}" class="active">About</a>

                <a href="{{ url('/contact') }}">Contact</a>

            </nav>

            <!-- Header Icons -->
            <div class="header-actions">

                <a href="#" class="header-icon">
                    ♡
                </a>

                

            </div>

        </div>

    </header>


    <!-- ================= HERO ================= -->

    <section class="about-hero">

        <div class="hero-overlay"></div>

        <div class="hero-content">

            <p class="hero-small">ABOUT STEPX</p>

            <h1>
                STEP INTO<br>
                <span>YOUR STYLE.</span>
            </h1>

            <p class="hero-description">
                Discover footwear designed to move with you,
                built for comfort, confidence and everyday style.
            </p>

            <a href="{{ url('/shop') }}" class="hero-btn">
                EXPLORE COLLECTION
                <span>→</span>
            </a>

        </div>

        <div class="hero-number">
            <span>01</span>
            <div></div>
            <span>04</span>
        </div>

    </section>


    <!-- ================= INTRO ================= -->

    <section class="about-intro">

        <div class="intro-container">

            <div class="intro-label">
                <span></span>
                WHO WE ARE
            </div>

            <div class="intro-content">

                <div class="intro-title">

                    <h2>
                        MORE THAN<br>
                        JUST <span>SHOES.</span>
                    </h2>

                </div>

                <div class="intro-text">

                    <p>
                        STEPX is a modern footwear brand created for people
                        who believe that great style should never come at
                        the cost of comfort.
                    </p>

                    <p>
                        From everyday walks to active lifestyles, our shoes
                        are designed to give you the perfect balance of
                        comfort, durability and contemporary style.
                    </p>

                    <p>
                        We carefully select our designs and materials to
                        create footwear that looks good, feels good and
                        keeps you moving.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= FEATURE IMAGE ================= -->

    <section class="about-showcase">

        <div class="showcase-image">

            <img
                src="{{ asset('images/about-shoes.jpg') }}"
                alt="STEPX Shoes"
            >

            <div class="image-overlay"></div>

            <div class="showcase-text">

                <span>STEPX COLLECTION</span>

                <h2>
                    DESIGNED<br>
                    TO <i>MOVE.</i>
                </h2>

            </div>

        </div>

    </section>


    <!-- ================= WHY STEPX ================= -->

    <section class="why-section">

        <div class="why-container">

            <div class="section-heading">

                <div class="heading-label">
                    <span></span>
                    WHY STEPX
                </div>

                <h2>
                    BUILT FOR<br>
                    <span>EVERY STEP.</span>
                </h2>

                <p>
                    We focus on the things that matter most —
                    comfort, quality and style.
                </p>

            </div>


            <div class="feature-grid">

                <!-- Feature 01 -->
                <div class="feature-card">

                    <div class="feature-number">
                        01
                    </div>

                    <div class="feature-icon">
                        ◉
                    </div>

                    <h3>
                        ALL-DAY<br>
                        COMFORT
                    </h3>

                    <p>
                        Lightweight designs and comfortable
                        cushioning made for everyday movement.
                    </p>

                </div>


                <!-- Feature 02 -->
                <div class="feature-card">

                    <div class="feature-number">
                        02
                    </div>

                    <div class="feature-icon">
                        ◆
                    </div>

                    <h3>
                        MODERN<br>
                        STYLE
                    </h3>

                    <p>
                        Fresh designs that help you look confident
                        wherever your day takes you.
                    </p>

                </div>


                <!-- Feature 03 -->
                <div class="feature-card">

                    <div class="feature-number">
                        03
                    </div>

                    <div class="feature-icon">
                        ◇
                    </div>

                    <h3>
                        QUALITY<br>
                        MATERIALS
                    </h3>

                    <p>
                        Carefully selected materials designed to
                        provide durability and lasting performance.
                    </p>

                </div>


                <!-- Feature 04 -->
                <div class="feature-card">

                    <div class="feature-number">
                        04
                    </div>

                    <div class="feature-icon">
                        →
                    </div>

                    <h3>
                        MADE TO<br>
                        MOVE
                    </h3>

                    <p>
                        Footwear created to keep up with your
                        everyday lifestyle and active moments.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= STATS ================= -->

    <section class="stats-section">

        <div class="stats-container">

            <div class="stat-item">

                <h2>10<span>+</span></h2>

                <p>
                    SHOE DESIGNS
                </p>

            </div>


            <div class="stat-line"></div>


            <div class="stat-item">

                <h2>100<span>%</span></h2>

                <p>
                    STYLE & COMFORT
                </p>

            </div>


            <div class="stat-line"></div>


            <div class="stat-item">

                <h2>24<span>/7</span></h2>

                <p>
                    CUSTOMER FOCUS
                </p>

            </div>


            <div class="stat-line"></div>


            <div class="stat-item">

                <h2>01</h2>

                <p>
                    STEP AHEAD
                </p>

            </div>

        </div>

    </section>


    <!-- ================= MISSION ================= -->

    <section class="mission-section">

        <div class="mission-container">

            <div class="mission-left">

                <div class="heading-label light">
                    <span></span>
                    OUR MISSION
                </div>

                <h2>
                    EVERY STEP<br>
                    <span>MATTERS.</span>
                </h2>

            </div>


            <div class="mission-right">

                <p class="mission-big">
                    We believe the right pair of shoes
                    can change the way you move,
                    feel and experience your day.
                </p>

                <p>
                    That's why STEPX is committed to creating
                    footwear that brings together practical
                    comfort and modern design.
                </p>

            </div>

        </div>

    </section>


    <!-- ================= CTA ================= -->

    <section class="about-cta">

        <div class="cta-content">

            <p>
                READY FOR YOUR NEXT STEP?
            </p>

            <h2>
                FIND YOUR<br>
                <span>STEPX.</span>
            </h2>

            <a href="{{ url('/shop') }}" class="cta-button">
                SHOP NOW
                <span>→</span>
            </a>

        </div>

    </section>


    <!-- ================= FOOTER ================= -->

    <footer class="about-footer">

        <div class="footer-container">

            <div class="footer-brand">

                <a href="{{ url('/') }}" class="logo footer-logo">
                    <span>STEP</span><b>X</b>
                </a>

                <p>
                    Step into comfort.<br>
                    Step into style.
                </p>

            </div>


            <div class="footer-links">

                <h4>QUICK LINKS</h4>

                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/shop') }}">Shop</a>
                <a href="{{ url('/about') }}">About</a>
                <a href="{{ url('/contact') }}">Contact</a>

            </div>


            <div class="footer-links">

                <h4>HELP</h4>

                <a href="#">Shipping</a>
                <a href="#">Returns</a>
                <a href="#">Size Guide</a>
                <a href="#">FAQs</a>

            </div>


            <div class="footer-newsletter">

                <h4>STAY IN STEP</h4>

                <p>
                    Get updates about new arrivals
                    and exclusive offers.
                </p>

                <div class="email-box">

                    <input
                        type="email"
                        placeholder="Your email address"
                    >

                    <button>
                        →
                    </button>

                </div>

            </div>

        </div>


        <div class="footer-bottom">

            <p>
                © {{ date('Y') }} STEPX. All Rights Reserved.
            </p>

            <p>
                STEP INTO YOUR STYLE.
            </p>

        </div>

    </footer>

</body>
</html>