<?php
include "header.php";
require_once '../Ville.php';

$ville = new Ville();

$pays = $ville->getPays();

if (isset($_GET['id'])) {
    $ville->setId($_GET['id']);
    $villeData = $ville->getVilleById();
} else {
    echo "<script>alert('ID de ville manquant');</script>";
}

if (isset($_POST['update'])) {
    $name = $_POST['value'];
    $pays = $_POST['pays'];

    if (empty($name) || empty($pays)) {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
        exit();
    }
    if ($ville->update($name, $pays)) {
        header("Location: villeList.php");
        exit();
    } else {
        echo "<script>alert('Erreur lors de la modification de la ville');</script>";
    }
}
?>

<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>Modifier le domaine</h1>
    <form method="POST" class='mt-2 card-body'>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="<?= $villeData['value'] ?>" placeholder='Nom de Ville' name="value" />
            </div>
            <div class="mb-3">
                <label class="form-label">Pays</label>
                <select class='form-select' name="pays">
                    <option value="" disabled selected>Pays</option>
                    <?php foreach ($pays as $p): ?>
                    <option value="<?= $p['id'] ?>" <?= $villeData['pays_id'] == $p['id'] ? "selected" : "" ?>><?= $p['value'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class='mt-2'>
            <button type="submit" name="update" class="btn bg-primary bg-opacity-75 text-white mt-4">Modifie</button>
            <a><button type="button" onclick="history.back()" class="btn btn-secondary text-white mt-4">retour</button></a>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>