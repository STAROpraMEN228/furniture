<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<section class="services">
    <div class="container">
        <h2 class="title">Послуги</h2>
        <div class="services__inner">
            <div class="services__content">
                <?php the_field('service-text'); ?>
                    <a class="button button--decor" href="#">Консультація експерта</a>
            </div>
            <ol class="services__list">
            <?php the_field('service-item'); ?>
            </ol>
        </div>
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="benefits__inner">
            <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php bloginfo('template_url'); ?>/assets/images/gg.png" alt="car">
            <div class="benefits__content">
                <h2 class="title benefits__title">Чому ми?</h2>
                <ul class="benefits__list">
                    <li class="benefits__item">
                        <p class="benefits__item-num">650</p>
                        <p class="benefits__item-title">Успішно створених та встановлених замовлень</p>
                        <p class="benefits__item-text">
                            великий досвід роботи в сфері виготовлення та встановлення елементів декору та меблів
                        </p>
                    </li>
                    <li class="benefits__item">
                        <p class="benefits__item-num">5</p>
                        <p class="benefits__item-title">років на ринку України</p>
                        <p class="benefits__item-text">
                            Працюємо по всій території України, за домовленістю
                        </p>
                    </li>
                    <li class="benefits__item">
                        <p class="benefits__item-num">100%</p>
                        <p class="benefits__item-title">довіра клієнта</p>
                        <p class="benefits__item-text">
                            Онлайн звіт. Ви завжди можете бачити стан створення та обробки вашого замовлення
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="carousel">
    <div class="container">
        <h2 class="title">
            Створені нами меблі
        </h2>
        <div class="carousel__inner">

<?php

global $post;

$myposts = get_posts([

'numberposts' => -1,
'category' => 2

]);

if( $myposts){
    foreach ($myposts as $post){
        setup_postdata ( $post); ?>

<div class="carousel__item">
                <div class="carousel__item-box">
                   <!-- <img class="carousel__item-img" src="<?php bloginfo('template_url'); ?>/assets/images/carousel/1.jpg" alt=""> -->
                   <?php the_post_thumbnail(
                    array(380, 250),
                    array(
                        'class' => 'carousel__item-img'
                    )
                   ); ?>
                    <h4 class="carousel__item-title"><?php the_title(); ?></h4>
                    <p class="carousel__item-text"><?php the_content(); ?></p>
                </div>
            </div>

        <?php }} wp_reset_postdata();?>

            
        </div>
    </div>
</section>



<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__info">
                <h2 class="title">
                    Контакти
                </h2>
                <ul class="contacts__list">
                    <li class="contacts__item">
                        <p class="contacts__item-title">Адрес</p>
                        <p class="contacts__item-text">
                            <?php the_field('address'); ?>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Працюємо до:</p>
                        <p class="contacts__item-text">
                        <?php the_field('working-hours'); ?>
                        </p>
                    </li>
                    <li class="contacts__item">
                        <p class="contacts__item-title">Телефон</p>
                        <p class="contacts__item-text">
                        <?php the_field('phone'); ?>
                        </p>
                    </li>
                </ul>
            </div>
            <form class="contacts__form">
                <h2 class="title contacts__title">Залишити заявку</h2>
               <?php echo do_shortcode('[contact-form-7 id="26" title="Контактна форма"]') ?>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
