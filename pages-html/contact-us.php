<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />

    <title>Contact Us</title>
    <meta name="author" content="Benjamin Crum">

    <link rel="stylesheet" type="text/css" href="../style.css" />
    <link rel="stylesheet" type="text/css" href="../pages-css/contact-us.css">

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/favicons/android-chrome-512x512.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/favicons/android-chrome-192x192.png">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="../assets/apple-touch-icon.png">
    <link rel="icon" type="image/svg+xml" href="../assets/favicon.svg">

    <script defer src="../navBar.js"></script>
    <script defer src="../validation.js"></script>
</head>

<body>
    <?php 
    $page = 'contact-us';
    require('../includes/header.php');
    ?>
    <main>
        <div class="contact-us-container" id="first-content">
            <div class="contact-us">
                <div class="callout-title">
                    <h2><span class="accent-text-purple">Let's talk</span> about your business goals and how we can
                        help<span class="accent-text-purple">.</span>
                    </h2>
                </div>

                <template id="form-error-template">
                    <div class="form-error">
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
                            <path
                                d="M14.5 1.8125C17.8649 1.8125 21.092 3.14921 23.4714 5.52858C25.8508 7.90795 27.1875 11.1351 27.1875 14.5C27.1875 17.8649 25.8508 21.092 23.4714 23.4714C21.092 25.8508 17.8649 27.1875 14.5 27.1875C11.1351 27.1875 7.90795 25.8508 5.52858 23.4714C3.14921 21.092 1.8125 17.8649 1.8125 14.5C1.8125 11.1351 3.14921 7.90795 5.52858 5.52858C7.90795 3.14921 11.1351 1.8125 14.5 1.8125ZM14.5 25.375C17.3842 25.375 20.1503 24.2292 22.1898 22.1898C24.2292 20.1503 25.375 17.3842 25.375 14.5C25.375 11.6158 24.2292 8.84967 22.1898 6.81021C20.1503 4.77076 17.3842 3.625 14.5 3.625C11.6158 3.625 8.84967 4.77076 6.81021 6.81021C4.77076 8.84967 3.625 11.6158 3.625 14.5C3.625 17.3842 4.77076 20.1503 6.81021 22.1898C8.84967 24.2292 11.6158 25.375 14.5 25.375ZM15.8594 20.3906C15.8594 20.7512 15.7162 21.0969 15.4612 21.3518C15.2063 21.6068 14.8605 21.75 14.5 21.75C14.1395 21.75 13.7937 21.6068 13.5388 21.3518C13.2838 21.0969 13.1406 20.7512 13.1406 20.3906C13.1406 20.0301 13.2838 19.6843 13.5388 19.4294C13.7937 19.1745 14.1395 19.0312 14.5 19.0312C14.8605 19.0312 15.2063 19.1745 15.4612 19.4294C15.7162 19.6843 15.8594 20.0301 15.8594 20.3906ZM14.5 7.25C14.7404 7.25 14.9709 7.34548 15.1408 7.51543C15.3108 7.68539 15.4062 7.9159 15.4062 8.15625V16.3125C15.4062 16.5529 15.3108 16.7834 15.1408 16.9533C14.9709 17.1233 14.7404 17.2188 14.5 17.2188C14.2596 17.2188 14.0291 17.1233 13.8592 16.9533C13.6892 16.7834 13.5938 16.5529 13.5938 16.3125V8.15625C13.5938 7.9159 13.6892 7.68539 13.8592 7.51543C14.0291 7.34548 14.2596 7.25 14.5 7.25Z"
                                fill="#FF0000" />
                        </svg>
                        <p>Error</p>
                    </div>
                </template>
                <form action="submit" method="POST" action="process.php" class="contact-form contact-form--modified"
                    id="main-form">
                    <h2 class="contact-form__title">
                        Reach Out<span class="accent-text-purple">!</span>
                    </h2>
                    <div class="form-group">
                        <label class="visually-hidden" for="f-name">First Name:</label>
                        <input type="text" name="f-name" id="f-name" placeholder="First Name:">
                    </div>
                    <div class="form-group">
                        <label class="visually-hidden" for="l-name">Last Name:</label>
                        <input type="text" name="l-name" id="l-name" placeholder="Last Name:">
                    </div>
                    <div class="form-group">
                        <label class="visually-hidden" for="phone">Phone Number:</label>
                        <input type="tel" name="phone" id="phone" placeholder="Phone Number:" autocomplete="tel">
                    </div>
                    <div class="form-group">
                        <label class="visually-hidden" for="email">Email:</label>
                        <input type="text" name="email" id="email" placeholder="Email:" autocomplete="email">
                    </div>
                    <div class="form-group">
                        <label class="visually-hidden" for="message">Message</label>
                        <textarea rows="5" name="message" id="message" placeholder="Message:"></textarea>
                    </div>

                    <!-- input101 start -->
                    <div class="form-group input101-container">
                        <label for="input-name">Input Name</label>
                        <input aria-hidden="true" autocomplete="off" type="text" name="input-name" id="input-name"
                            class="fill-input-field" tabindex="-1">
                    </div>
                    <div class="form-group input101-container">
                        <label for="input-email">Input Email</label>
                        <input aria-hidden="true" autocomplete="off" type="text" name="input-email" id="input-email"
                            class="fill-input-field" tabindex="-1">
                    </div>
                    <div class="form-group input101-container">
                        <label for="input-number">Input Number</label>
                        <input aria-hidden="true" autocomplete="off" type="text" name="input-number" id="input-number"
                            class="fill-input-field" tabindex="-1">
                    </div>
                    <div class="form-group input101-container">
                        <label for="input-card">Input Card</label>
                        <input aria-hidden="true" utocomplete="off" type="text" name="input-card" id="input-card"
                            class="fill-input-field" tabindex="-1">
                    </div>
                    <!-- input101 end -->

                    <button class="contact-form__button" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </main>
    <?php
    require('../includes/footer.php');
    ?>
    <div class="backdrop-filter" id="backdrop"></div>
</body>

</html>