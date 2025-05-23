<?php
/**
 * Displays the header navigation menu.
 *
 * @package BestMebel
 */

if ( has_nav_menu( 'primary' ) ) : ?>
    <div class="menu-primary-container">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu', // Add your own class for styling
                'container'      => false,          // No container div around the ul
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            )
        );
        ?>
    </div>
<?php else : ?>
    <p><?php esc_html_e( 'Please assign a menu to the "Primary Menu" location.', 'bestmebel' ); ?></p>
<?php endif; ?>
