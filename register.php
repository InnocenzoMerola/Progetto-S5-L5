<?php

include_once __DIR__ . "/includes/init.php";
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/User.php";

$newUser = new User($pdo);
$newUser->register()
?>


<div class="row justify-content-center">
    <div class="col-5">
      <form action="" method="post" novalidate>
        <div class="row row-gap-2">
          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="" name="username" class="form-control <?= isset($errors['username']) ? 'is-invalid' : ''?>" id="username" >
            <?= $errors['username'] ?? "" ?>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="" name="email" class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''?>" id="email" >
            <?= $errors['email'] ?? "" ?>
          </div>
            
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
              <input type="password" name="password" value="" class="form-control <?= isset($errors['password']) ? 'is-invalid' : "" ?>" id="password" >
              <?= $errors['password'] ?? ""?>
          </div>


          <div class="col-12 mt-3">
            <button class="btn btn-primary" type="submit">
                Registrati
            </button>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>


<?php
include __DIR__ . "/includes/end.php";