<?php
include "header.php";
require_once '../domain.php';
$domaine = new Domain();
$domaineList = $domaine->getAllDomain();
if (isset($_GET['id'])) {
    $domaine->setId($_GET['id']);
    $domaine->delete();
    header("Location: domainList.php");
    exit();
}
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($name) || empty($description)) {
        echo "<script>alert('Veuillez remplir tous les champs');</script>";
        exit();
    }
    if ($domaine->create($name, $description)) {
        echo "<script>window.location.href = 'domainList.php';</script>";
    } else {
        echo "<script>alert('Erreur lors de l\'ajout du domaine');</script>";
    }
}
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>liste des domaines</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <button class='btn bg-primary bg-opacity-75 text-white' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un Domaine</button>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr style="color: #acacac">
                    <th scope="col">name</th>
                    <th scope="col">déscription</th>
                    <th class="text-center">operation</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php foreach ($domaineList as $data): ?>
                <tr class="align-middle">
                    <td class='text-nowrap'><?= $data['name']; ?></td>
                    <td><?= $data['description']; ?></td>
                    <td class="text-nowrap text-center">
                        <a href="editDomain.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Domaine</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" class='mt-2 card-body'>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder='Nom de Domaine' name="name" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">déscription</label>
                        <input type="text" class="form-control" placeholder='déscription de Domaine' name="description" />
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" name="submit" class="btn bg-primary bg-opacity-75 text-white">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<?php
include "footer.php";
?>