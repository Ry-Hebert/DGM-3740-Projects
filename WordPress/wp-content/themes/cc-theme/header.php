<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" >
        <!--Do Not Lie-->
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <meta name="description" content="Fill Me In">
        <meta name="author" content="John Doe">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet"> -->
        
        <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->
        <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->
        <!-- <link rel="stylesheet" href="./assets/scss/styles.css"> -->
        <?php
        wp_head();
        ?>
        <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
    </head>
    <body>
        <header>
            <div class="logo-head">
                <div class="head-cont">
                    <div id="name-slogan">
                        <img srcset="<?php echo get_template_directory_uri(); ?>/assets/img/ccLogox1.svg 1x,<?php echo get_template_directory_uri(); ?>/assets/img/ccLogox2.svg 2x,<?php echo get_template_directory_uri(); ?>/assets/img/ccLogox3.svg 3x" class="logo-class" alt="Cabot Cruises Logo">
                    </div>
                    <div id="menu-search">
                        <div class="ham-menu" id="m1" onclick="menuToggle(0)">
                            <i class="fas fa-bars"></i>
                        </div>
                        <div class="ham-menu menuToggle" id="m2" onclick="menuToggle(1)">
                            <i class="fas fa-bars"></i>
                        </div>
                        <input class="searchField" type="search" placeholder="Search...">
                    </div>
                    <div class="openMenu menuToggle">
                        <nav class='smNav'>
                            <?php 
                                wp_nav_menu(
                                    array(
                                        'container' => '',
                                        'items_wrap' => '<ul class="smNav nav-menu" >%3$s</ul>'
                                    )
                                );
                            ?>
                        </nav>
                    </div>
                    <div class="med-lg cc-number">
                        <div><a class="nav-link dark" href="tel:18005551234">1-800-555-1234</a></div>
                    </div>
                </div>
            </div>
            <div class='med-lg nav-container'>
                <nav class='med-lg' id="med-lg-menu">
                    <?php 
                        wp_nav_menu(
                            array(
                                'container' => '',
                                'items_wrap' => '<ul class="nav-menu" >%3$s</ul>'
                            )
                        );
                    ?>
                    <input class="searchField" type="search" placeholder="Search...">
                </nav>
            </div>
        </header>