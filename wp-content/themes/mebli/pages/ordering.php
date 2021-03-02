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
                <img src='<?php echo get_template_directory_uri() ?>/assets/images/sofa-2.png' alt=''>
            </div>
        </div>
    </div>
</section>
<section class='ordering-order'>
    <div class='container'>
        <div class='order-inner'>
            <div class='order-form'>
                <h1>Форма заказа</h1>
                <form>
                    <label>
                        <input type="text" name="name" placeholder='ПІБ' required>
                    </label>
                    <label class='form-email'>
                        <input type="email" name="email-address" placeholder='Email'>
                        <span>*Не обязательно</span>
                    </label>
                    <label>
                        <input type="tel" name="phone-number" placeholder='Моб. телефон' required>
                    </label>
                    <button type='submit' class='btn'>Отправить</button>
                </form>
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
