<?php
/**
 * Template part for displaying the hero block on the front page.
 *
 * @package BestMebel
 */
?>
<section class="hero-banner">
    <?php // The pre-hero-icons div has been extracted to pre-hero-icons.php ?>
    <div class="hero-content">
        <div class="container">
            <div class="hero-text">
                <h1><?php esc_html_e( 'Найдёте дешевле — мы сделаем скидку!', 'bestmebel' ); ?></h1>
                <p><?php esc_html_e( 'Мы гарантируем лучшие цены на всю нашу мебель. Ознакомьтесь с условиями акции.', 'bestmebel' ); // Placeholder subheadline ?></p>
                <a href="#" class="cta-button hero-button"><?php esc_html_e( 'Подробнее', 'bestmebel' ); ?></a>
            </div>
            <div class="hero-illustration">
                <?php // Placeholder for 3D illustration of a chair and discount icons ?>
                <img src="https://placehold.co/500x350/E8D5C4/333333?text=3D+Illustration+(Кресло)" alt="<?php esc_attr_e( '3D иллюстрация кресла', 'bestmebel' ); ?>">
                <div class="discount-icons-placeholder">
                    <?php // esc_html_e( 'Discount icons here', 'bestmebel' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
