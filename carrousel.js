const slidesContainer = document.querySelector('.carrVin-slides');
const slides = document.querySelectorAll('.carrVin-slide');
let currentIndex = 0;

function showSlide(index) {
    currentIndex = index;
    updateCarousel();
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateCarousel();
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateCarousel();
}

function updateCarousel() {
    const offset = -currentIndex * (100 + 20); // Ancho de cada imagen + margen
    slidesContainer.style.transform = `translateX(${offset}px)`;

    // Añadir y quitar la clase 'active'
    slides.forEach((slide, index) => {
        index === currentIndex
            ? slide.classList.add('active')
            : slide.classList.remove('active');
    });
}

let intervalId;

function startCarousel() {
    intervalId = setInterval(nextSlide, 5000);
}

function stopCarousel() {
    clearInterval(intervalId);
}

startCarousel();

// Botones
document.getElementById('prevBtn').addEventListener('click', () => {
    stopCarousel();
    prevSlide();
    startCarousel();
});

document.getElementById('nextBtn').addEventListener('click', () => {
    stopCarousel();
    nextSlide();
    startCarousel();
});
