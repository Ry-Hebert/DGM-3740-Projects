<!DOCTYPE html>
<html lang="en">

<?php
$pageTitle = 'Book';
include './_header.php';
?>

<main class="booking-page">
    <h1>Book A Cruise</h1>
    <div class="booking-form">
        <form>
            <div class="form-in-item">
                <label for="name">Full Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-in-item">
                <label for="address">Address Line</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-in-item">
                <label for="city">City</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="form-in-item">
                <label for="name">State</label>
                <select type="text" name="name" id="name" required>
                    <option></option>
                </select>
            </div>
            <div class="form-in-item">
                <label for="name">Zip Code</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-in-item">
                <label for="name">Phone Number</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-in-item">
                <label for="name">Email Address</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-in-item">
                <label for="name">Cruize Selection</label>
                <select type="text" name="name" id="name" required>
                    <option></option>
                </select>
            </div>
            <div class="form-in-item form-submit">
                <input type="submit" value="Book My Cruise">
            </div>
        </form>
    </div>
</main>

<?php include '_footer.php' ?>
</html>
