
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg nav-back">
            <div class="container-fluid back-col-nav  mx-2">
                <img src="https://st2.depositphotos.com/2404187/7392/v/450/depositphotos_73929527-stock-illustration-online-library-education-concept-flat.jpg" alt="" style="width: 50px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 ms-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active  text-white  fw-medium" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white  fw-medium <?= isset($_SESSION['loggato']) ? 'd-block' : 'd-none' ?>" href="./CreateBook.php">Crea</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link  text-white fw-medium  <?= !isset($_SESSION['loggato']) ? 'd-block' : 'd-none' ?>" href="./login.php">Accedi</a>
                        </li>
                       <li class="nav-item">
                            <a class="nav-link text-white  fw-medium <?= !isset($_SESSION['loggato']) ? 'd-block' : 'd-none' ?>" href="./register.php">Registrati</a>
                        </li> 
                       <li class="nav-item">
                            <a class="nav-link text-white  fw-medium <?= isset($_SESSION['loggato']) ? 'd-block' : 'd-none' ?>" href="./logout.php">Disconnetti</a>
                        </li> 
                    </ul>
                    <div class="d-flex me-2 gap-2">
                        <img src="" alt="" style="width: 40px;">
                        <h3 class=" text-white "><?= $_SESSION['username'] ?? "Ospite" ?></h3>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5">
            <div class="row row-gap-3">