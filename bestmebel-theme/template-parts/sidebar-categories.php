<?php
/**
 * Template part for displaying the furniture categories in the sidebar.
 * Extracted from sidebar.php
 * @package BestMebel
 */
?>
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
