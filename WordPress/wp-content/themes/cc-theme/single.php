<?php
    get_header();
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );        
?>

<div class="landing-page">
        <?php
            if( have_posts() ){

                while( have_posts() ){
                    the_post();
                    the_content();
                }

            }
        ?>
</div>

<?php   get_footer();   ?>