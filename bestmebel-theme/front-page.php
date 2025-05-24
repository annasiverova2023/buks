<?php
/**
 * The template for displaying the front page.
 *
 * @package BestMebel
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Sections in order as per design/previous implementation
    get_template_part( 'template-parts/pre-hero-icons' );
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/category-teasers' ); // Renamed from category-grid
    get_template_part( 'template-parts/user-reviews' );     // Renamed from reviews-slider
    get_template_part( 'template-parts/documents-thanks' ); // Split from certificates
    get_template_part( 'template-parts/documents-certificates' ); // Split from certificates
    get_template_part( 'template-parts/advantages' );
    get_template_part( 'template-parts/feedback-form' );

    // Placeholder content logic (can be removed if all sections are always active)
    /*
    if ( ! has_action( 'bestmebel_front_page_sections_output_done' ) ) { 
        echo '<div class="container">';
        echo '<h1>' . esc_html__( 'Welcome to BestMebel', 'bestmebel' ) . '</h1>';
        echo '<p>' . esc_html__( 'Front page content will be displayed here. Sections are being developed.', 'bestmebel' ) . '</p>';
        echo '</div>';
    }
    */
    
    // Action hook for adding sections - can be used by child themes or other plugins
    // do_action( 'bestmebel_front_page_sections' );
    ?>

</main><!-- #main -->

<?php
// Get the sidebar if it's intended for the front page.
get_sidebar();
?>

<?php
get_footer();
