<?php /* Template Name: Page - Catalog */ ?>
<?php get_header(); ?>
    <section class='catalog-inner'>
        <div class='container'>
            <ul class='inner-list'>
                <?php
                    $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $params = array(
                        'posts_per_page' => 10,
                        'post_type' => 'post',
                        'paged' => $current_page
                    );
                    query_posts($params);
                    while (have_posts()) : the_post(); ?>
                        <li class='inner-item'>
                            <?php
                                $price = get_field_object('product_price');
                                $images = get_field_object('product_images');
                            ?>
                            <a href='<?php echo get_permalink(); ?>' class='item-image'>
                                <div class='loading'>
                                    <img src='<?php echo get_template_directory_uri() ?>/assets/images/icons/loading.svg'
                                         alt=''>
                                </div>
                                <img class='main-image'
                                     src='<?php echo $images['value'][0]['url'] ?>'
                                     alt=''>
                            </a>
                            <div class='item-description'>
                                <h2><?php echo get_the_title(); ?></h2>
                                <p><?php echo $price['value']; ?></p>
                            </div>
                        </li>
                    <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php get_footer(); ?>