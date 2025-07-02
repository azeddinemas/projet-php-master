<?php
    include_once "header.php";
    require_once "../Formation.php";

    $formation = new Formation();
    $formations = $formation->getAll();
    ?>
<div class="container w-100 vh-100">
    <div class="row h-75 d-flex align-items-center justify-content-center">
        <?php var_dump($formations); ?>
        <div class="col-md-6">
            <img src="../assets/p-6.jpeg" alt="..." class="img-fluid" />
        </div>
        <div class="col-md-6">
            <button type="button" onClick="history.back()" class="btn btn-sm bg-primary bg-opacity-75 text-white m-2">
                <i class="bi bi-arrow-left fs-4 text-white"></i>
            </button>
            <h2 class='my-3'>{detail.destination}</h2>
            <h3 class='my-3'>price : {detail.prix} DH </h3>
            <p class='fs-5 text-muted'> current price : <span class='text-decoration-line-through'>{detail.currentprix}</span></p>

            <p class='my-3'>{detail.description}</p>
            <p class='my-3'>date de depart : {detail.datedepart}</p>
            <form action="inscription.php" method="POST">
                <div class="form-group">
                    <label htmlFor="quantity" class='form-label'>Quantity:</label>
                    <input type="number" class="form-control" name='counter' min="1" />
                </div>
                <div class="text-right mt-3">
                    <h3 name='azert'>Total: 0 DH</h3>
                </div>
                <button class="btn bg-primary bg-opacity-75 text-white mt-4">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
<?php
include_once "footer.php";
?>