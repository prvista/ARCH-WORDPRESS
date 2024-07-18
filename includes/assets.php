<?php

function arch_assets(){
    
    wp_enqueue_style('arch-style', get_template_directory_uri() . "./css/main.css", microtime());
    wp_enqueue_script('arch-script', get_template_directory_uri() . "./script/script.js", microtime(), [], true );
   
   
}
// Hook that will run this function    
add_action('wp_enqueue_scripts', 'arch_assets');

