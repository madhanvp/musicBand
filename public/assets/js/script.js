// Navigation Active Menu Logic
const sections = Array.from(document.querySelectorAll("main section[id]"));
const navLinks = Array.from(document.querySelectorAll("header .nav-link"));

let activeMenuFrame = null;

function setActiveLink(sectionId) {
    navLinks.forEach(link => {
        const isActive = link.getAttribute("href") === `#${sectionId}`;
        link.classList.toggle("active", isActive);
    });
}

function updateActiveMenu() {
    if (!sections.length) return;

    const scrollPosition =
        window.scrollY + Math.max(120, window.innerHeight * 0.2);

    let currentSection = "home";
    let smallestDistance = Infinity;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.offsetHeight;
        const sectionCenter = sectionTop + sectionHeight * 0.5;
        const distance = Math.abs(scrollPosition - sectionCenter);

        if (
            scrollPosition >= sectionTop - sectionHeight * 0.25 &&
            scrollPosition < sectionTop + sectionHeight
        ) {
            if (distance < smallestDistance) {
                smallestDistance = distance;
                currentSection = section.getAttribute("id");
            }
        }
    });

    setActiveLink(currentSection);
}

function scheduleActiveMenuUpdate() {
    if (activeMenuFrame) return;

    activeMenuFrame = requestAnimationFrame(() => {
        activeMenuFrame = null;
        updateActiveMenu();
    });
}

window.addEventListener("scroll", scheduleActiveMenuUpdate, {
    passive: true,
});

window.addEventListener("resize", scheduleActiveMenuUpdate);

window.addEventListener("load", () => {
    scheduleActiveMenuUpdate();
    setTimeout(scheduleActiveMenuUpdate, 80);
});

// DOM Ready
document.addEventListener("DOMContentLoaded", () => {

    // Initial Active Menu State
    setActiveLink("home");
    updateActiveMenu();

    // Highlights active menu item
    const sectionObserver = new IntersectionObserver(
        entries => {
            const visibleSections = entries
                .filter(entry => entry.isIntersecting)
                .sort(
                    (a, b) =>
                        b.intersectionRatio - a.intersectionRatio
                );

            if (visibleSections.length > 0) {
                setActiveLink(
                    visibleSections[0].target.id
                );
            }
        },
        {
            threshold: [0.2, 0.4, 0.6],
            rootMargin: "-20% 0px -40% 0px",
        }
    );

    sections.forEach(section =>
        sectionObserver.observe(section)
    );

    // Reveal Animation Observer
    const revealItems =
        document.querySelectorAll(".reveal-item");

    if (revealItems.length > 0) {
        const revealObserver = new IntersectionObserver(
            (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(
                            "is-visible"
                        );
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -8% 0px",
            }
        );

        revealItems.forEach((item, index) => {
            const delay = Math.min(index * 70, 280);

            item.style.setProperty(
                "--reveal-delay",
                `${delay}ms`
            );

            revealObserver.observe(item);
        });
    }

    // Mobile Menu Toggle
    const menuBtn =
        document.getElementById("menu-btn");

    const mobileMenu =
        document.getElementById("mobile-menu");

    const mobileLinks =
        document.querySelectorAll(
            "#mobile-menu .nav-link"
        );

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener("click", () => {
            mobileMenu.classList.toggle("hidden");
        });

        mobileLinks.forEach(link => {
            link.addEventListener("click", () => {
                setTimeout(() => {
                    mobileMenu.classList.add("hidden");
                }, 250);
            });
        });
    }

    // Gallery Infinite Slider
    const slider =
        document.querySelector(".gallery-slider");

    const cards =
        document.querySelectorAll(".gallery-card");

    const prevBtn =
        document.querySelector(
            '[data-direction="prev"]'
        );

    const nextBtn =
        document.querySelector(
            '[data-direction="next"]'
        );

    if (slider && cards.length > 0) {

        let currentIndex = 0;

        const originalCount = cards.length / 2;

        function getVisibleCards() {
            if (window.innerWidth >= 1280) return 4;
            if (window.innerWidth >= 768) return 2;
            return 1;
        }

        function updateSlider() {
            const cardWidth =
                cards[0].offsetWidth + 24;

            slider.style.transform =
                `translateX(-${currentIndex * cardWidth}px)`;
        }

        // Next Button
        nextBtn?.addEventListener("click", () => {

            currentIndex++;
            updateSlider();

            if (currentIndex >= originalCount) {

                setTimeout(() => {

                    slider.style.transition = "none";

                    currentIndex = 0;
                    updateSlider();

                    setTimeout(() => {
                        slider.style.transition =
                            "transform 500ms ease-out";
                    }, 50);

                }, 500);
            }
        });
        
        // Previous Button
        prevBtn?.addEventListener("click", () => {

            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = originalCount - 1;
            }

            updateSlider();
        });
        
        // Window Resize
        window.addEventListener(
            "resize",
            updateSlider
        );
    }
});