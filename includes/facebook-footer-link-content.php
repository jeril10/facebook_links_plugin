<?php

function ffl_add_footer($content) {
    
    global $ffl_options;
    $footer_output = '<hr>';
    $footer_output .= '<div class="footer_content">';
    $footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a href="'. $ffl_options['facebook_url'] .'">Facebook</a>';
    $footer_output .= '</div><hr>';
    
    if($ffl_options['enable']) {
        if($ffl_options['show'] == '0' && is_home()) {
            return $content;
        }
        else if($ffl_options['show'] == '1' && is_home()) {
            return $content . $footer_output;
        }
        else {
            return $content . $footer_output;
        }
    }
    
    return $content;
}

add_filter('the_content', 'ffl_add_footer');
