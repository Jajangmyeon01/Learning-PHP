<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $signup = new signup($username, $pwd);
    $signup->signupUser();
}