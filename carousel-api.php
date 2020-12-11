<?php
/**
 * Plugin Name:       Carousel Api
 * Description:
 * Version:           1.0.0
 * Author:            Deepesh Mali
 * Author URI:        https://deepeshmali.com.np
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 *  Enqueue all scripts needed for this demo
 * @return void
 */

add_action('rest_api_init', 'carousel_api');
function carousel_api()
{
    register_rest_route('w-ready', 'w-carousel', array(
        'methods' => 'GET',
        'callback' => 'getCarouselData',
        'permission_callback' => function () {
            return true;
        },
    ));
}
function getCarouselData(){
ob_start();
echo do_shortcode('[elementor-template id="16097"]');
$output = ob_get_clean();
echo $output;
}
