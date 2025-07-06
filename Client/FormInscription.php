<?php 
session_start();
include 'header.php';
include_once '../inscription.php';

$inscription = new Inscription();

if (isset($_POST['submit'])) {
    if (!empty($_POST["firstName"]) && !empty($_POST["lastName"]) && !empty($_POST["phone"]) && !empty($_POST["email"])) {
        $inscription->setInscription($_POST['firstName'], $_POST['lastName'], $_POST['phone'], $_POST['email'], $_POST['company'], $_POST['paid']);
        $inscription->setFormationId($_GET['formation_id']);
        $inscription->addInscription();

       
        setcookie('inscrit', 'inscrit avec success', time() + 7, "/");
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Veuillez remplir tous les champs obligatoires.";
        
    }
}

?>

<main style="padding: 5rem 0 4rem">
    <?php 
    if (isset($_SESSION['error']) && $_SESSION['error'] != '') {
        echo "<div class='col-8 col-lg-6 mx-auto alert alert-danger text-center' role='alert'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']);
    }
    ?>
    <div class='col-8 col-lg-6 mx-auto card mt-5'>
        <h1 class='card-header'>Formulaire d'inscription</h1>
        <form method="POST" class='mt-2 card-body'>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="firstName" placeholder="Prénom">
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="lastName" placeholder="Nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Téléphone</label>
                <input type="tel" class="form-control" name="phone" placeholder="Téléphone">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label class="form-label">Entreprise</label>
                <input type="text" class="form-control" name="company" placeholder="Entreprise">
            </div>
            <div class="mb-3">
                <label class="form-label">Paiement</label>
                <input type="number" class="form-control" name="paid" placeholder="Oui / Non">
            </div>
            <div class='mt-2'>
                <button type="submit" name="submit" class="btn bg-primary bg-opacity-75 text-white mt-4">S'inscrire</button>
                <a onclick="history.back()" class="btn btn-secondary text-white mt-4">Retour</a>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>