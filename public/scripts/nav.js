const menuToggle = document.getElementById('menuToggle');
let menuIsOpen = document.getElementById('menu').getAttribute('aria-checked');

menuToggle.addEventListener('click', () => {
    menuIsOpen = !menuIsOpen;
    document.getElementById('menu').setAttribute('aria-checked', menuIsOpen); 
    menuToggle.setAttribute('aria-checked', menuIsOpen); 
});