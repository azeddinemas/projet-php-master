<?php 
include 'header.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "<script>alert('Form submitted successfully!');</script>";
// }
?>

<main style="padding: 5rem 0 4rem">
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
                <input type="text" class="form-control" name="paid" placeholder="Oui / Non">
            </div>
            <div class='mt-2'>
                <button type="submit" class="btn bg-primary bg-opacity-75 text-white mt-4">Modifier</button>
                <a onclick="history.back()" class="btn btn-secondary text-white mt-4">Retour</a>
            </div>
        </form>
    </div>
</main>

<?php include 'footer.php'; ?>