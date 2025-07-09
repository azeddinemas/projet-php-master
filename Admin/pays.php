<?php
    include "header.php";

    require_once '../ville.php';
    $ville = new Ville();
    $pays = $ville->getPays();

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];

        if (empty($name)) {
            echo "<script>alert('Veuillez remplir tous les champs');</script>";
            exit();
        }

        if ($ville->createPays($name)) {
            header("Location: pays.php");
            exit();
        } else {
            echo "<script>alert('Erreur lors de l\'ajout du pays');</script>";
        }
    }

    if (isset($_GET['id'])) {
        $ville->setIdPays($_GET['id']);
        if ($ville->deletePaysById()) {
            header("Location: pays.php");
            exit();
        } else {
            echo "<script>alert('Erreur lors de la suppression du pays');</script>";
        }
    }
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>Liste des Pays</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <button class='btn bg-primary bg-opacity-75 text-white' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un Pays</button>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr style="color: #acacac">
                    <th scope="col">Nom</th>
                    <th class="text-center">Opération</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php foreach ($pays as $data): ?>
                <tr class="align-middle">
                    <td class='text-nowrap'><?php echo $data['value']; ?></td>
                    <td class="text-nowrap text-center">
                        <a href="editPays.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce pays ?');" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un Pays</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="Nom du pays" required>
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
<?php include "footer.php"; ?>