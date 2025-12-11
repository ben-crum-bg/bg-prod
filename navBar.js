const header = document.querySelector('header');
const nav = document.getElementById('nav');
const openButton = document.getElementById('nav-open');
const closeButton = document.getElementById('nav-close');
const linkList = document.getElementById('nav-links');
const backdrop = document.getElementById('backdrop');

openButton.addEventListener('click', openNav);
closeButton.addEventListener('click', closeNav);

window.addEventListener('resize', function () {
    if (closeButton.style.display === ('inline')) {
        closeNav();
    }
});

backdrop.addEventListener('click', closeNav);

function openMenu() {
    // Opens navbar
    linkList.style.display = 'flex';

    // Toggles to mobile navbar styling
    linkList.classList.add('mobile-nav');
    linkList.style.top = header.offsetHeight + 'px';

    // Swaps buttons
    openButton.style.display = 'none';
    closeButton.style.display = 'inline';

    // Backdrop styling
    nav.classList.add('backdrop-focus');
    backdrop.style.display = 'inline';
    header.classList.add('backdrop-focus');

    // Focuses Close button
    closeButton.focus();
}

function closeMenu() {
    // Closes navbar
    linkList.style.display = 'none';
    linkList.style.top = header.offsetHeight + 'px';

    // Toggles to mobile navbar styling
    nav.classList.remove('mobile-nav');

    // Swaps buttons
    openButton.style.display = 'inline';
    closeButton.style.display = 'none';

    // Removes inline styling so media queries can work
    openButton.removeAttribute('style');
    linkList.removeAttribute('style');

    // Backdrop styling
    nav.classList.remove('backdrop-focus');
    backdrop.style.display = 'none';
    header.classList.remove('backdrop-focus');
}

const focusArray = Array.from(linkList.querySelectorAll('a'));
focusArray.unshift(closeButton);

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




