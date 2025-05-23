<?php
/**
 * Template part for displaying "Acknowledgments" and "Certificates" sections.
 *
 * @package BestMebel
 */

// Placeholder data for acknowledgments
$acknowledgments = array(
    array('img_url' => 'https://placehold.co/200x280/ECECEC/777?text=Благодарность+1', 'title' => 'Благодарственное письмо от Партнера X'),
    array('img_url' => 'https://placehold.co/200x280/F0F0F0/666?text=Сертификат+А', 'title' => 'Сертификат качества продукции'),
    array('img_url' => 'https://placehold.co/200x280/EAEAEA/555?text=Благодарность+2', 'title' => 'Диплом участника выставки'),
    array('img_url' => 'https://placehold.co/200x280/F5F5F5/444?text=Сертификат+Б', 'title' => 'Сертификат официального дилера'),
);

// Placeholder data for actual certificates (more official looking)
$official_certificates = array(
    array('img_url' => 'https://placehold.co/200x280/D0D0D0/333?text=ГОСТ+Стандарт', 'title' => 'Сертификат соответствия ГОСТ'),
    array('img_url' => 'https://placehold.co/200x280/C8C8C8/222?text=ISO+9001', 'title' => 'Сертификат ISO 9001'),
    array('img_url' => 'https://placehold.co/200x280/B0B0B0/111?text=Эко+Сертификат', 'title' => 'Экологический сертификат'),
    array('img_url' => 'https://placehold.co/200x280/A8A8A8/000?text=Награда+Качества', 'title' => 'Награда "Знак Качества"'),
);
?>

<section class="documents-slider-section acknowledgments-section">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e( 'Благодарности', 'bestmebel' ); ?></h2>
        <div class="documents-slider-wrapper"> <?php // JS target ?>
            <?php foreach ( $acknowledgments as $doc ) : ?>
                <div class="document-item">
                    <div class="document-image-wrapper">
                        <img src="<?php echo esc_url( $doc['img_url'] ); ?>" alt="<?php echo esc_attr( $doc['title'] ); ?>">
                    </div>
                    <?php /* <h4 class="document-title"><?php echo esc_html( $doc['title'] ); ?></h4> */ ?>
                </div>
            <?php endforeach; ?>
        </div>
        <?php // Placeholder for slider navigation (arrows/dots) ?>
    </div>
</section>

<section class="documents-slider-section certificates-section">
    <div class="container">
        <h2 class="section-title"><?php esc_html_e( 'Сертификаты', 'bestmebel' ); ?></h2>
        <div class="documents-slider-wrapper"> <?php // JS target ?>
            <?php foreach ( $official_certificates as $doc ) : ?>
                <div class="document-item official-document-item">
                    <div class="document-image-wrapper">
                        <img src="<?php echo esc_url( $doc['img_url'] ); ?>" alt="<?php echo esc_attr( $doc['title'] ); ?>">
                    </div>
                    <?php /* <h4 class="document-title"><?php echo esc_html( $doc['title'] ); ?></h4> */ ?>
                </div>
            <?php endforeach; ?>
        </div>
        <?php // Placeholder for slider navigation (arrows/dots) ?>
    </div>
</section>
