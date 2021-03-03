<?php /* Template Name: Page - Ordering */ ?>
<?php get_header(); ?>
<section class='ordering-description'>
    <div class='container'>
        <div class='description-inner'>
            <div class='description-content'>
                <h2>Связаться с менеджером</h2>
                <p>
                    После заполнения номера телефона и ФИО, вам перезвонит наш менеджер, с которым вы сможете обсудить
                    все интересующие вас вопросы, рассчитать точную стоимость заказа, дату доставки и другие детали
                    которые могут вас заинтересовать.
                </p>
            </div>
            <div class='description-image'>
                <?php $image = "/assets/images/sofa-2.png" ?>
                <img src='<?php echo get_template_directory_uri() . $image ?>' alt=''>
            </div>
        </div>
    </div>
</section>
<section class='ordering-order'>
    <div class='container'>
        <div class='order-inner'>
            <div class='order-form'>
                <h1>Форма заказа</h1>
                <?php echo do_shortcode('[contact-form-7 id="122" title="Contact form 1"]') ?>
            </div>
            <div class='order-description'>
                <div class='description-item'>
                    <h2 id="name">Продукт</h2>
                    <p id="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    </p>
                </div>
                <div class='description-item'>
                    <h2>Информация</h2>
                    <p>
                        После оформления заказа мы сразу приступим к его изготовлению, сроком до 14 дней.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
