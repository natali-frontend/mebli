document.addEventListener('DOMContentLoaded', function () {

    const burger = document.getElementsByClassName("burger")[0];
    const menu = document.getElementsByClassName("menu")[0];

    // Burger menu
    burger.addEventListener("click", function () {
        this.classList.toggle("active");
        menu.classList.toggle("mobile-menu")
    });

    // Select
    function handleSelect() {
        const currentSelected = document.getElementsByClassName('select-selected');
        const selectMenu = document.getElementsByClassName('list-item');
        const selectItem = document.getElementsByClassName('submenu-item');

        function hideAllSelects() {
            for (let i = 0; i < selectMenu.length; i++) {
                selectMenu[i].classList.remove('show')
            }
        }

        for (let i = 0; i < currentSelected.length; i++) {
            currentSelected[i].addEventListener('click', function () {
                hideAllSelects();
                selectMenu[i].classList.toggle('show');
            });
        }
        for (let i = 0; i < selectItem.length; i++) {
            selectItem[i].addEventListener('click', function () {
                hideAllSelects();
                this.parentElement.parentElement.querySelector('.select-selected').innerHTML = this.textContent;
            });
        }
        window.addEventListener('click', function (e) {
            const select0 = document.getElementsByClassName('select-selected')[0];
            const selectMenu0 = document.getElementsByClassName('submenu')[0];
            const select1 = document.getElementsByClassName('select-selected')[1];
            const selectMenu1 = document.getElementsByClassName('submenu')[1];
            const select2 = document.getElementsByClassName('select-selected')[2];
            const selectMenu2 = document.getElementsByClassName('submenu')[2];
            const select3 = document.getElementsByClassName('select-selected')[3];
            const selectMenu3 = document.getElementsByClassName('submenu')[3];
            const select4 = document.getElementsByClassName('select-selected')[4];
            const selectMenu4 = document.getElementsByClassName('submenu')[4];
            if (select0.contains(e.target) && !selectMenu0.contains(e.target) ||
                select1.contains(e.target) && !selectMenu1.contains(e.target) ||
                select2.contains(e.target) && !selectMenu2.contains(e.target) ||
                select3.contains(e.target) && !selectMenu3.contains(e.target) ||
                select4.contains(e.target) && !selectMenu4.contains(e.target)) {
                // Clicked in box
            } else {
                // Clicked out box
                hideAllSelects();
            }
        });
    }


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
        centeredSlides: false,

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
        slidesPerView: 2,
        speed: 3000,
        loop: true,
        spaceBetween: 15,
        centeredSlides: false,
        breakpoints: {
            650: {
                slidesPerView: 3,
            },
            993: {
                slidesPerView: 4,
                spaceBetween: 25,
            }
        },
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
        slidesPerView: 1,
        spaceBetween: 15,
        centeredSlides: true,
        breakpoints: {
            650: {
                slidesPerView: 2,
            },
            993: {
                slidesPerView: "auto",
                spaceBetween: 30,
            }
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            el: '.swiper-navigation',
            clickable: true,
        }
    });
    let SwiperReview = new Swiper('.swiper-review', {
        // Optional parameters
        spaceBetween: 20,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    let SwiperReviewTop = new Swiper('.swiper-review-top', {
        // Optional parameters
        slidesPerView: 1,
        centeredSlides: true,
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: SwiperReview
        },
        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    let SwiperShop = new Swiper('.swiper-shop', {
        // Optional parameters
        spaceBetween: 30,
        slidesPerView: 3,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    let SwiperShopTop = new Swiper('.swiper-shop-top', {
        // Optional parameters
        slidesPerView: 1,
        spaceBetween: 10,
        thumbs: {
            swiper: SwiperShop
        }
    });

    //    Loading on Catalog page
    const mainImage = document.getElementsByClassName('main-image');
    const loading = document.getElementsByClassName('loading');

    setTimeout(() => {
        for (let i = 0; i < mainImage.length; i++) {
            mainImage[i].style.opacity = '1';
        }
        for (let i = 0; i < loading.length; i++) {
            loading[i].style.opacity = '0';
        }
    }, 3000);

    // Zooming
    const ShowZoomPopup = () => {
        const zoomPopup = document.getElementsByClassName('zoom-popup')[0];
        const zoomImage = document.getElementsByClassName('zoom-image-js')[0];
        const zoomClose = document.getElementsByClassName('zoom-close')[0];
        const images = document.getElementsByClassName('zoom-js');
        for (let i = 0; i < images.length; i++) {
            const src = images[i].children[0].getAttribute('src');
            images[i].addEventListener('click', function () {
                console.log()
                zoomPopup.classList.remove('d-none');
                zoomImage.setAttribute('src', src);
            });
        }
        zoomClose.addEventListener('click', function () {
            zoomPopup.classList.add('d-none');
        });
    }

    ShowZoomPopup();

});




