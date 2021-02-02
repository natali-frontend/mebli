<?php /* Template Name: Page - About Store */ ?>
<?php get_header(); ?>
<div class='shop'>
    <div class='container'>
        <div class='shop-inner'>
            <div class='shop-description'>
                <h1>Интернет-магазин <br> мягкой мебели</h1>
                <p>
                    Бесплатная доставка по Киеву <br>
                    Мебель в наличии, и под заказ <br>
                    300+ вариантов тканей
                </p>
                <a href='/catalog' class='btn'>Каталог товаров</a>
            </div>
            <div class='shop-slider'>
                <div class="swiper-container swiper-shop-top">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-1.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-2.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-3.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-4.png' alt=''>
                        </div>
                    </div>
                </div>
                <div class="swiper-container swiper-shop">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-1.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-2.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-3.png' alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/shop-image-4.png' alt=''>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <ul>
                    <li>
                        Изминение размерных характеристик;
                    </li>
                    <li>
                        Огромный выбор обивки;
                    </li>
                    <li>
                        Комбинирование разных тканей
                    </li>
                    <li class=' hidden'>
                        Выбор наполнителя по уровню его плотности;
                    </li>
                    <li class=' hidden'>
                        Добавление дополнительных ниш, и мест для белья;
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class='advantages about-store-advantages'>
    <div class='advantages-content'>
        <div class='container'>
            <div class='advantages-inner'>
                <!-- Slider main container -->
                <div class="swiper-container swiper-advantages swiper-no-swiping">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Каркас</h4>
                                    <p>Каркас производится из натуральных сосновых брусьев, и является очень надежной и
                                        екологически чистой частью изделия, гибкость конструкции позволяет менять
                                        размеры дивана
                                        в зависимости от заказа.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>ППУ</h4>
                                    <p>
                                        Пенополиуритан есть важной частью в создании матраса, по вашему желанию мы можем
                                        сделать
                                        матрас более жестким, применяя ППУ повышеной плотности.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Ткань</h4>
                                    <p>
                                        Мы делаем диваны с большим выбором тканей, больше 300 вариантов обивки доступны
                                        для
                                        создания уникального, удовлетворяющего ваши эстетические и практические
                                        требования,
                                        решение.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <a href='#' class='btn'>Наши изделия</a>
</section>
<?php include get_template_directory() . '/template-part/previously-product.php'; ?>
<section class='viewed-products'>
    <div class='container'>
        <!-- Slider main container-->
        <div class="swiper-container swiper-viewed">
            <!--Additional required wrapper-->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <a href='/about-store' class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-6.png'
                                 alt=''>
                        </a>
                        <div class='item-description'>
                            <a href='/about-store'>Lorem ipsum</a>
                            <p>$599.00</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <a href='/about-store' class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-1.png'
                                 alt=''>
                        </a>
                        <div class='item-description'>
                            <a href='/about-store'>Lorem ipsum</a>
                            <p>$599.00</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class='viewed-products-item'>
                        <a href='/about-store' class='item-image'>
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/catalog-image-2.png'
                                 alt=''>
                        </a>
                        <div class='item-description'>
                            <a href='/about-store'>Lorem ipsum</a>
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
