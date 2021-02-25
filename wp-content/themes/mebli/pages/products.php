<?php /* Template Name: Page - Products */ ?>
<?php get_header(); ?>
<section class='review'>
    <div class='container'>
        <div class='review-inner'>
            <div class='review-slider'>
                <div class="swiper-container swiper-review-top">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-1.jpg'
                                 alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-2.jpg'
                                 alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-3.jpg'
                                 alt=''>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container swiper-review">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-1.jpg'
                                 alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-2.jpg'
                                 alt=''>
                        </div>
                        <div class="swiper-slide">
                            <img src='<?php echo get_template_directory_uri() ?>/assets/images/baron-3.jpg'
                                 alt=''>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class='review-description'>
                <div class='description-text'>
                    <h2>Барон Мини</h2>
                    <h3>$599.00</h3>
                    <p>
                        Барон 140, является уменьшеной версией дивана Барон, со спальным местом, а также с двумя нишами
                        для белья, отлично подойдет если вам надо небольшой диван со всеми преимуществами большого,
                        вы можете заказать любые размеры.
                    </p>
                </div>
                <div class='review-buttons'>
                    <a href='#feature'>Характеристика</a>
                    <a href='#fabrics'>Ткани</a>
                    <a href='#transformation'>Анимация трансформации</a>
                </div>
                <a href='/ordering' class='btn'>Заказать</a>
            </div>
        </div>

    </div>
</section>
<!--<section id="feature" class='feature'>-->
<!--    <div class='container'>-->
<!--        <div class='feature-description'>-->
<!--            <h2>Характеристика</h2>-->
<!--            <div class='description-list'>-->
<!--                <div class='description-item'>-->
<!--                    <p>Характеристика</p>-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut-->
<!--                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class='description-item'>-->
<!--                    <p>Характеристика</p>-->
<!--                    <p>-->
<!--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut-->
<!--                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section id="fabrics" class='fabrics'>-->
<!--    <h2 class='title'>Ткани</h2>-->
<!--    <div class='container'>-->
<!--        <div class='fabrics-inner'>-->
<!--            <div class='fabrics-image'>-->
<!--                <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.png' alt=''>-->
<!--            </div>-->
<!--            <div class="swiper-container swiper-fabrics">-->
<!--                <!-- Additional required wrapper -->-->
<!--                <div class="swiper-wrapper">-->
<!--                    <!-- If we need navigation buttons -->-->
<!--                    <div class="swiper-button-prev"></div>-->
<!--                    <div class="swiper-button-next"></div>-->
<!--                    <!-- Slides -->-->
<!--                    <div class="swiper-slide">-->
<!--                        <div class='fabrics-material'>-->
<!--                            <div class='material-list'>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-1.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-2.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-3.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-4.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-5.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-6.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-7.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-8.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-9.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-10.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-11.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-12.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-13.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-14.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-15.jpg'-->
<!--                                         alt=''></div>-->
<!--                                <div class='material-item'>-->
<!--                                    <span>1</span>-->
<!--                                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/fabrics-image-16.jpg'-->
<!--                                         alt=''></div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!--<section id="transformation" class='transformation'>-->
<!--    <h2 class='title'>Анимация трансформации</h2>-->
<!--    <div class='container'>-->
<!--        <div class='transformation-inner'>-->
<!--            <div class='transformation-list'>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='transformation-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg' alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--                <div class='item-image'>-->
<!--                    <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.jpg'-->
<!--                         alt=''>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<?php //include get_template_directory() . '/template-part/previously-product.php'; ?>
<?php get_footer(); ?>
