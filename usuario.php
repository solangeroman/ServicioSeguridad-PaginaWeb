<?php
session_start();
if ($_SESSION['contrato'] != 0) {
    $_SESSION['contrato'] = "Profesional";
} else {
    $_SESSION['contrato'] = "Basico";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>servicio de seguridad</title>

    <meta name="distribution" content="global">
    <meta name="robots" content="index, follow">
    <meta name="geo.country" content="ES-M">

    <meta property="og:url" content="link">
    <meta property="og:url" content="article">
    <meta property="og:url" content="link">
    <meta property="og:url" content="link">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="Web/_css/estilo-bootstrap.css">
    <link rel="stylesheet" href="Web/_css/estilo-fran.css">
    <style>
        .slider {
            background: url("web/_recursos/images/panteon.jpg");
            background-size: cover;
            background-position: center;
            height: 400px;
        }
    </style>
</head>

<body>



    <div class="contenido-esquinas fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="Web/_php/login.php">
                <img src="Web/_recursos/images/logo.png" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ml-auto">
                    <a href="Web/_php/login.php" class="btn btn-success">Cerrar Seccion</a>
                </div>
            </div>

        </nav>
    </div>

    <div class="container marketing">

        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="Web/_recursos/images/proteger.png" alt="Generic placeholder image" width="140" height="140">

                <dic class="caja-flex">
                    <div class="registro">
                        <div class="cuerpo">
                            <form id="basic-form" action="Web/_php/login.php" method="post">
                                <h1>Datos Personales</h1>
                                <?php
                                echo "
                                <table> 
                                <tr><td>Nombre</td>
                                    <td><input id=\"name\" name=\"nombre\" placeholder=" . $_SESSION['nombre'] . "></td>
                                </tr>
                                <tr><td>Apellidos</td>
                                    <td><input id=\"name\" name=\"apellido\" placeholder=" . $_SESSION['apellidos'] . "></td>
                                </tr>
                                <tr><td>Tipo de Contrato</td>
                                <td><input id=\"contrato\" name=\"paqueteContrato\" placeholder=" . $_SESSION['contrato'] . "></td>
                                </tr>
                                <tr><td>Email</td>
                                <td><input id=\"email\" name=\"text\" placeholder=" . $_SESSION['email'] . "></td>
                                </tr>
                                </table>";
                                ?>

                            </form>
                        </div>
                    </div>
            </div>
        </div>

        <br>
        <h2 class="featurette-heading">
            <span class="text-muted">
                <div class="date">
                    <span id="weekDay" class="weekDay"></span>,
                    <span id="day" class="day"></span> de
                    <span id="month" class="month"></span> del
                    <span id="year" class="year"></span>
                </div>
                <div class="clock">
                    <span id="hours" class="hours"></span> :
                    <span id="minutes" class="minutes"></span> :
                    <span id="seconds" class="seconds"></span>
                </div>
            </span>
        </h2>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Camara del salon</h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                </p>
            </div>
            <div class="col-md-5">
                <img src="Web/_recursos/images/sala.gif" alt="Funny image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Camara de la cocina</h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                </p>
            </div>
            <div class="col-md-5 order-md-1">
                <div class="tenor-gif-embed" data-postid="8625817" data-share-method="host" data-width="60%" data-aspect-ratio="0.8211009174311925">
                    <a href="https://tenor.com/view/cocinando-gif-8625817">Cocinando GIF</a>
                </div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Camara de afuera</h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.
                </p>
            </div>
            <div class="col-md-5">
                <div class="tenor-gif-embed" data-postid="12450811" data-share-method="host" data-width="90%" data-aspect-ratio="0.9879518072289156"><a href="https://tenor.com/view/fail-fall-again-wasted-escaleras-gif-12450811">Fail Fall GIF</a> from <a href="https://tenor.com/search/fail-gifs">Fail GIFs</a></div>
                <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
        </div>

        <hr class="featurette-divider">

    </div>

    <footer>
        <div class="container p-3">
            <div class="row text-white">
                <div class="col ml-auto">
                    <p>CONTACTAR:</p>
                    <p>(0034)123456
                        <br> (0034)99123456
                    </p>
                </div>
            </div>
        </div>
    </footer>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" crossorigin="anonymous"></script>
    <script src="Web/_js/validar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="Web/_js/clock.js"></script>
</body>

</html>