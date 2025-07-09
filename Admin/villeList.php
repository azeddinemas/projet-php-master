<?php
    include "header.php";

    require_once '../Ville.php';
    $ville = new Ville();
    $villeList = $ville->getVillePay();

    if(isset($_GET['id'])) {
        $ville->setId($_GET['id']);
        if ($ville->deleteById()) {
            header("Location: villeList.php");
            exit();
        } else {
            echo "<script>alert('Erreur lors de la suppression de la ville');</script>";
        }
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['value'];
        $pays = $_POST['pays'];

        if (empty($name) || empty($pays)) {
            echo "<script>alert('Veuillez remplir tous les champs');</script>";
            exit();
        }

        if ($ville->create($name, $pays)) {
            header("Location: villeList.php");
            exit();
        } else {
            echo "<script>alert('Erreur lors de l\'ajout de la ville');</script>";
        }
    }
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>List de Villes</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <button class='btn bg-primary bg-opacity-75 text-white' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une Ville</button>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr style="color: #acacac">
                    <th scope="col">Nom</th>
                    <th scope="col">Pays</th>
                    <th class="text-center">Opération</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php foreach ($villeList as $data): ?>
                <tr class="align-middle">
                    <td class='text-nowrap'><?php echo $data['value']; ?></td>
                    <td><?php echo $data['pays_name']; ?></td>
                    <td class="text-nowrap text-center">
                        <a href="editVille.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette ville ?');" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
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
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une Ville</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder='Nom de Ville' name="value" required />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pays</label>
                        <select class='form-select' name="pays" required>
                            <option value="" disabled selected>Pays</option>
                            <?php foreach ($ville->getPays() as $p): ?>
                            <option value="<?= $p['id'] ?>"><?= $p['value'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" name="submit" class="btn bg-primary bg-opacity-75 text-white">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal -->
<?php include "footer.php"; ?>