<?php 
include 'header.php';
?>

<main style="padding: 5rem 0 4rem">
    <div class='col-8 col-lg-6 mx-auto card mt-5'>
        <h1 class='card-header'>Formulaire d'inscription</h1>
        <form method="POST" class='mt-2 card-body'>
            <div class="mb-3">
                <label class="form-label">firstName</label>
                <input type="text" class="form-control" onChange={handlechange} placeholder='name' value={edit.name} name="name" />
            </div>
            <div class="mb-3">
                <label class="form-label">lastName</label>
                <input type="text" class="form-control" onChange={handlechange} placeholder='name' value={edit.name} name="name" />
            </div>
            <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="tel" class="form-control" onChange={handlechange} placeholder='phone' value={edit.phone} name="phone" />
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" onChange={handlechange} placeholder='email' value={edit.email} name="email" />
            </div>
            <div class="mb-3">
                <label class="form-label">company</label>
                <input type="text" class="form-control" onChange={handlechange} placeholder='company' value={edit.company} name="company" />
            </div>
            <div class="mb-3">
                <label class="form-label">paid</label>
                <input type="text" class="form-control" onChange={handlechange} placeholder='paid' value={edit.paid} name="paid" />
            </div>
            <div class='mt-2'>
                <button type="button" onClick={handleSubmit} class="btn bg-primary bg-opacity-75 text-white mt-4">Modifie</button>
                <a href="landing.php"><button type="button" onClick="" class="btn btn-secondary text-white mt-4">retour</button></a>
            </div>
        </form>
    </div>

</main>

<?php
include 'footer.php';
?>