<?php
/**
 * Template part for displaying Sales Leaders in the sidebar.
 *
 * @package BestMebel
 */
?>
<section class="widget sales-leaders-widget">
    <h3 class="widget-title"><?php esc_html_e( 'Лидеры продаж', 'bestmebel' ); ?></h3>
    <div class="sales-leaders-list">
        <?php
        // Placeholder for 2-3 mini product cards.
        // This would later be populated by a custom query (e.g., for featured products or best-sellers).
        for ( $i = 1; $i <= 3; $i++ ) : ?>
            <div class="mini-product-card">
                <a href="#" class="mini-product-image-link">
                    <img src="https://placehold.co/80x80/F0F0F0/grey?text=<?php echo rawurlencode("Товар $i"); ?>" alt="<?php esc_attr_e( 'Лидер продаж', 'bestmebel' ); ?> <?php echo $i; ?>">
                </a>
                <div class="mini-product-details">
                    <h4 class="mini-product-title"><a href="#">Миниатюрный товар <?php echo $i; ?></a></h4>
                    <div class="rating">⭐⭐⭐⭐⭐</div>
                    <div class="price-section">
                        <span class="current-price"><?php echo number_format( mt_rand(1500, 5000), 0, '.', ' ' ); ?> руб.</span>
                        <?php if ( $i % 2 == 0 ) : // Add old price for some items ?>
                            <span class="old-price"><?php echo number_format( mt_rand(5500, 8000), 0, '.', ' ' ); ?> руб.</span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
