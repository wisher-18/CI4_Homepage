document.addEventListener('DOMContentLoaded', function () {
    var navLinks = document.querySelectorAll('.nav-link');
    
    navLinks.forEach(function (link) {
        link.addEventListener('mouseover', function () {
            navLinks.forEach(function (otherLink) {
                otherLink.parentNode.classList.remove('active');
            });
            link.parentNode.classList.add('active');
        });
    });
});


