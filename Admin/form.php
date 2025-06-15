<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Gestion d'école</title>
    <style>
    .active {
        color: white !important;
        background-color: #00C1FE;
        border-radius: 8px;
    }

    .nav-link:hover {
        background-color: #00C1FE;
        border-radius: 8px;
        color: white !important;
    }

    #label {
        border-radius: 6px;
        box-shadow: 0 2px 5px rgb(0 0 0 / 46%);
        display: none;
    }

    @media (max-width:991px) {
        .container-fluid #sid {
            margin-left: -760px;
            position: fixed;
            transition: 0.8s;
            z-index: 1;
            box-shadow: 9px 0px 46px #727070;
        }

        .container-fluid #menu:checked+#sid {
            margin-left: 0px;
        }

        #label {
            display: block;
        }
    }
    </style>
</head>

<body>
    <main class='container-fluid bg-white'>
        <div class='row d-flex flex-nowrap'>
            <input type="checkbox" id="menu" class='d-none' />
            <div style="background:#EDEDED" id="sid" class="col-auto col-xl-2 min-vh-100 text-center">
                <label for="menu" id="label" class="btn float-end"><i class="bi bi-arrow-left-circle fs-3"></i></label>
                <h3 class="text-start pt-2">
                    <span class="text-info">|</span>Formation
                </h3>
                <br />
                <img src="pic-1.png" class="rounded rounded-circle w-50" alt="">
                <h4>ADMIN</h4>
                <p class="text-info">admin</p>
                <hr />
                <nav class="text-start p-2 ">
                    <a class="nav-link p-2" href="#">
                        <i class="bi bi-speedometer2 fs-5 me-2"></i>&nbsp;Dashboard
                    </a>
                    <br />
                    <a class="nav-link p-2" href="#">
                        <i class="bi bi-buildings fs-5 me-2"></i>&nbsp;Organism
                    </a>
                    <br />
                    <a class="nav-link p-2" href="#">
                        <i class="bi bi-book fs-5 me-2"></i>&nbsp;&nbsp;Formation
                    </a>
                    <br />
                    <a class="nav-link p-2" href="#">
                        <i class="bi bi-people me-2 fs-5"></i> Users
                    </a>
                    <br />
                    <a class="nav-link p-2" href="">
                        <i class="bi bi-sliders me-2 fs-5"></i> settings
                    </a>
                    <br />
                </nav>
                <button class="btn border-0 p-1 pt-0">
                    <i class="bi bi-box-arrow-right me-2 fs-5"></i> Logout
                </button>
            </div>
            <div class='col'>
                <div class='row'>
                    <div class="col-md d-flex justify-content-between" style="background-color: #ededed">
                        <label class="btn" style="font-size : x-large" for="menu"><i class="bi bi-arrow-right-circle"></i></label>
                        <form class="d-flex my-2">
                            <input class="me-2 form-control" type="search" id="myInput" placeholder="  🔍     Search...   " />
                            <button class="btn border-dark"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>


                <div class='col-8 mx-auto card mt-2'>
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
                            <button type="button" onClick={handleSubmit} class="btn btn-info text-white mt-4">Modifie</button>

                            <a href="landing.php"><button type="button" onClick="" class="btn btn-secondary text-white mt-4">retoure</button></a>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>