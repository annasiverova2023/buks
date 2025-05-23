<?php
/**
 * Template part for displaying the main category teaser grid on the front page.
 *
 * @package BestMebel
 */

// Placeholder data for categories
// In a real theme, this would come from CPTs, WooCommerce categories, or theme options.
$categories = array(
    array('name' => 'Комоды и тумбы', 'price' => '3500', 'img_text' => 'Комод', 'size' => 'size-1x1', 'color' => 'bg-light-yellow', 'img_color' => 'FFF6DA'),
    array('name' => 'Мебель для кухни', 'price' => '15000', 'img_text' => 'Кухня', 'size' => 'size-2x1', 'color' => 'bg-light-green', 'img_color' => 'E7F6EB'),
    array('name' => 'Стеллажи', 'price' => '4200', 'img_text' => 'Стеллаж', 'size' => 'size-1x1', 'color' => 'bg-pastel-blue', 'img_color' => 'DDEDF7'),
    array('name' => 'Шкафы', 'price' => '12000', 'img_text' => 'Шкаф', 'size' => 'size-2x2', 'color' => 'bg-peach', 'img_color' => 'FFF0E5'),
    array('name' => 'Кресла', 'price' => '5500', 'img_text' => 'Кресло', 'size' => 'size-1x1', 'color' => 'bg-light-lavender', 'img_color' => 'F2EAFE'),
    array('name' => 'Диваны', 'price' => '25000', 'img_text' => 'Диван', 'size' => 'size-2x1', 'color' => 'bg-light-gray', 'img_color' => 'F9F9F9'),
);
?>
<section class="product-catalog-teaser">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e( 'Интернет-магазин мебели BestMebel в Санкт-Петербурге', 'bestmebel' ); ?></h2>
        <div class="category-grid">
            <?php foreach ( $categories as $category ) : ?>
                <div class="category-card <?php echo esc_attr( $category['size'] ); ?> <?php echo esc_attr( $category['color'] ); ?>">
                    <a href="#" class="category-card-link"> <?php // Link to category page ?>
                        <img src="https://placehold.co/300x200/<?php echo esc_attr($category['img_color']); ?>/333?text=<?php echo rawurlencode($category['img_text']); ?>" alt="<?php echo esc_attr( $category['name'] ); ?>" class="category-image">
                        <div class="category-info">
                            <h3><?php echo esc_html( $category['name'] ); ?></h3>
                            <p><?php printf( esc_html__( 'от %s руб.', 'bestmebel' ), esc_html( number_format_i18n( (float)$category['price'] ) ) ); ?></p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
