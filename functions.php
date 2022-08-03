<?php

function jlg_enqueue_styles() {
    wp_enqueue_style('jlg-style', get_template_path_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_style('jlg-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css", array(), '1.0', 'all');
}

function jlg_enqueue_scripts() {
    wp_enqueue_script('jlg-fa', "https://kit.fontawesome.com/435f5df33b.js", array(), '1.0', 'all');
}


add_action('wp_enqueue_styles', 'jlg_enqueue_styles');
add_action('wp_enqueue_scripts', 'jlg_enqueue_scripts');

?>