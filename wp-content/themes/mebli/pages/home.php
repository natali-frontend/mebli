<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
        <section class='banner'>
            <div class='banner-overlay'>
                <div class='container'>
                    <div class='banner-inner'>
                        <div class='inner-description'>
                            <h1>Интернет-магазин <br> мягкой мебели</h1>
                            <p>
                                Бесплатная доставка по Киеву <br>
                                Мебель в наличии, и под заказ <br>
                                300+ вариантов тканей
                            </p>
                            <a href='#' class='btn'>Каталог товаров</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='advantages'>
            <h2>Наши преимущества</h2>
            <div class='advantages-content'>
                <div class='container'>
                    <div class='advantages-inner'>
                        <!-- Slider main container -->
                        <div class="swiper-container swiper-no-swiping">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class='inner-item'>
                                        <div class='item-description'>
                                            <div class='description-icon'>
                                                <img src='assets/images/icons/truck.svg' alt=''>
                                            </div>
                                            <p>Бесплатная доставка по Киеву.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class='inner-item'>
                                        <div class='item-description'>
                                            <div class='description-icon'>
                                                <img src='assets/images/icons/price.svg' alt=''>
                                            </div>
                                            <p>Цены от производителя</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class='inner-item'>
                                        <div class='item-description'>
                                            <div class='description-icon'>
                                                <span>300+</span>
                                            </div>
                                            <p>Вариантов тканей</p>
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
        </section>
        <section class='capabilities'>
            <div class='container'>
                <div class='capabilities-inner'>
                    <div class='inner-image'>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/sofa.png" alt="">
                    </div>
                    <div class='inner-description'>
                        <h2>Возможности</h2>
                        <p>
                            Широкий выбор разных по своему типу тканией 300+, с возможностью корректировать размеры дивана,
                            Вы сможете подобрать мебель под помещения с маленьким и большим пространством, а также выбрать
                            мягкий или жесткий наполнитель, все в зависимости от ваших предпочтений. Качественная мебель, от
                            производителя с 14 летним опытом работы,сможет прекрасно дополнить вид вашего жилья, наполняя
                            его комфортом и уютом.
                        </p>
                    </div>
                </div>
            </div>
        </section>
<?php get_footer(); ?>