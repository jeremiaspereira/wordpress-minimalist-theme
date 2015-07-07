<?php

function wpb_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'wpb' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-3">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' =>__( 'Front page sidebar', 'wpb'),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on the static front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-3">',
		'after_widget' => '</aside>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );

// menu superior
function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}
add_action('init', 'register_menu');

// pemitir imagem de capa post
add_theme_support( 'post-thumbnails' );

// botão continuar lendo
function et_excerpt_length($length) {
    return 70;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/
function et_excerpt_more($more) {
    global $post;
    return '<span> ...</span><span class=""><a href="'. get_permalink($post->ID) . '" class="">Continuar lendo</a></span>';
}
add_filter('excerpt_more', 'et_excerpt_more');

// Opção para permitir o editor de post aceitar mais opções de tag
function fb_change_mce_options($initArray) {
    $ext = 'pre[id|name|class|style],iframe[align|longdesc| name|width|height|frameborder|scrolling|marginheight| marginwidth|src]';

    if ( isset( $initArray['extended_valid_elements'] ) ) {
        $initArray['extended_valid_elements'] .= ',' . $ext;
    } else {
        $initArray['extended_valid_elements'] = $ext;
    }

    return $initArray;
}
add_filter('tiny_mce_before_init', 'fb_change_mce_options');

// verificação ortográfica em português
function fb_mce_external_languages($initArray){
    $initArray['spellchecker_languages'] = '+Portuguese=pt, English=en';
    return $initArray;
}
add_filter('tiny_mce_before_init', 'fb_mce_external_languages');

function enable_more_buttons($buttons) {
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';

    return $buttons;
}
add_filter("mce_buttons", "enable_more_buttons");


