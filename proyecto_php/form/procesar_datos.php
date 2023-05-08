<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isabelita Bebas - <?= $titulo ?> </title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Tipografia -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda&family=Calligraffitti&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Quicksand&display=swap" rel="stylesheet">
    </head>
    <body>

        <div class="container d-flex justify-content-center align-items-center p-5">
            <div>
                <h3 class="p-3">¡¡¡ Gracias por escribirnos, a la brevedad te responderemos !!!</h3>
                <p>Tu Nombre: <?= $nombre ?> </p>
                <p>Tu Apellido: <?= $apellido?> </p>
                <p>Tu Email: <?= $email?> </p>
                <p>Tu Comentario: <?= $comentario?> </p>
                <a href="../index.php?sec=home" class="btn btn-primary">Ok</a>
            </div>
        </div>

    </body>
</html>

