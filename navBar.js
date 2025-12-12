const header = document.querySelector('header');
const nav = document.getElementById('nav');
const openButton = document.getElementById('nav-open');
const closeButton = document.getElementById('nav-close');
const linkList = document.getElementById('nav-links');
const backdrop = document.getElementById('backdrop');
let keyboardWasPressed = false;

// Open nav
openButton.addEventListener('click', openNav);
openButton.addEventListener('keydown', () => { keyboardWasPressed = true; })

function openNav() {
    openMenu();

    currentFocus = document.activeElement;
    currentIndex = focusArray.indexOf(currentFocus);
    arrayLast = focusArray.length - 1;
    focusState = true;
};

function openMenu() {
    // Opens navbar
    linkList.style.display = 'flex';

    // Toggles to mobile navbar styling
    linkList.style.top = header.offsetHeight + 'px';
    linkList.style.transform = 'translateX(-30rem)';

    // Swaps buttons
    openButton.style.display = 'none';
    closeButton.style.display = 'inline';

    // Backdrop styling
    backdrop.style.display = 'inline';
    backdrop.style.opacity = '.5';
    nav.classList.add('backdrop-focus');
    header.classList.add('backdrop-focus');

    // Focuses Close button
    if (keyboardWasPressed) {
        closeButton.focus();
    }
}

// Close nav
window.addEventListener('resize', function () {
    if (closeButton.style.display === ('inline')) {
        closeNav();
    }
});

closeButton.addEventListener('click', closeNav);
backdrop.addEventListener('click', closeNav);

function closeNav() {
    focusState = false;
    closeMenu();
};

function closeMenu() {
    // Closes navbar
    linkList.style.top = header.offsetHeight + 'px';
    linkList.style.transform = 'translateX(30rem)';

    // Backdrop styling
    backdrop.style.display = 'none';
    nav.classList.remove('backdrop-focus');
    header.classList.remove('backdrop-focus');

    linkList.addEventListener('transitionstart', () => {
        // Swaps buttons
        openButton.style.display = 'inline';
        closeButton.style.display = 'none';
    },
        {
            once: true
        });

    // Pauses code until after the link list is done transitioning
    linkList.addEventListener('transitionend', () => {
        linkList.style.display = 'none';

        // Removes inline styling so media queries can work
        openButton.removeAttribute('style');
        linkList.removeAttribute('style');
    },
        {
            once: true
        });
}

// Focus Trap
const focusArray = Array.from(linkList.querySelectorAll('a'));
focusArray.unshift(closeButton);

let currentFocus;
let currentIndex;
let focusState = false;
let arrayLast;

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




