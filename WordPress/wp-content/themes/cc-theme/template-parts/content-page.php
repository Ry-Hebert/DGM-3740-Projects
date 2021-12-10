<?php 
/*
Template Name: Page
 */
?>

<?php
    get_header();
    remove_filter( 'the_content', 'wpautop' );
    remove_filter( 'the_excerpt', 'wpautop' );        
?>

 
<?php
the_content()
?>

<?php   get_footer();   ?>