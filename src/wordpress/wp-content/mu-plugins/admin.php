<?php

// return apply_filters( 'admin_url', $url, $path, $blog_id );

// add_filter('admin_url', function ($url, $path, $blog_id) {
//     return str_replace(home_url(), '', $url);
// }, 10, 3);

// add_filter('script_loader_src', 'wpse47206_src');
// add_filter('style_loader_src', 'wpse47206_src');
// function wpse47206_src($url)
// {
//     if (is_admin()) {
//         return str_replace(site_url(), '', $url);
//     }

//     return $url;
// }

add_action('admin_head', function () {
}, 999);
