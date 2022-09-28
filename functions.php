<?php

    function dcphysio_files(){
        wp_enqueue_script("main_script", get_theme_file_uri("/build/main.js"), NULL, "1.1", true);
        wp_enqueue_style("main_styles", get_theme_file_uri("/build/main.css"), array(), "7.1");
       // ? use something like this? //wp_enqueue_style("main_styles", get_theme_file_uri("/build/main.css"), array(), filemtime(get_theme_file_uri("/build/main.css")), false);
    }

    add_action("wp_enqueue_scripts", "dcphysio_files");
/*
    I am writing custom titles in header.php so wont be needing this

    function dcphysio_features(){
        add_theme_support("title-tag")
    }
    add_action("after_setup_theme", "dcphysiotherapy_features");*/