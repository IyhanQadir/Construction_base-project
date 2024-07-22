AOS.init();
const toggleBtn = document.querySelector('.navbar-toggler');
const navbarNav = document.querySelector('.navbar-collapse');

toggleBtn.addEventListener('click', () => {
    navbarNav.classList.toggle('show');  
});

/* window.addEventListener('scroll', function() {
    var scrollPosition = window.scrollY;
    var demo = document.getElementById('bag');

    if (scrollPosition > 100) { // Adjust the scroll length as needed
        demo.classList.add('scrolled');
    } else {
        demo.classList.remove('scrolled');
    }
}); */
