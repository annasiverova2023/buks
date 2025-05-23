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
    get_template_part( 'template-parts/hero' ); // Hero Block
    get_template_part( 'template-parts/category-grid' ); // Main Catalog Teaser (Category Grid)

    // User Reviews Slider
    // get_template_part( 'template-parts/reviews-slider' ); // To be created

    // "Acknowledgments" Block
    // get_template_part( 'template-parts/acknowledgments' ); // Or a generic 'certificates' part

    // "Certificates" Block
    // get_template_part( 'template-parts/certificates' ); // To be created

    // Advantages Block
    // get_template_part( 'template-parts/advantages' ); // To be created

    // Feedback Form
    // get_template_part( 'template-parts/feedback-form' ); // To be created

    // Placeholder content for the front page if sections aren't ready:
    // A more robust check might involve checking if the specific template parts exist or if a filter/action is used.
    // For now, this is a simplified placeholder logic.
    // We can assume if hero and category-grid are called, some content is intended.
    // if ( ! has_action( 'bestmebel_front_page_sections_output_done' ) ) { // Example of a custom hook
    //  echo '<div class="container">';
    //  echo '<h1>' . esc_html__( 'Welcome to BestMebel', 'bestmebel' ) . '</h1>';
    //  echo '<p>' . esc_html__( 'Front page content will be displayed here. Sections are being developed.', 'bestmebel' ) . '</p>';
    //  echo '</div>';
    // }
    
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
