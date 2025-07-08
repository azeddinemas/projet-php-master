<?php 
include "header.php";

require_once '../login.php';

$count = new Login();
$formationCount = $count->getCount("formation");
$domainCount = $count->getCount("domaine");
$inscriptionCount = $count->getCount("inscription");
$formateurCount = $count->getCount("formateur");
?>
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md col-sm-6 p-2">
            <div class="p-2 rounded-4" style="background: #badff8">
                <i class="bi bi-book fs-3" style="color: #31a2e4"></i>
                <p>Formation</p>
                <p class="text-end fw-bold fs-5"><?= $formationCount > 0 ? $formationCount : 0; ?></p>
            </div>
        </div>
        <div class="col-md col-sm-6 p-2">
            <div class="p-2 rounded-4" style="background: #ee94cb">
                <i class="bi bi-mortarboard fs-3" style="color: #f33d9e"></i>
                <p>Inscription</p>
                <p class="text-end fw-bold fs-5"><?= $inscriptionCount > 0 ? $inscriptionCount : 0; ?></p>
            </div>
        </div>
        <div class="col-md col-sm-6 p-2">
            <div class="p-2 text-white rounded-4" style="background: #FF8303">
                <i class="bi bi-grid fs-3"></i>
                <p>Domaine</p>
                <p class="text-end fw-bold fs-5"><?= $domainCount > 0 ? $domainCount : 0; ?></p>
            </div>
        </div>
        <div class="col-md col-sm-6 p-2">
            <div class="p-2 text-white rounded-4" style="background: linear-gradient(90deg, rgb(168, 163, 218) 0%, rgb(252, 166, 38) 100%)">
                <i class="bi bi-people fs-3"></i>
                <p>Formateur</p>
                <p class="text-end fw-bold fs-5"><?= $formateurCount > 0 ? $formateurCount : 0; ?></p>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>