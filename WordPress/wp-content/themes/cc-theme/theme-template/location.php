<!DOCTYPE html>
<html lang="en">

<!-- height:500px;width:600px; -->
<?php
$pageTitle = 'location';
include './_header.php';
?>

<main class="default-page location-page">
    <section id="location-sec" class="content-sec">
        <h1>Locate Us</h1>
        <div class="location-div">
            <p>If you want to contact us with any questions or inquires we can be reached directly via text, call, email, or in person and our office.</p>
        </div>
        <div class="loc-info-map">
            <div class="location-info-div">
                <div class="location-item">
                    <h3>Address:</h3>
                    <p>CABOT CRUIZES<br>220 Christopher Columbus Dr,<br>Cape Canaveral, FL 32920</p>
                </div>
                <div class="location-item">
                    <h3>Phone:</h3>
                    <p>1-800-555-1234</p>
                </div>
                <div class="location-item">
                    <h3>Email:</h3>
                    <p>cabot.cruises@gmail.com</p>
                </div>
            </div>
            <div class="location-map">
                <div class="mapouter"><div class="gmap_canvas"><iframe id="gmap_canvas" src="https://maps.google.com/maps?q=220%20Christopher%20Columbus%20Dr,%20Cape%20Canaveral,%20FL%2032920&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;}</style></div></div>
            </div>
        </div>
    </section>
</main>

<?php include '_footer.php' ?>
</html>
