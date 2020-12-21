<?php /* Template Name: Page - About Store */ ?>
<?php get_header(); ?>
<section class='about-store-production'>
    <div class='container'>
        <div class='production-inner'>
            <div class='inner-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/production.png' alt=''>
            </div>
            <div class='inner-description'>
                <h2>Наше производство</h2>
                <p>
                    Территориально наше производство находится в Киевской области, 14 лет опыта и тысячи довольных
                    клиентов
                    это то чем мы гордимся, наша компания дает широкий список возможностей с которыми клиент может
                    подходить к заказу своего дивана, таких как:
                </p>
                <ul class='production-list'>
                    <li class='production-item'>
                        Изминение размерных характеристик;
                    </li>
                    <li class='production-item'>
                        Огромный выбор обивки;
                    </li>
                    <li class='production-item'>
                        Комбинирование разных тканей
                    </li>
                    <li class='production-item hidden'>
                        Выбор наполнителя по уровню его плотности;
                    </li>
                    <li class='production-item hidden'>
                        Добавление дополнительных ниш, и мест для белья;
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class='advantages about-store-advantages'>
    <h2>Наши преимущества</h2>
    <div class='advantages-content'>
        <div class='container'>
            <div class='advantages-inner'>
                <div class='inner-item'>
                    <div class='item-description'>
                        <h4>Каркас</h4>
                        <p>Каркас производится из натуральных сосновых брусьев, и является очень надежной и
                            екологически чистой частью изделия, гибкость конструкции позволяет менять размеры дивана
                            в зависимости от заказа.
                        </p>
                    </div>
                </div>
                <div class='inner-item'>
                    <div class='item-description'>
                        <h4>ППУ</h4>
                        <p>
                            Пенополиуритан есть важной частью в создании матраса, по вашему желанию мы можем сделать
                            матрас более жестким, применяя ППУ повышеной плотности.
                        </p>
                    </div>
                </div>
                <div class='inner-item'>
                    <div class='item-description'>
                        <h4>Ткань</h4>
                        <p>
                            Мы делаем диваны с большим выбором тканей, больше 300 вариантов обивки доступны для
                            создания уникального, удовлетворяющего ваши эстетические и практические требования,
                            решение.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='viewed-products'>
    <div class='container'>
        <!-- Slider main container-->
        <div class="swiper-container swiper-products">
            <!--Additional required wrapper-->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <div class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-6.png' alt=''>
                        </div>
                        <div class='item-description'>
                            <h2>Lorem ipsum</h2>
                            <p>$599.00</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <div class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-1.png' alt=''>
                        </div>
                        <div class='item-description'>
                            <h2>Lorem ipsum</h2>
                            <p>$599.00</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <div class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-2.png' alt=''>
                        </div>
                        <div class='item-description'>
                            <h2>Lorem ipsum</h2>
                            <p>$599.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>
<?php get_footer(); ?>
