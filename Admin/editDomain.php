<?php
include "header.php";
require_once '../domain.php';

$domaine = new Domain();

if (isset($_GET['id'])) {
    $domaine->setId($_GET['id']);
    $domaineData = $domaine->getDomain();
} else {
    echo "<script>alert('ID de domaine manquant');</script>";
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    if ($domaine->update($name, $description)) {
        echo "<script>alert('Domaine modifié avec succès');</script>";
        header("Location: domainList.php");
        exit();
    } else {
        echo "<script>alert('Erreur lors de la modification du domaine');</script>";
    }
}

?>

<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>Modifier le domaine</h1>
    <form method="POST" class='mt-2 card-body'>
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="<?= $domaineData['name'] ?>" placeholder='Nom de domaine' name="name" />
        </div>
        <div class="mb-3">
            <label class="form-label">Déscription</label>
            <input type="text" class="form-control" value="<?= $domaineData['description'] ?>" placeholder='Déscription de domaine' name="description" />
        </div>
        <div class='mt-2'>
            <button type="submit" name="submit" class="btn bg-primary bg-opacity-75 text-white mt-4">Modifie</button>
            <a><button type="button" onclick="history.back()" class="btn btn-secondary text-white mt-4">retour</button></a>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>