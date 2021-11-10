<php?

function cc_register_styles(){

    wp_enqueue_style('cc-styles', get_template_directory_uri() . "/style.css", array(), 1.0, 'all');
}

add_action( 'wp_enqueue_scripts', 'cc_register_styles');

?>