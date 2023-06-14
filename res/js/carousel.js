document.addEventListener("DOMContentLoaded", function () {

    const carouselItems = document.querySelectorAll(".commerch-carousel-item");
    const carouselDots = document.querySelector('.commerch-carousel-dots');
    const dots = [];

    let currentSlide = 0;

    // Function to show the current slide
    const showSlide = slideIndex => {
        carouselItems.forEach(item => (item.style.display = "none"));
        dots.forEach(dot => dot.classList.remove("active"));

        carouselItems[slideIndex].style.display = "block";
        dots[slideIndex].classList.add("active");
    };

    // Add dots based on the count of images
    carouselItems.forEach((element, index) => {

        const dot = document.createElement('span');
        dot.classList.add('dot');

        dot.addEventListener("click", () => showSlide(index));

        dots.push(dot);

        carouselDots.appendChild(dot);
    });

    // Function to navigate to the previous slide
    const prevSlide = function () {
        currentSlide = (currentSlide - 1 + carouselItems.length) % carouselItems.length;
        showSlide(currentSlide);
    };

    // Function to navigate to the next slide
    const nextSlide = function () {
        currentSlide = (currentSlide + 1) % carouselItems.length;
        showSlide(currentSlide);
    };



    const arrows = document.querySelectorAll(".commerch-carousel-arrows .arrow");

    arrows.forEach(arrow => {
        arrow.addEventListener("click", function () {
            if (this.classList.contains("left")) {
                prevSlide();
            } else if (this.classList.contains("right")) {
                nextSlide();
            }
        });
    });

    showSlide(currentSlide);
});
