<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = 'Home';
include './_header.php';
?>
    <div class="landing-page">
        <main>
            <section class="img-slider-cc">
                <div class="swiper swiper1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./assets/img/banner5.jpg" alt="Cruise ship sailing past mountains." loading='lazy'></div>
                        <div class="swiper-slide"><img src="./assets/img/cruise-test-1.jpg" alt="Two happy people on a cruise looking out at sea." loading='lazy'></div>
                        <div class="swiper-slide"><img src="./assets/img/banner2.jpg" alt="Girl looking off the deck of ship out to sea." loading='lazy'></div>
                        <div class="swiper-slide"><img src="./assets/img/banner3.jpg" alt="Multiple ships set against steep mountains." loading='lazy'></div>
                        <div class="swiper-slide"><img src="./assets/img/banner4.jpg" alt="Small pictures town and cruise ship among the mountains." loading='lazy'></div>
                        <div class="swiper-slide"><img src="./assets/img/banner6.jpg" alt="Bride and Groom standing at the bow of the ship." loading='lazy'></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>
            <section class="blog-post-cc">
                <h1>Recent Blog Articles</h1>
                <div class="blog-post-sec">
                    <a class="blog-link" href="#">
                        <div class="blog-item-container" id="blog-item1">
                            <div class="blog-item-text"><p>With passenger restrictions still in place cruise ships get upgrades.</p></div>
                            <div class='blog-date-banner'>
                                May 1, 2018
                            </div>
                        </div>
                    </a>
                    <a class="blog-link" href="#">
                        <div class="blog-item-container" id="blog-item2">
                            <div class="blog-item-text"><p>Passenger restrictions start to ease and partially filled cruises begin.</p></div>
                            <div class='blog-date-banner'>
                                May 1, 2018
                            </div>
                        </div>
                    </a>
                    <a class="blog-link" href="#">
                        <div class="blog-item-container" id="blog-item3">
                            <div class="blog-item-text"><p>Cruises open again to all passengers!</p></div>
                            <div class='blog-date-banner'>
                                May 1, 2018
                            </div>
                        </div>
                    </a>
                    <a class="blog-link" href="#">
                        <div class="blog-item-container" id="blog-item4">
                            <div class="blog-item-text"><p>Set sail on your much deserved getaway.</p></div>
                            <div class='blog-date-banner'>
                                May 1, 2018
                            </div>
                        </div>
                    </a>
                </div>
            </section>
        </main>
    </div>
<?php include '_footer.php' ?>
</html>