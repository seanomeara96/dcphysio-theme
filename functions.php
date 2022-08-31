<?php

    function dcphysio_files(){
        wp_enqueue_script("main_script", get_theme_file_uri("/build/main.js"), NULL, "1.0", true);
        wp_enqueue_style("main_styles", get_theme_file_uri("/build/main.css"));
    }

    add_action("wp_enqueue_scripts", "dcphysio_files");