<?php
/**
 * Template part for displaying the Feedback Form section.
 *
 * @package BestMebel
 */
?>
<section class="feedback-form-section">
    <div class="container">
        <div class="feedback-layout">
            <div class="feedback-contact-info">
                <h3><?php esc_html_e( 'Свяжитесь с нами', 'bestmebel' ); ?></h3>
                <p><?php esc_html_e( 'Если у вас есть вопросы или вы хотите сделать заказ, оставьте заявку или свяжитесь с нами напрямую.', 'bestmebel' ); ?></p>
                <ul>
                    <li><span class="icon">📞</span> <a href="tel:+7XXXXXXXXXX">+7 (XXX) XXX-XX-XX</a></li>
                    <li><span class="icon">✉️</span> <a href="mailto:info@bestmebel.example.com">info@bestmebel.example.com</a></li>
                    <li><span class="icon">📍</span> <?php esc_html_e( 'г. Санкт-Петербург, ул. Мебельная, д.1', 'bestmebel' ); ?></li>
                </ul>
                <div class="messenger-icons">
                    <a href="#" class="messenger-icon vk-icon" title="VK">VK</a> <?php // Placeholder, replace with actual SVG/Font Icon ?>
                    <a href="#" class="messenger-icon tg-icon" title="Telegram">TG</a>
                    <a href="#" class="messenger-icon wa-icon" title="WhatsApp">WA</a>
                </div>
            </div>

            <div class="feedback-form-wrapper">
                <h3><?php esc_html_e( 'Оставить заявку', 'bestmebel' ); ?></h3>
                <form action="#" method="POST" class="feedback-form">
                    <div class="form-group">
                        <label for="feedback_name"><?php esc_html_e( 'Ваше имя', 'bestmebel' ); ?></label>
                        <input type="text" id="feedback_name" name="feedback_name" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback_phone"><?php esc_html_e( 'Ваш телефон', 'bestmebel' ); ?></label>
                        <input type="tel" id="feedback_phone" name="feedback_phone" required>
                    </div>
                    <div class="form-group">
                        <label for="feedback_message"><?php esc_html_e( 'Сообщение', 'bestmebel' ); ?></label>
                        <textarea id="feedback_message" name="feedback_message" rows="4"></textarea>
                    </div>
                    <button type="submit" class="cta-button form-submit-button"><?php esc_html_e( 'Оставить заявку', 'bestmebel' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</section>
