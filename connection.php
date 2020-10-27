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

if (!empty($_POST['first-name']) && !empty($_POST['last-name']) && !empty($_POST['email'])) {
    $handle = $pdo->prepare('INSERT INTO student (firstname, lastname, email) VALUES (:firstname, :lastname, :email)');// you do not need to specify what columns you are adding data into the table name student is enough
    $message = 'Your succesfully logged in';
    $handle->bindValue(':firstname', $_POST['first-name']);
    $handle->bindValue(':lastname', $_POST['last-name']);
    $handle->bindValue(':email', $_POST['email']);
    $handle->execute();
var_dump($handle);
}


$handle = $pdo->prepare('SELECT firstname, lastname, email, id FROM student');
$handle->bindValue(':firstname', $_POST['first-name']);
$handle->bindValue(':lastname', $_POST['last-name']);
$handle->bindValue(':email', $_POST['email']);
$handle->bindValue(':id', $_POST['id']);// link page (profile.php?user=$user_id)
$handle->execute();

$selectedBecoders = $handle->fetchAll();
var_dump($selectedBecoders);


