<?php
declare(strict_types=1);

function openDB()
{
    $dbhost = "localhost";
    $dbuser = "becode";
    $dbpass = "becode";
    $db = "becode";

    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}

$pdo = openDB();

if(empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
        $handle = $pdo->prepare('INSERT INTO student VALUES (:first-name, :last-name, :email)');// you do not need to specify what columns you are adding data into the table name student is enough
        $message = 'Your succesfully logged in';
    } /*else {
        $handle = $pdo->prepare('UPDATE user SET firstname = :firstname, lastname = :lastname, year = :year WHERE id = :id');//@todo change VALUES to SET
        $handle->bindValue(':id', $_POST['id']);
        $message = 'Your record has been updated';
    }*/

    $handle->bindValue(':firstname', $_POST['firstname']);
    $handle->bindValue(':lastname', $_POST['lastname']);
    $handle->bindValue(':year', date('Y'));
    $handle->execute();
