<?php
include "header.php";
require_once '../Formateur.php';

$formateur = new Formateur();

if (isset($_GET['id'])) {
    $formateur->setId($_GET['id']);
    $formateurData = $formateur->getFormateur();
} else {
    echo "<script>alert('ID de formateur manquant');</script>";
}

if (isset($_POST['update'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $description = $_POST['description'];

    if (empty($firstName) || empty($lastName) || empty($description)) {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
        exit();
    }
    if ($formateur->update($firstName, $lastName, $description)) {
        header("Location: formateurList.php");
        exit();
    } else {
        echo "<script>alert('Erreur lors de la modification du formateur');</script>";
    }
}
?>

<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>Modifier le domaine</h1>
    <form method="POST" enctype="multipart/form-data" class='mt-2 card-body'>
        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" value="<?= $formateurData['lastName'] ?>" placeholder='Nom de Formateur' name="lastName" />
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" value="<?= $formateurData['firstName'] ?>" placeholder='Prenom de Formateur' name="firstName" />
            </div>
            <div class="mb-3">
                <label class="form-label">Déscription</label>
                <input type="text" class="form-control" value="<?= $formateurData['description'] ?>" placeholder='Déscription de Formateur' name="description" />
            </div>
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input type="file" class="form-control" placeholder='URL de la photo' name="photo" accept="image/*" />
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