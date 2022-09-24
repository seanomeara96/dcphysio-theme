<?php
    get_header();


    while(have_posts()){
        the_post();  
        the_content();
    }


    if(has_block("ourplugins/review-carousel")) include "reviews-carousel.php";
    if(has_block("ourplugin/business-details")) include "business-details.php";

    get_footer();