<?php
//SPECIFICERA CSS-REGLER PER SIDA
function hihatsound_enqueue_styles() {
    //global css
    wp_enqueue_style('hihatsound-styles', get_template_directory_uri() . '/css/styles.css');
    
    //startsida
    if (is_front_page()) {
        wp_enqueue_style('hihatsound-frontpage', get_template_directory_uri() . '/css/front-page.css');
    }

    //poddklippning
    if (is_page('poddklippning')) {
        wp_enqueue_style('hihatsound-poddklippning', get_template_directory_uri() . '/css/podd.css');
    }
}

add_action('wp_enqueue_scripts', 'hihatsound_enqueue_styles');


//LÄGG TILL MENY
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Huvudmeny'
    ));  
}


//BILDHANTERING
//Aktivera post thumbnail
add_theme_support('post-thumbnails');

//egna bildstorlekar till post thumbnail
//mindre bilder som presenterar tjänster eller steg i processen
// add_image_size('info-image-small', 250, 300, array('center', 'center'));
add_image_size('info-image', ['class' => 'info-image']);

//stora bilder som tar upp hela skärmens bredd
add_image_size('decoration-image', ['class' => 'decoration-image']);