// JavaScript для управления карточками

document.addEventListener("DOMContentLoaded", function () {
    const carsBtn = document.querySelector(".hero-buttons button:nth-child(1)");
    const priceBtn = document.querySelector(".hero-buttons button:nth-child(2)");
    const coursesBtn = document.querySelector(".hero-buttons button:nth-child(3)");

    const carsCard = document.getElementById("cars-card");
    const priceCard = document.getElementById("price-card");
    const coursesCard = document.getElementById("courses-card");

    const allCards = [carsCard, priceCard, coursesCard];

    function hideAllCards() {
        allCards.forEach(card => {
            card.classList.remove("active");
        });
    }

    carsBtn.addEventListener("click", function () {
        hideAllCards();
        carsCard.classList.add("active");
    });

    priceBtn.addEventListener("click", function () {
        hideAllCards();
        priceCard.classList.add("active");
    });

    coursesBtn.addEventListener("click", function () {
        hideAllCards();
        coursesCard.classList.add("active");
    });
});

// Слайдер учебного процесса
let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;

document.querySelector(".next").addEventListener("click", () => {
    changeSlide(1);
});

document.querySelector(".prev").addEventListener("click", () => {
    changeSlide(-1);
});

function changeSlide(direction) {
    slides[currentSlide].classList.remove("active");
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    slides[currentSlide].classList.add("active");
}

// Установка первого активного слайда при загрузке
if (slides.length > 0) {
    slides[0].classList.add("active");
}
