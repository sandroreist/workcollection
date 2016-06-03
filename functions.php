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

// Mit diesem Befehl lege ich die grösse der Bilder fest die als sectioncut angesprochen werden. Dadurch kann ich das Bild in WP zuweisen.
/*add_image_size("sectioncut", 1920, 200, true);-->*/

?>