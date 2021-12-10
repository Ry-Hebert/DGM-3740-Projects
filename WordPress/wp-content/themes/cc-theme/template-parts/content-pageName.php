<?php 
/*
Template Name: PageName
 */
?>
<?php
    get_header();
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );        
?>

<main class="default-page">
    <section class="content-sec contact-us-sec">
        <h1><?php the_title() ?></h1>

        <?php the_content() ?>
    </section>
</main>

<?php   get_footer();   ?>