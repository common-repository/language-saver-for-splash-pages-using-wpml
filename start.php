<?php
/*
Plugin Name: Language saver for splash pages using WPML
Description: Remember the user his language when using a splash page and WPML
Version: 1.0
Author: These Days - Joren Van Hocht
*/

function lsfwpml_init() {
    if(! is_admin()) {
        require_once 'RememberLanugage.class.php';
        $rememberLanguage = new LanguageSaverForWpml\RememberLanguage();
        $rememberLanguage->boot();
    }
}



add_action( 'plugins_loaded', 'lsfwpml_init' );