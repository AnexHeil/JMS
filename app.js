
var mainNav = document.querySelector('.main-nav');
var links = Array.from(document.querySelectorAll('.main-links a'));
window.onscroll = fixingNav;

function fixingNav(){
    if (mainNav.style.position !== 'fixed' && window.scrollY >= 120){
        mainNav.id = 'fixed';
        links.forEach(link => link.classList.add('fixed-link'));
    }
    else{
        links.forEach(link => link.classList.remove('fixed-link'));
        mainNav.id = '';
    }
}