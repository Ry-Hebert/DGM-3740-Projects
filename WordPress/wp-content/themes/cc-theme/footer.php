<footer>
        <div class="footer-container-main">
            <div class="footer-contact-cc">
                <h3>Contact Us</h3>
                <a href="https://www.google.com/maps/place/Port+Canaveral+Terminal+3+Carnival/@28.4024263,-80.6130907,15.87z/data=!4m12!1m6!3m5!1s0x88d9b69fdcd6168d:0x9e703d1868f3ea29!2sMiamarina+At+Bayside!8m2!3d25.7792199!4d-80.1865475!3m4!1s0x88e0a707d9d1e939:0x74a9b8246e4f4546!8m2!3d28.4075964!4d-80.5984288">CABOT CRUIZES <br>220 Christopher Columbus Dr,<br>Cape Canaveral, FL 32920</a>
                <h3 class="contact-sec">Phone:</h3>
                <a href="tel:18005551234">1-800-555-1234</a>
                <h3 class="contact-sec">Hours of Operation:</h3>
                <p>Monday - Friday 9am - 4pm</p>
            </div>
            <div class="footer-news-cc">
                <h3>News Letter</h3>
                <p>Subscribe to our email list and stay upto-date with our hottest offers and latest specials.</p>
                <input>
                <button>Subscribe</button>
            </div>
            <div class="footer-why-cc">
                <h3>Why Cabot Cruises</h3>
                <p>Cabot Cruises is a travel agency providing the best cruise deals on our online travel website. We can help you with all inclusive vacations including discounted cruises. <br><br>We do not sell travel to residents of Delaware, Iowa, Florida, Hawaii and Washington state because those states are just weird. If you are a resident of one of these states, call your congressman and tell them to change the regulations.</p>
            </div>
        </div>
        <div class="icons">
            <i class="fab fa-facebook-square"></i><i class="fab fa-youtube"></i><i class="fab fa-instagram"></i><i class="fab fa-pinterest"></i><i class="fab fa-twitter"></i>
        </div>
        <h4>&copy; &bull; Ryan Hébert &bull; ryanhébert.com</h4>
        <a class="admin-login" href="./wp-admin/"><p>Admin Login</p></a>
    </footer>
    <?php
        wp_footer();
    ?>
    <script src="https://kit.fontawesome.com/20fde073db.js" crossorigin="anonymous"></script>
    <script>let lazyLoadInstance = new LazyLoad({elements_selector: ".lazy"});</script>
    <!-- <script src="./assets/js/main.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper1", {
            loop: true,
            pagination: {
                el: ".swiper-pagination"
            }
        });
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "TravelAgency",
          "name": "Cabot Cruises",
          "image": "https://cabotcruises.netlify.app/cabot-cruises/assets/img/blog2.jpg",
          "description": "Cabot Cruises will provide you with a best in class cruise experience.",
          "openingHours": "Mo-Sa 08:00-18:00",
          "telephone": "+18005551234",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "220 Christopher Columbus Dr.",
            "addressLocality": "Cape Canaveral",
            "addressRegion": "FL"
          },
          "priceRange": "$500 to $10000"
        }
    </script>
</body>
</html>
