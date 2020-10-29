<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// with Class you only need the above info on your index


//todo registration logic
$firstName = $lastName = $email = $inputPassword = $confirmPassword ="";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["regSubmit"])) {//works on the submit button for registration

// I'm not sure if this validation works need to look up previous assignment if I've used other method

    if (empty($_POST["email"])) {
        $emailErr = "email is required";
    } else {
        $email = ($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }// in form-view automatically the applicable email error message appears
    }
    if (empty($_POST["firstname"])) {
        $firstNameErr = "firstname is required"; // always require this and don't depend on html or bootstrap
    } else {
        $firstName = ($_POST["firstname"]); //don't use testinput because it's outdated
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstNameErr = "Only letters and white space allowed";
        } else {
            $_SESSION["firstname"] = $firstName; // important to STORE
        }
    }

    if (empty($_POST["lastname"])) {
        $lastNameErr = "lastname is required"; // always require this and don't depend on html or bootstrap
    } else {
        $lastName = ($_POST["lastname"]); //don't use testinput because it's outdated
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastNameErr = "Only letters and white space allowed";
        } else {
            $_SESSION["lastname"] = $lastName; // important to STORE
        }
    }

    if ($_POST["inputPassword"] === $_POST["confirmPassword"]) {
        $inputPassword = $_POST["inputPassword"];
        $hash = password_hash ($inputPassword,PASSWORD_BCRYPT);
//first add column to database when done add hashed password to column
    } else {
       echo "your password is not the same";

    }
//}if ()

//input password moet gehashd worden en in een variabele worden gezet
//password verify doen zie php page dan eerst confirm password vanuit de post niet in een variabele zetten
// 2e argument is password die je gehashd hebt
//todo login logic

  /*  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginSubmit"])) {// works on the submit button for login
    }
}*/
?>
