<?php
include "header.php";
require_once '../ville.php';

$ville = new Ville();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $ville->setIdPays($id);
    $data = $ville->getPaysById();
}

if (isset($_POST['submit'])) {
    $name = $_POST['pays'];

    if (empty($name) ) {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
        exit();
    }

    if ($ville->updatePays($name)) {
        header("Location: pays.php");
        exit();
    } else {
        echo "<script>alert('Erreur lors de la mise à jour de la ville');</script>";
    }
}
?>
<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>Modifier le pays</h1>
    <form method="POST" class='mt-2 card-body'>
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" value="<?= $data['value'] ?>" placeholder='Nom de pays' name="pays" />
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