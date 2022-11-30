<?php
function gd_register_assets()
{
    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/vendor/modernizr-3.6.0.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery-custom', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('scrolling', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), '1.0', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js',array(), '1.0', true);

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style('style_theme', get_stylesheet_uri(), array(), '1.0');

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/images/favicon.png', array(), '1.0');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('LineIcons-min', get_template_directory_uri() . '/assets/css/LineIcons.css', array(), '1.0');
    wp_enqueue_style('magnific-popup-min', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0');
    wp_enqueue_style('slick-min', get_template_directory_uri() . '/assets/css/slick', array(), '1.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0');
    wp_enqueue_style('default-min', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style('owl.carousel.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0');
    wp_enqueue_style('owl.theme.default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array(), '1.0');
    wp_enqueue_style('owl.carousel.animate.css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array(), '3.7.0');
}

add_action('wp_enqueue_scripts', 'gd_register_assets');

add_action('init', function () {
    register_nav_menu('header-menu', __('Header Menu'));
});

function atg_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'header-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

function add_specific_menu_location_atts( $atts, $item, $args ) {
    if($args->theme_location == 'header-menu') {
        // add the desired attributes:
        $atts['class'] = 'page-scroll';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );


add_action( 'init', 'custom_post_type' );

function custom_post_type() {
    register_post_type( 'gdslider',
        array(
            'labels' => array(
                'name' => __( 'Slider' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'slider'),
        )
    );
    register_post_type( 'gdportfolio',
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
        )
    );

    $labels = array(
        'name'              => _x( 'Gallery', 'taxonomy general name' ),
        'singular_name'     => _x( 'Galleries', 'taxonomy singular name' ),
        'search_items'      => __( 'Search gallery picture' ),
        'all_items'         => __( 'All gallery' ),
        'parent_item'       => __( 'Parent galleries' ),
        'parent_item_colon' => __( 'Parent gallery:' ),
        'edit_item'         => __( 'Edit gallery' ),
        'update_item'       => __( 'Update gallery' ),
        'add_new_item'      => __( 'Add New gallery' ),
        'new_item_name'     => __( 'New gallery Name' ),
        'menu_name'         => __( 'Galleries' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'gallery' ],
    );
    register_taxonomy( 'gallery', [ 'post' ], $args );
}