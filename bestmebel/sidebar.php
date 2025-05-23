<?php
/**
 * The sidebar containing the main widget area and category menu.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BestMebel
 */

// Check if a dynamic sidebar is active and has widgets.
// For now, we are focusing on the custom category menu and sales leaders.
// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//  return;
// }
?>

<aside id="secondary" class="widget-area side-menu">
    <section class="widget widget_categories furniture-categories">
        <h2 class="widget-title"><?php esc_html_e( 'Каталог мебели', 'bestmebel' ); ?></h2>
        <ul>
            <?php
            // Placeholder for furniture categories.
            // This would ideally use wp_list_categories or a custom walker
            // if 'product_cat' taxonomy from WooCommerce is used, or a custom taxonomy.
            // For now, static list as per original HTML structure:
            $categories = array(
                'Гостинные', 'Кухни', 'Спальни', 'Ванные', 'Прихожие',
                'Мебель для офиса', 'Стеллажи', 'Комоды', 'Стулья и кресла',
                'Детская мебель', 'Садовая мебель', 'Освещение'
            );
            foreach ( $categories as $category ) {
                echo '<li><a href="#"><span class="category-icon">[icon]</span> ' . esc_html( $category ) . '</a></li>';
            }
            ?>
        </ul>
    </section>

    <?php
    // Include the Sales Leaders section
    get_template_part( 'template-parts/sidebar-leaders' );
    ?>

    <?php // dynamic_sidebar( 'sidebar-1' ); // For standard WordPress widgets, if needed later ?>
</aside><!-- #secondary -->
