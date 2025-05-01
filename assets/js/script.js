// Menu For Mobile (Nav)

document.addEventListener("DOMContentLoaded", function () {
    const toggleMenu = document.querySelector(".toggle-menu");
    const navLinks = document.querySelector(".header-bottom nav ul");
    const closeMenu = document.querySelector(".close-menu");

    toggleMenu.addEventListener("click", function () {
        navLinks.classList.toggle("show-menu");
    });

    if (closeMenu) {
        closeMenu.addEventListener("click", function () {
            navLinks.classList.remove("show-menu");
        });
    }
});


// ---------------------------------------------

const newsContainer = document.getElementById('newsContainer');
const paginationDots = document.getElementById('paginationDots');

function updateDots() {
    const cards = document.querySelectorAll('.news-card');
    paginationDots.innerHTML = '';

    cards.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            newsContainer.scrollTo({
                left: index * (cards[0].offsetWidth + 20),
                behavior: 'smooth'
            });
        });
        paginationDots.appendChild(dot);
    });
}

function highlightActiveDot() {
    const scrollLeft = newsContainer.scrollLeft;
    const cardWidth = document.querySelector('.news-card').offsetWidth + 20;
    const activeIndex = Math.round(scrollLeft / cardWidth);
    document.querySelectorAll('.dot').forEach((dot, index) => {
        dot.classList.toggle('active', index === activeIndex);
    });
}

newsContainer.addEventListener('scroll', highlightActiveDot);
window.addEventListener('load', updateDots);

// ---------------------------------------------

// testimonials 

function openReviewForm() {
    document.getElementById('reviewForm').style.display = 'flex';
}

function closeReviewForm() {
    document.getElementById('reviewForm').style.display = 'none';
}

// Close form when clicking outside
window.onclick = function(event) {
    let modal = document.getElementById('reviewForm');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}

// Optional: Add AOS (Animate On Scroll) library for smooth animations
document.addEventListener('DOMContentLoaded', function() {
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            offset: 100,
            once: true
        });
    }
});












// ---------------------------------------------

// ScrollReveal Configuration
const sr = ScrollReveal({
    distance: '50px', // مسافة الحركة
    duration: 1500,   // مدة التأثير
    delay: 200,       // تأخير بين العناصر
    reset: false       // إعادة التأثير عند التمرير مجددًا
});

sr.reveal('.home-section .content', {
    origin: 'top', 
    interval: 150
});
sr.reveal('.about-text', {
    origin: 'left', 
    interval: 150
});
sr.reveal('.about-image', {
    origin: 'right', 
    interval: 150
});
sr.reveal('.news-card', {
    origin: 'top', 
    interval: 150
});
sr.reveal('.box', {
    origin: 'top', 
    interval: 150
});




