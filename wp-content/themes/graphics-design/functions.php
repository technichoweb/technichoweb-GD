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
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), '1.0', true);
    wp_enqueue_script('waipoint', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), '1.0', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('service-script', get_template_directory_uri() . '/assets/js/service-script.js', array('jquery-custom'), '1.0', true);
    wp_enqueue_script('TweenMax',  'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js', array('jquery-custom'), '1.0', true);
//    wp_enqueue_script('owl.carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js',array(), '1.0', true);

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style('style_theme', get_stylesheet_uri(), array(), '1.0');

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('LineIcons-min', get_template_directory_uri() . '/assets/css/LineIcons.css', array(), '1.0');
    wp_enqueue_style('magnific-popup-min', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0');
    wp_enqueue_style('slick-min', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0');
    wp_enqueue_style('default-min', get_template_directory_uri() . '/assets/css/default.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');
    wp_enqueue_style('service-style', get_template_directory_uri() . '/assets/css/service-style.css', array(), '1.0');
//    wp_enqueue_style('owl.carousel.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(), '1.0');
//    wp_enqueue_style('owl.theme.default', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', array(), '1.0');
//    wp_enqueue_style('owl.carousel.animate.css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', array(), '3.7.0');
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

    register_post_type( 'gdservices',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'service'),
        )
    );


    register_post_type( 'gdclipping',
        array(
            'labels' => array(
                'name' => __( 'Détourage' ),
                'singular_name' => __( 'Détourage' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'clipping'),
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

function ajax_popup_slick() {
    wp_enqueue_script(
        'popup_ajax_slick',
        get_template_directory_uri() . '/assets/js/ajax.slick.js', [ 'jquery' ],
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'ajax_popup_slick' );

add_action('wp_ajax_get_images','get_data_images');
add_action('wp_ajax_nopriv_get_images','get_data_images');

/**
 * get all images gallery
 */
function get_data_images()
{
    $taxonomyName = 'gallery';
    $termId = (int)$_POST['term_id'];
    $childTerms = get_term_children($termId, $taxonomyName);
    $result = [];

    if (isset($childTerms) && !empty($childTerms)) {
        foreach ($childTerms as $childTerm) {
            $term = get_term_by('id', $childTerm, $taxonomyName);
            $result[] = [
                'slug' => $term->slug,
                'term_id' => $term->term_id,
                'url_image' => get_field('gd_photo', $taxonomyName . '_' . $term->term_id)['url']
            ];
        }
    } else {
        $term = get_term_by('id', $termId, $taxonomyName);
        $isSlickable = '';
        $termName = explode('-', $term->slug);
        if (isset($termName) && array_key_exists(0, $termName)) {
            $isSlickable = $termName[0];
        }
        $result[] = [
            'slug' => $term->slug,
            'IsSlickable' => $isSlickable == 'background' || $isSlickable == 'brochure',
            'BgImage' => $isSlickable == 'background',
            'term_id' => $term->term_id,
            'url_image' => get_field('gd_photo', $taxonomyName . '_' . $term->term_id)['url']
        ];
    }

    wp_send_json($result);
}


// create custom plugin settings menu
add_action('admin_menu', 'my_cool_plugin_create_menu');

function my_cool_plugin_create_menu() {

    //create new top-level menu
    add_menu_page('TW Theme config', 'Configuration', 'administrator', __FILE__, 'tw_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

    //call register settings function
    add_action( 'admin_init', 'register_tw_plugin_settings' );
}


function register_tw_plugin_settings() {
    //register our settings
    $inputNames = ['tw_phone','tw_email','tw_header_title','tw_skype_url','tw_typewriter_text','tw_address','tw_website','tw_facebook_url','tw_linkedin_url'];
    foreach ($inputNames as $inputName){
        register_setting( 'tw_plugin-settings-group', $inputName);
    }
}

/**
 * config page
 */
function tw_plugin_settings_page() {
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js" integrity="sha512-tofxIFo8lTkPN/ggZgV89daDZkgh1DunsMYBq41usfs3HbxMRVHWFAjSi/MXrT+Vw5XElng9vAfMmOWdLg0YbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        tinymce.init({
            selector: '#headerTitle',
            height: 300,
            width: 800,
        });
    </script>
    <div class="wrap">
        <h1>Configuration</h1>
        <form method="post" action="options.php">
            <?php settings_fields( 'tw_plugin-settings-group' ); ?>
            <?php do_settings_sections( 'tw_plugin-settings-group' ); ?>
<!--            <table class="form-table">-->
<!--                <tr valign="top">-->
<!--                    <th scope="row"></th>-->
<!--                    <p><textarea id="headerTitle" name="tw_header_title">-->
<!--                            --><?php //echo esc_attr( get_option('tw_header_title') ); ?>
<!--                        </textarea></p>-->
<!--                </tr>-->
<!--                <tr valign="top">-->
<!--                    <th scope="row">Typewriter text</th>-->
<!--                    <td><input type="text" name="tw_typewriter_text" value="--><?php //echo esc_attr( get_option('tw_typewriter_text') ); ?><!--" /></td>-->
<!--                </tr>-->
<!--            </table>-->
<!--            <hr>-->
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Numéro téléphone</th>
                    <td><input type="text" name="tw_phone" value="<?php echo esc_attr( get_option('tw_phone') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Email</th>
                    <td><input type="text" name="tw_email" value="<?php echo esc_attr( get_option('tw_email') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">Adresse</th>
                    <td><input type="text" name="tw_address" value="<?php echo esc_attr( get_option('tw_address') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">URL Website</th>
                    <td><input type="url" name="tw_website" value="<?php echo esc_attr( get_option('tw_website') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">URL Skype</th>
                    <td><input type="url" name="tw_skype_url" value="<?php echo esc_attr( get_option('tw_skype_url') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">URL Facebook</th>
                    <td><input type="url" name="tw_facebook_url" value="<?php echo esc_attr( get_option('tw_facebook_url') ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row">URL Linkedin</th>
                    <td><input type="url" name="tw_linkedin_url" value="<?php echo esc_attr( get_option('tw_linkedin_url') ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }

function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');