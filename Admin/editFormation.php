<?php
include "header.php";
require_once '../formation.php';
require_once '../domain.php';
require_once '../formateur.php';
require_once '../ville.php';

$domaine = new Domain();
$domaineList = $domaine->getAllDomain();

$formateur = new Formateur();
$formateurs = $formateur->getAllFormateurs();

$ville = new Ville();
$villes = $ville->getAllVilles();

$formation = new Formation();
if (isset($_GET['id'])) {
    $formation->setId($_GET['id']);
    $formationData = $formation->getFormation();
} else {
    echo "<script>alert('ID de formation manquant');</script>";
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $mode = $_POST['mode'];
    $ville_id = $_POST['ville'];
    $formateur_id = $_POST['formateur'];
    $domain_id = $_POST['domaine'];
    if ($formation->update($_GET['id'], $name, $price, $mode, $ville_id, $formateur_id, $domain_id)) {
        echo "<script>alert('Formation modifiée avec succès');</script>";
        header("Location: formationList.php");
        exit();
    } else {
        echo "<script>alert('Erreur lors de la modification de la formation');</script>";
    }
}

?>

<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>Modifier la formation</h1>
    <form method="POST" class='mt-2 card-body'>
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="<?= $formationData['name'] ?>" placeholder='Nom de formation' name="name" />
        </div>
        <div class="mb-3">
            <label class="form-label">Prix</label>
            <input type="text" class="form-control" value="<?= $formationData['price'] ?>" placeholder='Prix de formation' name="price" />
        </div>
        <div class="mb-3">
            <label class="form-label">Mode</label>
            <select class='form-select' name="mode">
                <option value="En ligne" <?= $formationData['mode'] == "En ligne" ? "selected" : "" ?>>En ligne</option>
                <option value="Présentiel" <?= $formationData['mode'] == "Présentiel" ? "selected" : "" ?>>Présentiel</option>
                <option value="Hybride" <?= $formationData['mode'] == "Hybride" ? "selected" : "" ?>>Hybride</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Ville</label>
            <select class='form-select' value="<?= $formationData['ville_id'] ?>" name="ville">
                <option value="" disabled selected>Villes</option>
                <?php foreach ($villes as $v): ?>
                <option value="<?= $v['id'] ?>" <?= $formationData['ville_id'] == $v['id'] ? "selected" : "" ?>><?= $v['value'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Formateur/ice</label>
            <select class='form-select' name="formateur">
                <option value="" disabled selected>Formateurs</option>
                <?php foreach ($formateurs as $d): ?>
                <option value="<?= $d['id'] ?>" <?= $formationData['formateur_id'] == $d['id'] ? "selected" : "" ?>><?= $d['firstName'] . ' ' . $d['lastName'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Domaine</label>
            <select class='form-select' value="<?= $formationData['domain_id'] ?>" name="domaine">
                <option value="" disabled selected>Domaine</option>
                <?php foreach( $domaineList as $domaine): ?>
                <option value="<?= $domaine['id'] ?>" <?= $formationData['domain_id'] == $domaine['id'] ? "selected" : "" ?>><?= $domaine['name'] ?></option>
                <?php endforeach; ?>
            </select>
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