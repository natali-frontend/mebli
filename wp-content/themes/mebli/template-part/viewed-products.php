<section class='viewed-products'>
    <div class='container'>
        <!-- Slider main container-->
        <div class="swiper-container swiper-viewed">
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
                        if (get_field_object('product_viewed')): ?>
                            <?php
                            $price = get_field_object('product_price');
                            $images = get_field_object('product_images');
                            ?>
                            <div class="swiper-slide">
                                <div class='viewed-products-item'>
                                    <a href="<?php echo get_permalink(); ?>" class='item-image'>
                                        <img src="<?php echo $images['value'][0]['url'] ?>" alt=''>
                                    </a>
                                    <div class='item-description'>
                                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                        <p><?php echo $price['value']; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endif; endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>