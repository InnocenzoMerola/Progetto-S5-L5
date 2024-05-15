<?php
include __DIR__ . "/includes/initial.php";
include_once __DIR__ . "/Book.php";

$bookManager = new Book($pdo);
$bookManager->delete();


header("Location: http://localhost/IFOA-BackEnd/Progetto%20S5-L5/index.php");