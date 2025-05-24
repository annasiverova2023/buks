<?php
/**
 * Template part for displaying the Advantages block.
 *
 * @package BestMebel
 */

$advantages = array(
    array('icon' => '💎', 'text' => 'Мебель высокого качества'), // Placeholder icons
    array('icon' => '🛍️', 'text' => 'Широкий ассортимент'),
    array('icon' => '🛠️', 'text' => 'Сборка на месте'),
    array('icon' => '🏷️', 'text' => 'Большие скидки'),
    array('icon' => '🚚', 'text' => 'Бесплатная доставка'),
    array('icon' => '✨', 'text' => 'Новые цены') // Changed from "Новинки" based on description
);
?>
<section class="advantages-section">
    <div class="container">
        <?php // Optional: Add a section title here if desired, e.g., <h2 class="section-title">Наши преимущества</h2> ?>
        <div class="advantages-grid">
            <?php foreach ( $advantages as $advantage ) : ?>
                <div class="advantage-card">
                    <div class="advantage-icon"><?php echo esc_html( $advantage['icon'] ); ?></div>
                    <div class="advantage-text"><?php echo esc_html( $advantage['text'] ); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
