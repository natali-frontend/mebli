document.addEventListener('DOMContentLoaded', function () {

    const burger = document.getElementsByClassName("burger")[0];
    const menu = document.getElementsByClassName("menu")[0];
    burger.addEventListener("click", function () {
        this.classList.toggle("active");
        menu.classList.toggle("mobile-menu")
    });

    const dropDown = document.getElementsByClassName("list-item");
    for (let i = 0; i < dropDown.length; i++) {
        dropDown[i].addEventListener("click", function () {
            this.classList.toggle("show");
        });
    }

    const submenu = document.getElementsByClassName("submenu-item");
    for (let i = 0; i < submenu.length; i++) {
        submenu[i].addEventListener("click", function () {
            for (let i = 0; i < submenu.length; i++) {
                submenu[i].classList.remove("active");
            }
            this.classList.add("active");
        });
    }

// Swiper
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        spaceBetween: 20,
        slidesPerView: 2,
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },
    });
});
