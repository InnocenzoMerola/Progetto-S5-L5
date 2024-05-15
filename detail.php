<?php

include_once __DIR__ . "/includes/init.php";
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/Book.php";


$detOfBook  = new Book($pdo);

$id = $_GET['id'] ?? '';

if($id){
  $detOfBook->id = $id;
  $detOfBook->getById();
}

?>

<div class="col-10 offset-1">
    <div class="row mt-5 border border-4 py-2 detail-cont">
        <div class="col-4">
            <img src="<?= $row['image'] ?>" alt="" style="height: 50vh;">
        </div>
        <div class="col-8 text-white">
            <h2 class="fw-bold"><?= $detOfBook->titolo?></h2>
            <h4>scritto da <?= $detOfBook->autore ?> e pubblicato nel <?= $detOfBook->anno ?></h4>
            <hr>
            <h5 class="mt-4">Trama</h5>
            <p><?= $detOfBook->descrizione ?></p>
        </div>
    </div>
</div>

<?php
include __DIR__ . "/includes/end.php";