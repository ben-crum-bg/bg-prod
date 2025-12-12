<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>About Us</title>
    <meta name="author" content="Benjamin Crum">

    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../pages-css/about-us.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/android-chrome-192x192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../assets/apple-touch-icon.png">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg">

    <script defer src="../navBar.js"></script>
</head>

<body>
    <?php 
    $page = 'about-us';
    require('../includes/header.php');
    ?>
    <main>
        <section class="intro" id="first-content">
            <div class="intro__content">
                <h2 class="intro__title">About Us</h2>
                <p class="intro__subheading">We're a team of talented individuals delivering impactful brand solutions.
                </p>
                <p class="intro__text">Based in sunny Southern California, Brightglass Solutions was founded in 2025
                    with a
                    clear mission: to empower exceptional businesses and help them shine in a crowded marketplace.</p>
            </div>
            <img class="intro__img" src="../assets/aboutus-page/aboutus-hero.png" alt="">
        </section>

        <!-- <section class="our-staff">
            <h2 class="visually-hidden">Who we are</h2>
            <div class="our-staff__card">
                <div class="our-staff__top">
                    <img src="../assets/staff-image-placeholder.png" alt="">
                    <div class="our-staff__details">
                        <h3>Full Name</h3>
                        <p>Job Title</p>
                    </div>
                </div>
                <p class="our-staff__text">
                    Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                </p>
            </div>

            <div class="our-staff__card">
                <div class="our-staff__top">
                    <img src="../assets/staff-image-placeholder.png" alt="">
                    <div class="our-staff__details">
                        <h3>Full Name</h3>
                        <p>Job Title</p>
                    </div>
                </div>
                <p class="our-staff__text">
                    Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                </p>
            </div>

            <div class="our-staff__card">
                <div class="our-staff__top">
                    <img src="../assets/staff-image-placeholder.png" alt="">
                    <div class="our-staff__details">
                        <h3>Full Name</h3>
                        <p>Job Title</p>
                    </div>
                </div>
                <p class="our-staff__text">
                    Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                </p>
            </div>

            <div class="our-staff__card">
                <div class="our-staff__top">
                    <img src="../assets/staff-image-placeholder.png" alt="">
                    <div class="our-staff__details">
                        <h3>Full Name</h3>
                        <p>Job Title</p>
                    </div>
                </div>
                <p class="our-staff__text">
                    Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                </p>
            </div>

            <div class="our-staff__card">
                <div class="our-staff__top">
                    <img src="../assets/staff-image-placeholder.png" alt="">
                    <div class="our-staff__details">
                        <h3>Full Name</h3>
                        <p>Job Title</p>
                    </div>
                </div>
                <p class="our-staff__text">
                    Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                </p>
            </div>
        </section> -->
    </main>
    <?php
    require('../includes/footer.php');
    ?>
    <div class="backdrop-filter" id="backdrop"></div>
</body>

</html>