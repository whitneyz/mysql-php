<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$firstName = $lastName = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = ($_POST["firstname"]);
    $lastName = ($_POST["lastname"]);
    $email = ($_POST["email"]);
}
// I'm not sure if this validation works need to look up previous assignment if I've used other method
if ($_POST["email"]) {
// check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
}

//registration logic

if ($_POST["inputPassword"] === $_POST["confirmPassword"]) {
    $inputPassword = $_POST['inputPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    echo "success!";
} else {
    echo "failed :(";
}


//login logic

?>
