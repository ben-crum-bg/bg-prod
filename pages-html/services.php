<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>Services</title>
    <meta name="author" content="Benjamin Crum">


    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../pages-css/services.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/android-chrome-192x192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../assets/apple-touch-icon.png">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg">

    <script defer src="../navBar.js"></script>
</head>

<body>
    <?php 
    $page = 'services';
    require('../includes/header.php');
    ?>
    <main>
        <!-- Hero Image -->
        <section class="img-hero-container">
            <div class="img-hero" id="first-content">
                <!-- <img class="img-hero__img" src="/assets/services-hero.png" alt=""> -->
                <h2 class="img-hero__title">Stand Out With <span class="accent-text-yellow">A Brand They can’t
                        Forget</span><span class="accent-text-purple">.</span></h2>
                <p class="img-hero__text">We craft memorable brand experiences that connect with your audience. From
                    Brand imagery to web visibility, we'll help you build a brand that stands out.</p>
            </div>
        </section>

        <!-- Service callout -->
        <section class="service-callout-container">
            <div class="service-callout">
                <h2 class="service-callout__title">Request one service <span class="accent-text-purple">OR</span> get
                    them all<span class="accent-text-purple">!</span></h2>
            </div>
        </section>

        <!-- Services Cards Bubbles -->
        <section>
            <div class="services-cards--bubbles">
                <div>
                    <div class="card">
                        <div class="card__left">
                            <h3 class="card__title">Web Development</h3>
                            <p class="card__text">grow your business with a custom website from our expert designers.
                            </p>
                            <a class="card__link" href="../pages-html/contact-us.php">Reach Out</a>
                        </div>
                        <div class="card__right">
                            <img class="card__img" src="../assets//services-page/laptop.png" alt="">
                        </div>
                    </div>
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="99" height="99" viewBox="0 0 99 99" fill="none">
                            <rect y="56" width="14" height="99" rx="7" transform="rotate(-90 0 56)" fill="#D60F84" />
                            <rect x="42" width="14" height="99" rx="7" fill="#D60F84" />
                            <rect x="44" y="2" width="10" height="95" rx="5" fill="#D60F84" />
                            <rect x="2" y="54" width="10" height="95" rx="5" transform="rotate(-90 2 54)"
                                fill="#D60F84" />
                        </svg>
                    </div>
                </div>

                <div>
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="99" height="99" viewBox="0 0 99 99" fill="none">
                            <rect y="56" width="14" height="99" rx="7" transform="rotate(-90 0 56)" fill="#D60F84" />
                            <rect x="42" width="14" height="99" rx="7" fill="#D60F84" />
                            <rect x="44" y="2" width="10" height="95" rx="5" fill="#D60F84" />
                            <rect x="2" y="54" width="10" height="95" rx="5" transform="rotate(-90 2 54)"
                                fill="#D60F84" />
                        </svg>
                    </div>
                    <div class="card card--reversed">
                        <div class="card__left">
                            <h3 class="card__title">Photography</h3>
                            <p class="card__text">Let our photographers capture your brand's essence. From product shots
                                to lifestyle imagery, we deliver high-quality visuals.
                            </p>
                            <a class="card__link" href="../pages-html/contact-us.php">Reach Out</a>
                        </div>
                        <div class="card__right">
                            <img class="card__img" src="../assets/services-page/camera.jpg" alt="">
                        </div>
                    </div>

                </div>

                <div>
                    <div class="card">
                        <div class="card__left">
                            <h3 class="card__title">Branded Merchandise</h3>
                            <p class="card__text">From mugs to t-shirts, we'll help you create memorable products that
                                resonate with your audience.
                            </p>
                            <a class="card__link" href="../pages-html/contact-us.php">Reach Out</a>
                        </div>
                        <div class="card__right">
                            <img class="card__img" src="../assets/services-page/merch.jpg" alt="">
                        </div>
                    </div>
                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="99" height="99" viewBox="0 0 99 99" fill="none">
                            <rect y="56" width="14" height="99" rx="7" transform="rotate(-90 0 56)" fill="#D60F84" />
                            <rect x="42" width="14" height="99" rx="7" fill="#D60F84" />
                            <rect x="44" y="2" width="10" height="95" rx="5" fill="#D60F84" />
                            <rect x="2" y="54" width="10" height="95" rx="5" transform="rotate(-90 2 54)"
                                fill="#D60F84" />
                        </svg>
                    </div>
                </div>

                <div>

                    <div class="svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="99" height="99" viewBox="0 0 99 99" fill="none">
                            <rect y="56" width="14" height="99" rx="7" transform="rotate(-90 0 56)" fill="#D60F84" />
                            <rect x="42" width="14" height="99" rx="7" fill="#D60F84" />
                            <rect x="44" y="2" width="10" height="95" rx="5" fill="#D60F84" />
                            <rect x="2" y="54" width="10" height="95" rx="5" transform="rotate(-90 2 54)"
                                fill="#D60F84" />
                        </svg>
                    </div>
                    <div class="card card--reversed">
                        <div class="card__left">
                            <h3 class="card__title">Copywriting</h3>
                            <p class="card__text">Let us craft compelling copy that captures attention and drives action
                                for your brand.
                            </p>
                            <a class="card__link" href="../pages-html/contact-us.php">Reach Out</a>
                        </div>
                        <div class="card__right">
                            <img class="card__img" src="../assets/services-page/personwlaptop.jpg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Hero 3 -->
        <section class="hero-three-container">
            <div class="hero-three">
                <img src="../assets/services-page/diagramcollaboration.png" alt="">
                <div>
                    <h2>Work with us to get everything your brand needs.</h2>
                    <p>From custom web applications to branded swag, we provide end-to-end services, ensuring your brand
                        speaks with one voice.</p>
                    <a href="../pages-html/contact-us.php">Reach Out</a>
                </div>
            </div>
        </section>

    </main>
    <?php
    require('../includes/footer.php');
    ?>
    <div class="backdrop-filter" id="backdrop"></div>
</body>

</html>