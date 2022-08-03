<?php

function jlg_register_files() {
    wp_enqueue_style('jlg-bootstrap', get_template_path_directory_uri()."/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'jlg-bootstrap');

?>