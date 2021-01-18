document.addEventListener('DOMContentLoaded', function () {

    const burger = document.getElementsByClassName("burger")[0];
    const menu = document.getElementsByClassName("menu")[0];
    const header = document.getElementById("header");

    // Burger menu
    burger.addEventListener("click", function () {
        this.classList.toggle("active");
        menu.classList.toggle("mobile-menu")
    });

    // Header
    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 120) {
            header.classList.remove('transparent');
        } else {
            header.classList.add('transparent');
        }
    });
    // const dropDown = document.getElementsByClassName("list-item");
    // for (let i = 0; i < dropDown.length; i++) {
    //     dropDown[i].addEventListener("click", function () {
    //         this.classList.toggle("show");
    //     });
    // }

    // const submenu = document.getElementsByClassName("submenu-item");
    // for (let i = 0; i < submenu.length; i++) {
    //     submenu[i].addEventListener("click", function () {
    //         for (let i = 0; i < submenu.length; i++) {
    //             submenu[i].classList.remove("active");
    //         }
    //         this.classList.add("active");
    //     });
    // }

    // Swiper
    let mySwiper = new Swiper('.swiper-advantages', {
        // Optional parameters
        slidesPerView: 1,
        noSwiping: false,
        preventClicks: false,
        breakpoints: {
            650: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            993: {
                slidesPerView: 3,
                spaceBetween: 25,
                noSwiping: true,
            }
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    let mySwiperViewed = new Swiper('.swiper-viewed', {
        // Optional parameters
        slidesPerView: 1,
        // preventClicks: false,
        breakpoints: {
            650: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            993: {
                slidesPerView: 3,
                spaceBetween: 60,
            }
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    let mySwiperProducts = new Swiper('.swiper-products', {
        // Optional parameters
        slidesPerView: 1,
        // preventClicks: false,
        breakpoints: {
            650: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
            993: {
                slidesPerView: 3,
                spaceBetween: 60,
            }
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    let mySwiperPreviously = new Swiper('.swiper-previously', {
        // Optional parameters
        slidesPerView: 1,
        speed: 3000,
        loop: true,
        breakpoints: {
            650: {},
            993: {
                slidesPerView: 1,
            }
        },
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    let mySwiperFabrics = new Swiper('.swiper-fabrics', {
        // Optional parameters
        slidesPerView: "auto",
    });
    let mySwiperSuggestions = new Swiper('.suggestions-swiper', {
        // Optional parameters
        slidesPerView: "auto",
        spaceBetween: 30,
    });
    let SwiperReview = new Swiper('.swiper-review', {
        // Optional parameters
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    let SwiperReviewTop = new Swiper('.swiper-review-top', {
        // Optional parameters
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: SwiperReview
        }
    });
});




