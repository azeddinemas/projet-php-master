<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Album example · Bootstrap v5.3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fs-3 text-primary fw-bolder" href="#" onclick="history.back()">FormationPro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#formations">Formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album de Formations</h1>
                    <p class="lead text-muted">Découvrez notre large catalogue de formations professionnelles conçues par des experts pour vous accompagner dans votre évolution de carrière.</p>
                    <a href="#" class="btn bg-primary  bg-opacity-75 my-2 text-white" onclick="history.back()">Main call to action</a>
                </div>
            </div>
        </section>

        <div class="py-5 bg-secondary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 mb-4">
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow p-2 mb-5 rounded">
                            <img src="../assets/p-6.jpeg" class="card-img-top rounded-3">
                            <p class="position-absolute ms-2 mt-1 text-white bg-black bg-opacity-50 p-1 rounded-3 fs-5">
                                <i class="bi bi-geo fs-3 align-middle text-info"></i>&nbsp;Essaouira
                            </p>
                            <div class="card-body">
                                <h5 class="card-title fs-3">4DH&nbsp;<span class="text-decoration-line-through text-secondary fs-5 fw-lighter">4</span></h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique adipisci distinctio</p>
                                <form method="POST">
                                    <!-- <input type="hidden" name="reserve" value="<?= $product[1]?>"> -->
                                    <button type="submit" name="addreservation" class="btn bg-primary  bg-opacity-75 text-white">go somewhere</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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

    </main>

    <footer class="bg-dark text-white py-5 px-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-3">FormationPro</h4>
                    <p class="text-light">
                        Votre partenaire pour le développement professionnel et personnel.
                    </p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Formations</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Informatique</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Business</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Design</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Marketing</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Centre d'aide</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Communauté</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-3">Légal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Conditions d'utilisation</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Politique de confidentialité</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0 text-muted">&copy; 2024 FormationPro. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</body>

</html>