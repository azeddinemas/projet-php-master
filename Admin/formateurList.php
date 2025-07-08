<?php
    include "header.php";
    require_once '../formateur.php';

    $formateur = new Formateur();
    $formateurs = $formateur->getAllFormateurs();
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>Liste des Formateurs</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <a href="form.php" style="color: #ffffff; text-decoration: none;">
                    <label for="adds" class='btn bg-primary bg-opacity-75 text-white'>Ajouter un Formateur</label>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-light table-striped" id="myTable">
            <thead>
                <tr>
                    <th scope="col">Photo</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope='col'>Description</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($formateurs as $data): ?>
                <tr class="align-middle">
                    <td><img src="<?= $data['photo']; ?>" alt="Photo" class="img-fluid" style="max-width: 100px;"></td>
                    <td><?= $data['firstName']; ?></td>
                    <td><?= $data['lastName']; ?></td>
                    <td title="<?= htmlspecialchars($data['description']) ?>">
                        <?php 
                            $words = explode(' ', $data['description']);
                            $short = implode(' ', array_slice($words, 0, 4));
                            echo $short . (count($words) > 4 ? '...' : '');
                        ?>
                    </td>
                    <td class="text-nowrap text-center">
                        <a href="edits.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php
include "footer.php";
?>