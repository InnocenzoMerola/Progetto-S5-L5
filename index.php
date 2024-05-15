<?php

include_once __DIR__ . "/includes/init.php";
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/Book.php";
include_once __DIR__ . "/User.php";

$bookManager= new Book($pdo);
$books = $bookManager->getAll();



?>

<?php 
if(isset($_SESSION['loggato'])){?>

    <h1 class="text-center">Libri disponibili</h1>
        <?php foreach ($books as $book) {?>
            <div class="col-3">
                <div class="card">
                    <div class="card-body pb-0 border-top border-2">
                        <h5 class="card-title"><?= $book->titolo ?></h5>
                        <p class="card-text mb-1 author">Scritto da <span class="fw-medium"><?= $book->autore ?></span></p>
                        <div class="d-flex justify-content-between">
                    
                            <p class="card-text mb-0"><?= $book->anno ?></p>
                        </div>
                        <div class="d-flex mt-2 justify-content-end gap-2 border-top border-1 py-2 ">
                            <a class="btn btn-info text-white text-decoration-none" href="http://localhost/IFOA-BackEnd/Progetto%20S5-L5/Detail.php?id=<?= $book->id ?>">Dettagli</a>
                            <a class="btn btn-success text-white text-decoration-none" href="http://localhost/IFOA-BackEnd/Progetto%20S5-L5/EditBook.php?id=<?= $book->id  ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                                </svg></a>
                            <a class="btn btn-danger text-white text-decoration-none" href="http://localhost/IFOA-BackEnd/Progetto%20S5-L5/Delete.php?id=<?= $book->id  ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div><?php 
        }}?>
    <?php 
    if(!isset($_SESSION['loggato'])){?>
        <h1>Benvenuto sul nostro sito</h1>
        <h2>Per visualizzare i contenuti devi effettuare l'accesso</h2>
        <a class="btn btn-primary" href="./login.php">Accedi</a><?php
    }?> 

<?php
include __DIR__ . "/includes/end.php";