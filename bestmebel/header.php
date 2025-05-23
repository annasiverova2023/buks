<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
    <div class="header-top-bar">
        <div class="container">
            <div class="site-branding">
                <?php
                // Placeholder for Logo: "BestMebel" + 3 vertical columns graphic
                // The graphic part will be handled by CSS later.
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    the_custom_logo();
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                    echo '<span class="site-title-text">BestMebel</span>';
                    echo '<div class="logo-graphics"><span></span><span></span><span></span></div>'; // Spans for CSS styling
                    echo '</a>';
                }
                ?>
            </div>

            <div class="search-bar-container">
                <?php // get_search_form(); // We will style this later or use a custom one ?>
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'bestmebel' ); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Поиск среди 90 000 товаров', 'placeholder', 'bestmebel' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><span class="search-icon">🔍</span></button> <?php // Placeholder icon ?>
                </form>
            </div>

            <div class="header-contact-info">
                <span class="phone-number">+7 (XXX) XXX-XX-XX</span>
                <span class="working-hours">Часы работы: 10:00 - 20:00</span>
                <div class="user-actions">
                    <a href="#" class="profile-icon">👤</a> <?php // Placeholder icon ?>
                    <a href="#" class="favorites-icon">⭐</a> <?php // Placeholder icon ?>
                    <a href="#" class="cart-icon">🛒</a> <?php // Placeholder icon ?>
                </div>
                <button class="cta-button header-cta-button">Заказать звонок</button>
            </div>
        </div>
    </div>

    <nav id="site-navigation" class="main-navigation">
        <div class="container">
            <?php
            // We will create this template part next
               get_template_part( 'template-parts/menus/menu-header' );
            ?>
            <!-- Placeholder for wp_nav_menu -->
               <!--
            <ul class="primary-menu-placeholder">
                 <li><a href="#">Каталог</a></li>
                 <li><a href="#">Оплата</a></li>
                 <li><a href="#">Доставка</a></li>
                 <li><a href="#">Отзывы</a></li>
                 <li><a href="#">Контакты</a></li>
                 <li><a href="#">Статьи</a></li>
                 <li><a href="#">Акции</a></li>
                 <li><a href="#">Вопросы</a></li>
            </ul>
               -->
        </div>
    </nav>
</header>

<div id="content" class="site-content">
    <div class="container">
