<?php

$pg = "contacto";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Contacto</title>
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-sm-5">
                    <h1>¡Gracias por contactarte!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-12 mt-4">
                    <p>Te estaré respondiendo a la brevedad.</p>
                </div>
            </div>

        </div>
    </main>
    <footer class="container mt-auto pb-5 confirmar"> <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="row">
            <div class="col-3">
                <a href="" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="https://depcsuite.com/" target="_blank" class="link">DePc Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:maxilinares11@gmail.com" class="link">maxilinares11@gmail.com</a>
            </div>
            <div class="whatsapp">
                <a href="https://api.whatsapp.com/send?phone=541162423341" target="_blank" title="Whatsapp"><i
                        class="fab fa-whatsapp"></i></a>
            </div>
        </div>    
    </footer>
</body>

</html>