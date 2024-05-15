<?php

include_once __DIR__ . "/init.php";

if(!isset($_SESSION['loggato'])|| $_SESSION['loggato'] !== true){
    header('Location: /IFOA-BackEnd/Progetto%20S5-L5/index.php');
    exit();
}