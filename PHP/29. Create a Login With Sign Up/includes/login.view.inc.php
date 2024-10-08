<?php

declare(strict_types=1);

function output_username() {
    if (isset($_SESSION["user_id"])) {
        echo "<div class='alert alert-success'>You are logged in as " . htmlspecialchars($_SESSION["user_username"]) . "</div>";
    } else {
        echo "<div class='alert alert-danger'>You are not logged in</div>";
    }
}


function check_login_errors() {
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];
        
        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class=form-error">'. $error . '</p>';
        }

        unset($_SESSION['errors_login']);
    }
    else if (isset($_GET['login']) && $_GET['login'] === "success") {

    }
}