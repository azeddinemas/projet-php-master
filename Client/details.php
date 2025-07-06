<?php
    include_once "header.php";
    require_once "../Formation.php";

    $formation = new Formation();
    if (isset($_POST['id']) && !empty($_POST['id'])) {
        $formation->setId($_POST['id']);
        $detail = $formation->getById();
    } else {
        header("Location: formationListe.php");
        exit();
    }

?>
<div class="container p-5 w-100 vh-100">
    <div class="row h-75 d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <img src="../assets/p-6.jpeg" alt="..." class="img-fluid" />
        </div>
        <div class="col-md-6">
            <button type="button" onClick="history.back()" class="btn btn-sm bg-primary bg-opacity-75 text-white m-2">
                <i class="bi bi-arrow-left fs-4 text-white"></i>
            </button>

            <h2 class="mb-3"><span class="fs-5 text-muted">formation de : </span><?= $detail["name"]?></h2>
            <p class='fs-5 text-muted'>Formateur : <span><?= $detail['firstName'] . ' ' . $detail['lastName'] ?></span></p>

            <p class='my-3 text-muted'>description : <?=$detail['description']?></p>
            <p class='my-3 fs-5 text-muted'>mode de formation : <?=$detail['mode']?> </p>
            <p class='my-3 fs-5 text-muted'>ville : <?=$detail['value']?> </p>
            <h3 class='my-3'>prix : <?= $detail['price']?> DH </h3>
            <form action="formInscription.php" method="GET">
                <input type="hidden" name="formation_id" value="<?= $_POST['id']?>">
                <button class="btn bg-primary bg-opacity-75 text-white mt-4">Inscription</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>