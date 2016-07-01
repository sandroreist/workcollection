<?php

// Hier wird die Navigation registriert. Es wird also gesagt welcher Bereich im index.php die Navigation ist, wo sie hin kommt und dann wird es so WP mitgeteilt
	register_nav_menus( array( 
 "mainnav" => "Hauptnavigation"
) );

// Hier wird der Footer, der eine Sidebar ist registriert und genau gleich wie beim Menu, definiert wo er ist und an WP mitgeteilt.
register_sidebar( array( 
 "name" => "Footer",
 "id" => "footer-sidebar"
));

add_theme_support( "post-thumbnails" );

function remove_img_attr ($html) {
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

// Mit diesem Befehl lege ich die grösse der Bilder fest die als sectioncut angesprochen werden. Dadurch kann ich das Bild in WP zuweisen.
/*add_image_size("sectioncut", 1920, 200, true);-->*/

function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '"><i class="fa fa-eye" aria-hidden="true"></i>Show all</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );


?>