<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="sign-in.css" rel="stylesheet">
</head>

<body>
    <section class="vh-100" style="background-image: url('../assets/bg.jpg');background-size: cover;">
        <div class="w-100 h-100 d-flex align-items-center" style="background-color: #1E1F2459;">
            <main class="form-signin w-100 m-auto p-3 text-center rounded-4" style="max-width: 380px;background-color: #e9ecef;">
                <form>
                    <a class="text-decoration-none fs-3 mb-4 fw-bold" href="/gestion-formation/client">FormationPro</a>
                    <h1 class="h3 mb-3 fw-normal">Please <span style="color:#0092ff">signIn</span></h1>

                    <div class="form-floating">
                        <input type="email" class="form-control rounded-bottom-0" style="margin-bottom: -1px;" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-top-0 mb-3" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <div class="mb-3 text-start ms-2">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg bg-primary bg-opacity-50 text-white" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">Need an account? <a href="">sign up</a></p>
                </form>
            </main>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>