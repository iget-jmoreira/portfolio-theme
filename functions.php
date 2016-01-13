<?php
/**
 * Cedic Fortaleza Theme functions and definitions
 *
 * Set up the theme and change WordPress core functionality.
 **/
/* Enqueue stylesheets and scripts */

function portfolio_scripts () {
    // enfileira arquivos CSS
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/script/font-awesome/css/font-awesome.min.css', array(), '1.0', false);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/script/bootstrap/css/bootstrap.min.css', array(), '3.3.2', false);
    wp_enqueue_style('style', get_stylesheet_uri());

    // enfileira arquivos JS
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/script/jquery/jquery-2.1.4.min.js', array(), '2.1.4', true);
    wp_enqueue_script('mystyle', get_template_directory_uri() . '/script/style/myJS.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'portfolio_scripts');

/* Add none positioning and table class as options for TimyMCE tables plugin  */

add_filter('tiny_mce_before_init', 'oi_tinymce');
function oi_tinymce($settings) {
    $new_styles = array(
        array(
            'title' => 'None',
            'value'    => ''
        ),
        array(
            'title'    => 'Table',
            'value'    => 'table',
        ),
    );
    $settings['table_class_list'] = json_encode( $new_styles );
    return $settings;
}

/* Remove Posts from admin menu */

function customize_menu () {
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'customize_menu'); 

/* Turn-off feeds */

remove_action('do_feed_rdf', 'do_feed_rdf', 10, 1);
remove_action('do_feed_rss', 'do_feed_rss', 10, 1);
remove_action('do_feed_rss2', 'do_feed_rss2', 10, 1);
remove_action('do_feed_atom', 'do_feed_atom', 10, 1);

/* Remove user bar */

$blogusers = get_users();
foreach ($blogusers as $user) {
    update_user_meta( $user->ID, 'show_admin_bar_front', 'false' );
}

/* Remove meta tag generator */

remove_action('wp_head', 'wp_generator');

/* Create Menus */

register_nav_menus(array(
    'main-menu' => __('Menu Principal'),
));

/* Allow use of custom single.php based on category */

add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' ));

function teste ($num){
    for($n = 0; $n < 5; $n++){
        if($num > 0){
            echo "<div class='skill-power-on'></div>";
            $num--;
        } else {
            echo "<div class='skill-power-off'></div>";
        }
    }
}

?>
