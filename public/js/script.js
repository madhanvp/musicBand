console.log("SCRIPT LOADED");


document.addEventListener('DOMContentLoaded', () => {


    // Mobile Menu

    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");


    if(menuBtn && mobileMenu){

        menuBtn.addEventListener("click", () => {

            mobileMenu.classList.toggle("hidden");

        });


    }




    // Gallery Slider


    const slider = document.querySelector('.gallery-slider');
    const cards = Array.from(document.querySelectorAll('.gallery-card'));
    const buttons = Array.from(document.querySelectorAll('.gallery-nav-btn'));


    if(!slider || cards.length === 0) return;


    let currentIndex = 0;
    let startX = 0;



    const visibleCards = () => {

        if(window.innerWidth < 768){
            return 1;
        }

        if(window.innerWidth < 1280){
            return 2;
        }

        return 4;

    };



    const updateSlider = () => {


        const perView = visibleCards();

        const cardWidth = cards[0].getBoundingClientRect().width;

        const gap = 24;


        const maxIndex = Math.max(0, cards.length - perView);


        currentIndex = Math.min(currentIndex,maxIndex);

        currentIndex = Math.max(currentIndex,0);



        const move = currentIndex * (cardWidth + gap);


        slider.style.transform = 
        `translateX(-${move}px)`;


    };





    buttons.forEach(button=>{


        button.addEventListener("click",()=>{


            const maxIndex = Math.max(
                0,
                cards.length - visibleCards()
            );


            if(button.dataset.direction==="next"){

                currentIndex = Math.min(
                    currentIndex + 1,
                    maxIndex
                );


            }
            else{

                currentIndex = Math.max(
                    currentIndex - 1,
                    0
                );

            }


            updateSlider();


        });


    });





    slider.addEventListener("touchstart",(e)=>{

        startX = e.touches[0].clientX;

    });



    slider.addEventListener("touchend",(e)=>{


        let endX = e.changedTouches[0].clientX;

        let diff = startX - endX;


        const maxIndex = Math.max(
            0,
            cards.length - visibleCards()
        );


        if(diff > 50){

            currentIndex = Math.min(
                currentIndex+1,
                maxIndex
            );

        }


        if(diff < -50){

            currentIndex = Math.max(
                currentIndex-1,
                0
            );

        }


        updateSlider();


    });




    window.addEventListener("resize",updateSlider);


    updateSlider();



});