<?php

    function dcphysio_files(){
        wp_enqueue_script("main_script", get_theme_file_uri("assets/index.e76710db2661034312c2.js"), NULL, "1.0", true);
        wp_enqueue_style("main_styles", get_theme_file_uri("/assets/index.39f5067d47a50ffb4daa.css"));
    }

    add_action("wp_enqueue_scripts", "dcphysio_files");