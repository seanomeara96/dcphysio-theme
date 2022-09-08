<?php
    get_header();


    while(have_posts()){
        the_post(); ?>

            <!-- not adding this functionality -->
            <!--<div>
                <?php 
                $theParent = wp_get_post_parent_ID(get_the_ID());    
                if($theParent != 0){ ?>
                    <p><a 
                        href="<?php echo get_permalink($theParent); ?>"
                        >Back to <?php echo get_the_title($theParent); ?>
                    </a></p>
                <?php } ?>

                <p><?php the_title(); ?></p>
            </div> -->
        

           <?php the_content(); ?>


           
        <?php

    }


    get_footer();