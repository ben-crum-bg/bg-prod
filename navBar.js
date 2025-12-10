const header = document.querySelector('header');
const button = document.getElementById('nav-close');
const navOpen = document.getElementById('nav-open');
const navClose = document.getElementById('nav-close');
const navLinks = document.getElementById('nav-links');
const nav = document.getElementById('nav');
const backdrop = document.getElementById('backdrop');
const navContinent = document.querySelector('.continent');

resizeMobileNav();

function resizeMobileNav() {
    button.style.height = header.offsetHeight + 'px';
}

navOpen.addEventListener('click', openNav);
navClose.addEventListener('click', closeNav);


window.addEventListener('resize', function () {
    if (navClose.style.display === ('inline')) {
        closeNav();
    }
});

backdrop.addEventListener('click', closeNav);

function openMenu() {
    // Opens navbar
    navLinks.style.display = 'flex';

    // Toggles to mobile navbar styling
    nav.classList.add('mobile-nav');

    // Swaps buttons
    navOpen.style.display = 'none';
    navClose.style.display = 'inline';

    // Backdrop styling
    nav.classList.add('backdrop-focus');
    backdrop.style.display = 'inline';
    header.classList.add('backdrop-focus');

    // Focuses Close button
    button.focus();

    // Resizes top of mobile nav to match header height
    resizeMobileNav();
}

function closeMenu() {
    // Closes navbar
    navLinks.style.display = 'none';

    // Toggles to mobile navbar styling
    nav.classList.remove('mobile-nav');

    // Swaps buttons
    navOpen.style.display = 'inline';
    navClose.style.display = 'none';

    // Removes inline styling so media queries can work
    navOpen.removeAttribute('style');
    navLinks.removeAttribute('style');

    // Backdrop styling
    nav.classList.remove('backdrop-focus');
    backdrop.style.display = 'none';
    header.classList.remove('backdrop-focus');
}

const focusArray = Array.from(navLinks.querySelectorAll('a'));
focusArray.unshift(navClose);

let currentFocus;
let currentIndex;
let focusState = false;
let arrayLast;

function openNav() {
    openMenu();

    currentFocus = document.activeElement;
    currentIndex = focusArray.indexOf(currentFocus);
    arrayLast = focusArray.length - 1;
    focusState = true;
};

function closeNav() {
    focusState = false;
    closeMenu();
};

window.addEventListener('keydown', (event) => {
    if (focusState) {
        let keyPress = event.key;

        if (keyPress === 'ArrowDown' || (!event.shiftKey && keyPress === 'Tab')) {
            event.preventDefault();

            if (currentIndex !== arrayLast) {
                currentIndex = currentIndex + 1;
                focusArray[currentIndex].focus();
            } else {
                currentIndex = 0;
                focusArray[0].focus();
            }
        }

        if (keyPress === 'ArrowUp' || (event.shiftKey && keyPress === 'Tab')) {
            event.preventDefault();

            if (currentIndex !== 0) {
                currentIndex = currentIndex - 1;
                focusArray[currentIndex].focus();
            } else {
                currentIndex = arrayLast;
                focusArray[arrayLast].focus();
            }
        }

        if (keyPress === 'Escape') {
            event.preventDefault();
            closeNav();
        }

        if (keyPress === 'Enter') {
            closeNav();
        }
    }
});




