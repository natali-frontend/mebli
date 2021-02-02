<?php
    /**
     * The template for displaying the footer
     *
     * Contains the opening of the #site-footer div and all content after.
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage Twenty_Twenty
     * @since 1.0.0
     */

?>
</main>
<footer class='footer'>
    <div class='footer-top'>
        <div class='container'>
            <div class='footer-top-content'>
                <a href='/' class='logo'>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/logo-white.svg" alt="">
                </a>
                <ul class='tel'>
                    <li>
                        <a href='tel:+(380)900-000-000'>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/call.svg" alt="">
                            +(380)900-000-000
                        </a>
                    </li>
                    <li>
                        <a href='tel:+(380)900-000-000'>+(380)900-000-000</a>
                    </li>
                </ul>
                <ul class='info'>
                    <li class='email'>
                        <a href='mailto:isainko@gmail.com'>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/email.svg" alt="">
                            isainko@gmail.com
                        </a>
                    </li>
                    <li class='address'>
                        <a href='mailto:isainko@gmail.com'>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/geolocation.svg"
                                 alt="">
                            вул. Lorem ipsum 8
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class='footer-bottom'>
        <div class='container'>
            <p>
                Использование материалов без письменного согласия администрации сайта запрещено.
                © 2020 mebl-i.com | Все права защищены
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
