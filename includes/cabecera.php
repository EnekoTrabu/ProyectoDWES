<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adóptame</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="javascript/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="icono">
            Adóptame
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><?php echo $idioma['inicio'] ?> <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?animales=true"><?php echo $idioma['animales'] ?> <span class="sr-only"></span></a>
                </li>
                
            </ul>

            <ul class="navbar-nav">
                <form class="form-inline" method="post">
                    <div class="form-group mb-2">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="inputPassword2" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2">Entrar</button>
                </form>
            </ul>
            <ul class="navbar-nav ml-md-auto">
                <form method="get" class="form-inline">
                    <div class="form-group mx-sm-3 mb-2">
                        <select id="idioma" name="idioma" class="form-control">
                            <option value="cast"><?php echo $idioma['idioma1'] ?></option>
                            <option value="eusk"><?php echo $idioma['idioma2'] ?></option>
                        </select>
                    </div>
                    <button id="enviar" name="enviar" value="validar" class="btn btn-danger mb-2"><?php echo $idioma['cambiar'] ?></button>
                </form>
            </ul>
        </div>
    </nav>
    <main>
        <section>
            <div class="container">