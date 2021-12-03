<?php
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );
$pageTitle = 'Home';
// include '_header.php';
get_header();
?>
    <div class="landing-page">
        <main>
            <?php 
                if( have_posts() ){

                    while( have_posts() ){
                        the_post();
                        the_content();
                    }

                }
            ?>
        </main>
    </div>
<?php
    // include '_footer.php' 
    get_footer();
?>