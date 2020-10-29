<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'view/includes/header.php';


/*
todo look at pricecalculator how to create different pages
Their first name
Their last name
Their email
Their photo
*/

?>
<!--image of keyboard-->
<div class="text-center" style="height: fit-content">
    <img src=resources/keyboard.jpeg class="img-fluid;" alt="keyboard">
</div>
<!-- card with info becode student-->
<?php if (isset($_GET["user"])) {
    $id = $_GET["user"];
    echo $id;
} else {
    $id = 0;
}

function getCat()
{
    $getData = file_get_contents( 'https://api.thecatapi.com/v1/images/search');
    $response = json_decode($getData, true);
    return $response[0]['url'];

}

function isLoggedIn (){
    // userid
  $userId= $_GET["user"];
    var_dump($userId);
return $userId;
}

//check if the logged in user's ID equals that of the one requested on the profile page

//if()
?>
<div class="card" style="width: 18rem;">
    <img src="<?php  echo getCat() ?>" class="card-img-top" alt="..."> <!-- image with api-->
    <div class="card" style="width: 18rem;">
        <div> CAN YOU SEE <?php $userId?> </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">First name: <?php echo($selectedBecoders[$id]['firstname']) ?> </li>
            <!--because array starts with 0 thus -1-->
            <li class="list-group-item">Last name: <?php echo($selectedBecoders[$id]['lastname']) ?></li>
            <li class="list-group-item">email: <?php echo($selectedBecoders[$id]['email']) ?> </li>
        </ul>
    </div>

    <? require 'view/includes/footer.php'; ?>

