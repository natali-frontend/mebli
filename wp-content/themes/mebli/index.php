<?php get_header(); ?>
<?php
    $price = get_field_object('product_price');
    $images = get_field_object('product_images');
    $description = get_field_object('product_description');
?>
<section class='review'>
    <div class='review-zoom'>
        <div class='review-zoom-slider'>
            <div class='close'>
                <span></span>
            </div>
            <div class="swiper-container swiper-review-zoom">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    foreach ($images['value'] as $image_id): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo $image_id['url']; ?>"
                                 alt=''>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class='container'>
        <div class='review-inner'>
            <div class='review-slider'>
                <div class="swiper-container swiper-review-top">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                            foreach ($images['value'] as $image_id): ?>
                                <div class="swiper-slide">
                                    <img class='review-zoom-image' src="<?php echo $image_id['url']; ?>" alt=''>
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-container swiper-review">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php
                            foreach ($images['value'] as $image_id): ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $image_id['url']; ?>"
                                         alt=''>
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="review-description">
                <div class="description-text">
                    <h2><?php echo get_the_title(); ?></h2>
                    <h3><?php echo $price['value']; ?></h3>
                    <p><?php echo $description['value']; ?></p>
                </div>
                <div class='review-buttons'>
                    <a href='#feature'>Характеристика</a>
<!--                    <a href='#fabrics'>Ткани</a>-->
<!--                    <a href='#transformation'>Анимация трансформации</a>-->
                </div>
                <a id="ordering" href='ordering' class='btn' data-name="<?php echo get_the_title(); ?>" data-description="<?php echo $description['value']; ?>">Заказать</a>
            </div>
        </div>

    </div>
</section>
<section id="feature" class='feature'>
    <div class='container'>
        <div class='feature-description'>
            <h2>Характеристика</h2>
            <div class='description-list'>
                <div class='description-item'>
                    <h3>Размеры</h3>
                    <p>
                        Стандартные размеры кресла Лорд: 100см ширина, 100см глубина, 105см высота.
                        Спальное место кресла Лорд: 55см ширина, 200см глубина.
                    </p>
                </div>
                <div class='description-item'>
                    <h3>Опции</h3>
                    <p>
                        Кресло Лорд можно по вашему желанию, изготовить с увеличенными параметрами ширины, добавить под
                        сиденьем нишу для белья, или раскладное спальное место,
                        если же Вы не нуждаетесь в даных опциях, можно изготовить полностью нераскладное кресло. Или
                        Вам нужен другой вариант обивки, тогда свяжитесь с нашим менеджером,
                        и он подберет подходящую под ваши требования ткань.
                    </p>
                </div>
                <div class='description-item'>
                    <h3>Изготовление/ доствка</h3>
                    <p>
                        Мебель изготовляется от 7 до 14 дней после поступления заказа, с гарантийным сроком 12 месяцев,
                        доствка по Киеву бесплатная, по Киевской области рассчитывается отдельно.
                        Во все остальные области Украины можно осуществить доставку через почтовую службу "Нова пошта",
                        или самовывозом с производства.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class='advantages products-advantages'>
    <div class='advantages-content'>
        <div class='container'>
            <div class='advantages-inner'>
                <!-- Slider main container -->
                <div class="swiper-container swiper-products-advantages swiper-no-swiping">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Оплата</h4>
                                    <ul>
                                        <li>Наличные при получении</li>
                                        <li>Безналичный расчет</li>
                                        <li>Рассрочка 0%</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Доставка</h4>
                                    <ul>
                                        <li>Самовывоз из магазина в Киеве</li>
                                        <li>Доставка по Киеву</li>
                                        <li>Доставка по тарифам перевозчика</li
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Гарантия</h4>
                                    <ul>
                                        <li>Гарантия 24 месяца</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class='inner-item'>
                                <div class='item-description'>
                                    <h4>Обмен / Возврат</h4>
                                    <ul>
                                        <li>Возврат в течение 14 дней согласно ЗУ "О защите прав потребителя"</li>
                                    </ul>
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
<section class='mattress'>
    <h2 class='title'>Матрас</h2>
    <div class='container'>
        <div class='mattress-inner'>
            <div class='mattress-description'>
                <ul>
                    <li>Мебельная ткань</li>
                    <li>Синтепонт</li>
                    <li>Пенополиуретан</li>
                    <li>Войлок</li>
                    <li>Пружинный блок</li>
                    <li>Каркас сосна</li>
                </ul>
            </div>
            <div class='mattress-image'>
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/mattress.png' alt=''>
            </div>
        </div>
    </div>
</section>
<!--<section id="fabrics" class='fabrics'>-->
<!--    <h2 class='title'>Ткани</h2>-->
<!--    <div class='container'>-->
<!--        <div class='fabrics-inner'>-->
<!--            <div class='fabrics-image'>-->
<!--                <img src='--><?php //echo get_template_directory_uri() ?><!--/assets/images/catalog-image-1.png' alt=''>-->
<!--            </div>-->
<!--            <div class="swiper-container swiper-fabrics">-->
<!--                // Additional required wrapper-->
<!--                <div class="swiper-wrapper">-->
<!--                   // If we need navigation buttons-->
<!--                    <div class="swiper-button-prev"></div>-->
<!--                    <div class="swiper-button-next"></div>-->
<!--                    // Slides-->
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
