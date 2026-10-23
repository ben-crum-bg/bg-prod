<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>About Us</title>
    <meta name="author" content="Benjamin Crum">

    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../pages-css/service.css">

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
        <section class="service__intro">
            <h2 class="service__intro__header">Merch</h2>
            <p class="service__intro__body">Grow your business with a custom website from our expert designers. grow your business with a custom website from our expert designers. grow your business with a custom website from our expert designers.</p>
        </section>
        <section class="service__employee">
            <img src="../assets/aboutus-page/aboutus-employeeCard.jpg" alt="" class="service__employee__img">
            <div class="service__employee__content">
                <p class="service__employee__subheader">Job Title</p>
                <h2 class="service__employee__header">Full Name</h2>
                <p class="service__employee__body">Info: Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem  Lorem Ipsum Lorem </p>
                <button class="service__employee__button">Porfolio</button>
            </div>
        </section>
        <section class="service__pricing">
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
            <details class="service__pricing__details">
                <summary class="service__pricing__summary">UI/UX Design</summary>
                <div>
                    <p>Lorem, ipsum dolor.</p>
                </div>
            </details>
        </section>
        <section class="service__packages">
            <h2 class="service__packages__header">Packages</h2>
            <p class="service__packages__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae!</p>
            <div class="service__packages__cards">
                <div>
                    <table>
                        <caption>Basic Package</caption>
                        <thead>
                            <tr>
                                <td class="column-left">Service</td>
                                <td class="column-right">Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">Total:</td>
                                <td class="column-right">$297</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <table>
                        <caption>Basic Package</caption>
                        <thead>
                            <tr>
                                <td class="column-left">Service</td>
                                <td class="column-right">Price</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">UI/UX Design</td>
                                <td class="column-right">$99</td>
                            </tr>
                            <tr>
                                <td class="column-left">Total:</td>
                                <td class="column-right">$297</td>
                            </tr> 
                        </tbody>
                    </table>
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