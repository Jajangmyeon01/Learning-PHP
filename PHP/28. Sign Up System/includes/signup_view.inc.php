<?php 

declare(strict_types=1);

function signup_inputs() {


    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<div class="form-group">
                                <label for="usernameLogin">Username</label>
                                <input type="text" class="form-control" id="usernameLogin" name="username" placeholder="Enter username"
                                value="' . $_SESSION["signup_data"]["username"] . '"</div>';
    } else {
        echo '<div class="form-group">
                                <label for="usernameLogin">Username</label>
                                <input type="text" class="form-control" id="usernameLogin" name="username" placeholder="Enter username">
                            </div>';
    }
        echo '<div class="form-group">
                                <label for="passwordSignUp">Password</label>
                                <input type="password" class="form-control" id="passwordSignUp" name="pwd" placeholder="Enter password">
                            </div>';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_used"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
        echo '<div class="form-group">
                                <label for="emailSignUp">Email</label>
                                <input type="email" class="form-control" id="emailSignUp" name="email" placeholder="Enter email"
                                value="' . $_SESSION["signup_data"]["email"] . '"</div>';
    } else {
        echo '<div class="form-group">
                                <label for="emailSignUp">Email</label>
                                <input type="email" class="form-control" id="emailSignUp" name="email" placeholder="Enter email">
                            </div>';
    }

}

function check_signup_errors() {
    if (isset($_SESSION['errors_signup'])) { 
        $errors = $_SESSION['errors_signup'];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-error">' . $error . "</p>";
        }

        unset($_SESSION['errors_signup']);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<br>';
        echo '<p class="form-success">Sign Up Success!</p>';
    }
}
