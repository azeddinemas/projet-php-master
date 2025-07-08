<?php
    include "header.php";
    require_once '../formation.php';
    require_once '../domain.php';
    require_once '../formateur.php';
    require_once '../ville.php';

    $formation = new Formation();
    $formations = $formation->getAllFormations();
    // $formation->setId($_GET['id'] ?? null);
    if (isset($_GET['id'])) {
        $formation->setId($_GET['id']);
        $formation->delete();
        header("Location: formationList.php");
        exit();
    }

    $domaine = new Domain();
    $domaineList = $domaine->getAllDomain();

    $formateur = new Formateur();
    $formateurs = $formateur->getAllFormateurs();

    $ville = new Ville();
    $villes = $ville->getAllVilles();
?>

<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>liste des Formations</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-primary me-2 fs-5"></i>
                <button class='btn bg-primary bg-opacity-75 text-white' type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter une Formation</button>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr style="color: #acacac">
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope='col'>Mode</th>
                    <th scope='col'>Ville</th>
                    <th scope="col">Formateur</th>
                    <th scope="col">Domain</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <!-- <?php print_r($formations); ?> -->
                <?php foreach ($formations as $data): ?>
                <tr class="align-middle">
                    <td class='text-nowrap'><?= $data['name']; ?></td>
                    <td><?= $data['price']; ?></td>
                    <td><?= $data['mode']; ?></td>
                    <td><?= $data['value']; ?></td>
                    <td><?= $data['firstName']. ' ' . $data['lastName']; ?></td>
                    <td><?= $data['domain_name']; ?></td>
                    <td class="text-nowrap text-center">
                        <a href="editformation.php?id=<?= $data['id']; ?>" class="btn bg-info bg-opacity-25"><i class="bi bi-pencil text-info"></i></a>
                        <a href="?id=<?= $data['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?');" class="btn bg-danger bg-opacity-25"><i class="bi bi-trash text-danger"></i></a>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une Formation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="formationList.php" class='mt-2 card-body'>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nom</label>
                            <input type="text" class="form-control" placeholder='Nom de formation' name="name" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Prix</label>
                            <input type="text" class="form-control" placeholder='Prix de formation' name="price" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mode</label>
                            <select class='form-select' name="mode">
                                <option value="En ligne">En ligne</option>
                                <option value="Présentiel">Présentiel</option>
                                <option value="Hybride">Hybride</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ville</label>
                            <select class='form-select' name="ville">
                                <option value="" disabled selected>Villes</option>
                                <?php foreach ($villes as $v): ?>
                                <option value="<?= $v['id'] ?>"><?= $v['value'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Formateur/ice</label>
                            <select class='form-select' name="formateur">
                                <option value="" disabled selected>Formateurs</option>
                                <?php foreach ($formateurs as $d): ?>
                                <option value="<?= $d['id'] ?>"><?= $d['firstName'] . ' ' . $d['lastName'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Domaine</label>
                            <select class='form-select' name="domaine">
                                <option value="" disabled selected>Domaine</option>
                                <?php foreach( $domaineList as $domaine): ?>
                                <option value="<?= $domaine['id'] ?>"><?= $domaine['name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class='modal-footer'>
                        <button type="submit" class="btn bg-primary bg-opacity-75 text-white">Ajouter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Modal -->
    </div>
    <?php
    include "footer.php";

    if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['mode']) && isset($_POST['ville']) && isset($_POST['formateur']) && isset($_POST['domaine'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $mode = $_POST['mode'];
        $ville_id = $_POST['ville'];
        $formateur_id = $_POST['formateur'];
        $domain_id = $_POST['domaine'];

        if ($formation->create($name, $price, $mode, $ville_id, $formateur_id, $domain_id)) {
            echo "<script>window.location.href = 'formationList.php';</script>";
        } else {
            echo "<script>alert('Erreur lors de l\'ajout de la formation');</script>";
        }
    }
    ?>