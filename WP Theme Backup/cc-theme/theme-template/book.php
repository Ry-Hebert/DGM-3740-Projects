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
                    <option value=''>Please Select</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
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
                    <option value='Caribbean'>Caribbean</option>
                    <option value='Alaska'>Alaska</option>
                    <option value='Mediterranean'>Mediterranean</option>
                    <option value='Hawaii'>Hawaii</option>
                    <option value='Norway'>Norway</option>
                    <option value='Australia & New Zealand'>Australia & New Zealand</option>
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
