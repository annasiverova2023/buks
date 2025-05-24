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
    <?php
    // Display the furniture categories
    get_template_part( 'template-parts/sidebar-categories' );
    ?>

    <?php
    // Include the Sales Leaders section
    // Note: sidebar-leaders.php was renamed to sales-leaders.php in Task 2
    get_template_part( 'template-parts/sales-leaders' );
    ?>

    <?php // dynamic_sidebar( 'sidebar-1' ); // For standard WordPress widgets, if needed later ?>
</aside><!-- #secondary -->
