<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BestMebel
 */
?>
    </div><!-- .container -->
</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-branding">
                <?php
                // Placeholder for Logo: "BestMebel" + phone
                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    // Display custom logo if set, but we might want a specific footer version
                    // For now, let's assume simple text or reuse main logo logic
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                    echo '<span class="site-title-text">BestMebel</span>';
                    // echo '<div class="logo-graphics"><span></span><span></span><span></span></div>'; // Optional graphics
                    echo '</a>';
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                    echo '<span class="site-title-text">BestMebel</span>';
                    echo '</a>';
                }
                ?>
                <span class="footer-phone-number">+7 (XXX) XXX-XX-XX</span>
            </div>

            <div class="footer-social-media">
                <?php // Placeholder for social media icons ?>
                <a href="#" class="social-icon vk">VK</a>
                <a href="#" class="social-icon ok">OK</a>
                <a href="#" class="social-icon youtube">YT</a>
                <a href="#" class="social-icon telegram">TG</a>
            </div>
        </div>
    </div>

    <div class="footer-navigation">
        <div class="container">
            <?php
            // We will create this template part next
            get_template_part( 'template-parts/footer-menus' );
            ?>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="company-requisites">
                <?php // Placeholder for company requisites ?>
                <p>ООО "БестМебель", ИНН 1234567890, ОГРН 1234567890123</p>
                <p>Юридический адрес: г. Санкт-Петербург, ул. Мебельная, д. 1</p>
            </div>
            <div class="legal-info">
                <?php // Placeholder for legal information ?>
                <p>&copy; <?php echo date_i18n( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Все права защищены.</p>
                <p><a href="#">Политика конфиденциальности</a></p>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
