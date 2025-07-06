<?php
    include "header.php";
    require_once '../domain.php';

    $domain = new Domain();
    $domains = $domain->getAllDomain();
    $icons = [
        'Informatique & Tech' => '💻',
        'Business & Management' => '📊',
        'Design & Créativité' => '🎨',
        'Marketing & Vente' => '📈',
        'Santé & Bien-être' => '🏥',
        'Langues & Culture' => '🌍'
    ];
?>
<section class="hero-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php if (isset($_COOKIE['inscrit']) && !empty($_COOKIE['inscrit'])) {
                    echo "<div class='alert alert-success' role='alert'>Bienvenue " . htmlspecialchars($_COOKIE['inscrit']) . " !</div>";
                } ?>
                <!-- <?= isset($_COOKIE['inscrit'])&& $_COOKIE['inscrit']?> -->
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
            <?php foreach ($domains as $domain): ?>
            <div class="col-lg-4 col-md-6">
                <div class="card category-card shadow-sm border-0 h-100">
                    <div class="card-body p-4">
                        <div class="icon-box bg-primary bg-opacity-10 text-primary "><?= $icons[$domain['name']] ?></div>
                        <h4 class="card-title fw-bold"><?= $domain['name']; ?></h4>
                        <p class="card-text text-muted mb-3">
                            <?= $domain['description']; ?>
                        </p>
                        <a href="formationListe.php?id=<?= $domain['id']; ?>&name=<?= urlencode($domain['name']); ?>" class="text-primary fw-semibold text-decoration-none">
                            Voir les formations <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
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
<?php
    include "footer.php";
?>