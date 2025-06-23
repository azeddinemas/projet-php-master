<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormationPro - Développez vos compétences</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand fs-3 text-primary fw-bolder" href="#">FormationPro</a>
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

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-3 fw-bold mb-4">
                        Développez vos <span class="text-primary">compétences</span><br>
                        dans tous les domaines
                    </h1>
                    <p class="lead text-muted mb-4">
                        Découvrez notre large catalogue de formations professionnelles conçues par des experts
                        pour vous accompagner dans votre évolution de carrière.
                    </p>
                    <a href="#formations" class="btn btn-primary bg-primary  bg-opacity-75 btn-lg">Explorer les formations</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <h2 class="display-4 fw-bold text-primary">500+</h2>
                    <p class="text-muted">Formations disponibles</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h2 class="display-4 fw-bold text-warning">50k+</h2>
                    <p class="text-muted">Étudiants formés</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h2 class="display-4 fw-bold text-success">95%</h2>
                    <p class="text-muted">Taux de satisfaction</p>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h2 class="display-4 fw-bold text-info">24/7</h2>
                    <p class="text-muted">Support disponible</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="formations" class="py-5 px-0 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="display-4 fw-bold mb-3">Nos domaines de formation</h2>
                    <p class="lead text-muted">
                        Choisissez parmi notre large sélection de domaines pour développer vos compétences
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Category Card 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary ">💻</div>
                            <h4 class="card-title fw-bold">Informatique & Tech</h4>
                            <p class="card-text text-muted mb-3">
                                Développement web, intelligence artificielle, cybersécurité, data science
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-warning bg-opacity-10 text-warning">📊</div>
                            <h4 class="card-title fw-bold">Business & Management</h4>
                            <p class="card-text text-muted mb-3">
                                Leadership, gestion de projet, stratégie d'entreprise, ressources humaines
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-success bg-opacity-10 text-success">🎨</div>
                            <h4 class="card-title fw-bold">Design & Créativité</h4>
                            <p class="card-text text-muted mb-3">
                                Design graphique, UX/UI, photographie, animation 3D
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-info bg-opacity-10 text-info">📈</div>
                            <h4 class="card-title fw-bold">Marketing & Vente</h4>
                            <p class="card-text text-muted mb-3">
                                Marketing digital, réseaux sociaux, SEO, techniques de vente
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-danger bg-opacity-10 text-danger">🏥</div>
                            <h4 class="card-title fw-bold">Santé & Bien-être</h4>
                            <p class="card-text text-muted mb-3">
                                Formation médicale, nutrition, fitness, développement personnel
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category Card 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card category-card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="icon-box bg-secondary bg-opacity-10 text-secondary">🌍</div>
                            <h4 class="card-title fw-bold">Langues & Culture</h4>
                            <p class="card-text text-muted mb-3">
                                Apprentissage des langues, culture internationale, communication
                            </p>
                            <a href="formationListe.php" class="text-primary fw-semibold text-decoration-none">
                                Voir les formations <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 px-0 bg-white">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h2 class="display-4 fw-bold">Ce que disent nos étudiants</h2>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 bg-light h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="testimonial-avatar bg-primary me-3">M</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Marie Dubois</h6>
                                    <small class="text-muted">Développeuse Web</small>
                                </div>
                            </div>
                            <p class="fst-italic text-muted">
                                "Grâce à FormationPro, j'ai pu me reconvertir en développement web.
                                Les cours sont excellents et les instructeurs très compétents !"
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 bg-light h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="testimonial-avatar bg-warning me-3">P</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Pierre Martin</h6>
                                    <small class="text-muted">Chef de Projet</small>
                                </div>
                            </div>
                            <p class="fst-italic text-muted">
                                "La formation en gestion de projet m'a permis d'évoluer dans ma carrière.
                                Je recommande vivement cette plateforme !"
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 bg-light h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="testimonial-avatar bg-success me-3">S</div>
                                <div>
                                    <h6 class="mb-0 fw-bold">Sophie Leroy</h6>
                                    <small class="text-muted">Designer UX</small>
                                </div>
                            </div>
                            <p class="fst-italic text-muted">
                                "Les formations en design sont de très haute qualité.
                                J'ai acquis toutes les compétences nécessaires pour mon nouveau métier."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 px-0 bg-primary  bg-opacity-75 text-white text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="display-4 fw-bold mb-3">Prêt à commencer votre formation ?</h2>
                    <p class="lead mb-4">
                        Rejoignez plus de 50 000 étudiants qui ont déjà transformé leur carrière avec nos formations
                    </p>
                    <a href="#formations" class="btn btn-warning btn-lg">Commencer maintenant</a>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT Section -->
    <div class="py-5 px-0 container-fluid bg-light" id="contact">
        <h2 class="display-4 fw-bold mb-4 text-center">Contactez-nous</h2>
        <form class="container" style="max-width: 600px;">
            <div class="mb-3">
                <label for="name" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="name" placeholder="Votre nom">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Adresse email</label>
                <input type="email" class="form-control" id="email" placeholder="votre@email.com">
            </div>

            <div class="mb-3">
                <label for="subject" class="form-label">Sujet</label>
                <input type="text" class="form-control" id="subject" placeholder="Sujet de votre message">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Votre message ici..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary bg-primary  bg-opacity-75">Envoyer</button>
        </form>
    </div>

    <section class="py-5 px-0">
        <div class="container text-center">
            <h2>Nos valeurs</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5>Excellence</h5>
                    <p>Des formations de qualité, dispensées par des experts du métier.</p>
                </div>
                <div class="col-md-4">
                    <h5>Accessibilité</h5>
                    <p>Des programmes adaptés à tous les niveaux, en présentiel ou à distance.</p>
                </div>
                <div class="col-md-4">
                    <h5>Innovation</h5>
                    <p>Une pédagogie moderne, interactive et axée sur la pratique.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>