// Matches mobile navbar offset to height of header
const header = document.querySelector('header');
const button = document.getElementById('nav-close');

resizeMobileNav();

function resizeMobileNav() {
    button.style.height = header.offsetHeight + 'px';
}


// Toggles navbar on button click
const navOpen = document.getElementById('nav-open');
const navClose = document.getElementById('nav-close');
const navLinks = document.getElementById('nav-links');
const nav = document.getElementById('nav');

navOpen.addEventListener('click', openNav);
navClose.addEventListener('click', closeNav);

window.addEventListener('resize', function () {
    if (navClose.style.display === ('inline')) {
        closeNav();
    }
});

function openNav() {
    // Opens navbar
    navLinks.style.display = 'flex';

    // Toggles to mobile navbar styling
    nav.classList.toggle('mobile-nav');

    // Swaps buttons
    navOpen.style.display = 'none';
    navClose.style.display = 'inline';

    // Testing
    console.log('Open Navbar');

    resizeMobileNav();
}

function closeNav() {
    // Closes navbar
    navLinks.style.display = 'none';

    // Toggles to mobile navbar styling
    nav.classList.toggle('mobile-nav');

    // Swaps buttons
    navOpen.style.display = 'inline';
    navClose.style.display = 'none';

    // Removes inline styling so media queries can work
    navOpen.removeAttribute('style');
    navLinks.removeAttribute('style');

    // Testing
    console.log('Close Navbar');
}

