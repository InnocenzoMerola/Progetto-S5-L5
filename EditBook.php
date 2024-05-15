<?php

include_once __DIR__ . "/includes/init.php";
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/Book.php";

$bookManager = new Book($pdo);


$id = $_GET['id'] ?? '';

if($id){
  $bookManager->id = $id;
  $bookManager->getById();
}

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $bookManager->update();
}

?>

<div class="row justify-content-center">
    <div class="col-5">
      <form action="" method="post" novalidate>
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="row row-gap-2">
          <div class="col-12">
            <label for="titolo" class="form-label">Titolo</label>
            <input type="text" value="<?= $bookManager->titolo?>" name="titolo" class="form-control <?= isset($errors['titolo']) ? 'is-invalid' : ''?>" id="titolo" >
          </div>

          <div class="col-12">
            <label for="autore" class="form-label">Autore</label>
            <input type="text" value="<?= $bookManager->autore?>" name="autore" class="form-control <?= isset($errors['autore']) ? 'is-invalid' : ''?>" id="autore" >
          </div>
        

          <div class="col-12">
            <label for="anno" class="form-label">Anno di pubblicazione</label>
            <input type="number" name="anno" value="<?= $bookManager->anno?>" class="form-control <?= isset($errors['anno']) ? 'is-invalid' : ''  ?>" id="anno" aria-describedby="validationServer03Feedback" >
          </div>

          <div class="col-12">
            <label for="immagine">Copertina:</label>
            <input type="text" name="immagine" id="immagine" value="<?= $bookManager->immagine ?>" class="form-control"><br><br>
          </div>
        
          <label for="descrizione" class="form-label mb-0">Trama</label>
          <div class="form-floating">
            <textarea class="form-control pt-2" name="descrizione" id="descrizione" style="height: 100px"><?= $bookManager->descrizione?></textarea>
          </div>
          
          <div class="col-12 mt-3">
            <button class="btn btn-primary" type="submit">
                Modifica libro
            </button>
            <a href="./Delete.php" class="btn btn-danger">Elimina</a>
          </div>
        </div>
      </form> 
    </div>
  </div>
</div>
<?php
include __DIR__ . "/includes/end.php";