<?php 

function aadil_site_files() {
    wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");    
    wp_enqueue_style('font-awsome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");    
    wp_enqueue_script('sgh-script', get_theme_file_uri('/src/sgh-script.js'), array(), '1.0', true);    
    wp_enqueue_style('sgh-script', get_theme_file_uri('/css/sgh-style.css'));
} 

add_action('wp_enqueue_scripts', 'aadil_site_files');


// this is from firdos
add_filter( 'show_admin_bar', '__return_false' );



// function my_acf_init_block_types() {
//     // Check function exists.
//     if( function_exists('acf_register_block_type') ) {
//         // register a testimonial block.
//         acf_register_block_type(array(
//             'name'              => 'header',
//             'title'             => __('header'),
//             'description'       => __('A custom testimonial block.'),
//             'render_template'   => 'template-parts/blocks/header/header.php',
//             'category'          => 'formatting',
//             'icon'              => 'admin-comments',
//             'keywords'          => array( 'header', 'quote' )
//         ));
//     }
// }

// function my_acf_init_block_types3() {

//     // Check function exists.
//     if( function_exists('acf_register_block_type') ) {

//         // register a testimonial block.
//         acf_register_block_type(array(
//             'name'              => 'footer',
//             'title'             => __('custom footer'), 
//             'description'       => __('my custom footer'),
//             'render_template'   => 'template-parts/blocks/footer/footer.php',
//             'category'          => 'formatting',
//             'icon'              => 'admin-comments',
//             'keywords'          => array( 'footer', 'quote' ),
//         ));
//     }
// }


// add_action('acf/init', 'my_acf_init_block_types');
// add_action('acf/init', 'my_acf_init_block_types3');


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
}