lucide.createIcons();

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

document.addEventListener("DOMContentLoaded", () => {

    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileLinks = document.querySelectorAll("#mobile-menu a");

    if (menuBtn && mobileMenu) {
        // Open / Close Menu
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });
        // Close Menu after navigation
        mobileLinks.forEach(link => {
            link.addEventListener("click", () => {
                setTimeout(() => {
                    mobileMenu.classList.add("hidden");
                }, 750);
            });
        });
    }
});

window.addEventListener("scroll", () => {
    let currentSection = "";

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 200;

        if (window.scrollY >= sectionTop) {
            currentSection = section.getAttribute("id");
        }
    });

    navLinks.forEach(link => {
        link.classList.remove("active");

        if (link.getAttribute("href") === `#${currentSection}`) {
            link.classList.add("active");
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.gallery-slider');
    const cards = Array.from(document.querySelectorAll('.gallery-card'));
    const buttons = Array.from(document.querySelectorAll('.gallery-nav-btn'));

    if (!slider || cards.length === 0) return;

    let currentIndex = 0;

    const visibleCards = () => {
        if (window.innerWidth < 768) return 1;
        if (window.innerWidth < 1280) return 2;
        return 4;
    };

    const updateSlider = () => {
        const perView = visibleCards();
        const maxIndex = Math.max(0, cards.length - perView);
        currentIndex = Math.min(currentIndex, maxIndex);
        const offset = currentIndex * (100 / perView);
        slider.style.transform = `translateX(-${offset}%)`;
    };

    buttons.forEach((button) => {
        button.addEventListener('click', () => {
            const perView = visibleCards();
            const maxIndex = Math.max(0, cards.length - perView);
            currentIndex = button.dataset.direction === 'next'
                ? Math.min(currentIndex + 1, maxIndex)
                : Math.max(currentIndex - 1, 0);
            updateSlider();
        });
    });

    let startX = 0;
    slider.addEventListener('touchstart', (event) => {
        startX = event.touches[0].clientX;
    });

    slider.addEventListener('touchend', (event) => {
        const endX = event.changedTouches[0].clientX;
        const delta = endX - startX;

        if (delta < -50) {
            const perView = visibleCards();
            const maxIndex = Math.max(0, cards.length - perView);
            currentIndex = Math.min(currentIndex + 1, maxIndex);
            updateSlider();
        } else if (delta > 50) {
            currentIndex = Math.max(currentIndex - 1, 0);
            updateSlider();
        }
    });

    window.addEventListener('resize', updateSlider);
    updateSlider();
});

