<?php
/**
 * This file loads font files in functions.php
 * 
 * 
 */



function addSCoreDreamFonts()
{
    echo "<link href='https://webfontworld.github.io/SCoreDream/SCoreDream.css' rel='stylesheet'>";
}

add_action('wp_head', 'addSCoreDreamFonts');


?>