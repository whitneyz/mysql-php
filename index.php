<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'connection.php';
require 'insert.php';
require 'profile.php';

// table for the becode employee to view all the info of the becode student in a table

?>
    <table class="table">
    <thead class="thead-light">
    <tr>
        <form method="post">
            <th scope="col">#</th>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Personal page</th>
        </form>
    </tr>
    </thead>
    <tbody>
    <!-- loop the info from the database and show it in the table-->
<?php foreach ($selectedBecoders as $becoder): ?>
    <tr>
        <th scope="row">1</th> <!-- oplossing zoeken 1, 2, 3, -->
        <td><?php echo($becoder['firstname']) ?></td>
        <td><?php echo($becoder['lastname']) ?></td>
        <td><?php echo($becoder['email']) ?></td>
        <td><a href=" <?php echo("profile.php?user=" .$becoder['id']) ?>" > <?php echo $becoder ['id']?> </a></td>
    </tr>
<?php endforeach; ?>
    </tbody>
    </table>

