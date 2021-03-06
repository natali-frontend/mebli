<?php /* Template Name: Page - Home */ ?>
<?php get_header(); ?>
    <section class='banner'>
        <img src='<?php echo get_template_directory_uri() ?>/assets/images/hero-bg.jpg' alt=''>
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
                        <a href='/catalog' class='btn'>Каталог товаров</a>
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
                    <div class="swiper-container swiper-advantages swiper-no-swiping">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <div class='inner-item'>
                                    <div class='item-description'>
                                        <div class='description-icon'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/truck.svg'
                                                 alt=''>
                                        </div>
                                        <p>Бесплатная доставка по Киеву.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class='inner-item'>
                                    <div class='item-description'>
                                        <div class='description-icon'>
                                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/price.svg'
                                                 alt=''>
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
                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/sofa.png' alt="">
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
    <section class='suggestions'>
        <div class='container'>
            <div class='suggestions-inner'>
                <div class='suggestions-description'>
                    <div>
                        <h2>Предложения</h2>
                        <p>
                            Наша мебель изготовляется из екологически чистых, безвредных для здоровья человека
                            компонентов,
                            производством с 14-летним опытом работы, у нас вы найдете угловые, спальные, гостинные
                            варианты.
                        </p>
                    </div>
                    <a class='suggestions-link' href='/catalog'>
                        <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/left-arrow.svg' alt=''>
                        Каталог товаров
                    </a>
                </div>
                <!-- Slider main container-->
                <div class="swiper-container suggestions-swiper">
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <!--Additional required wrapper-->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $params = array(
                                'posts_per_page' => 10,
                                'post_type' => 'post',
                                'paged' => $current_page
                            );
                            query_posts($params);
                            while (have_posts()) : the_post();
                                if (get_field_object('product_suggestions')): ?>
                                    <?php
                                    $images = get_field_object('product_images');
                                    ?>
                                    <div class="swiper-slide">
                                        <div class='viewed-products-item'>
                                            <a href='<?php echo get_permalink(); ?>' class='item-image'>
                                                <img src="<?php echo $images['value'][0]['url'] ?>" alt=''>
                                            </a>
                                            <div class='item-description'>
                                                <p><?php echo get_the_title(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
<?php //include get_template_directory() . '/template-part/previously-product.php'; ?>
<?php include get_template_directory() . '/template-part/viewed-products.php'; ?>
    <script>
        // Header
        const header = document.getElementById("header");
        window.addEventListener('scroll', function () {
            if (window.pageYOffset > 120) {
                header.classList.remove('transparent');
            } else {
                header.classList.add('transparent');
            }
        });
    </script>
<?php get_footer(); ?>