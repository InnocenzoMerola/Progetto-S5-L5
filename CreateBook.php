<?php

include_once __DIR__ . "/includes/init.php";


if(!isset($_SESSION['loggato']) && $_SESSION['loggato'] !== true){
    header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
    exit();
};


include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/Book.php";


$bookManager = new Book($pdo);
$bookManager->create();


?>

<div class="row justify-content-center">
<div class="col-5">
    <form method="post" action="">
        <div class="row row-gap-2">
            <div class="col-12">
                <label for="titolo" class="form-label">Titolo:</label>
                <input type="text" name="titolo" id="titolo" class="form-control"><br><br>
            </div>

            <div class="col-12">
                <label for="autore">Autore:</label>
                <input type="text" name="autore" id="autore" class="form-control"><br><br>
            </div>
            
            <div class="col-12">
                <label for="anno">Anno:</label>
                <input type="number" name="anno" id="anno" class="form-control"><br><br>
            </div>

            <label for="descrizione" class="form-label mb-0">Trama</label>
            <div class="form-floating">
                <textarea class="form-control pt-2" placeholder="Piccola trama" name="descrizione" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>

            <div class="col-12 mt-3">
                <input type="submit" value="Aggiungi Libro" class="btn btn-primary">
            </div>
</form>
</div>
</div>

<?php
include __DIR__ . "/includes/end.php";