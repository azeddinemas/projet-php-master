<?php
include "header.php";
?>
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md d-flex justify-content-between">
            <div class="">
                <h3>Employe List</h3>
            </div>
            <div class="">
                <i class="bi bi-eject text-info me-2 fs-5"></i>
                <a href="form.php" style="color: #ffffff; text-decoration: none;">
                    <label for="adds" class='btn btn-info text-white'>ADD NEW Employe</label>
                </a>
            </div>
        </div>
    </div>
    <hr />
    <div style="width: 99%; margin: auto" class="row overflow-auto">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr style="color: #acacac">
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>organism</th>
                    <th scope='col'>status</th>
                    <th class="text-center">operation</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <tr class="align-middle">
                    <td class='text-nowrap'>{data.name}</td>
                    <td>{data.email}</td>
                    <td>{data.phone}</td>
                    <td>{data.organism?data.organism.name:''}</td>
                    <td><span class="badge text-bg-success">Activé</span>:<span class="badge text-bg-danger">Désactivé</span></td>
                    <td class="d-flex flex-row justify-content-end">
                        <div class='text-nowrap'>
                            <button class="btn btn-outline-warning">{ 'activer'}</button>
                        </div>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class='text-nowrap'>{data.name}</td>
                    <td>{data.email}</td>
                    <td>{data.phone}</td>
                    <td>{data.organism?data.organism.name:''}</td>
                    <td><span class="badge text-bg-success">Activé</span>:<span class="badge text-bg-danger">Désactivé</span></td>
                    <td class="d-flex flex-row justify-content-end">
                        <div class='text-nowrap'>
                            <button class="btn btn-outline-warning">{ 'activer'}</button>
                        </div>
                    </td>
                </tr>
                <tr class="align-middle">
                    <td class='text-nowrap'>{data.name}</td>
                    <td>{data.email}</td>
                    <td>{data.phone}</td>
                    <td>{data.organism?data.organism.name:''}</td>
                    <td><span class="badge text-bg-success">Activé</span>:<span class="badge text-bg-danger">Désactivé</span></td>
                    <td class="d-flex flex-row justify-content-end">
                        <div class='text-nowrap'>
                            <button class="btn btn-outline-warning">{ 'activer'}</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php
include "footer.php";
?>