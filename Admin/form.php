<?php
include "header.php";
?>
<div class='col-8 mx-auto card mt-5'>
    <h1 class='card-header'>edite formation</h1>
    <form method="POST" class='mt-2 card-body'>
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" onChange={handlechange} placeholder='name' value={edit.name} name="name" />
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <input type="text" class="form-control" onChange={handlechange} placeholder='description' value={edit.description} name="description" />
        </div>
        <div class="mb-3">
            <label class="form-label">Formateur/ice</label>
            <select class='form-select' onChange={handlechange} name="employe">

                <option key={d._id} style="display : none">Employes</option>
                <option class='form-control' value={d._id}>{d.name}</option>

            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">image</label>
            <input type="file" class="form-control" name="image" />
        </div>
        <div class="mb-3">
            <label class="form-label">date debut</label>
            <input type="date" class="form-control" onChange={handlechange} placeholder='date debut' name="debut" />
        </div>
        <div class="mb-3">
            <label class="form-label">date fin</label>
            <input type="date" class="form-control" onChange={handlechange} placeholder='date fin' name="fin" />
        </div>
        <div class='mt-2'>
            <button type="button" class="btn bg-primary bg-opacity-75 text-white mt-4">Modifie</button>
            <a href="landing.php"><button type="button" class="btn btn-secondary text-white mt-4">retoure</button></a>
        </div>
    </form>
</div>
<?php
include "footer.php";
?>