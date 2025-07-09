<?php
    include "header.php";
    require_once '../formateur.php';

    $formateur = new Formateur();
    $formateurs = $formateur->getAllFormateurs();
    if (isset($_GET['id'])) {
        $formateur->setId($_GET['id']);
        $formateur->delete();
        header("Location: formateurList.php");
        exit();
    }

    if (isset($_POST['submit'])) {
        $nom = $_POST['lastName'];
        $prenom = $_POST['firstName'];
        $description = $_POST['description'];

        if (empty($nom) || empty($prenom) || empty($description)) {
            echo "<script>alert('Veuillez remplir tous les champs');</script>";
            exit();
        }
        $photo = null; // valeur par défaut
        // S'il y a une photo, on tente l'upload
        if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
            $uploadDir = "../assets/formateurs/";
            $filename = uniqid() . '_' . basename($_FILES['photo']['name']);
            $uploadPath = $uploadDir . $filename;

            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadPath)) {
                $photo = $filename; // la photo est bien enregistrée
            } else {
                echo "<script>alert('Erreur lors de l\'upload de la photo.');</script>";
                exit();
            }
        }
        // Appel à la méthode create avec photo (null si pas d’upload)
        $formateur->create($nom, $prenom, $description, $photo);
        echo "<script>window.location.href = 'formateurList.php';</script>";
    }
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>Liste des Formateurs</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <button class='btn bg-primary bg-opacity-75 text-white' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un Formateur</button>
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
                    <td><img src="../assets/formateurs/<?= $data['photo']; ?>" alt="Photo" class="img-fluid" style="max-width: 100px;"></td>
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
                        <a href="editFormateur.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce formateur ?');" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter un Formateur</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" enctype="multipart/form-data" class='mt-2 card-body'>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder='Nom de Formateur' name="lastName" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" placeholder='Prenom de Formateur' name="firstName" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Déscription</label>
                        <input type="text" class="form-control" placeholder='Déscription de Formateur' name="description" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Photo</label>
                        <input type="file" class="form-control" placeholder='URL de la photo' name="photo" accept="image/*" />
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