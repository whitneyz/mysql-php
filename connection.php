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

//if student fills in first and lastname and email the info will be inserted into the database
if (!empty(isset($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']))) {
    $handle = $pdo->prepare('INSERT INTO student (firstname, lastname, email) VALUES (:firstname, :lastname, :email)');// you do not need to specify what columns you are adding data into the table name student is enough
    $message = 'Your succesfully logged in';
    $handle->bindValue(':firstname', $_POST['firstname']);
    $handle->bindValue(':lastname', $_POST['lastname']);
    $handle->bindValue(':email', $_POST['email']);
    $handle->execute();
var_dump($_POST);
}


    $handle = $pdo->prepare('SELECT firstname, lastname, email, id FROM student WHERE id');
    
    $handle->execute();

    $selectedBecoders = $handle->fetchAll();
//var_dump($selectedBecoders);


