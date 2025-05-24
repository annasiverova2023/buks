<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BestMebel
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                // Placeholder for post meta like date, author, categories etc.
                // Example: bestmebel_posted_on();
                // bestmebel_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php // bestmebel_post_thumbnail(); // Function to display post thumbnail ?>
    <div class="entry-thumbnail-placeholder">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); // Or 'medium', 'thumbnail', or custom size ?>
        <?php else : ?>
            <!-- Optional: Placeholder if no thumbnail -->
            <img src="https://placehold.co/800x400/EEE/CCC?text=No+Image" alt="<?php esc_attr_e('Placeholder Image', 'bestmebel'); ?>" />
        <?php endif; ?>
    </div>


    <div class="entry-content">
        <?php
        the_content(
            sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. Only visible to screen readers */
                    __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bestmebel' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                get_the_title()
            )
        );

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bestmebel' ),
                'after'  => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php // bestmebel_entry_footer(); // Placeholder for categories, tags, comments link ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
