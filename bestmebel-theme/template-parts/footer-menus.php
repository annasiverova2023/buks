<?php
/**
 * Displays the footer navigation menu.
 *
 * @package BestMebel
 */

if ( has_nav_menu( 'footer' ) ) : ?>
    <nav class="footer-menu-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'bestmebel' ); ?>">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu', // Add your own class for styling
                'container'      => false,         // No container div around the ul
                'depth'          => 1,             // Typically footer menus are flat
            )
        );
        ?>
    </nav>
<?php else : ?>
    <p><?php esc_html_e( 'Please assign a menu to the "Footer Menu" location in Appearance > Menus.', 'bestmebel' ); ?></p>
<?php endif; ?>
