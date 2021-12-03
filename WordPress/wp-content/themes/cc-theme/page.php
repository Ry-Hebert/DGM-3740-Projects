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
                    get_template_part( 'template-parts/content', 'page');
                }

            }
        ?>
</div>

<?php   get_footer();   ?>