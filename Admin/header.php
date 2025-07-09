<?php
    session_start();
    require_once "../login.php";
    $login = new Login();
    $login->verifySession();

    if (!$login->verifySession()) {
        header('Location: index.php');
        exit();
    }

    if (isset($_GET['logout'])) {
        $login->logout();
    }

    $url = basename($_SERVER["PHP_SELF"]);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Gestion formation</title>
</head>

<body>
    <main class='container-fluid bg-white'>
        <div class='row d-flex flex-nowrap'>
            <input type="checkbox" id="menu" class='d-none' />
            <div style="background:#EDEDED" id="sid" class="col-auto col-xl-2 min-vh-100 text-center">
                <label for="menu" id="label" class="btn float-end"><i class="bi bi-arrow-left-circle fs-3"></i></label>
                <h3 class="text-start pt-2">
                    <span class="text-info">|</span>FormationPro
                </h3>
                <br />
                <img src="../assets/pic-1.png" class="rounded rounded-circle w-50" alt="">
                <h4>ADMIN</h4>
                <p class="text-info">admin</p>
                <hr />
                <nav class="text-start p-2 ">
                    <a class="nav-link p-2 <?php if($url == "dashboard.php") echo 'active'; ?>" href="dashboard.php">
                        <i class="bi bi-speedometer2 fs-5 me-2"></i>&nbsp;Dashboard
                    </a>
                    <br />
                    <a class="nav-link p-2 <?php if($url == "formationList.php"|| $url == "editformation.php") echo 'active'; ?>" href="formationList.php">
                        <i class="bi bi-book fs-5 me-2"></i>&nbsp;Formation
                    </a>
                    <br />
                    <a class="nav-link p-2 <?php if($url == "domainList.php" || $url == "editDomain.php") echo 'active'; ?>" href="domainList.php">
                        <i class="bi bi-grid fs-5 me-2"></i>&nbsp;Domaines
                    </a>
                    <br />
                    <a class="nav-link p-2 <?php if($url == "formateurList.php" || $url == "editFormateur.php") echo 'active'; ?>" href="formateurList.php">
                        <i class="bi bi-people me-2 fs-5"></i>&nbsp;Formateur
                    </a>
                    <br />
                    <a class="nav-link p-2 <?php if($url == "villeList.php" || $url == "editVille.php") echo 'active'; ?>" href="villeList.php">
                        <i class="bi bi-pin-map me-2 fs-5"></i>&nbsp;Ville
                    </a>
                    <br />
                    <a class="nav-link p-2 <?php if($url == "pays.php" || $url == "editPays.php") echo 'active'; ?>" href="pays.php">
                        <i class="bi bi-globe-europe-africa me-2 fs-5"></i>&nbsp;Pays
                    </a>
                    <br />
                    <a class="nav-link p-2" href="#">
                        <i class="bi bi-sliders me-2 fs-5"></i>&nbsp;settings
                    </a>
                    <br />
                </nav>
                <a class="btn border-0 p-1 pt-0" href="?logout=true" style="color: #000000; text-decoration: none;">
                    <i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout
                </a>
            </div>
            <div class='col'>
                <div class='row'>
                    <div class="col-md d-flex justify-content-between" style="background-color: #ededed">
                        <label class="btn" style="font-size : x-large" for="menu"><i class="bi bi-arrow-right-circle"></i></label>
                        <form class="d-flex my-2">
                            <input class="me-2 form-control" type="search" id="myInput" placeholder="  🔍     Search...   " />
                            <button class="btn border-dark"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>