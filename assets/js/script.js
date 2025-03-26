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