<?php 

function theme_option_setup(){
    add_theme_support('menus');  
    register_nav_menu('primary', 'Primary Header Manu Navigation');
}

add_action('init', 'theme_option_setup');
