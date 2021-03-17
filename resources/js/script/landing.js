require('../bootstrap/bootstrap.bundle');

const navbar = document.querySelector('.navbar');
window.addEventListener('scroll', function () {
    if (this.scrollY > 0) {
        navbar.classList.add('shrink');
    } else {
        navbar.classList.remove('shrink');
    }
});