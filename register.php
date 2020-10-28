<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'view/includes/header.php';


?>

<!-- the becode student will fill this form-->
<form method="post" id="login-user">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">First name</label>
      <input type="text" name="firstname" required value="" class="form-control mb-2" id="inlineFormInput" placeholder="First name">
    </div>
      <div class="col-auto">
          <label class="sr-only" for="inlineFormInput">Last name</label>
          <input type="text" name="lastname" required value="" class="form-control mb-2" id="inlineFormInput" placeholder="Last name">
      </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">email</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" name="email" required value="" class="form-control" id="inlineFormInputGroup" placeholder="email">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
Remember me
</label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" value="" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
<form class="form-inline">
    <div class="form-group">
        <label for="inputPassword6">Password</label>
        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
        <small id="passwordHelpInline" class="text-muted">
            Must be 8-20 characters long.
        </small>
    </div>
</form>
<form class="form-inline">
    <div class="form-group">
        <label for="inputPassword6">Password</label>
        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
        <small id="passwordHelpInline" class="text-muted">
            Must be 8-20 characters long.
        </small>
    </div>
</form>


<? require 'view/includes/footer.php';?>

