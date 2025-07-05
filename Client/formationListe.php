<?php
    include_once "header.php";
    require_once "../Formation.php";
    require_once "../Domain.php";

    $formation = new Formation();
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $formations = $formation->getAll($_GET['id']);
    }

 

?>
<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Album Formations dans le domaine de <?= $_GET['name'] ?></h1>
                <p class="lead text-muted">Découvrez notre large catalogue de formations professionnelles conçues par
                    des experts pour vous accompagner dans votre évolution de carrière.</p>
                <a href="#" class="btn bg-primary  bg-opacity-75 my-2 text-white" onclick="history.back()">Main call to
                    action</a>
            </div>
        </div>
    </section>

    <div class="py-5 bg-secondary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 mb-4">
                <?php if (count($formations) == 0): ?>
                <div class="container">
                    <div class="alert alert-info text-center">Aucune formation trouvée.</div>
                </div>
                <?php endif; ?>
                <?php foreach ($formations as $formation): ?>

                <div class="col">
                    <div class="card shadow p-2 mb-5 rounded">
                        <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                        <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 pe-2 rounded-3 fs-5">
                            <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;<?= $formation['value'] ?>
                        </p>
                        <div class="card-body">
                            <h5 class="card-title fs-3">
                                <?= $formation['name'] ?>&nbsp;<span class="text-secondary fs-5 fw-lighter"><?= $formation['price'] ?> dh</span>
                            </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                            <P>mode de formation : <span class="badge rounded-pill text-bg-success"><?= $formation['mode'] ?></span></P>
                            <P>Formateur : <?= $formation['firstName'] .' '.$formation['lastName']  ?></P>
                            <form method="POST" action="details.php">
                                <input type="hidden" name="id" value="<?= $formation['id'] ?>">
                                <button type="submit" class="btn bg-primary  bg-opacity-75 text-white">Voir détails</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php if (count($formations) > 0): ?>
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </div>

</main>

<?php
    include_once "footer.php";
?>