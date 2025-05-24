<?php
/**
 * Register Custom Post Types
 *
 * @package BestMebel
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register Reviews, Certificates, and Acknowledgments CPTs.
 */
function bestmebel_register_cpts() {

    // Reviews CPT
    $review_labels = array(
        'name'                  => _x( 'Отзывы', 'Post type general name', 'bestmebel' ),
        'singular_name'         => _x( 'Отзыв', 'Post type singular name', 'bestmebel' ),
        'menu_name'             => _x( 'Отзывы', 'Admin Menu text', 'bestmebel' ),
        'name_admin_bar'        => _x( 'Отзыв', 'Add New on Toolbar', 'bestmebel' ),
        'add_new'               => __( 'Добавить новый', 'bestmebel' ),
        'add_new_item'          => __( 'Добавить новый отзыв', 'bestmebel' ),
        'new_item'              => __( 'Новый отзыв', 'bestmebel' ),
        'edit_item'             => __( 'Редактировать отзыв', 'bestmebel' ),
        'view_item'             => __( 'Смотреть отзыв', 'bestmebel' ),
        'all_items'             => __( 'Все отзывы', 'bestmebel' ),
        'search_items'          => __( 'Искать отзывы', 'bestmebel' ),
        'parent_item_colon'     => __( 'Родительский отзыв:', 'bestmebel' ),
        'not_found'             => __( 'Отзывы не найдены.', 'bestmebel' ),
        'not_found_in_trash'    => __( 'В корзине отзывы не найдены.', 'bestmebel' ),
        'featured_image'        => _x( 'Фото автора', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'bestmebel' ),
        'set_featured_image'    => _x( 'Установить фото автора', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'bestmebel' ),
        'remove_featured_image' => _x( 'Удалить фото автора', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'bestmebel' ),
        'use_featured_image'    => _x( 'Использовать как фото автора', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'bestmebel' ),
    );
    $review_args = array(
        'labels'             => $review_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'reviews' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20, // Below Pages
        'supports'           => array( 'title', 'editor', 'thumbnail' ), // Title (Reviewer Name), Editor (Review Text), Thumbnail (Reviewer Photo)
        'menu_icon'          => 'dashicons-testimonial',
        'show_in_rest'       => true, // Enable Gutenberg editor
    );
    register_post_type( 'review', $review_args );

    // Certificates CPT
    $certificate_labels = array(
        'name'                  => _x( 'Сертификаты', 'Post type general name', 'bestmebel' ),
        'singular_name'         => _x( 'Сертификат', 'Post type singular name', 'bestmebel' ),
        'menu_name'             => _x( 'Сертификаты', 'Admin Menu text', 'bestmebel' ),
        'name_admin_bar'        => _x( 'Сертификат', 'Add New on Toolbar', 'bestmebel' ),
        'add_new'               => __( 'Добавить новый', 'bestmebel' ),
        'add_new_item'          => __( 'Добавить новый сертификат', 'bestmebel' ),
        'new_item'              => __( 'Новый сертификат', 'bestmebel' ),
        'edit_item'             => __( 'Редактировать сертификат', 'bestmebel' ),
        'view_item'             => __( 'Смотреть сертификат', 'bestmebel' ),
        'all_items'             => __( 'Все сертификаты', 'bestmebel' ),
        'search_items'          => __( 'Искать сертификаты', 'bestmebel' ),
        'not_found'             => __( 'Сертификаты не найдены.', 'bestmebel' ),
        'not_found_in_trash'    => __( 'В корзине сертификаты не найдены.', 'bestmebel' ),
        'featured_image'        => _x( 'Изображение сертификата', 'Overrides the “Featured Image” phrase for this post type.', 'bestmebel' ),
        'set_featured_image'    => _x( 'Установить изображение', 'Overrides the “Set featured image” phrase for this post type.', 'bestmebel' ),
        'remove_featured_image' => _x( 'Удалить изображение', 'Overrides the “Remove featured image” phrase for this post type.', 'bestmebel' ),
        'use_featured_image'    => _x( 'Использовать как изображение', 'Overrides the “Use as featured image” phrase for this post type.', 'bestmebel' ),
    );
    $certificate_args = array(
        'labels'             => $certificate_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'certificates' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 21,
        'supports'           => array( 'title', 'thumbnail' ), // Title (Certificate Name), Thumbnail (Certificate Scan)
        'menu_icon'          => 'dashicons-awards',
        'show_in_rest'       => true,
    );
    register_post_type( 'certificate', $certificate_args );

    // Acknowledgments CPT
    $acknowledgment_labels = array(
        'name'                  => _x( 'Благодарности', 'Post type general name', 'bestmebel' ),
        'singular_name'         => _x( 'Благодарность', 'Post type singular name', 'bestmebel' ),
        'menu_name'             => _x( 'Благодарности', 'Admin Menu text', 'bestmebel' ),
        'add_new'               => __( 'Добавить новую', 'bestmebel' ),
        'add_new_item'          => __( 'Добавить благодарность', 'bestmebel' ),
        // ... other labels similar to certificates ...
        'featured_image'        => _x( 'Изображение благодарности', 'Overrides the “Featured Image” phrase for this post type.', 'bestmebel' ),
        'set_featured_image'    => _x( 'Установить изображение', 'Overrides the “Set featured image” phrase for this post type.', 'bestmebel' ),
    );
    // For brevity, reusing some labels from certificate, but you might want them to be unique
    $acknowledgment_labels['name_admin_bar'] = _x( 'Благодарность', 'Add New on Toolbar', 'bestmebel' );
    $acknowledgment_args = array(
        'labels'             => $acknowledgment_labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'acknowledgments' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 22,
        'supports'           => array( 'title', 'thumbnail' ), // Title (Acknowledgment Name), Thumbnail (Acknowledgment Scan)
        'menu_icon'          => 'dashicons-heart',
        'show_in_rest'       => true,
    );
    register_post_type( 'acknowledgment', $acknowledgment_args );

    // Example: Flush rewrite rules on theme activation/deactivation OR when CPTs change.
    // Not strictly needed here as it's better done in a theme activation hook.
    // flush_rewrite_rules();
}
add_action( 'init', 'bestmebel_register_cpts' );
