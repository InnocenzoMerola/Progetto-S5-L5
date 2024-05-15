<?php

include_once __DIR__ . "/includes/init.php";
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/User.php";

if(isset($_SESSION['loggato']) && $_SESSION['loggato'] === true){
    header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
    exit();
};

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$user = new User($pdo);
$errore = $user->login($username, $password);


?>


<div class="row justify-content-center">
    <div class="col-5">
        <h1>Accedi</h1>
        <?php if (isset($errore)):?>
          <div class="alert alert-warning" role="alert">
            <?= $errore ?>
          </div>
        <?php endif; ?>
        
      <form action="" method="post" novalidate>
        <div class="row row-gap-2">
          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <input type="text" value="<?= $username;?>" name="username" class="form-control <?= isset($errors['username']) ? 'is-invalid' : ''?>" id="username" >
            <?= $errors['username'] ?? "" ?>
          </div>

            
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
              <input type="password" name="password" value="" class="form-control <?= isset($errors['password']) ? 'is-invalid' : "" ?>" id="password" >
              <?= $errors['password'] ?? ""?>
          </div>

          <div class="col-12 mt-3">
            <button class="btn btn-primary" type="submit">
                Accedi
            </button>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>

<?php

include __DIR__ . "/includes/end.php";